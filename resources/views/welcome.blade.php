@extends('layouts.app')

@section('title', 'Trang Chủ - Dịch Vụ Limousine')

@section('content')

     <!-- Banner Carousel -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{ asset('img/logo/logo.jpg') }}" class="d-block w-100" alt="Limousine 1">
            <div class="carousel-caption d-none d-md-block" class="shadow-text">
                <h1>Dịch Vụ Cho Thuê Xe Limousine Sang Trọng</h1>
                <p>Trải nghiệm đẳng cấp với đội xe hiện đại</p>
                <a href="/services" class="btn btn-primary btn-lg mt-3">Xem Dịch Vụ</a>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" alt="Limousine 2">
            <div class="carousel-caption d-none d-md-block" class="shadow-text">
                <h1>Du Lịch Đẳng Cấp</h1>
                <p>Khám phá mọi nơi với sự thoải mái tối đa</p>
                <a href="/services" class="btn btn-primary btn-lg mt-3">Xem Dịch Vụ</a>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" alt="Limousine 3">
            <div class="carousel-caption d-none d-md-block" class="shadow-text">
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
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('quote.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="vehicle" class="form-label">Chọn xe:</label>
                        <select name="vehicle" id="vehicle" class="form-select @error('vehicle') is-invalid @enderror" required>
                            <option value="" disabled selected>Chọn loại xe</option>
                            <option value="Dcar Limousine 9 chỗ" {{ old('vehicle') == 'Dcar Limousine 9 chỗ' ? 'selected' : '' }}>Dcar Limousine 9 chỗ</option>
                            <option value="Dcar Limousine 11 chỗ" {{ old('vehicle') == 'Dcar Limousine 11 chỗ' ? 'selected' : '' }}>Dcar Limousine 11 chỗ</option>
                            <option value="Dcar Limousine 18 chỗ" {{ old('vehicle') == 'Dcar Limousine 18 chỗ' ? 'selected' : '' }}>Dcar Limousine 18 chỗ</option>
                            <option value="Rolls Royce Ghost Series II" {{ old('vehicle') == 'Rolls Royce Ghost Series II' ? 'selected' : '' }}>Rolls Royce Ghost Series II</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="pickup_location" class="form-label">Địa điểm đón:</label>
                        <input type="text" name="pickup_location" id="pickup_location" class="form-control @error('pickup_location') is-invalid @enderror" 
                               value="{{ old('pickup_location') }}" placeholder="Nhập địa điểm đón" required>
                    </div>
                    <div class="col-md-6">
                        <label for="itinerary" class="form-label">Hành trình:</label>
                        <input type="text" name="itinerary" id="itinerary" class="form-control @error('itinerary') is-invalid @enderror" 
                               value="{{ old('itinerary') }}" placeholder="Nhập hành trình" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="date" class="form-label">Ngày đi:</label>
                        <input type="text" name="date" id="date" class="form-control flatpickr-input @error('date') is-invalid @enderror" 
                               value="{{ old('date') }}" placeholder="Chọn ngày" required>
                    </div>
                    <div class="col-md-3">
                        <label for="time" class="form-label">Giờ khởi hành:</label>
                        <div class="custom-time-select">
                            <input type="text" name="time" id="time" class="form-control time-display @error('time') is-invalid @enderror" 
                                   value="{{ old('time') }}" placeholder="Chọn giờ" readonly required>
                            <select id="time-select" class="time-options">
                                @for ($h = 0; $h < 24; $h++)
                                    @for ($m = 0; $m < 60; $m += 30)
                                        <option value="{{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}">
                                            {{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}
                                        </option>
                                    @endfor
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="customer_name" class="form-label">Tên khách:</label>
                        <input type="text" name="customer_name" id="customer_name" class="form-control @error('customer_name') is-invalid @enderror" 
                               value="{{ old('customer_name') }}" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="col-md-3">
                        <label for="phone_zalo" class="form-label">Số điện thoại/Zalo:</label>
                        <input type="tel" name="phone_zalo" id="phone_zalo" class="form-control @error('phone_zalo') is-invalid @enderror" 
                               value="{{ old('phone_zalo') }}" placeholder="Nhập số điện thoại" required>
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
        <!-- Đánh Giá Của Khách Hàng -->
<section class="container my-5">
    <h2 class="text-center mb-4">Đánh Giá Của Khách Hàng</h2>
    <div class="row justify-content-center">
        @foreach([
            ['name' => 'Phan Vĩnh Thanh', 'rating' => 5, 'comment' => 'Dịch vụ rất chuyên nghiệp, xe sạch sẽ và tài xế thân thiện. Sẽ tiếp tục ủng hộ!', 'avatar' => 'https://lumiere-a.akamaihd.net/v1/images/a_avatarpandorapedia_jakesully_16x9_1098_02_b13c4171.jpeg?region=340%2C0%2C1081%2C1081'],
            ['name' => 'Nguyễn Thảo My', 'rating' => 4, 'comment' => 'Xe đẹp, thoải mái, nhưng giá hơi cao so với kỳ vọng. Dù sao vẫn đáng thử.', 'avatar' => 'https://lumiere-a.akamaihd.net/v1/images/a_avatarpandorapedia_jakesully_16x9_1098_02_b13c4171.jpeg?region=340%2C0%2C1081%2C1081'],
            ['name' => 'Nguyễn Minh Chung', 'rating' => 5, 'comment' => 'Trải nghiệm tuyệt vời, đúng giờ và dịch vụ chăm sóc khách hàng tốt.', 'avatar' => 'https://lumiere-a.akamaihd.net/v1/images/a_avatarpandorapedia_jakesully_16x9_1098_02_b13c4171.jpeg?region=340%2C0%2C1081%2C1081']
        ] as $review)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="review-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ $review['avatar'] }}" class="rounded-circle me-3" alt="{{ $review['name'] }}">
                        <div>
                            <h5 class="review-name">{{ $review['name'] }}</h5>
                            <div class="review-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi {{ $i <= $review['rating'] ? 'bi-star-fill' : 'bi-star' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="review-comment">"{{ $review['comment'] }}"</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
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