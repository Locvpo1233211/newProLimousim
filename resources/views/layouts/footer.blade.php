<style>
    /* Footer Section */
   .footer-section {
       background: linear-gradient(135deg, #1A1A1A, #252525);
       color: #E0E0E0;
       padding: 3rem 0;
       border-top: 2px solid #6C757D;
   }
   
   .footer-col {
       margin-bottom: 2rem;
   }
   
   .footer-title {
       font-size: 1.5rem;
       font-weight: 600;
       color: #FFD700;
       margin-bottom: 1.5rem;
   }
   
   .footer-text {
       font-size: 1rem;
       margin-bottom: 0.8rem;
   }
   
   .footer-link {
       color: #FFD700;
       text-decoration: none;
   }
   
   .footer-link:hover {
       text-decoration: underline;
   }
   
   .footer-logo-container {
       display: flex;
       justify-content: center;
       align-items: center;
   }
   
   .footer-logo {
       width: 100%;
       max-width: 300px;
       height: 200px;
       object-fit: contain;
   }
   
   .social-links {
       display: flex;
       flex-direction: row; /* Đặt các icon nằm ngang */
       justify-content: space-between; /* Căn đều khoảng cách giữa các icon */
       gap: 1rem; /* Khoảng cách giữa các icon */
       flex-wrap: wrap; /* Cho phép xuống dòng nếu không đủ chỗ */
   }
   
   .social-link {
       color: #E0E0E0;
       text-decoration: none;
       font-size: 1rem;
       transition: color 0.3s ease;
   }
   
   .social-link:hover {
       color: #FFD700;
   }
   
   .social-icon {
       font-size: 1.2rem;
       margin-right: 0.4rem;
   }
   
   .map-container {
       border-radius: 10px;
       overflow: hidden;
       box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
   }
   
   .map-container iframe {
       width: 100%;
       height: 200px;
       border: none;
   }
   
   .footer-bottom {
       border-top: 1px solid #6C757D;
       padding-top: 1rem;
   }
   
   .footer-bottom-text {
       font-size: 0.9rem;
       color: #B0B0B0;
   }
   
   /* Responsive */
   @media (max-width: 768px) {
       .footer-col {
           text-align: center;
       }
   
       .social-links {
           justify-content: center; /* Căn giữa trên mobile */
           gap: 1.5rem;
       }
   
       .map-container iframe {
           height: 150px;
       }
   
       .footer-logo {
           height: 150px;
           max-width: 250px;
       }
   }
    </style>
    <!-- Footer -->
    <!-- Footer -->
   
   
   <!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <!-- Thông tin công ty -->
            <div class="col-md-4 col-sm-12 footer-col">
                <h3 class="footer-title">Hồ Gươm Travel</h3>
                <p class="footer-text">Dịch vụ xe limousine cao cấp tại Hà Nội, mang đến trải nghiệm di chuyển sang trọng và tiện nghi.</p>
                <p class="footer-text"><i class="bi bi-telephone-fill me-2"></i> Hotline: <a href="tel:0822298989" class="footer-link">0822 298 989</a></p>
                <p class="footer-text"><i class="bi bi-envelope-fill me-2"></i> Email: <a href="mailto:long27031999@gmail.com" class="footer-link">long27031999@gmail.com</a></p>
                <p class="footer-text"><i class="bi bi-geo-alt-fill me-2"></i> Địa chỉ: 98 Đ. Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội</p>
                <div class="social-links mt-3">
                    <div class="social-link">
                        <a href="https://zalo.me/0822298989" target="_blank" class="social-link">
                            <i class="bi bi-chat-fill social-icon"></i> Zalo
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="https://facebook.com" target="_blank" class="social-link">
                            <i class="bi bi-facebook social-icon"></i> Facebook
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="https://wa.me/0822298989" target="_blank" class="social-link">
                            <i class="bi bi-whatsapp social-icon"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logo lớn -->
            <div class="col-md-4 col-sm-12 footer-col text-center">
                <h3 class="footer-title">Hồ Gươm Travel</h3>
                <div class="footer-logo-container">
                    <img src="{{ asset('img/logo/logo.jpg') }}" alt="Logo" class="footer-logo">
                </div>
            </div>

            <!-- Bản đồ -->
            <div class="col-md-4 col-sm-12 footer-col">
                <h3 class="footer-title">Vị Trí Của Chúng Tôi</h3>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.482827969592!2d105.81959457604034!3d21.01337508837952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab60a649554b%3A0x8fce2c06903b3fa!2zOTggxJAuIE5ndXnhu4VuIENow60gVGhhbmgsIEzDoW5nIFRo4bượngLCDEkOG7k25nIMSQYSwgSMOgIE7hu5lpIDEwMDAwMCwgVmlldG5hbQ!5e0!3m2!1svi!2s!4v1698765432100!5m2!1svi!2s"
                        width="100%"
                        height="200"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center mt-4">
            <p class="footer-bottom-text">© 2025 Hồ Gươm Travel. All Rights Reserved.</p>
        </div>
    </div>
</footer>