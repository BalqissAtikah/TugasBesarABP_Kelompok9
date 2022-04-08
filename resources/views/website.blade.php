<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #bagianKanan{
            background :#f08a8acc;
            height : 400px;
            border-radius : 25px;
            margin-top: 120px;
        }
        .navbar{
            background :#CE6464CC;
        }
        .scroll-bg{
            background :#f08a8acc;
            padding : 30px;
            border-radius : 25px;
            margin-top: 120px;
        }
        .scroll-div{
            width : 550px;
            background :#c75e5ecc;
            height : 350px;
            overflow : hidden;
            overflow-y: scroll;
            border-radius : 25px;
        }

    </style>
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
            <img src="img.png" width="130" height="55" class="d-inline-block align-text-top" id="img"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <img src="img.png" width="130" height="55" class="d-inline-block align-text-top" id="img">
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
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>
</nav>
<div class="container">
    <div class="row">
        <div class= "col-7"> 
            <div class="scroll-bg">
                <div class="scroll-div"></div>
            </div>
        </div>
        <div class= "col-5" id="bagianKanan"> </div>
    </div>
</div>
</body>
</html>