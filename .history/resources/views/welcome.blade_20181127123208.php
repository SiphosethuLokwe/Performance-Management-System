<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
                /* background-image: url("images/compassion.jpg"); */ */
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url("images/educational.jpg");
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style ="color:aqua;" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style ="color:aqua;" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style ="color:aqua;">
                   Performance Management System
                </div>

                <div class="links">
                    <a style ="color:aqua;" href="https://laravel.com/docs">Learn</a>
                    <a style ="color:aqua;"  href="https://laracasts.com">Educate</a>
                    <a style ="color:aqua;"  href="https://laravel-news.com">Improve</a>
                    <a style ="color:aqua;"  href="https://nova.laravel.com">Nova</a>
                    <a style ="color:aqua;"  href="https://forge.laravel.com">Forge</a>
                    <a style ="color:aqua;"  href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>