<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        #algn {
            height: 92vh;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #card {
            width: 370px;
            height: 435px;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px 0 #E7E9EB, 0 6px 20px 0 #E7E9EB;
        }

        #upper-bg {
            width: 100%;
            height: 35%;
            background-color: #FFE400;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .profile-pic {
            width: 35%;
            background-color: white;
            border: 3px solid #FFE400;
            border-radius: 50%;
            padding: 3px;
            position: absolute;
            top: 40px;
        }

        #lower-bg {
            width: 100%;
            height: 65%;
        }

        .text {
            text-align: center;
            padding-top: 35px;
        }

        .text .name {
            font-weight: 600;
            font-size: large;
            padding: 0;
            margin: 5px;
        }

        .text .title {
            padding: 0;
            margin: 0;
            font-size: 15px;
        }

        #icons {
            display: flex;
            justify-content: center;
            margin: 15px;
        }

        #icons img {
            width: 80%;
            height: 90%;
        }

        .ico {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #btn {
            display: flex;
            justify-content: center;
            margin: 15px;
        }

        #btn button {
            margin: 0 20px;
            padding: 10px 15px;
            background-color: #FFE400;
            border: none;
            border-radius: 50px;
            font-weight: 700;
        }

        #btn button:hover {
            box-shadow: 0 4px 8px 0 #E7E9EB, 0 6px 20px 0 #E7E9EB;
        }

        #l-c-s {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            margin: 20px 10px;
        }

        #l-c-s .num {
            display: flex;
        }

        #l-c-s .dvr {
            width: 2px;
            height: 25px;
            background-color: gray;
        }

        #l-c-s img {
            width: 24px;
            height: 24px;
        }

        .license {
            font-size: 12px;
            text-align: center;
        }

        .license .ll {
            padding: 0 10px;
            display: inline;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div id="algn">
        <div id="card">
            <div id="upper-bg">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                    alt="" class="profile-pic">
            </div>
            <div id="lower-bg">
                <div class="text">
                    <p class="name">{{ Auth::user()->name }}</p>
                    <p class="title">Web developer & <br> Competitive programmer</p>
                </div>
                <div id="icons">
                    <a href="#" class="ico"><img width="48" height="48"
                            src="https://img.icons8.com/color/48/gmail-new.png" alt="gmail-new" /></a>
                    <a href="#" class="ico">
                        <img width="48" height="48" src="https://img.icons8.com/fluency/48/github.png"
                            alt="github" />
                    </a>
                    <a href="#" class="ico">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png"
                            alt="linkedin" />
                    </a>
                    <a href="#" class="ico">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png"
                            alt="facebook-new" />
                    </a>
                </div>
                <div id="btn">
                    <button class="msg">Subscribe</button>
                    <button class="msg">Message</button>
                </div>
                <div id="l-c-s">
                    <div class="num">
                        <img width="48" height="48"
                            src="https://img.icons8.com/fluency-systems-regular/48/facebook-like--v1.png"
                            alt="facebook-like--v1" />
                        <span>35k</span>
                    </div>
                    <div class="num dvr"></div>
                    <div class="num">
                        <img width="48" height="48"
                            src="https://img.icons8.com/fluency-systems-regular/48/speech-bubble--v1.png"
                            alt="speech-bubble--v1" />
                        <span>20k</span>
                    </div>
                    <div class="num dvr"></div>
                    <div class="num">
                        <img width="48" height="48" src="https://img.icons8.com/pulsar-line/48/share.png"
                            alt="share" />
                        <span>15k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
</body>

</html>
