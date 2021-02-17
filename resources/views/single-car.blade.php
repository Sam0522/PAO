<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<style>
        html, body {
            background-color: #1157d3;
background-image: linear-gradient(68deg, #1157d3 0%, #1048c0 17%, #0f39ad 39%, #0f299b 60%, #0e1a88 80%, #06074d 100%);

    color: black;
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
        </style>
        
        @if (Route::has('login'))
                <div class="top-right links">
             <a href="./" >  <img src="..\img\aaapie.png" width="8%">
             <a href="./">home</a>
             <a href="about/">About us</a>
             <a href="cars/" > Crud</a>
             <a href="https://github.com/Sam0522/PAO">GitHub</a>
             <a href="https://dev.azure.com/aaapie/PAO">Devops</a>
             
                <!-- <a href="https://blog.laravel.com">Blog</a> -->
                    
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
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <br><br><br><br><br>
                    <div class="card">
                        <div class="card-header">
                            <b>Car Details</b>
                            <a href="cars" class="btn btn-secondary" style="float:right;">Home</a>
                        </div>
                        <div class="card-body">
                            <h1>{{$car->title}}</h1>

                            <b>merk</b>
                            <p>{{$car->merk}}</p>

                            <b>Bouwjaar</b>
                            <p>{{$car->bwjr}}</p>

                            <b>Omschrijving</b>
                            <p>{{$car->body}}</p>

                            <b>Kilometer Stand</b>
                            <p>{{$car->kmst}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>