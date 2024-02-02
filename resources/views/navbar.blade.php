<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <style>
        #primary {
            height: 100%;
        }

        #primary li {
            margin: 0 20px;
            position: relative;
        }

        #primary li a {
            text-decoration: none;
            padding: 5px 0;
            font-family: 'Serif';
            font-size: 20px;
            line-height: 1.5;
            z-index: 1;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #62BB47, #62BB47 50%, #000000 50%);
            background-size: 200% 100%;
            background-position: -100%;
            transition: all 0.3s ease-in-out;
        }

        #primary li a:before {
            display: block;
            content: '';
            width: 0;
            height: 3px;
            bottom: 5px;
            left: 0;
            bottom: -3px;
            z-index: 0;
            position: absolute;
            background: #62BB47;
            transition: all 0.3s ease-in-out;
        }

        #primary li a:hover {
            background-position: 0%;
        }

        #primary li a:hover:before {
            width: 100%;
        }

        @media (max-width: 750px) {
            .logo {
                width: 200px;
                height: 50px;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="logo" src="img/oie_BiTrYnNVkvnB-removebg-preview.png"
                    alt="logo" width="280px" height="65px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div id="primary">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yorder">Book Appointment</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                @php
                                    $userFullName = Auth::user()->name;
                                    $fullNameArray = explode(' ', $userFullName);
                                    $firstName = $fullNameArray[0];
                                @endphp
                                &nbsp;{{ $firstName }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
