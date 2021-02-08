<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
            div{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Logout/Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md">
                Sam, Joey, Enwer en Antonie <br>
                </div>
                <div class="links">
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="http://samharke.nl/">Sam</a>
                    <a href="http://joerydisselhof.nl/">Joery</a>
                    <a href="http://enwerscholing.nl/">Enwer</a>
                    <a href="http://scholtenantonie.com/">Antonie</a>
                    <a href="https://github.com/Sam0522/PAO">GitHub</a>
                    <a href="about/">About us</a>
                </div>
                <div>
                    <img src="img\aaapie.png" width="40%">
                </div>
                <div>
                <b>Deze website wordt beveiligd door de Skerpskutter Aapie.</b>
                </div>
            </div>
        </div>
    </body>
</html>