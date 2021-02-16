<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cars</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <b>All Cars</b> 
                            <a href="add-car" class="btn btn-success" style="float:right;">Add New Car</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('car_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('car_deleted')}}
                                </div>
                             @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Auto Model</th>
                                        <th>Merk</th>
                                        <th>Bouwjaar</th>
                                        <th>Omschrijving</th>
                                        <th>KM stand</th>
                                        <th>Actie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>{{$car->id}}</td>
                                        <td>{{$car->title}}</td>
                                        <td>{{$car->merk}}</td>
                                        <td>{{$car->bwjr}}
                                        <td>{{$car->body}}</td>
                                        <td>{{$car->kmst}}</td>
                                        <td>
                                            <a href="/cars/{{$car->id}}" class="btn btn-info">Details</a>
                                            <a href="/edit-car/{{$car->id}}" class="btn btn-warning">Edit</a>
                                            <a href="/delete-car/{{$car->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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