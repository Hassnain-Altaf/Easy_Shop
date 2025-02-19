<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Redesign</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        footer {
            background-color: white;
            color: black;
            padding: 2rem 0;
        }

        footer a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #fa561b;
        }

        footer .btn {
            color: white;
            background-color: #fa561b;
            border: none;
            transition: background-color 0.3s ease;
        }

        footer .btn:hover {
            background-color: #ff784e;
        }

        footer input:focus {
            border-color: #fa561b;
            box-shadow: 0 0 5px rgba(250, 86, 27, 0.5);
        }

        footer .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
        }

        footer hr {
            border-color: #fa561b;
        }
    </style>
</head>
<body>
    <!-- Redesigned Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Brand Section -->
                <div class="col-lg-4 mb-4 text-center text-lg-start">
                    <h3 class="fw-bold text-uppercase">YourBrand</h3>
                    <p class="mt-3">Elevate your shopping experience with high-quality products and exceptional service. Your satisfaction is our priority.</p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-sm me-2">About Us</a>
                        <a href="#" class="btn btn-sm">Contact Us</a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 mb-4 text-center text-lg-start">
                    <h5 class="fw-bold text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-3 mb-4 text-center text-lg-start">
                    <h5 class="fw-bold text-uppercase">Get in Touch</h5>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-geo-alt-fill me-2"></i>123 E-commerce St, NY, USA</li>
                        <li><i class="bi bi-telephone-fill me-2"></i>+1 234 567 890</li>
                        <li><i class="bi bi-envelope-fill me-2"></i>support@yourbrand.com</li>
                    </ul>
                </div>

                <!-- Newsletter Section -->
                <div class="col-lg-3 mb-4 text-center text-lg-start">
                    <h5 class="fw-bold text-uppercase">Stay Connected</h5>
                    <p class="mt-3">Subscribe to receive updates, exclusive deals, and more!</p>
                    <form class="d-flex mt-2">
                        <input type="email" class="form-control form-control-sm me-2" placeholder="Enter your email">
                        <button class="btn btn-sm">Subscribe</button>
                    </form>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center mt-3">
                <p class="mb-0">© 2025 YourBrand. All rights reserved. Designed with <i class="bi bi-heart-fill" style="color: #fa561b;"></i> by Your Team.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\Development[web]\Laravel\JuttBrand [Ecommerce]\resources\views/component/footer.blade.php ENDPATH**/ ?>