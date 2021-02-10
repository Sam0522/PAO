<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" type="img\favicon.png" href="img\favicon.png"/>
        <link rel="stylesheet" href="./css/app.css">
        <!-- Styles -->
        <style>
        html, body {
            background-color: #1157d3;
background-image: linear-gradient(68deg, #1157d3 0%, #1048c0 17%, #0f39ad 39%, #0f299b 60%, #0e1a88 80%, #06074d 100%);

    color: #ffffff;
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
    top: 0px;
    width: 100%;
    background-color: #ffffff;
    height: 106px;
    /* border-bottom-left-radius: 40px;
    border-bottom-right-radius: 25px; */
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

a.login{
    float: right;
    margin-top: 18px;
    color: #636b6f;
    margin-top: 35px;
}
a.login2{
    float: left;
    margin-top: 18px;
    color: #636b6f;
    margin-top: 35px;
}
        </style>
    </head>

    <body>
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
                <div class="top-right links">
             <a href="./">   <img src="img\aaapie.png" width="8%"></a>
                <a href="https://blog.laravel.com">Blog</a>
                    <a href="http://samharke.nl/">Sam</a>
                    <a href="http://joerydisselhof.nl/">Joery</a>
                    <a href="http://enwerscholing.nl/">Enwer</a>
                    <a href="http://scholtenantonie.com/">Antonie</a>
                    <a href="https://github.com/Sam0522/PAO">GitHub</a>
                    <a href="about/">About us</a>
                    <a href=" ./">home</a>
                    @auth
                        <a class="login" href="{{ url('/home') }}">Logout/Home</a>
                    @else
                        <a class="login" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="login" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



               <div class="content">
<br><br><br><br>
                <div class="title m-b-md">
                Sam, Joery, Enwer en Antonie <br>
                </div>
                <div class="links">
                    
                </div>
                <div>
                    <img src="img\aaapie.png" width="40%">
                </div>
                <div>
                <b>Deze website wordt beveiligd door de Skerpskutter Aapie.</b><br> 
                </div>

                    <br>

                <div class="links">
                    <b>Over ons</b>
                    <br>
                    Wij zijn <a href="http://scholtenantonie.com/">Antonie</a>,<a href="http://enwerscholing.nl">Enwer</a>,<a href="http://joerydisselhof.nl/">Joery</a>en<a href="http://samharke.nl/">Sam</a>, de makers van deze website!
                    <br>
                    Wij hebben deze site gemaakt voor onze PAO opdracht en zijn nogsteeds de Laravel taal aan het leren!
                </div>
            
        </div>
    </body>
</html>