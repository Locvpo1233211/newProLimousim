<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- User Info Card -->
                        <div class="bg-blue-100 dark:bg-blue-800 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold mb-2">Welcome</h3>
                            <p>{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ Auth::user()->email }}</p>
                        </div>

                        <!-- Statistics Card -->
                        <div class="bg-green-100 dark:bg-green-800 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold mb-2">Last Login</h3>
                            <p>{{ now()->format('Y-m-d H:i:s') }}</p>
                        </div>

                        <!-- Quản lý báo giá Card -->
                        <div class="bg-purple-100 dark:bg-purple-800 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold mb-2">Quản lý báo giá</h3>
                            <div class="space-y-2">
                                <p class="text-sm">
                                    <span class="font-medium">Tổng số yêu cầu:</span>
                                    {{ App\Models\QuoteRequest::count() }}
                                </p>
                                <p class="text-sm">
                                    <span class="font-medium">Chờ xử lý:</span>
                                    {{ App\Models\QuoteRequest::where('status', 'pending')->count() }}
                                </p>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('recent-quotes').scrollIntoView({ behavior: 'smooth' });" class="inline-block mt-2 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-colors">
                                    Xem danh sách
                                </a>
                            </div>
                        </div>

                        <!-- System Info Card -->
                        <div class="bg-yellow-100 dark:bg-yellow-800 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold mb-2">System Info</h3>
                            <p class="text-sm">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</p>
                            <p class="text-sm">PHP v{{ PHP_VERSION }}</p>
                        </div>
                    </div>

                    <!-- Recent Quote Requests Section -->
                    <div id="recent-quotes" class="mt-8">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="m-0 font-weight-bold text-primary">Yêu cầu báo giá gần đây</h6>
                            {{-- <a href="{{ route('quote-requests.index') }}" class="btn btn-sm btn-primary">Xem tất cả</a> --}}
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-200 uppercase tracking-wider">Khách hàng</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-200 uppercase tracking-wider">Loại xe</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-200 uppercase tracking-wider">Ngày đi</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-200 uppercase tracking-wider">Trạng thái</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-200 uppercase tracking-wider">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                        @foreach(App\Models\QuoteRequest::latest()->take(5)->get() as $quote)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="font-semibold text-gray-900 dark:text-white text-sm">{{ $quote->customer_name }}</div>
                                                <div class="text-indigo-600 dark:text-indigo-400 text-sm">{{ $quote->phone_zalo }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800 dark:text-gray-200 text-sm">{{ $quote->vehicle }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="font-medium text-gray-800 dark:text-gray-200 text-sm">{{ $quote->date->format('d/m/Y') }}</div>
                                                <div class="text-blue-600 dark:text-blue-400 text-sm">{{ $quote->time }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    {{ $quote->status === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100' : '' }}
                                                    {{ $quote->status === 'processed' ? 'bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100' : '' }}
                                                    {{ $quote->status === 'completed' ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' : '' }}">
                                                    {{ $quote->status === 'pending' ? 'Đang chờ' : '' }}
                                                    {{ $quote->status === 'processed' ? 'Đã xử lý' : '' }}
                                                    {{ $quote->status === 'completed' ? 'Hoàn thành' : '' }}
                                                </span>
                                                @if($quote->status === 'pending')
                                                <form action="{{ route('quote-requests.update-status', $quote->id) }}" method="POST" class="inline-block ml-2">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="completed">
                                                    <button type="submit" class="px-2 py-1 text-xs bg-green-500 text-white rounded hover:bg-green-600 transition-colors">
                                                        Done
                                                    </button>
                                                </form>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('quote-requests.index') }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">Chi tiết</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(App\Models\QuoteRequest::count() > 5)
                            <div class="mt-4 text-right">
                                <a href="{{ route('quote-requests.index') }}" class="text-indigo-600 hover:text-indigo-900" style="color: #6cadf3;">
                                    Xem tất cả →
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

@push('scripts')
<script>
    // Biến lưu trữ số lượng yêu cầu hiện tại
    let currentTotalRequests = {{ App\Models\QuoteRequest::count() }};
    let currentPendingRequests = {{ App\Models\QuoteRequest::where('status', 'pending')->count() }};
    
    // Hàm lấy dữ liệu yêu cầu báo giá mới nhất
    function refreshQuoteRequests() {
        fetch('/api/latest-quote-requests')
            .then(response => response.json())
            .then(data => {
                console.log('API response:', data); // Log để debug
                
                if (data.success) {
                    // Cập nhật bảng yêu cầu báo giá nếu có yêu cầu mới hoặc số lượng thay đổi
                    if (data.hasNewQuotes || currentTotalRequests !== data.counts.total || currentPendingRequests !== data.counts.pending) {
                        // Cập nhật biến lưu trữ
                        currentTotalRequests = data.counts.total;
                        currentPendingRequests = data.counts.pending;
                        
                        // Cập nhật bảng
                        updateQuoteTable(data.quotes);
                        
                        // Cập nhật số lượng yêu cầu
                        updateCounters(data.counts);
                        
                        // Hiển thị thông báo nếu có yêu cầu mới
                        if (data.hasNewQuotes) {
                            showNotification('Có yêu cầu báo giá mới!');
                        }
                    }
                }
            })
            .catch(error => console.error('Lỗi khi tải dữ liệu:', error));
    }
    
    // Hàm cập nhật bảng
    function updateQuoteTable(quotes) {
        const tbody = document.querySelector('table tbody');
        if (tbody) {
            // Xóa dữ liệu cũ
            tbody.innerHTML = '';
            
            // Thêm dữ liệu mới
            quotes.forEach(quote => {
                const row = createQuoteRow(quote);
                tbody.insertAdjacentHTML('beforeend', row);
            });
        }
    }
    
    // Hàm cập nhật số lượng
    function updateCounters(counts) {
        const totalRequestsEl = document.querySelector('.bg-purple-100 p-4 .text-sm:nth-child(1)');
        const pendingRequestsEl = document.querySelector('.bg-purple-100 p-4 .text-sm:nth-child(2)');
        
        if (totalRequestsEl && counts.total !== undefined) {
            totalRequestsEl.innerHTML = `<span class="font-medium">Tổng số yêu cầu:</span> ${counts.total}`;
        }
        
        if (pendingRequestsEl && counts.pending !== undefined) {
            pendingRequestsEl.innerHTML = `<span class="font-medium">Chờ xử lý:</span> ${counts.pending}`;
        }
    }

    // Hàm tạo HTML cho một dòng yêu cầu báo giá
    function createQuoteRow(quote) {
        const formattedDate = new Date(quote.date).toLocaleDateString('vi-VN');
        
        let statusClass = '';
        let statusText = '';
        
        if (quote.status === 'pending') {
            statusClass = 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100';
            statusText = 'Đang chờ';
        } else if (quote.status === 'processed') {
            statusClass = 'bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100';
            statusText = 'Đã xử lý';
        } else if (quote.status === 'completed') {
            statusClass = 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100';
            statusText = 'Hoàn thành';
        }
        
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        return `
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-semibold text-gray-900 dark:text-white text-sm">${quote.customer_name}</div>
                    <div class="text-indigo-600 dark:text-indigo-400 text-sm">${quote.phone}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800 dark:text-gray-200 text-sm">${quote.vehicle_type}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-800 dark:text-gray-200 text-sm">${formattedDate}</div>
                    <div class="text-blue-600 dark:text-blue-400 text-sm">${quote.time}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                        ${statusText}
                    </span>
                    ${quote.status === 'pending' ? `
                    <form action="/quote-requests/${quote.id}/status" method="POST" class="inline-block ml-2">
                        <input type="hidden" name="_token" value="${csrfToken}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="status" value="completed">
                        <button type="submit" class="px-2 py-1 text-xs bg-green-500 text-white rounded hover:bg-green-600 transition-colors">
                            Done
                        </button>
                    </form>
                    ` : ''}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="/quote-requests" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">Chi tiết</a>
                </td>
            </tr>
        `;
    }
    
    // Hàm hiển thị thông báo
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white p-4 rounded shadow-lg z-50';
        notification.innerHTML = `<p>${message}</p>`;
        document.body.appendChild(notification);
        
        // Thêm âm thanh thông báo
        const audio = new Audio('/notification.mp3');
        audio.play().catch(e => console.log('Không thể phát âm thanh', e));
        
        setTimeout(() => {
            notification.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            setTimeout(() => notification.remove(), 500);
        }, 4500);
    }
    
    // Cập nhật dữ liệu thường xuyên hơn
    document.addEventListener('DOMContentLoaded', function() {
        // Tải dữ liệu lần đầu
        refreshQuoteRequests();
        
        // Thiết lập interval để tự động tải dữ liệu mới (5 giây một lần)
        setInterval(refreshQuoteRequests, 5000);
    });
</script>
@endpush
