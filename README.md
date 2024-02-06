<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Home</title>
    <style>
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .svg {
            width: 100px;
            height: 100px;
            fill: none;
            stroke: #45d6b5;
        }

        .headingset {
            margin-top: 3em;
            margin-bottom: 3em;
        }

        .heading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -100%);
            color: black;
            z-index: 1;
            text-align: center;
            width: 70%;
            font-size: 4em;
        }

        .mybtn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            z-index: 1;
            text-align: center;
            display: inline-block;
            outline: 0;
            border: 0;
            font-size: 20px;
            font-weight: 500;
            color: #fff;
            background-image: linear-gradient(to right, #62BB47, #FFFFFF) !important;
            border-radius: 3px;
            padding: 16px 18px 15px;
        }

        .mybtn:hover {
            /* background-color: linear-gradient(to right,#62BB47, #FFFFFF  ) ; */
            background-image: linear-gradient(to right, #FFFFFF, #62BB47) !important;
        }

        .dirive {
            margin-top: 3em;
        }

        .underline {
            color: #16b6d2;
            border-bottom: 1px solid #16b6d2;
            border-width: 3px;
            margin-top: 10px;
            margin-bottom: 3em;
            display: inline-block;
            padding-bottom: 5px;
        }

        .small-img {
            width: 10em !important;
            margin: 0 auto;
            transition: transform .5s ease;
        }

        .small-img:hover {
            transform: scale(1.2);
        }

        .img {
            width: 10em;
            margin: 0 auto;
            transition: transform .5s ease;
        }

        .img:hover {
            transform: scale(1.2);
            overflow: hidden;
        }

        .ovrhide {
            overflow: hidden;
        }

        .cardimg {
            transition: transform .5s ease;
        }

        .cardimg:hover {
            transform: scale(1.1);
        }

        .video-container {
            position: relative;
            width: 100%;
        }

        .vidcontent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-140%, -60%);
            text-align: center;
            color: white;
        }

        .vidcontent h1 {
            font-size: 4.5rem;
            line-height: 4.5rem;
            font-weight: 500;
            letter-spacing: -1.76px;
            text-align: left;
        }

        #fullWidthVideo {
            width: 100%;
        }

        .btnvid {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            min-width: 150px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 10px 20px;
            color: #00edc2;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            margin: 4em 0 0 -10.5em;
        }

        .btnvid:hover {
            opacity: .95;
        }

        .btnvid .animation {
            border-radius: 100%;
            animation: ripple 0.9s linear infinite;
        }

        @keyframes ripple {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
            }

            100% {
                box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
            }
        }

        .backimg {
            /* position: sticky; */
            top: 0;
            left: 0;
            width: 100%;
            height: 65vh;
            object-fit: cover;
            z-index: -1;
            background-color: black;
            opacity: 0.6;
        }

        .projectimg {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 100%;
            margin: 0 auto;
        }

        .projectimg img {
            width: 25%;
            max-width: 100%;
            height: auto;
            padding: 15px;
            box-sizing: border-box;
            transition: transform .5s, overflow 0.5s ease;
        }

        .projectimg img:hover {
            transform: scale(1.1);
            overflow: hidden;
        }

        .custom-row {
            margin-top: 4em !important;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
        }

        .custom-row img {
            transition: transform 0.3s ease-in-out;
        }

        .custom-row img:hover {
            transform: scale(1.1);
        }

        /* media Query for mobile  */
        @media (max-width: 750px) {

            .heading {
                font-size: 2.5em;
            }

            .mybtn {
                font-size: 18px;
                padding: 14px 16px 13px;
            }

            .mview {
                margin-top: 15px !important;
            }

            .vidcontent {
                transform: translate(-200%, -45%);
            }

            .vidcontent h1 {
                font-size: 1rem;
                line-height: 1rem;
                font-weight: 300;
                letter-spacing: -0.8px;
            }

            .btnvid {
                font-size: 0.5rem;
                font-weight: 400;
                letter-spacing: 1px;
                margin: 0 0 10px -15px;
                min-width: 50px;
                padding: 5px 10px;
            }

            .projectimg img {
                width: 50%;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .heading {
                font-size: 3em;
            }

            .mybtn {
                font-size: 16px;
                padding: 12px 14px 11px;
            }

            .vidcontent {
                transform: translate(-130%, -50%);
            }

            .vidcontent h1 {
                font-size: 3rem;
                line-height: 3rem;
                font-weight: 400;
                letter-spacing: -1px;
            }

            .btnvid {
                font-size: 1rem;
                font-weight: 500;
                letter-spacing: 1.3px;
                margin: 30px 0 0 -120px;
                min-width: 120px;
            }

            .projectimg img {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    @include('navbar')
    <div id="preloader">
        <svg class="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 80 80">
            <defs>
                <clipPath id="circleClip">
                    <circle cx="40" cy="40" r="30" />
                </clipPath>
            </defs>

            <circle cx="40" cy="40" r="30" fill="none" stroke-width="2" stroke="currentColor" />

            <g clip-path="url(#circleClip)">
                <path transform="translate(0, 20)"
                    d="M22.026 37.678c-.244 2.958-.838 4.653.787 5.849.297.532.89 1.06.89-1.08 0-2.675 4.77-6.065 6.028-8.973 1.258-2.908-2.097-3.34-4.298-4.587-2.201-1.246-4.642.898-5.38-1.429-.739-2.326 1.38-4.42 4.49-6.181 3.109-1.762-.368-5.002 2.62-5.002 2.987 0 4.542-4.985 5.258-9.14.716-4.154-5.678-7.544-10.395-7.095C17.31.489 11.405 9.744 11.23 11.29c-.175 1.545-2.568 1.013-6.394 1.18-3.826.166-.35 6.364 2.393 4.885s4.647 1.08 5.067 4.77c.419 3.688 5.608 6.363 6.638 6.363 1.031 0 2.376 1.13 2.08 3.008-.298 1.878 1.257 3.224 1.012 6.182ZM40.614 17.479c0 2.234-2.75 1.63-2.68 5.035-2.321 3.876-1.107 6.294.858 6.896 1.965.603 3.036 1.277 4.197 5.94 1.16 4.663 4.34 1.4 5.376-1.029 1.036-2.428.982-9.697 4.215-7.747 3.232 1.95 7.126 1.028 9.823 1.028s5.911-5.815 6.161-7.092c.25-1.276 2.733-4.716 5.858-5.567 3.126-.85 2.322-2.553 0-3.811-2.322-1.26-9.465.602-10.68-2.802-1.214-3.404-4.947-2.11-7.572.62-2.626 2.731-4.876 3.086-10.056 2.182-5.179-.905-5.5 4.113-5.5 6.347Z"
                    fill="currentColor">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" from="0, 20"
                        to="-80, 20" dur="2s" repeatCount="indefinite" />
                </path>

                <path transform="translate(80, 20)"
                    d="M22.026 37.678c-.244 2.958-.838 4.653.787 5.849.297.532.89 1.06.89-1.08 0-2.675 4.77-6.065 6.028-8.973 1.258-2.908-2.097-3.34-4.298-4.587-2.201-1.246-4.642.898-5.38-1.429-.739-2.326 1.38-4.42 4.49-6.181 3.109-1.762-.368-5.002 2.62-5.002 2.987 0 4.542-4.985 5.258-9.14.716-4.154-5.678-7.544-10.395-7.095C17.31.489 11.405 9.744 11.23 11.29c-.175 1.545-2.568 1.013-6.394 1.18-3.826.166-.35 6.364 2.393 4.885s4.647 1.08 5.067 4.77c.419 3.688 5.608 6.363 6.638 6.363 1.031 0 2.376 1.13 2.08 3.008-.298 1.878 1.257 3.224 1.012 6.182ZM40.614 17.479c0 2.234-2.75 1.63-2.68 5.035-2.321 3.876-1.107 6.294.858 6.896 1.965.603 3.036 1.277 4.197 5.94 1.16 4.663 4.34 1.4 5.376-1.029 1.036-2.428.982-9.697 4.215-7.747 3.232 1.95 7.126 1.028 9.823 1.028s5.911-5.815 6.161-7.092c.25-1.276 2.733-4.716 5.858-5.567 3.126-.85 2.322-2.553 0-3.811-2.322-1.26-9.465.602-10.68-2.802-1.214-3.404-4.947-2.11-7.572.62-2.626 2.731-4.876 3.086-10.056 2.182-5.179-.905-5.5 4.113-5.5 6.347Z"
                    fill="currentColor">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" from="80, 20"
                        to="0, 20" dur="2s" repeatCount="indefinite" />
                </path>
            </g>

        </svg>
    </div>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider2.jpg" class="d-block w-100 backimg" alt="..." loading="lazy">
                </div>
                <div class="carousel-item">
                    <img src="img/slider8.jpg" class="d-block w-100 backimg" alt="..." loading="lazy">
                </div>
                <div class="carousel-item">
                    <img src="img/maintopbg.jpg" class="d-block w-100 backimg" alt="..." loading="lazy">
                </div>
                <div class="carousel-item">
                    <img src="img/slider3.jpg" class="d-block w-100 backimg" alt="..." loading="lazy">
                </div>
                <div class="carousel-item">
                    <img src="img/slider5.jpg" class="d-block w-100 backimg" alt="..." loading="lazy">
                </div>
            </div>
        </div>
        <div class="text-center">
            <h1 class="heading"><b>Advances of science make easier our daily life</b></h1>
            <a href="/about"><button class='mybtn'>About Us</button></a>
            <div class="dirive">
                <h1><b>Reliable & High-Quality Laboratory Services</b></h1>
                <h5 class="underline">ABOUT US</h5>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card ovrhide">
                        <img src="img/apple.jpg" class="card-img-top cardimg" alt="card" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">ALLERGY</h5>
                            <p class="card-text">MedLab Laboratory offers allergy testing for common allergic reaction
                                triggers and for occupational allergens, including chemicals, insects, and drugs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ovrhide">
                        <img src="img/doctor.jpg" class="card-img-top cardimg" alt="card" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">DIABETES TESTING</h5>
                            <p class="card-text">MedLab Laboratory provides a variety of diabetes risk panels to meet
                                the needs of your particular patients and your practice.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ovrhide">
                        <img src="img/labtest.jpg" class="card-img-top cardimg" alt="card" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">PATHOLOGY TESTING</h5>
                            <p class="card-text">MedLab offers diverse tissue pathology & histology services, focusing
                                on gynecologic, gastroenterology, dermatology examinations & more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dirive">
                <h1><b>Latest Projects</b></h1>
                <h5 class="underline">WHAT WE DO</h5>
            </div>
            <div class="projectimg">
                <img src="img/slider1.jpg" alt="slider" loading="lazy">
                <img src="img/slider2.jpg" alt="slider" loading="lazy">
                <img src="img/slider3.jpg" alt="slider" loading="lazy">
                <img src="img/slider4.jpg" alt="slider" loading="lazy">
                <img src="img/slider5.jpg" alt="slider" loading="lazy">
                <img src="img/slider6.jpg" alt="slider" loading="lazy">
                <img src="img/slider7.jpg" alt="slider" loading="lazy">
                <img src="img/slider8.jpg" alt="slider" loading="lazy">
            </div>
            <div class="text-center headingset">
                <h4>TAKE CARE OF YOUR HEALTH</h4>
                <h1>TAKE A TEST NOW!</h1>
            </div>
            <div class="video-container">
                <video id="fullWidthVideo" loop autoplay muted>
                    <source src="img/labvid.mp4" type="video/mp4">
                </video>
                <div class="vidcontent">
                    <h1>Powering</h1>
                    <h1 style="color: #00edc2">Microbiome</h1>
                    <h1>Precision</h1>
                    <h1>Medicine</h1>
                    <a href="contact"><button class="btnvid"><i class="animation"></i>JOIN US<i
                                class="animation"></i></button></a>
                </div>
            </div>
            <div class="col-12 text-center headingset">
                <h1>What Makes Us the Best?</h1>
                <h4>OUR FEATURE</h4>
            </div>
            <div class="row">
                <div class="col-sm-3 mview">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid small-img" src="img/money-bag.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">WE'RE AFFORDABLE</h4>
                            <p class="card-text">Our medical testing prices are 25% lower than…</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mview">
                    <div class="card">
                        <img class="card-img-top img-fluid small-img" src="img/stopwatch.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">WE'RE FAST</h4>
                            <p class="card-text">The best part of any testing is getting your results asap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mview">
                    <div class="card">
                        <img class="card-img-top img-fluid small-img" src="img/best-practice.png"
                            alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">WE'RE EXPERIENCED</h4>
                            <p class="card-text">With almost 4 decades of experience at hand, we've got it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mview">
                    <div class="card">
                        <img class="card-img-top img-fluid text-center small-img" src="img/bookmark.png"
                            alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">WE'RE CERTIFIED</h4>
                            <p class="card-text">Certified by AHD, DJDH and the ATY Association.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row custom-row justify-content-center align-items-center">
                <div class="col-md-6">
                    <img src="img/bloodcollectig.jpg" alt="blood collecting" class="img-fluid">
                </div>
                <div class="col-md-6 mt-5 text-center">
                    <h1>Empowering Health</h1>
                    <p>Collecting blood allows for comprehensive health assessments, enabling early detection of
                        diseases and personalized treatment plans, promoting proactive and informed healthcare for
                        individuals.</p>

                    <a href="/yorder"><button type="button" class="btn btn-primary"> Take Appoitment </button></a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var preloader = document.getElementById('preloader');
            preloader.style.display = 'flex'; 
            var preloaderDuration = 2000; 
            setTimeout(function () {
                preloader.style.display = 'none'; 
            }, preloaderDuration);
        });
    </script>
</body>

</html>
