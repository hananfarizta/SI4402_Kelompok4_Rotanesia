@extends('layouts.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="css/edit-profile.css">
<script src="js/script.js"></script>

<section id="edit-profile">
    <div class="d-flex justify-content-center align-items-center vh-100" >
            
            <form class="shadow w-450 p-3" 
                action="php/edit.php" 
                method="post"
                enctype="multipart/form-data"
                style="margin-top: 200px;"
                >

                <h4 class="display-4  fs-1">Edit Profile</h4><br>
                <!-- error -->

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" 
                    class="form-control"
                    name="name"
                    value=""
                    autocomplete="off"
                    >
            </div>

            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" 
                    class="form-control"
                    name="name"
                    value="" 
                    autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" 
                    class="form-control"
                    name="name"
                    value="" 
                    autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" 
                    class="form-control"
                    name="name"
                    value="" 
                    autocomplete="off">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label class="form-label">Profile Picture</label>
                <input type="file" 
                    class="form-control"
                    name="pp">
                <img src=""
                    class="rounded-circle"
                    style="width: 70px">
                <input type="text"
                    hidden="hidden" 
                    name="old_pp"
                    value="" >
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/home" class="link-secondary"> Home</a>
            </form>
        </div>
</section>
@endsection