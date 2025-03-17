@extends('layouts.app')

@section('title', 'Trang Chủ - Dịch Vụ Limousine')

@section('content')

     <!-- Banner Carousel -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-33-1680x756.jpg" class="d-block w-100" alt="Limousine 1">
            <div class="carousel-caption d-none d-md-block">
                <h1>Dịch Vụ Cho Thuê Xe Limousine Sang Trọng</h1>
                <p>Trải nghiệm đẳng cấp với đội xe hiện đại</p>
                <a href="/services" class="btn btn-primary btn-lg mt-3">Xem Dịch Vụ</a>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" data-bs-interval="3000">
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Limousine 2">
            <div class="carousel-caption d-none d-md-block">
                <h1>Du Lịch Đẳng Cấp</h1>
                <p>Khám phá mọi nơi với sự thoải mái tối đa</p>
                <a href="/services" class="btn btn-primary btn-lg mt-3">Xem Dịch Vụ</a>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" data-bs-interval="3000">
            <img src="https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-01-1680x756.jpg" class="d-block w-100" alt="Limousine 3">
            <div class="carousel-caption d-none d-md-block">
                <h1>Xe Cưới Sang Trọng</h1>
                <p>Ngày đặc biệt thêm hoàn hảo</p>
                <a href="/services" class="btn btn-primary btn-lg mt-3">Xem Dịch Vụ</a>
            </div>
        </div>
    </div>
    <!-- Nút điều khiển -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <!-- Form Đăng Ký Nhận Báo Giá -->
    <section class="container my-5">
        <div class="quote-form p-4 rounded">
            <h2 class="text-center mb-4">Nhận Báo Giá & Tư Vấn Thuê Xe Limousine</h2>
            <form action="" method="POST" class="row g-3">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="vehicle" class="form-label">Chọn xe:</label>
                        <select name="vehicle" id="vehicle" class="form-select" required>
                            <option value="" disabled selected>Chọn loại xe</option>
                            <option value="limousine_4_seats">Limousine 4 chỗ</option>
                            <option value="limousine_7_seats">Limousine 7 chỗ</option>
                            <option value="limousine_9_seats">Limousine 9 chỗ</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="pickup_location" class="form-label">Địa điểm đón:</label>
                        <input type="text" name="pickup_location" id="pickup_location" class="form-control" placeholder="Nhập địa điểm đón" required>
                    </div>
                    <div class="col-md-6">
                        <label for="itinerary" class="form-label">Hành trình:</label>
                        <input type="text" name="itinerary" id="itinerary" class="form-control" placeholder="Nhập hành trình" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="date" class="form-label">Ngày đi:</label>
                        <input type="text" name="date" id="date" class="form-control flatpickr-input" placeholder="Chọn ngày" required>
                    </div>
                    <div class="col-md-3">
                        <label for="time" class="form-label">Giờ khởi hành:</label>
                        <div class="custom-time-select">
                            <input type="text" name="time" id="time" class="form-control time-display" placeholder="Chọn giờ" readonly required>
                            <select id="time-select" class="time-options">
                                @for ($h = 0; $h < 24; $h++)
                                    @for ($m = 0; $m < 60; $m += 30)
                                        <option value="{{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}">{{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}</option>
                                    @endfor
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="customer_name" class="form-label">Tên khách:</label>
                        <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="col-md-3">
                        <label for="phone_zalo" class="form-label">Số điện thoại/Zalo:</label>
                        <input type="tel" name="phone_zalo" id="phone_zalo" class="form-control" placeholder="Nhập số điện thoại" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark btn-lg" style="width: 200px;">Gửi Ngay</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Dịch vụ nổi bật -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Dịch Vụ Của Chúng Tôi</h2>
        <div class="row">
            @foreach([
                ['title' => 'Thuê Xe Đưa Đón', 'desc' => 'Dịch vụ đưa đón sân bay, sự kiện với xe limousine cao cấp.', 'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60'],
                ['title' => 'Tour Du Lịch', 'desc' => 'Khám phá mọi nơi với xe limousine thoải mái và tiện nghi.', 'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60'],
                ['title' => 'Xe Cưới', 'desc' => 'Ngày cưới thêm hoàn hảo với xe limousine sang trọng.', 'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60'],
                ['title' => 'Xe Cưới', 'desc' => 'Ngày cưới thêm hoàn hảo với xe limousine sang trọng.', 'img' => 'https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-01-1680x756.jpg'],
                ['title' => 'Xe Cưới', 'desc' => 'Ngày cưới thêm hoàn hảo với xe limousine sang trọng.', 'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60'],
                ['title' => 'Xe Cưới', 'desc' => 'Ngày cưới thêm hoàn hảo với xe limousine sang trọng.', 'img' => 'https://mgmydinh.vn/wp-content/uploads/2019/06/banner-bmw-01-1680x756.jpg']
            ] as $service)
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img 
                            src="{{ $service['img'] }}" 
                            class="card-img-top" 
                            alt="{{ $service['title'] }}" 
                            onerror="this.src='{{ asset('images/placeholder.jpg') }}';"
                        >
                        <div class="card-body">
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['desc'] }}</p>
                            <a href="/services" class="btn btn-outline-primary">Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
    // Kiểm tra locale tiếng Việt
    if (typeof flatpickr.l10ns !== "undefined" && flatpickr.l10ns.vi) {
        console.log("Locale tiếng Việt đã tải:", flatpickr.l10ns.vi);
    } else {
        console.log("Locale tiếng Việt không tải được.");
    }

    // Khởi tạo Flatpickr cho Ngày đi
    flatpickr("#date", {
        dateFormat: "d/m/Y",
        minDate: "today",
        disableMobile: true,
        locale: flatpickr.l10ns.vi, // Sử dụng object locale tiếng Việt
        monthSelectorType: "dropdown",
        yearSelectorType: "dropdown",
    });

    // Khởi tạo Flatpickr cho Giờ khởi hành
    // Xử lý dropdown giờ tùy chỉnh
    const timeDisplay = document.getElementById("time");
    const timeSelect = document.getElementById("time-select");

    timeDisplay.addEventListener("click", function () {
        timeSelect.style.display =
            timeSelect.style.display === "block" ? "none" : "block";
        timeSelect.style.left = timeDisplay.offsetLeft + "px";
        timeSelect.style.top =
            timeDisplay.offsetTop + timeDisplay.offsetHeight + "px";
    });

    timeSelect.addEventListener("change", function () {
        timeDisplay.value = timeSelect.value;
        timeSelect.style.display = "none";
    });

    // Ẩn dropdown khi click ra ngoài
    document.addEventListener("click", function (e) {
        if (!timeSelect.contains(e.target) && e.target !== timeDisplay) {
            timeSelect.style.display = "none";
        }
    });
});
console.log(flatpickr.l10ns.vi);
        </script>
    </section>
@endsection