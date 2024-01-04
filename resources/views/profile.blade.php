<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(https://tinypic.host/images/2023/03/20/Shapes-Abstraction-Background-2466799.jpg);
            background-position: center;
            background-size: cover;
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 400px;
            width: 100%;
            border-radius: 25px;
            padding: 30px;
            border: 1px solid #ffffff40;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }

        .image {
            position: relative;
            height: 150px;
            width: 150px;
        }

        .image:hover .profile-pic {
            transform: scale(1.1);
        }

        .image .profile-pic {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            /* box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4); */
            transition: transform 0.3s ease;
        }

        .data {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 15px;
        }

        .data h2 {
            font-size: 33px;
            font-weight: 600;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 250px;
        }

        span {
            font-size: 18px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container">
        <section class="main">
            <div class="profile-card">
                <div class="image">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                        alt="" class="profile-pic">
                </div>
                <div class="data">
                    <h2>{{ Auth::user()->name }}</h2>
                    <span>Thank For Connecting with us.</span>
                </div>
            </div>
        </section>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
