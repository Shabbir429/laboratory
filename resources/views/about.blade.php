<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AboutUs</title>
    <style>
        
        body {
            background-image: url('img/body-bg.png') !important;
        }

        .myrow {
            margin-top: 3em !important;
            margin-bottom: 3em !important;
        }

        .ls-wide {
            font-size: 1.2em !important;
            padding: 1.5em;
            letter-spacing: 1px;
        }

        .text-blk {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            line-height: 25px;
        }

        .responsive-cell-block {
            min-height: 75px;
        }

        .responsive-container-block {
            min-height: 75px;
            height: fit-content;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            justify-content: space-evenly;
        }

        .outer-container {
            padding-top: 10px;
            padding-right: 50px;
            padding-bottom: 10px;
            padding-left: 50px;
            background-color: rgb(244, 252, 255);
        }

        .inner-container {
            max-width: 1320px;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            margin-right: auto;
            margin-bottom: 50px;
            margin-left: auto;
        }

        .section-head-text {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
            font-size: 35px;
            font-weight: 700;
            line-height: 48px;
            color: rgb(0, 135, 177);
            margin: 0 0 10px 0;
        }

        .section-subhead-text {
            font-size: 25px;
            color: rgb(153, 153, 153);
            line-height: 35px;
            max-width: 470px;
            text-align: center;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 60px;
            margin-left: 0px;
        }

        .img-wrapper {
            width: 100%;
        }

        .team-card {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-media-links {
            width: 125px;
            display: flex;
            justify-content: space-between;
        }

        .name {
            font-size: 25px;
            font-weight: 700;
            color: rgb(102, 102, 102);
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
        }

        .position {
            font-size: 25px;
            font-weight: 700;
            color: rgb(0, 135, 177);
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 50px;
            margin-left: 0px;
        }

        .team-img {
            width: 100%;
            height: 100%;
            /* border-radius: 50%; */
        }

        .team-card-container {
            width: 280px;
            margin: 0 0 40px 0;
        }

        .myimg{
            padding: 30px;
        }
        @media (max-width: 500px) {
            .outer-container {
                padding: 10px 20px 10px 20px;
            }

            .section-head-text {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="text-center">
            <h1 class="display-1 font-weight-bold"><b>About</b></h1>
        </div>
        <div class="row myrow">
            <!-- First row -->
            <div class="col-lg-6">
                <!-- Left side (image) -->
                <img src="img/slider5.jpg" alt="" class="img-fluid rounded-5">
            </div>
            <div class="col-lg-6">
                <!-- Right side (text) -->
                <p class="ls-wide">We love what we do and we would love to do it with you - our customer. We build
                    mobile
                    laboratories for schools that cannot afford conventional labs and ask sponsors to help fund
                    them. We
                    have three types that appeal to schooling set ups.</p>
                <p class="ls-wide">Laboratories are pivotal environments for scientific exploration, experimentation,
                    and discovery.
                    These specialized spaces serve as the cornerstone of scientific inquiry, allowing researchers,
                    scientists, and students to delve into various disciplines and uncover fundamental truths about the
                    world.</p>
            </div>
        </div>
        <hr>
        <div class="row myrow">
            <!-- Second row -->
            <div class="col-lg-6 order-md-2">
                <!-- Right side (image) -->
                <img src="img/slider3.jpg" alt="" class="img-fluid rounded-5">
            </div>
            <div class="col-lg-6 order-md-1">
                <!-- Left side (text) -->
                <p class="ls-wide">To become the leading manufacturer and supplier of technology-based school mobile
                    science laboratories in Africa and beyond. To provide cost-effective and technology-based science
                    laboratories for the sustainable learning of science-related subjects at the grade level to schools
                    in South Africa and Africa to promote sustainable economic growth through skills development.</p>
                <p class="ls-wide"> A container and prefab labs are for those schools that have small portions of land
                    that cannot
                    accommodate a normal classroom, and we use the limited land to erect a structure, either container
                    or prefab to install a furnished laboratory.
                </p>
            </div>
        </div>
        <hr>
        {{-- Team Members --}}
        <div class="responsive-container-block outer-container myrow">
            <div class="responsive-container-block inner-container">
                <p class="text-blk section-head-text">
                    Meet Our Team Members
                </p>
                <p class="text-blk section-subhead-text">
                    Always give people more than what they expect to get.
                </p>
                <div class="responsive-container-block">
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img myimg"
                                    src="img/profile-pic (1).png">
                            </div>
                            <p class="text-blk name">
                                Mr. G. K. Chaudhary
                            </p>
                            <p class="text-blk position">
                                Instructor
                            </p>
                            <div class="social-media-links">
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img myimg"
                                    src="img/profile-pic (3).png">
                            </div>
                            <p class="text-blk name">
                                Mr. H. H. Sunasara
                            </p>
                            <p class="text-blk position">
                                Instructor
                            </p>
                            <div class="social-media-links">
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img myimg"
                                    src="img/profile-pic (2).png">
                            </div>
                            <p class="text-blk name">
                                Mr. K. K. Chaudhary
                            </p>
                            <p class="text-blk position">
                                Instructor
                            </p>
                            <div class="social-media-links">
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
