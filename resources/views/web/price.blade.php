@extends('layouts.app')

@section('title', 'Bảng Giá Thuê Xe Limousine Mới Nhất 2025 - Asia Limousine')

@section('content')
    <!-- Section Bảng Giá -->
    <section class="container my-5 py-3">
        <!-- Header -->
        <div class="price-header text-center mb-5">
            <h1 class="text-warning display-5 fw-bold mb-2">Bảng Giá Thuê Xe LIMOUSINE 2025</h1>
            <h2 class="text-warning fs-4 mb-3">Trải nghiệm hành trình sang trọng cùng Hồ Gươm Travel</h2>
            <p class="text-warning mb-4">Dịch vụ xe limousine cao cấp tại Hà Nội – Đặt ngay để nhận ưu đãi lên đến 15%!</p>
            <a href="tel:+84902035595" class="btn btn-warning" style="background-color: #FFC107; color: #1A1A1A; padding: 8px 20px;">Liên Hệ Ngay</a>
        </div>

        <!-- Tiện ích -->
        <div class="features-section mb-5">
            <h4 class="text-warning text-center mb-4"><i class="bi bi-star-fill me-2"></i> Tiện Ích Dịch Vụ</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-wifi text-warning fs-2 mb-2"></i>
                        <p class="text-warning mb-0">Wi-Fi Miễn Phí</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-music-note-list text-warning fs-2 mb-2"></i>
                        <p class="text-warning mb-0">Hệ Thống Âm Thanh Chất Lượng Cao</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-cup-straw text-warning fs-2 mb-2"></i>
                        <p class="text-warning mb-0">Nước Uống & Khăn Lạnh</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Dịch vụ (Bên trái) -->
            <div class="col-md-8">
                <!-- Đón Tiễn Sân Bay -->
                <div class="price-card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <i class="bi bi-airplane-fill text-warning me-2"></i>
                        <h3 class="text-warning mb-0">Đón Tiễn Sân Bay Nội Bài</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-warning mb-3">Dịch vụ đưa đón sân bay Nội Bài chuyên nghiệp, đúng giờ, an toàn.</p>
                        <table class="table table-dark table-bordered fixed-table">
                            <thead>
                                <tr>
                                    <th class="text-warning">Loại Xe</th>
                                    <th class="text-warning">Giá (VNĐ/Chuyến)</th>
                                    <th class="text-warning">Ghi Chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DCar Limousine 9 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                                <tr>
                                    <td>dcar limousine 11 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                                <tr>
                                    <td>Dcar limousine 18 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tour Nội Thành -->
                <div class="price-card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill text-warning me-2"></i>
                        <h3 class="text-warning mb-0">Tour Nội Thành Hà Nội (1 Ngày)</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-warning mb-3">Tham quan các điểm nổi bật tại Hà Nội với không gian thoải mái, sang trọng.</p>
                        <table class="table table-dark table-bordered fixed-table">
                            <thead>
                                <tr>
                                    <th class="text-warning">Loại Xe</th>
                                    <th class="text-warning">Giá (VNĐ/Ngày)</th>
                                    <th class="text-warning">Ghi Chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DCar Limousine 9 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                                <tr>
                                    <td>dcar limousine 11 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                                <tr>
                                    <td>Dcar limousine 18 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>Đón/trả tận nơi, 1 chiều</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tour Ngoại Tỉnh -->
                <div class="price-card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <i class="bi bi-compass-fill text-warning me-2"></i>
                        <h3 class="text-warning mb-0">Tour Ngoại Tỉnh</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-warning mb-3">Khám phá Hạ Long, Tràng An/Bái Đính với xe limousine cao cấp.</p>
                        <table class="table table-dark table-bordered fixed-table">
                            <thead>
                                <tr>
                                    <th class="text-warning">Loại Xe</th>
                                    <th class="text-warning">Giá (VNĐ/Ngày)</th>
                                    <th class="text-warning">Ghi Chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DCar Limousine 9 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                                <tr>
                                    <td>dcar limousine 11 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                                <tr>
                                    <td>Dcar limousine 18 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- cuoi-->
                <div class="price-card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <i class="bi bi-compass-fill text-warning me-2"></i>
                        <h3 class="text-warning mb-0">Xe Cưới</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-warning mb-3">Đám Cưới Cùng Hồ Gươm Travel.</p>
                        <table class="table table-dark table-bordered fixed-table">
                            <thead>
                                <tr>
                                    <th class="text-warning">Loại Xe</th>
                                    <th class="text-warning">Giá (VNĐ/Ngày)</th>
                                    <th class="text-warning">Ghi Chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DCar Limousine 9 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                                <tr>
                                    <td>dcar limousine 11 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                                <tr>
                                    <td>Dcar limousine 18 chỗ</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                                <tr>
                                    <td>Rolls Royce Ghost II</td>
                                    <td>Liên Hệ</td>
                                    <td>1 và nhiều ngày</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Thông tin bên phải -->
            <div class="col-md-4">
                <div class="info-card p-3 mb-4">
                    <h4 class="text-warning mb-3"><i class="bi bi-info-circle-fill me-2"></i> Lưu Ý</h4>
                    <p class="text-warning mb-2">Giá bao gồm phí xăng, cầu đường, nước uống. Không áp dụng dịp lễ. Mùa cao điểm: +20-30%. Liên hệ để xác nhận.</p>
                    <h4 class="text-warning mt-4 mb-2"><i class="bi bi-telephone-fill me-2"></i> Liên Hệ</h4>
                    <p class="text-warning mb-1"><i class="bi bi-telephone-fill me-2"></i> Hotline: 0822298989 (Zalo, WhatsApp)</p>
                    <p class="text-warning mb-1"><i class="bi bi-envelope-fill me-2"></i> Email: long27031999@gmail.com</p>
                    <p class="text-warning mb-1"><i class="bi bi-geo-alt-fill me-2"></i> 98 Đ. Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội</p>
                    <a href="tel:+84902035595" class="btn btn-warning mt-3" style="background-color: #FFC107; color: #1A1A1A; padding: 8px 20px; width: 100%;">Đặt Xe Ngay</a>
                </div>

                <!-- Ưu đãi -->
                <div class="promo-card p-3 mb-4">
                    <h4 class="text-warning mb-3"><i class="bi bi-gift-fill me-2"></i> Ưu Đãi Đặc Biệt</h4>
                    <ul class="text-warning list-unstyled">
                        <li><i class="bi bi-check-circle-fill me-2"></i> Giảm 10-15% khi đặt sớm</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i> Giảm 5% cho khách thân thiết</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i> Tặng voucher cho nhóm từ 5 người</li>
                    </ul>
                </div>

                <!-- Đánh giá khách hàng -->
                <div class="commitment-card p-3">
                    <h4 class="text-warning mb-3"><i class="bi bi-trophy-fill me-2"></i> Cam Kết Của Chúng Tôi</h4>
                    <ul class="text-warning list-unstyled">
                        <li><i class="bi bi-clock-fill me-2"></i> Đúng giờ 100%</li>
                        <li><i class="bi bi-shield-fill me-2"></i> An toàn tuyệt đối</li>
                        <li><i class="bi bi-star-fill me-2"></i> Dịch vụ 5 sao</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
    background-color: #1a1a1a !important;
    color: #ffc107 !important;
        }

        /* Header */
        .price-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
        }

        .price-header h2 {
            font-size: 1.5rem;
            font-weight: 400;
        }

        .price-header p {
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Features Section */
        .features-section {
            background: #252525;
            border: 1px solid #6C757D;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
        }

        .feature-item {
            background: #2E2E2E;
            border: 1px solid #6C757D;
            border-radius: 8px;
            padding: 1rem;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .feature-item i {
            font-size: 2rem;
        }

        .feature-item p {
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.2;
        }

        /* Price Card */
        .price-card {
            background: #2E2E2E;
            border: 1px solid #6C757D;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
            overflow: hidden;
        }

        .card-header {
            background: #252525;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #6C757D;
        }

        .card-header h3 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-body {
            padding: 1rem;
        }

        .card-body p {
            font-size: 0.9rem;
        }

        /* Bảng giá */
        .table-dark {
            background-color: #1A1A1A;
            color: #FFC107;
        }

        .fixed-table {
            table-layout: fixed;
            width: 100%;
        }

        .fixed-table th, .fixed-table td {
            border-color: #6C757D !important;
            text-align: center;
            vertical-align: middle;
            font-size: 0.9rem;
            word-wrap: break-word;
        }

        .fixed-table th:nth-child(1), .fixed-table td:nth-child(1) {
            width: 30%;
        }

        .fixed-table th:nth-child(2), .fixed-table td:nth-child(2) {
            width: 25%;
        }

        .fixed-table th:nth-child(3), .fixed-table td:nth-child(3) {
            width: 20%;
        }

        .fixed-table th:nth-child(4), .fixed-table td:nth-child(4) {
            width: 25%;
        }

        .table th {
            background-color: #1A1A1A;
            padding: 0.75rem;
            font-weight: 600;
        }

        .table td {
            padding: 0.5rem;
        }

        /* Info Card */
        .info-card {
            background: #2E2E2E;
            border: 1px solid #6C757D;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
            padding: 1.5rem;
        }

        .info-card h4 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .info-card p {
            font-size: 0.95rem;
            margin-bottom: 0.75rem;
        }

        /* Promo Card */
        .promo-card {
            background: #252525;
            border: 1px solid #6C757D;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
            padding: 1.5rem;
        }

        .promo-card h4 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .promo-card ul li {
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }

        /* Review Card */
        .review-card {
            background: #2E2E2E;
            border: 1px solid #6C757D;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
            padding: 1.5rem;
        }

        .review-card h4 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .review-table {
            table-layout: fixed;
            width: 100%;
        }

        .review-table th, .review-table td {
            border-color: #6C757D !important;
            text-align: center;
            vertical-align: middle;
            font-size: 0.85rem;
            padding: 0.5rem;
        }

        .review-table th:nth-child(1), .review-table td:nth-child(1) {
            width: 35%; /* Tên khách hàng */
        }

        .review-table th:nth-child(2), .review-table td:nth-child(2) {
            width: 40%; /* Đánh giá */
        }

        .review-table th:nth-child(3), .review-table td:nth-child(3) {
            width: 25%; /* Điểm */
        }

        /* Button */
        .btn-warning {
            font-size: 1rem;
            font-weight: 500;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #FFD700 !important;
        }
        .commitment-card {
    background: #2E2E2E;
    border: 1px solid #6C757D;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(108, 117, 125, 0.1);
    padding: 1.5rem;
}
.commitment-card li {
    font-size: 0.95rem;
    margin-bottom: 0.75rem;
}
        /* Responsive */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .col-md-8, .col-md-4 {
                width: 100%;
            }
            .display-5 {
                font-size: 1.8rem;
            }
            .table th, .table td {
                font-size: 0.85rem;
                padding: 0.4rem;
            }
            .price-card, .info-card, .promo-card, .review-card {
                margin-bottom: 1rem;
                padding: 1rem;
            }
            .feature-item {
                min-height: 100px;
            }
            .review-table th, .review-table td {
                font-size: 0.8rem;
            }
        }
    </style>
@endpush