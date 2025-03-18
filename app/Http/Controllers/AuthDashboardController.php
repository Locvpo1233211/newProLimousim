<?php

namespace App\Http\Controllers;

use App\Models\LoginHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthDashboardController extends Controller
{
    public function index()
    {
        // Thống kê tổng quan
        $stats = [
            'total_users' => User::count(),
            'total_logins' => LoginHistory::where('type', 'login')->where('status', 'success')->count(),
            'total_registers' => LoginHistory::where('type', 'register')->count(),
            'failed_logins' => LoginHistory::where('type', 'login')->where('status', 'failed')->count(),
        ];

        // Thống kê đăng nhập theo ngày (7 ngày gần nhất)
        $loginStats = LoginHistory::where('type', 'login')
            ->where('status', 'success')
            ->where('created_at', '>=', now()->subDays(7))
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        // Lịch sử đăng nhập gần đây
        $recentLogins = LoginHistory::with('user')
            ->where('status', 'success')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('admin.auth-dashboard', compact('stats', 'loginStats', 'recentLogins'));
    }
} 