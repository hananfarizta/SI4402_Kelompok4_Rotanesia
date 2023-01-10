@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

                    <form action="{{ route('register.post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="email">Email address</label>
                            <input type="text" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Fullname</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Photo Profile</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="image" style="height: 40px;">
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
@endsection