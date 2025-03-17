@extends('layouts.app')

@section('title', 'Tin Tức Mới Nhất Về Dịch Vụ Limousine - Asia Limousine')

@section('content')
<style>
    /* resources/css/news.css */
body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a !important;
    color: #ffc107 !important;
}

/* Section */
.news-section {
    margin: 5rem auto;
    padding: 1.5rem 0;
    max-width: 1200px;
}

/* Header */
.news-header .news-title {
    font-size: 2.8rem;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.news-header .news-description {
    font-size: 1.1rem;
    max-width: 700px;
    margin: 0 auto 2rem;
    line-height: 1.6;
}

/* News List */
.news-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    padding: 0 1rem;
}

/* News Card */
.news-card {
    background: #2e2e2e;
    border: 2px solid #6c757d;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
    overflow: hidden;
    width: 300px;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.4s ease; /* Giảm thời gian transition để nhanh hơn */
}

.news-card--hidden {
    opacity: 0;
    transform: translateY(50px);
}

.news-card--visible {
    opacity: 1;
    transform: translateY(0);
}

.news-card-image-container {
    overflow: hidden;
}

.news-card-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-bottom: 2px solid #6c757d;
}

.news-card-image-container:hover .news-card-image {
    transform: scale(1.05); /* Giảm mức zoom để nhẹ hơn */
}

.news-card-content {
    padding: 1.5rem;
}

.news-card-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 0.8rem;
    color: #ffd700;
}

.news-meta {
    font-size: 0.9rem;
    color: #a9a9a9;
    margin-bottom: 0.8rem;
    font-style: italic;
}

.news-excerpt {
    font-size: 1rem;
    color: #e0e0e0;
    margin-bottom: 1.2rem;
    line-height: 1.5;
}

/* Footer */
.news-footer {
    background: #252525;
    border: 2px solid #6c757d;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
    padding: 2rem;
    margin-top: 3rem;
    text-align: center;
}

.news-footer-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 1.2rem;
}

.news-footer-text {
    font-size: 1rem;
    margin-bottom: 0.8rem;
}

/* Button */
.news-btn {
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    background-color: #ffc107;
    color: #1a1a1a;
    padding: 0.7rem 1.5rem;
    text-decoration: none;
    display: inline-block;
}

.news-btn:hover {
    background-color: #ffd700;
}

/* Responsive */
@media (max-width: 768px) {
    .news-section {
        margin: 3rem 0;
        padding: 1rem 0;
    }

    .news-header .display-5 {
        font-size: 2rem;
    }

    .news-header .news-description {
        font-size: 1rem;
    }

    .news-card {
        width: 100%;
    }

    .news-card-image {
        height: 150px;
    }

    .news-card-title {
        font-size: 1.3rem;
    }

    .news-excerpt {
        font-size: 0.9rem;
    }

    .news-card,
    .news-footer {
        padding: 1rem;
    }
}

</style>
    <!-- Section Tin Tức -->
    <section class="container news-section my-5 py-3">
        <!-- Header -->
        <div class="news-header text-center mb-5">
            <h1 class="news-title display-5 fw-bold mb-2">Tin Tức Mới Nhất Về Dịch Vụ Limousine</h1>
            <p class="news-description mb-4">Khám phá những thông tin nóng hổi, mẹo hay và xu hướng mới nhất về xe limousine tại Hà Nội!</p>
        </div>

        <!-- Danh sách bài viết -->
        <div class="news-list">
            <!-- Bài viết 1 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Bài 1" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">5 Mẹo Chuẩn Bị Hành Trang Cho Chuyến Đi Limousine</h2>
                    <p class="news-meta mb-2">Đăng ngày: 10/03/2025</p>
                    <p class="news-excerpt mb-3">Khám phá 5 mẹo tuyệt vời để chuẩn bị hành trang: tai nghe, chăn mỏng, và chai nước để tận hưởng chuyến đi sang trọng. Đặt xe sớm để nhận ưu đãi!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 2 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-01-1680x756.jpg" alt="Bài 2" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Xu Hướng Xe Limousine 2025: Công Nghệ Đỉnh Cao</h2>
                    <p class="news-meta mb-2">Đăng ngày: 08/03/2025</p>
                    <p class="news-excerpt mb-3">2025 mang đến xe limousine với AI, giải trí 4K, và ghế thông minh. Asia Limousine dẫn đầu xu hướng tại Hà Nội!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 3 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-01-1680x756.jpg" alt="Bài 3" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Dịch Vụ Đón Tiễn Sân Bay Nội Bài Mới</h2>
                    <p class="news-meta mb-2">Đăng ngày: 05/03/2025</p>
                    <p class="news-excerpt mb-3">Asia Limousine ra mắt dịch vụ đón tiễn Nội Bài, xe DCar 9-19 chỗ, giá từ 1.200.000 VNĐ/chuyến, hỗ trợ hành lý.</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 4 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Bài 4" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Hành Trình Hà Nội - Hạ Long Bằng Limousine</h2>
                    <p class="news-meta mb-2">Đăng ngày: 02/03/2025</p>
                    <p class="news-excerpt mb-3">Hành trình 153 km đến Hạ Long với limousine, Wi-Fi miễn phí và âm thanh chất lượng cao. Khách hàng hài lòng!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 5 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Bài 5" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Cách Đặt Xe Limousine Giá Rẻ Nhất</h2>
                    <p class="news-meta mb-2">Đăng ngày: 28/02/2025</p>
                    <p class="news-excerpt mb-3">Tiết kiệm với ưu đãi đặt sớm (10-15%), nhóm, hoặc mùa thấp điểm (20%). Asia Limousine tối ưu chi phí!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 6 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Bài 6" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Top 3 Địa Điểm Gần Hà Nội Đi Bằng Limousine</h2>
                    <p class="news-meta mb-2">Đăng ngày: 25/02/2025</p>
                    <p class="news-excerpt mb-3">Khám phá Hạ Long, Tràng An, Bái Đính với limousine, giá từ 2.500.000 VNĐ cho hành trình sang trọng!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 7 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Bài 7" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Lý Do Nên Chọn Limousine Cho Chuyến Đi Gia Đình</h2>
                    <p class="news-meta mb-2">Đăng ngày: 20/02/2025</p>
                    <p class="news-excerpt mb-3">Xe limousine mang đến không gian rộng rãi, ghế ngồi thoải mái, và tiện ích như Wi-Fi, nước uống cho cả gia đình. Asia Limousine đảm bảo chuyến đi an toàn và vui vẻ!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 8 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+8" alt="Bài 8" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Tăng Trải Nghiệm Với Hệ Thống Âm Thanh Cao Cấp</h2>
                    <p class="news-meta mb-2">Đăng ngày: 18/02/2025</p>
                    <p class="news-excerpt mb-3">Hệ thống âm thanh trên xe limousine của Asia Limousine mang đến âm nhạc sống động như rạp hát, giúp bạn thư giãn suốt hành trình. Đừng quên mang tai nghe yêu thích!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 9 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+9" alt="Bài 9" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Lợi Ích Của Việc Đặt Xe Limousine Theo Nhóm</h2>
                    <p class="news-meta mb-2">Đăng ngày: 15/02/2025</p>
                    <p class="news-excerpt mb-3">Đặt xe limousine cho nhóm từ 5 người trở lên tại Asia Limousine để nhận ưu đãi giảm giá 5% và voucher tặng kèm. Hành trình đông vui, tiết kiệm hơn!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 10 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+10" alt="Bài 10" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Khám Phá Tràng An - Bái Đính Với Limousine</h2>
                    <p class="news-meta mb-2">Đăng ngày: 12/02/2025</p>
                    <p class="news-excerpt mb-3">Hành trình 100 km đến Tràng An - Bái Đính với xe limousine mang đến không gian thoải mái, tài xế chuyên nghiệp, và giá chỉ từ 2.500.000 VNĐ/ngày!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 11 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+11" alt="Bài 11" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Mùa Lễ Hội: Đặt Xe Limousine Sớm Để Tránh Tăng Giá</h2>
                    <p class="news-meta mb-2">Đăng ngày: 10/02/2025</p>
                    <p class="news-excerpt mb-3">Mùa lễ hội, giá xe có thể tăng 20-30%. Đặt xe limousine tại Asia Limousine ngay hôm nay để giữ giá tốt và đảm bảo lịch trình của bạn!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 12 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+12" alt="Bài 12" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Trải Nghiệm Tour Nội Thành Hà Nội 1 Ngày</h2>
                    <p class="news-meta mb-2">Đăng ngày: 08/02/2025</p>
                    <p class="news-excerpt mb-3">Tham quan Hà Nội với xe limousine trong 8 giờ, giá từ 2.000.000 VNĐ/ngày. Ghé thăm Hồ Gươm, Văn Miếu, và Lăng Bác với sự thoải mái tối đa!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            {{-- <!-- Bài viết 13 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+13" alt="Bài 13" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Hệ Thống Giải Trí 4K Trên Xe Limousine</h2>
                    <p class="news-meta mb-2">Đăng ngày: 05/02/2025</p>
                    <p class="news-excerpt mb-3">Xe limousine của Asia Limousine được trang bị màn hình 4K, mang đến trải nghiệm giải trí đỉnh cao. Xem phim, nghe nhạc, hay thư giãn suốt hành trình!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 14 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+14" alt="Bài 14" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Lợi Ích Của Tài Xế Chuyên Nghiệp</h2>
                    <p class="news-meta mb-2">Đăng ngày: 02/02/2025</p>
                    <p class="news-excerpt mb-3">Tài xế của Asia Limousine không chỉ lái xe an toàn mà còn hỗ trợ hành khách tận tình, từ mang hành lý đến tư vấn điểm đến. Hành trình thêm trọn vẹn!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 15 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+15" alt="Bài 15" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Ưu Đãi Đặc Biệt Tháng 2: Giảm 15% Cho Khách Đặt Sớm</h2>
                    <p class="news-meta mb-2">Đăng ngày: 01/02/2025</p>
                    <p class="news-excerpt mb-3">Đặt xe limousine trong tháng 2 tại Asia Limousine để nhận giảm giá 15%. Chương trình áp dụng cho mọi hành trình, từ nội thành đến ngoại tỉnh!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 16 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+16" alt="Bài 16" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Xe Limousine: Lựa Chọn Hoàn Hảo Cho Chuyến Công Tác</h2>
                    <p class="news-meta mb-2">Đăng ngày: 30/01/2025</p>
                    <p class="news-excerpt mb-3">Đối với các chuyến công tác, xe limousine mang đến không gian làm việc lý tưởng với Wi-Fi ổn định, ghế ngồi thoải mái, và không gian yên tĩnh!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 17 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+17" alt="Bài 17" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Trải Nghiệm Khách Hàng: Đi Limousine Đến Sapa</h2>
                    <p class="news-meta mb-2">Đăng ngày: 28/01/2025</p>
                    <p class="news-excerpt mb-3">Khách hàng chia sẻ về chuyến đi Sapa với xe limousine: không gian sang trọng, tài xế thân thiện, và hành trình êm ái dù đường núi. Thử ngay!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>

            <!-- Bài viết 18 -->
            <div class="news-card news-card--hidden">
                <div class="news-card-image-container">
                    <img src="https://via.placeholder.com/300x200?text=Bài+18" alt="Bài 18" class="news-card-image" loading="lazy">
                </div>
                <div class="news-card-content">
                    <h2 class="news-card-title mb-2">Lịch Sử Phát Triển Của Xe Limousine Tại Việt Nam</h2>
                    <p class="news-meta mb-2">Đăng ngày: 25/01/2025</p>
                    <p class="news-excerpt mb-3">Từ phương tiện xa xỉ đến dịch vụ phổ biến, xe limousine đã thay đổi cách người Việt di chuyển. Asia Limousine tự hào góp phần vào sự phát triển này!</p>
                    <a href="#" class="news-btn btn">Xem Thêm</a>
                </div>
            </div>
        </div> --}}

        <!-- Footer -->
        <div class="news-footer text-center mt-5 p-3">
            <h4 class="news-footer-title mb-3"><i class="bi bi-telephone-fill me-2"></i> Liên Hệ Với Chúng Tôi</h4>
            <p class="news-footer-text mb-1"><i class="bi bi-telephone-fill me-2"></i> Hotline: 0822298989 (Zalo, WhatsApp)</p>
            <p class="news-footer-text mb-1"><i class="bi bi-envelope-fill me-2"></i> Email:  long27031999@gmail.com</p>
            <p class="news-footer-text mb-1"><i class="bi bi-geo-alt-fill me-2"></i> Địa chỉ:98 Đ. Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội</p>
            <a href="tel:+84902035595" class="news-btn btn mt-3">Đặt Xe Ngay</a>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@push('scripts')
    <script>
        // Sử dụng IntersectionObserver để hiện các bài viết khi scroll
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('news-card--visible');
                    observer.unobserve(entry.target); // Ngừng theo dõi sau khi hiện
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1 // Hiện khi 10% của card vào viewport
        });

        // Áp dụng observer cho tất cả news-card
        document.querySelectorAll('.news-card').forEach(card => {
            observer.observe(card);
        });
    </script>
@endpush