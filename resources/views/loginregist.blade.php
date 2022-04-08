<!DOCTYPE html>
<html>
    <head>
        <title>Tubes INFOCATION</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        #inputRegist {
    width: 300px; 
    height: 35px;
    border-radius: 10px; 
    padding-left: 18px; 
    margin-bottom: 20px;
}
#inputLogin {
    width: 300px; 
    height: 35px;
    border-radius: 10px;
    padding-left: 18px; 
    margin-top: 8px;
    margin-bottom: 20px;
}
#loginNregist {
    margin-top: 75px; 
    border-radius: 40px; 
    border: 1px solid black; 
    background-color: rgba(0, 0, 0, 0.178);
    height: 450px;
    width: 420px;
    margin-left: 450px;
}
#img {
    margin-left: 50px;
}
#navbar {
    background-color: rgba(0, 0, 0, 0.178);
}
#btnLogin {
    border-radius: 10px;
    width: 100px;
    height: 35px;
    margin-bottom: 5px;
}
#btnRegist {
    border-radius: 10px;
    width: 100px;
    height: 35px;
    margin-bottom: 5px;
}
#nav-tab {
    margin-top: 50px;
    margin-bottom: 10px;
    margin-left: 110px;
}
#nav-home-tab, #nav-profile-tab {
    border-radius: 25px;
    height: 50px;
}
#textLogin, #textRegist {
    font-size: x-large;
    margin-bottom: 20px;
}
#textLogin {
    margin-top: 40px;
}
#textRegist {
    margin-top: 30px;
}
.line {
    border-left: 2px black solid;
    height: 50px;
    margin-left: 5px;
}
</style>
    <body>
        <nav class="navbar" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="infocation.png" width="130" height="55" class="d-inline-block align-text-top" id="img">
                </a>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-5" id="loginNregist">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><b>Sign In</b></button>
                            <div class="line">&nbsp;</div>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Sign Up</b></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="container">
                                    <center>
                                        <h4 id="textLogin">Login to your account</h4>
                                        <input type="text" placeholder="Username" name="username" id="inputLogin" method=><br>
                                        <input type="password" placeholder="Password" name="password" id="inputLogin"><br><br>
                                        <button type="submit" id="btnLogin" >Submit</button><br>
                                    </center>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="container">
                                <center>
                                    <h4 id="textRegist">Sign up for free</h4>
                                    <input type="email" placeholder="Email" id="inputRegist">
                                    <input type="text" placeholder="Username" id="inputRegist">
                                    <input type="password" placeholder="Password" id="inputRegist"><br>
                                    <button type="submit" id="btnRegist">Submit</button><br>
                                </center>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </body>
</html>