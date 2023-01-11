@extends('layouts.profile-layout')
@section('content')
<link rel="stylesheet" type="text/css" href="css/edit-profile.css">
<script src="js/script.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<section>
    <div id="sidebar">
        <div class="text-center logo font-weight-bold">
            <h3><a href="/home" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
            <!--BG MENU-->
        </div>
        <div id="sidebar-nav">
            <ul>
                <li><a href="profileview"><i class="fa fa-user"></i> Profile</a></li>
                <li class="active"><a href="/edit-profile"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
            </ul>
        </div>

</section>
<section>
    <div class="d-flex justify-content-center align-items-center" >

            <form class="shadow w-450 p-3"
                action="php/edit.php"
                method="post"
                enctype="multipart/form-data"
                >

                <h4 class="  fs-1">Edit Profile</h4><br>
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

            <button type="submit" class="btn btn-danger">Update</button>
            <a href="/home" class="link-secondary"> Home</a>
            </form>
        </div>
</section>
@endsection
