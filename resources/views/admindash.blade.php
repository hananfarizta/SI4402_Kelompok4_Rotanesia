@extends('layouts.layoutadmin')
@section('content')
<link rel="stylesheet" href="css/detail-product.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<section class="row mt-5 mx-5" style="background-color: #eee; height: 100%;">
  <div class="container py-5 mt-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="image/om bram.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 180px;">
            <h5 class="my-3">Admin Rotanesia</h5>
            <p class="text-muted mb-1">admin@admin.com</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        {{-- <p class="text-muted mb-0">{{ $user->name }}</p> --}}
                        <p class="text-muted mb-0">Admin Rotanesia</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        {{-- <p class="text-muted mb-0">{{ $user->email }}</p> --}}
                        <p class="text-muted mb-0">admin@admin.com</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        {{-- <p class="text-muted mb-0">{{ $user->phone }}</p> --}}
                        <p class="text-muted mb-0">1234567890</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        {{-- <p class="text-muted mb-0">{{ $user->address }}</p> --}}
                        <p class="text-muted mb-0">Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>
@endsection
