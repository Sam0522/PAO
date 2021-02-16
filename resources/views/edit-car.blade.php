<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Edit Car</b>
                            <a href="/cars" class="btn btn-secondary" style="float:right;">Home</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('car_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('car_updated')}}
                                </div>
                            @endif
                            <form method="POST" action="{{route('car.update')}}">
                                @csrf 
                                <input type="hidden" name="id" value="{{$car->id}}"/>
                                <!-- <div class="form-group">
                                    <label for="title">Car Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Car Title" value="{{$car->title}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="body">Car Description</label>
                                    <textarea name="body" class="form-control" rows="3">{{$car->body}}</textarea>
                                </div> -->

                                <div class="form-group">
                                    <label for="title">Model</label>
                                    <input type="text" name="title" class="form-control" placeholder="Model (Bijv. Aygo, Yaris, Golf 4)" value="{{$car->title}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="body">Auto Merk</label>
                                    <textarea name="merk" class="form-control" rows="3">{{$car->merk}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="body">Bouwjaar</label>
                                    <textarea name="bwjr" class="form-control" rows="3">{{$car->bwjr}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="body">Auto Omschijving</label>
                                    <textarea name="body" class="form-control" rows="3">{{$car->body}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="body">Kilometer Stand</label>
                                    <textarea name="kmst" class="form-control" rows="3">{{$car->kmst}}</textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Update Car</button>
                            </form>
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