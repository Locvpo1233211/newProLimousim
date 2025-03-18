@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Danh sách yêu cầu báo giá</h4>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Quay lại
            </a>
        </div>
        
        <div class="card-body">
            <!-- Search and Filter -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm...">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <select id="statusFilter" class="form-select">
                        <option value="">Tất cả trạng thái</option>
                        <option value="pending">Đang chờ</option>
                        <option value="processed">Đã xử lý</option>
                        <option value="completed">Hoàn thành</option>
                    </select>
                </div>
            </div>

            <!-- Quote Requests Table -->
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Loại xe</th>
                            <th>Địa điểm đón</th>
                            <th>Hành trình</th>
                            <th>Ngày đi</th>
                            <th>Giờ đi</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($quoteRequests as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                            <td>{{ $request->customer_name }}</td>
                            <td>{{ $request->phone_zalo }}</td>
                            <td>{{ $request->vehicle }}</td>
                            <td>{{ $request->pickup_location }}</td>
                            <td>{{ $request->itinerary }}</td>
                            <td>{{ \Carbon\Carbon::parse($request->date)->format('d/m/Y') }}</td>
                            <td>{{ $request->time }}</td>
                            <td>
                                @switch($request->status)
                                    @case('pending')
                                        <span class="badge bg-warning text-dark">Đang chờ</span>
                                        @break
                                    @case('processed')
                                        <span class="badge bg-info">Đã xử lý</span>
                                        @break
                                    @case('completed')
                                        <span class="badge bg-success">Hoàn thành</span>
                                        @break
                                    @default
                                        <span class="badge bg-secondary">Không xác định</span>
                                @endswitch
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#requestModal{{ $request->id }}">
                                    Chi tiết
                                </button>
                            </td>
                        </tr>

                        <!-- Modal for each request -->
                        <div class="modal fade" id="requestModal{{ $request->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Chi tiết yêu cầu #{{ $request->id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Tên khách hàng:</strong> {{ $request->customer_name }}</p>
                                                <p><strong>Số điện thoại:</strong> {{ $request->phone_zalo }}</p>
                                                <p><strong>Loại xe:</strong> {{ $request->vehicle }}</p>
                                                <p><strong>Địa điểm đón:</strong> {{ $request->pickup_location }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Ngày đi:</strong> {{ \Carbon\Carbon::parse($request->date)->format('d/m/Y') }}</p>
                                                <p><strong>Giờ đi:</strong> {{ $request->time }}</p>
                                                <p><strong>Trạng thái:</strong> 
                                                    @switch($request->status)
                                                        @case('pending')
                                                            <span class="badge bg-warning text-dark">Đang chờ</span>
                                                            @break
                                                        @case('processed')
                                                            <span class="badge bg-info">Đã xử lý</span>
                                                            @break
                                                        @case('completed')
                                                            <span class="badge bg-success">Hoàn thành</span>
                                                            @break
                                                    @endswitch
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6>Hành trình:</h6>
                                            <p>{{ $request->itinerary }}</p>
                                        </div>
                                        
                                        @if($request->status === 'pending')
                                        <form action="{{ route('quote-requests.update-status', $request->id) }}" method="POST" class="mt-3">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label class="form-label">Cập nhật trạng thái:</label>
                                                <select name="status" class="form-select">
                                                    <option value="processed">Đã xử lý</option>
                                                    <option value="completed">Hoàn thành</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center">Không có yêu cầu báo giá nào</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                    Hiển thị {{ $quoteRequests->firstItem() ?? 0 }} - {{ $quoteRequests->lastItem() ?? 0 }} 
                    trong tổng số {{ $quoteRequests->total() ?? 0 }} yêu cầu
                </div>
                {{ $quoteRequests->links() }}
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('tbody tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusTerm = statusFilter.value.toLowerCase();

        tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            const status = row.querySelector('.badge')?.textContent.toLowerCase() || '';
            
            const matchesSearch = text.includes(searchTerm);
            const matchesStatus = !statusTerm || status.includes(statusTerm);

            row.style.display = matchesSearch && matchesStatus ? '' : 'none';
        });
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
});
</script>
@endpush
@endsection 