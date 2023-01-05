<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>


</head>
<body>
    <section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Rotanesia</h1>
                <div class="login">
                    <h2 class="log">Register</h2>
                    <p class="log">Sign up with your email address and password to shop for the best selection of rattan products</p>
                    <button class="google"><img src="image/google.png" alt="" width="20"> Sign Up With google</button>
                    <p class="or" style="padding-left:150px; padding-top:20px; color:rgb(192,192,192)">Or Sign Up With Email</p>

                    <form action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fullname</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="remember-me" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>                          
                        </div>
                        <button type="submit" class="btn btn-danger" style="width: 444px; height:50px; border-radius:25px;font-size:20px; background-color:#c32334;">Register</button>
                    </form>
                </div>
                <p style="padding-top:30px; color:rgb(192,192,192);">Rotanesia 2022 All Rights Reserved</p>
            </div>

            <div class="col-md-6">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="width: 745px; height: 1080px; margin-left:0px; ">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
            
                    <div class="carousel-inner" style="width: 745px; height: 1080px; margin-left:0px; " >
                        <div class="carousel-item active">
                        <img src="image/rottan/Rectangle 35.png"class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="image/rottan/Rectangle 36.png"class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="image/rottan/Rectangle 37.png"class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>