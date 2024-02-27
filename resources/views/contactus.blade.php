<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .set {
            min-height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .set::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }


        section {
            position: relative;
            z-index: 3;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .mcontainer {
            max-width: 1080px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .section-header {
            margin-bottom: 50px;
            text-align: center;
        }

        .section-header h2 {
            color: #FFF;
            font-weight: bold;
            font-size: 3em;
            margin-bottom: 20px;
        }

        .section-header p {
            color: #FFF;
        }

        .myrow {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .contact-info {
            width: 48%;
        }

        .contact-info-item {
            display: flex;
            margin-bottom: 30px;
        }

        .contact-info-icon {
            height: 70px;
            width: 70px;
            background-color: #fff;
            text-align: center;
            border-radius: 50%;
        }

        .contact-info-icon i {
            font-size: 30px ;
            line-height: 70px;
        }

        .contact-info-content {
            margin-left: 20px;
        }

        .contact-info-content h4 {
            color: #1da9c0;
            font-size: 1.4em;
            margin-bottom: 5px;
        }

        .contact-info-content p {
            color: #FFF;
            font-size: 1em;
        }

        .contact-form {
            background-color: #fff;
            padding: 40px;
            width: 48%;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .contact-form h2 {
            font-weight: bold;
            font-size: 2em;
            margin-bottom: 10px;
            color: #333;
        }

        .contact-form .input-box {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }

        .contact-form .input-box input,
        .contact-form .input-box textarea {
            width: 100%;
            padding: 3px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
        }

        .contact-form .input-box span {
            position: absolute;
            left: 0;
            padding: 3px 0;
            font-size: 16px;
            margin: -10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }

        .contact-form .input-box input:focus~span,
        .contact-form .input-box textarea:focus~span {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-5px);
        }

        .contact-form .input-box input[type="submit"] {
            width: 100%;
            background: #00bcd4;
            color: #FFF;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #00bcd4;
            transition: 0.5s;
        }

        .contact-form .input-box input[type="submit"]:hover {
            background: #FFF;
            color: #00bcd4;
        }

        .contact_us {
            background-color: #f1f1f1;
            padding: 120px 0px;
        }

        .contact_inner {
            background-color: #fff;
            position: relative;
            box-shadow: 20px 22px 44px #cccc;
            border-radius: 25px;
        }

        .contact_field {
            padding: 60px 20px 90px 20px;
            /* Adjusted padding for mobile view */
        }

        .contact_field h3 {
            color: #000;
            font-size: 40px;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact_field p {
            color: #000;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 35px;
        }

        .contact_field .form-control {
            border-radius: 0px;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        .contact_field .form-control:focus {
            box-shadow: none;
            outline: none;
            border-bottom: 2px solid #1325e8;
        }

        .contact_field .form-control::placeholder {
            font-size: 13px;
            letter-spacing: 1px;
        }

        button.contact_form_submit {
            background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
            border: none;
            color: #fff;
            padding: 10px 15px;
            width: 100%;
            margin-top: 25px;
            border-radius: 35px;
            cursor: pointer;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .map_sec {
            padding: 50px 0px;
        }

        .map_inner h4,
        .map_inner p {
            color: #000;
            text-align: center;
        }

        .map_inner p {
            font-size: 13px;
        }

        .map_bind {
            margin-top: 50px;
            border-radius: 30px;
            overflow: hidden;
        }

        @keyframes slide-in-bottom {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .message-container {
            position: fixed;
            bottom: 20px;
            right: 15px;
            z-index: 10;
            animation: slide-in-bottom 0.5s ease-in-out forwards;
        }

        @media (max-width: 767px) {
            .contact_field {
                padding: 60px 20px 90px 20px;
            }

            .contact_info_sec {
                display: none;
            }

            section {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .myrow {
                flex-direction: column;
                align-items: center;
            }

            .contact-info,
            .contact-form {
                width: 100%;
                /* Full width on smaller screens */
                margin-bottom: 20px;
                /* Add margin between the divs */
            }
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="set container">
        <section>
            <div class="section-header">
                <div class="mcontainer">
                    <h2>Contact Us</h2>
                    <p>Explain why someone should contact them, and describe how they can help solve their visitors'
                        problems,Include an email and phone number so visitors can get in touch with you on their first
                        attempt.</p>
                </div>
            </div>

            <div class="myrow">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-home" style="font-size: 30px;margin-top:18px;color:#ff0000;"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p>55060 5C9P+764, <br />Sanskar Society, <br />Palanpur Gujarat,<br /> 385001</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone" style="font-size: 30px;margin-top:18px;color:#ff0000;"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p>+91 96624 60459</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope" style="font-size: 30px;margin-top:18px;color:#ff0000;"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p>newadarshlab@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="/contact" id="contact-form" method="post">
                        @csrf
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="name">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="email">
                            <span>Email</span>
                        </div>
                        <div class="input-box">
                            <input type="text" pattern="[0-9]+" title="Please enter numbers only" required="true" name="phone">
                            <span>Number</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name="message"></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send" name="submit">
                        </div>
                    </form>
                </div>
                @if (session('success'))
                    <div class="message-container">
                        <div class="message alert alert-success alert-dismissible fade show message-slide"
                            role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

            </div>
        </section>

    </div>
    <section class="map_sec">
        <div class="mcontainer">
            <div class="myrow">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quo beatae quasi
                            assumenda, expedita aliquam minima tenetur maiores neque incidunt repellat aut voluptas
                            hic dolorem sequi ab porro, quia error.</p>
                        <div class="map_bind">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.1025934722365!2d72.4355734!3d24.168134499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395ce95b650fce97%3A0x774ec298c0a36ace!2sAdarsh%20Pathology%20laboratory!5e0!3m2!1sen!2sin!4v1703940026861!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" frameborder="0" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
