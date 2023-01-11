@extends('layouts.profile-layout')
@section('content')
<script>
    const myModal = document.getElementById('Modal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <section>
        <div id="sidebar">
            <div class="text-center logo font-weight-bold">
                <h3><a href="/home" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
                <!--BG MENU-->
            </div>
            <div id="sidebar-nav">
                <ul>
                    <li class="active"><a href="profileview"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="/edit-profile"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="/" rel="stylesheet">Home</a></li>
                </ul>
            </div>

    </section>
    <section class="row" style="background-color: #eee; height: 100%;">
        <div class="container py-5 ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            {{-- Get User Image --}}
                            {{-- if User doesn't has image return template image --}}
                            @if ($user->image == null)
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            @else
                                <img src="{{ asset('storage/' . $user->image) }}" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px;">
                            @endif
                            {{-- Get User Name --}}
                            {{-- <h5 class="my-3">{{ $user->name }}</h5> --}}
                            <!-- <h5 class="my-3">Surya Manurung</h5> -->
                            <p class="text-muted mb-1">{{ $user->email }}</p>
                                <p class="text-muted mb-4">{{ $user->address }}</p>

                            <!-- {{-- <h5 class="my-3">Joni Setiawan</h5>
                            <p class="text-muted mb-1">tenangaja@gmail.com</p>
                            <p class="text-muted mb-4">Babatan, Jambi, Indonesia</p> --}} -->
                            <div class="d-flex justify-content-center mb-2 ">
                                <a href="edit-profile"><button type="button" class="btn btn-danger"
                                        style="width: 15rem;">Update</button></a>
                            </div>

                        </div>

                    </div>
                    <div class="card mb-2 mb-lg-0" style="height: 1rem;">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="card-body">
                                        <p class="mb-2 text-center"><span class="text-danger font-italic me-1">Account Balance</span>
                                        </p>
                                        <div>
                                            <p class="text-muted mb-3 text-center">Rp.{{ $user_balance }}</p>
                                            {{-- <p class="text-muted mb-3 text-center">Rp. 10000</p> --}}
                                        </div>
                                        {{-- <div class="d-flex justify-content-center mb-1">
                                            <a href="topup"><button type="button"
                                                    class="btn btn-outline-danger ms-1 mt-2"style="width: 10rem;">Top
                                                    Up</button></a>
                                        </div> --}}
                                        <div class="d-flex justify-content-center mb-1">
                                            <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">+ Top Up
                                                Saldo</button>
                                        </div>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">TOP UP</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mt-4 mb-3" style="width:100%">
                                                            <select class="form-select" name="roles" id="roles" required>
                                                                <option selected>Choose Payment Method</option>
                                                                <option value="1">BCA - 0464487612 (Imam Mukhlas)</option>
                                                                <option value="2">MANDIRI - 5643422675665 (Yohanes Nico)</option>
                                                                <option value="3">BNI - 7678933256 (Demitria)</option>
                                                            </select>
                                                            </div>
                                                    </div>

                                                    <div class="modal-body">
                                                        <label class="mb-1" for="">NOMINAL</label><br>
                                                        <form id="topup-form" action="{{ route('topup.post') }}" method="post">
                                                        {{-- <form id="topup-form" action="" method="post"> --}}
                                                            @csrf
                                                            <input type="number" class="form-control" id="balance" name="balance"
                                                                placeholder="Rp." step="0.01">
                                                            <div class="modal-footer">
                                                                <button id="close-button" type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button id="request-button" type="button"
                                                                    class="btn btn-danger">Top Up</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <script>
                                                        document.getElementById('request-button').addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            document.getElementById('topup-form').submit();
                                                        });

                                                        document.getElementById('close-button').addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            // dismiss the modal here
                                                            $('#exampleModal').modal('hide');
                                                        });
                                                    </script>


                                                </div>
                                            </div>
                                        </div>

                                </li>
                            </ul>
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
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                    <!-- <p class="text-muted mb-0">Surya Manurung</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                    <!-- <p class="text-muted mb-0">suryamanurung@gmail.com</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                    <!-- <p class="text-muted mb-0">089876767878</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address }}</p>
                                    {{-- <p class="text-muted mb-0">Bandung</p> --}}
                                </div>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
