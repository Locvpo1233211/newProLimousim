@extends('layouts.app')

@section('title', 'Giới Thiệu Về Hồ Gươm Travel - Dịch Vụ Limousine Cao Cấp')

@section('content')
    <style>
        /* resources/css/about.css */
body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a !important;
    color: #ffc107 !important;
}

/* Hero Section */
.hero-section {
    position: relative;
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.7),
        rgba(0, 0, 0, 0.5)
    );
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    color: #ffd700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-subtitle {
    font-size: 1.3rem;
    color: #e0e0e0;
    max-width: 600px;
    margin: 1rem auto;
}

.hero-btn {
    font-size: 1.2rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    background-color: #ffc107;
    color: #1a1a1a;
    padding: 0.8rem 2rem;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.hero-btn:hover {
    background-color: #ffd700;
    transform: translateY(-3px);
}

/* Intro Section */
.intro-section {
    background: #252525;
    border-radius: 15px;
    padding: 3rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ffd700;
}

.section-text {
    font-size: 1.1rem;
    color: #e0e0e0;
    line-height: 1.6;
}

.section-btn {
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    background-color: #ffc107;
    color: #1a1a1a;
    padding: 0.7rem 1.5rem;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.section-btn:hover {
    background-color: #ffd700;
    transform: translateY(-2px);
}

.intro-image {
    width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
}

/* Features Section */
.features-section {
    background: linear-gradient(135deg, #2e2e2e, #1a1a1a);
    padding: 5rem 0;
}

.carousel-container {
    overflow: hidden;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
}

.features-list {
    margin-top: 2rem;
}

.feature-item {
    font-size: 1.2rem;
    color: #e0e0e0;
    margin: 0.5rem 0;
}

/* Vehicles Section */
.vehicles-section {
    padding: 5rem 0;
}

.vehicles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.vehicle-item {
    background: #2e2e2e;
    border: 2px solid #6c757d;
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.vehicle-item:hover {
    transform: translateY(-5px);
}

.vehicle-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 2px solid #6c757d;
}

.vehicle-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #ffd700;
    margin: 1rem;
}

.vehicle-text {
    font-size: 1rem;
    color: #e0e0e0;
    margin: 0 1rem 1.5rem;
}

/* Contact Section */
.contact-section {
    background: #252525;
    padding: 5rem 0;
    border-top: 2px solid #6c757d;
}

.contact-image {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 15px;
    margin: 1rem 0;
}

.contact-text {
    font-size: 1.1rem;
    color: #e0e0e0;
    margin-bottom: 1rem;
}

.contact-link {
    color: #ffd700;
    text-decoration: none;
}

.contact-link:hover {
    text-decoration: underline;
}

.contact-btn {
    font-size: 1.2rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    background-color: #ffc107;
    color: #1a1a1a;
    padding: 0.8rem 2rem;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.contact-btn:hover {
    background-color: #ffd700;
    transform: translateY(-3px);
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        height: 50vh;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .hero-btn,
    .contact-btn {
        padding: 0.6rem 1.5rem;
        font-size: 1rem;
    }

    .intro-section {
        padding: 2rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .section-text {
        font-size: 1rem;
    }

    .intro-image {
        margin-top: 2rem;
    }

    .carousel-image {
        height: 300px;
    }

    .feature-item {
        font-size: 1rem;
    }

    .vehicle-image {
        height: 150px;
    }

    .vehicle-title {
        font-size: 1.3rem;
    }

    .vehicle-text {
        font-size: 0.9rem;
    }

    .contact-image {
        max-width: 100%;
    }
}

    </style>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <img src="{{ asset('img/dcar_exterior_front.jpg') }}" alt="DCar Limousine" class="hero-image" loading="lazy">
        <div class="hero-content text-center">
            <h1 class="hero-title">Hồ Gươm Travel</h1>
            <p class="hero-subtitle">Trải nghiệm di chuyển đẳng cấp với dịch vụ limousine sang trọng tại Hà Nội</p>
            <a href="tel:0822298989" class="hero-btn btn">Đặt Xe Ngay</a>
        </div>
    </section>

    <!-- Giới Thiệu Section -->
    <section class="container intro-section my-5 py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="section-title mb-4">Về Hồ Gươm Travel</h2>
                <p class="section-text mb-3">Hồ Gươm Travel tự hào mang đến dịch vụ xe limousine cao cấp tại Hà Nội, với các dòng xe DCar Limousine hiện đại từ 9 đến 29 chỗ. Chúng tôi cam kết mang lại sự thoải mái, tiện nghi, và an toàn cho mọi hành trình của bạn.</p>
                <p class="section-text mb-3">Với đội ngũ tài xế chuyên nghiệp và dịch vụ tận tâm, chúng tôi luôn sẵn sàng phục vụ bạn trên mọi cung đường, từ nội thành Hà Nội đến các điểm du lịch nổi tiếng.</p>
                <a href="tel:0822298989" class="section-btn btn mt-3">Liên Hệ Ngay</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/dcar_interior_full.jpg') }}" alt="Nội thất DCar Limousine" class="intro-image" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Tiện Nghi Section -->
    <section class="features-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Tiện Nghi Đẳng Cấp</h2>
            <div class="carousel-container">
                <div class="carousel-slidea">
                    <img src="{{ asset('img/dcar_interior_seats.jpg') }}" alt="Tiện Nghi 2" class="carousel-image" loading="lazy">
                </div>
            </div>
            <div class="features-list text-center mt-4">
                <p class="feature-item"><i class="bi bi-wifi me-2"></i> Wi-Fi tốc độ cao</p>
                <p class="feature-item"><i class="bi bi-display me-2"></i> Màn hình giải trí 4K</p>
                <p class="feature-item"><i class="bi bi-chair me-2"></i> Ghế massage cao cấp</p>
            </div>
        </div>
    </section>

    <!-- Dòng Xe Section -->
    <section class="container vehicles-section my-5 py-5">
        <h2 class="section-title text-center mb-5">Dòng Xe DCar Limousine</h2>
        <div class="vehicles-grid">
            <div class="vehicle-item">
                <img src="{{ asset('img/dcar_interior_seats.jpg') }}" alt="DCar 9 Chỗ" class="vehicle-image" loading="lazy">
                <h3 class="vehicle-title">DCar Limousine 9 Chỗ</h3>
                <p class="vehicle-text">Phù hợp cho gia đình nhỏ hoặc nhóm bạn, không gian thoải mái với tiện ích cao cấp.</p>
            </div>
            <div class="vehicle-item">
                <img src="{{ asset('img/dcar_interior_full2.jpg') }}" alt="DCar 11 Chỗ" class="vehicle-image" loading="lazy">
                <h3 class="vehicle-title">DCar Limousine 11 Chỗ</h3>
                <p class="vehicle-text">Lý tưởng cho nhóm trung bình, tích hợp Wi-Fi và ghế massage hiện đại.</p>
            </div>
            <div class="vehicle-item">
                <img src="{{ asset('img/dcar_interior_full_back.jpg') }}" alt="DCar 16 Chỗ" class="vehicle-image" loading="lazy">
                <h3 class="vehicle-title">DCar Limousine 16 Chỗ</h3>
                <p class="vehicle-text">Dành cho nhóm lớn, không gian rộng rãi với hệ thống giải trí đỉnh cao.</p>
            </div>
            <div class="vehicle-item">
                <img src="{{ asset('img/z1.jpg') }}" alt="DCar 18 Chỗ" class="vehicle-image" loading="lazy">
                <h3 class="vehicle-title">DCar Limousine 18 Chỗ</h3>
                <p class="vehicle-text">Hoàn hảo cho sự kiện hoặc tour nhóm, đảm bảo tiện nghi tối đa.</p>
            </div>
            
        </div>
    </section>

    <!-- Liên Hệ Section -->
    <section class="contact-section py-5">
        <div class="container text-center">
            <h2 class="section-title mb-4">Liên Hệ Với Chúng Tôi</h2>
            <img src="{{ asset('img/dcar_exterior_side.jpg') }}" alt="DCar Limousine Bên Ngoài" class="contact-image mb-4" loading="lazy">
            <p class="contact-text mb-2"><i class="bi bi-telephone-fill me-2"></i> Hotline: <a href="tel:0822298989" class="contact-link">0822 298 989</a></p>
            <p class="contact-text mb-2"><i class="bi bi-envelope-fill me-2"></i> Email: <a href="mailto:long27031999@gmail.com" class="contact-link">long27031999@gmail.com</a></p>
            <p class="contact-text mb-2"><i class="bi bi-geo-alt-fill me-2"></i> Địa chỉ: 98 Đ. Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội</p>
            <a href="tel:0822298989" class="contact-btn btn mt-3">Đặt Xe Ngay</a>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@push('scripts')
    <script>
        // Carousel đơn giản
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-image');
        const slideContainer = document.querySelector('.carousel-slide');

        function showSlides() {
            slideIndex++;
            if (slideIndex >= slides.length) slideIndex = 0;
            slideContainer.style.transform = `translateX(${-slideIndex * 100}%)`;
        }

        setInterval(showSlides, 3000); // Chuyển ảnh mỗi 3 giây
    </script>
@endpush