<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>
    <link rel="stylesheet" href="{{asset('/css/destination.css')}}">
</head>
<body>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>homepage</title>
</head>
    <nav class="navbar navbar-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/pics/infocation.png" width="130" height="55" class="d-inline-block align-text-top" id="img"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <img src="/pics/infocation.png" width="130" height="55" class="d-inline-block align-text-top" id="img">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sign-Out</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<div class="container">
    <div class="scroll-bg" style="height: 550px">
        <div class="scroll-div" style="width: 32cm; height: 480px"> 
            @foreach ($destinasi as $destinasi)
                <form action="/home/update" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{dest->id}}"><br>
                    <input type="text" name="id" value="{{dest->namadestinasi}}"><br>
                    <input type="text" name="id" value="{{dest->lokasi}}"><br>
                    <input type="text" name="id" value="{{dest->pulau}}"><br>
                    <input type="text" name="id" value="{{dest->deskripsi}}"><br>
                    <input type="submit" value="Save">                   
                </form>
            @endforeach
        </div>
    </div>

</body>
</html>