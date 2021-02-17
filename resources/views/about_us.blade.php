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
      
        </style>
    </head>

    <body>
      <div class="flex-center position-ref full-height">
      
            @if (Route::has('login'))
                <div class="top-right links">
<<<<<<< HEAD
             <a href="./">   <img src="img\aaapie.png" width="8%"></a>
             <a href="./">home</a>
=======
                <div class="topnav" id="myTopnav">
             <a  style="white-space: break-spaces;"href="./" >  <img class="logo" src="img\aaapie.png" width="8%"> </a>
           
             <a href=" ./">home</a>
>>>>>>> 5e76bc3dee1233a2c6c1f05b448b87f4183c83d5
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
                   
            @endif   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i style="font-size:24px; margin-top: 10px;" class="fa fa-bars"></i>
  </a> </div></div>
            <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


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