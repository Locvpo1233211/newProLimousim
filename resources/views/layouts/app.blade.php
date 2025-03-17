<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <style>
           /* Reset và cơ bản */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #1a1a1a !important;
        color: #ffc107 !important;
    }

    /* Link */
    a {
        color: #ffc107;
        text-decoration: none;
    }

    a:hover {
        color: #ffd700;
    }

    /* Header */
    .navbar {
        border-bottom: 2px solid #6C757D;
        background-color: #1a1a1a !important;
    }

    .navbar-brand,
    .nav-link {
        color: #ffc107 !important;
    }

    .nav-link:hover {
        color: #ff7b00 !important;
    }

    /* Banner */
    #bannerCarousel {
        position: relative;
    }

    .carousel-item {
        height: 100vh; /* Full màn hình trên desktop */
        max-height: 600px; /* Giới hạn chiều cao tối đa */
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%);
    }

    .carousel-caption {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 50%;
        left: 50%; /* Căn giữa theo chiều ngang */
        transform: translate(-50%, -50%); /* Dịch chuyển để căn giữa cả ngang và dọc */
        padding: 1rem;
        width: 100%;
        max-width: 800px; /* Giới hạn chiều rộng tối đa để không bị trải quá rộng */
        text-align: center;
    }

    .carousel-caption h1 {
        color: #ffc107 !important;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .carousel-caption p {
        color: #ffd700 !important;
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .carousel-caption .btn {
        background-color: #ffc107 !important;
        color: #1a1a1a !important;
        border: none !important;
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
    }

    .carousel-caption .btn:hover {
        background-color: #ffd700 !important;
    }

    /* Responsive Adjustments cho Banner Carousel */
    @media (max-width: 992px) { /* Tablet */
        .carousel-item {
            height: 70vh;
        }

        .carousel-caption h1 {
            font-size: 2rem;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        .carousel-caption .btn {
            padding: 0.4rem 1.2rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 768px) { /* Mobile lớn */
        .carousel-item {
            height: 60vh;
        }

        .carousel-caption {
            display: block !important; /* Hiển thị caption trên mobile */
        }

        .carousel-caption h1 {
            font-size: 1.5rem;
        }

        .carousel-caption p {
            font-size: 0.9rem;
        }

        .carousel-caption .btn {
            padding: 0.3rem 1rem;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 576px) { /* Mobile nhỏ */
        .carousel-item {
            height: 50vh;
        }

        .carousel-caption h1 {
            font-size: 1.25rem;
        }

        .carousel-caption p {
            font-size: 0.8rem;
        }

        .carousel-caption {
            padding: 0.5rem;
        }

        .carousel-caption .btn {
            padding: 0.25rem 0.8rem;
            font-size: 0.75rem;
        }
    }

        /* Các style khác giữ nguyên */
        .quote-form {
            background-color: #2a2a2a !important;
            border: 1px solid #ffc107 !important;
            border-radius: 10px !important;
        }

        .quote-form h2 {
            color: #ffc107 !important;
        }

        .quote-form .form-label {
            color: #ffc107 !important;
        }

        .quote-form .form-control,
        .quote-form .form-select {
            background-color: #3a3a3a !important;
            color: #ffc107 !important;
            border: 1px solid #ffc107 !important;
        }

        .quote-form .form-control::placeholder,
        .quote-form .form-select option {
            color: #ffd700 !important;
        }

        .quote-form .btn-dark {
            background-color: #ffc107 !important;
            color: #1a1a1a !important;
            border: none !important;
        }

        .quote-form .btn-dark:hover {
            background-color: #ffd700 !important;
        }

        section.container {
            background-color: #1a1a1a !important;
        }

        section.container h2 {
            color: #ffc107 !important;
        }

        .service-card {
            background-color: #2a2a2a !important;
            border: 1px solid #ffc107 !important;
            height: 400px;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card img {
            height: 200px;
            object-fit: cover;
        }

        .service-card .card-title,
        .service-card .card-text {
            color: #ffc107 !important;
        }

        .service-card .btn-outline-primary {
            color: #ffc107 !important;
            border-color: #ffc107 !important;
        }

        .service-card .btn-outline-primary:hover {
            background-color: #ffc107 !important;
            color: #1a1a1a !important;
        }

        /* Flatpickr */
        .flatpickr-calendar {
            background-color: #2a2a2a !important;
            color: #ffc107 !important;
        }

        .flatpickr-day {
            color: #ffc107 !important;
        }

        .flatpickr-day.selected {
            background-color: #ffc107 !important;
            border-color: #ffc107 !important;
            color: #1a1a1a !important;
        }

        .flatpickr-weekday {
            color: #ffc107 !important;
        }

        .flatpickr-monthDropdown-months,
        .flatpickr-yearDropdown-years {
            background-color: #3a3a3a !important;
            color: #ffc107 !important;
        }

        /* Time Dropdown */
        .custom-time-select {
            position: relative;
        }

        .time-display {
            cursor: pointer;
        }

        .time-options {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            max-height: 250px;
            overflow-y: auto;
            background-color: #3a3a3a !important;
            border: 1px solid #ffc107 !important;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: none;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .time-options option {
            padding: 8px 12px;
            color: #ffc107 !important;
        }

        .time-options option:hover {
            background-color: #ffc107 !important;
            color: #1a1a1a !important;
        }

        /* Footer */
        footer {
            background-color: #2a2a2a !important;
            color: #ffc107 !important;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    @stack('styles')
</head>

<body>
    @include('layouts.header')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/vi.js') }}"></script>
    @stack('scripts')
    @include('layouts.footer')
</body>
</html>