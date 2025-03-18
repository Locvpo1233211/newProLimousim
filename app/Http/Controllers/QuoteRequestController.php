<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone_zalo' => 'required|string|max:20',
            'vehicle' => 'required|string',
            'pickup_location' => 'required|string|max:255',
            'itinerary' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
        ]);

        // Chuyển đổi định dạng ngày từ d/m/Y sang Y-m-d
        try {
            $date = Carbon::createFromFormat('d/m/Y', $validated['date'])->format('Y-m-d');
            $validated['date'] = $date;
        } catch (\Exception $e) {
            return redirect('/')->withInput()
                ->withErrors(['date' => 'Ngày không hợp lệ. Vui lòng chọn lại.']);
        }

        $quoteRequest = QuoteRequest::create($validated);
        
        // Lưu timestamp yêu cầu mới vào cache để tất cả các phiên biết có yêu cầu mới
        Cache::put('new_quote_request', now()->timestamp, 60*60); // Lưu trong 1 giờ

        return redirect('/')->with('success', 'Yêu cầu báo giá của bạn đã được gửi thành công. Chúng tôi sẽ liên hệ lại sớm nhất!');
    }

    public function index()
    {
        $quoteRequests = QuoteRequest::orderBy('created_at', 'desc')
            ->paginate(10);
            
        
        return view('admin.quote-requests.index', compact('quoteRequests'));
    }

    public function updateStatus(QuoteRequest $quoteRequest, Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,processed,completed'
        ]);

        $quoteRequest->update([
            'status' => $validated['status']
        ]);

        return redirect()->back()->with('success', 'Trạng thái yêu cầu đã được cập nhật thành công');
    }

    public function getLatestQuotes()
    {
        // Lấy timestamp của lần check cuối cùng từ session
        $lastCheck = Session::get('last_quote_check', now()->subMinutes(30));
        
        // Lấy timestamp của yêu cầu mới nhất từ cache
        $newQuoteTime = Cache::get('new_quote_request');
        
        // Kiểm tra xem có yêu cầu mới không (nếu thời gian yêu cầu mới > thời gian check cuối)
        $hasNewQuotes = $newQuoteTime && Carbon::createFromTimestamp($newQuoteTime)->isAfter($lastCheck);
        
        // Lưu thời gian kiểm tra hiện tại
        Session::put('last_quote_check', now());
        
        $quotes = QuoteRequest::latest()->take(5)->get();
        
        $counts = [
            'total' => QuoteRequest::count(),
            'pending' => QuoteRequest::where('status', 'pending')->count()
        ];
        
        return response()->json([
            'success' => true,
            'quotes' => $quotes,
            'counts' => $counts,
            'hasNewQuotes' => $hasNewQuotes,
            'debug' => [
                'lastCheck' => $lastCheck->timestamp,
                'newQuoteTime' => $newQuoteTime
            ]
        ]);
    }
} 