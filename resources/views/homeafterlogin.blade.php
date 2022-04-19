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
                    <a class="nav-link active" href="{{route('destinasiuser')}}">Destinasi</a>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('logout')}}">Sign-Out</a>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('destinasiadmin')}}">Edit</a>
                </ul>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </div>
  </nav>
</div>
  <main>
    <link rel="stylesheet" href="{{asset('/css/stylehome.css')}}">

    <div class="container-welcome" id="container-welcome">
      <h1><b>Welcome to infoCation</b></h1>
      <p>Descriptionnnnnn!!!!</p>
    </div>

    <div class="rec-text" id="text-rec">
      <br><br>
      <h1><b> Rekomendasi Destinasi Liburan </b></h1>
    </div>


    <div class="container">
      <div class="slide" style="background-image: url('/pics/bali-hd.jpg');">
        <h3>Bali</h3>
      </div>

      <div class="slide" style="background-image: url('/pics/jogja.jpg');">
        <h3>Jogja</h3>
      </div>

      <div class="slide" style="background-image: url('/pics/rajaampat.jpg');">
        <h3>Raja Ampat</h3>
      </div>

      <div class="slide" style="background-image: url('/pics/bdg.jpg');">
        <h3>Bandung</h3>
      </div>

    </div>
    <script>
    activeslideimg();
  
      function activeslideimg(activeSlide = 2) {
        const slides = document.querySelectorAll(".slide");
        
        slides[activeSlide].classList.add("active");
        
        for (const slide of slides) {
            slide.addEventListener("click", () => {
              clearActiveClasses();
  
              slide.classList.add("active");
          });
        }
  
        function clearActiveClasses() {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
        }
      }
</script>
</main>

<body>
  <link rel="stylesheet" href="{{asset('/css/stylesearch.css')}}"/>
  <center>
  <br><br>
  <h3><b> Destinasi Pulau </b></h3>
  </center>
   <div class="container" id="container-search">
      {{-- <h3> Destinasi Pulau </h3> --}}
      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input type="radio" class="radio" id="pulaujawa" name="category" href="{{route('destinasiuser')}}"/>
            <label for="pulaujawa" >Pulau Jawa</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="pulausumatera" name="category" href="{{route('destinasiuser')}}"/>
            <label for="pulausumatera" >Pulau Kalimantan</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="pulaupapua" name="category" href="{{route('destinasiuser')}}"/>
            <label for="pulaupapua">Pulau Papua</label>
          </div>
      
          <div class="option">
            <input type="radio" class="radio" id="pulaubali" name="category" href="{{route('destinasiuser')}}"/>
            <label for="pulaubali" >Pulau Bali</label>
          </div>
        </div>
        <div class="selected">
          Select Destinasi
        </div>

        <div class="search-box">
          <input type="text" placeholder="Start Typing ..."/>
        </div>
      </div>
    </div>

    <script>
    const selected = document.querySelector(".selected");
    const optionsContainer = document.querySelector(".options-container");
    const searchBox = document.querySelector(".search-box input");
    
    const optionsList = document.querySelectorAll(".option");
    
    selected.addEventListener("click", () => {
      optionsContainer.classList.toggle("active");
    
      searchBox.value = "";
      filterList("");
    
      if (optionsContainer.classList.contains("active")) {
        searchBox.focus();
      }
    });
    
    optionsList.forEach(o => {
      o.addEventListener("click", () => {
        selected.innerHTML = o.querySelector("label").innerHTML;
        optionsContainer.classList.remove("active");
      });
    });
    
    searchBox.addEventListener("keyup", function(e) {
      filterList(e.target.value);
    });
    
    const filterList = searchTerm => {
      searchTerm = searchTerm.toLowerCase();
      optionsList.forEach(option => {
        let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
        if (label.indexOf(searchTerm) != -1) {
          option.style.display = "block";
        } else {
          option.style.display = "none";
        }
      });
    };
    </script>
  </body>
</html>