<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
  
  </head>
  <div class="container">
   <nav class="navbar navbar-light bg-light fixed-top">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <div class="container-fluid" id="navbar">
        <img src="/pics/infocation.png" width="130" height="55" class="d-inline-block align-text-top" id="img">
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
                      <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
                  </li>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </div>
  </nav>
</div>
  <main>
    <link rel="stylesheet" href="{{asset('/css/stylehome.css')}}">

    <div class="container-welcome" id="container-welcome">
      <h1><b>Welcome to infoCation</b></h1>
      <p>Infocation adalah website yang menyediakan informasi destinasi wisata di beberapa daaerah.</p>
    </div>
  </main>
</html>