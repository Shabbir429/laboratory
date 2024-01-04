<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        .light{
            color:#D3D3D3 !important;
            text-decoration: none;
        }
        .light:hover{
            color:#ff0000 !important;
            text-decoration: underline;
        }
        .fas{
            color:#ff0000 !important;
        }

        .btn:hover{
            background: #ff0000 !important;
        }
        footer {
            background-image: url('img/footer-pattern.png');
            background-repeat: no-repeat;
            animation: moveBackground 20s linear infinite alternate;
            background-color: #2a2f39;
            color: #d4dae3;
            margin-top: 5em;
        }

        @keyframes moveBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 0;
            }
        }
    </style>
</head>
<body>
     <!-- Footer -->
     <footer class="text-center text-lg-start text-white">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ff0000 ;">
                            Adarsh Laboratory
                        </h6>
                        <p style="color:#D3D3D3 !important;"> 
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Quick Link</h6>
                        <p>
                            <a class="light" href="/"><img src="img/back.png" alt="link">Home</a>
                        </p>
                        <p>
                            <a class="light" href="/about"><img src="img/back.png" alt="link">About</a>
                        </p>
                        <p>
                            <a class="light" href="/contact"><img src="img/back.png" alt="link">Contact</a>
                        </p>
                        <p>
                            <a class="light" href="/yorder"><img src="img/back.png" alt="link">Book Appointment</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Useful links
                        </h6>
                        <p>
                            <a class="light">Your Account</a>
                        </p>
                        <p>
                            <a class="light">Become an Affiliate</a>
                        </p>
                        <p>
                            <a class="light">Shipping Rates</a>
                        </p>
                        <p>
                            <a class="light">Help</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <a href="https://maps.app.goo.gl/1TMpj282GDm3zFiE9" target="_blank" class="light"><p><i class="fas fa-home mr-3"></i> Palanpur,Gujrat</p></a>
                        <a href="mailto:newadarshlab@gmail.com" class="text-decoration-none light"><p><i class="fas fa-envelope mr-3"></i> newadarshlab@gmail.com</p></a>
                        <a href="tel:9662460459" class="text-decoration-none light"><p><i class="fas fa-phone mr-3"></i> +91 96624 60459</p></a>
                        <a href="tel:9909223829" class="text-decoration-none light"><p><i class="fas fa-phone mr-3"></i> +91 99092 23829</p></a>
                    </div>
                </div>
            </section>
            <hr class="my-3">
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Copyright:
                            <a style="color:#ff0000 ;" href="home">adarsh.com</a>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.facebook.com/kurbanhusain.chaudhary" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/Ali_chaudhary_77" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>