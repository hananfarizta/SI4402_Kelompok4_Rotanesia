@extends('layouts.layoutadmin')
@section('content')
<link rel="stylesheet" href="css/detail-product.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
<section>
    <div>
        <div class="row text-center mb-3 mt-5">
            <div class="col">
                <h2 style="color:#9c9c9c;">Admin Area</h2><h2 style="">Create Category</h2>
            </div>
        </div>
        <div class="row mx-5" style="background-color: #eee; height: 100%;">
            <div class="container py-5 ">
                <div class="col-lg-5 col-md-4 col-sm-6 pb-1 mx-auto">
                    <div class="product-item bg-light mb-4 shadow-lg bg-white rounded" style="border-radius:10px;">
                        <div class="product-img position-relative overflow-hidden">
                            <div class="product-action text-center" style="margin-top:30px">
                                <a class="btn btn-outline-dark btn-square" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"><i class="fa fa-plus"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">ADD CATEGORY</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="cc-form" action="{{ route('category.post') }}" method="post">
                                                    @csrf
                                                    <label for="recipient-name" class="col-form-label">CATEGORY</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="category name">
                                                    <div class="modal-footer">
                                                        <button id="close-button" type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button id="add-button" type="button"
                                                            class="btn btn-danger">Add</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('add-button').addEventListener('click', function(event) {
                                        event.preventDefault();
                                        const formData = new FormData();
                                        let nama = document.getElementById("name").value
                                        let token =  document.querySelector('input[name="_token"]').value
                                        formData.append("name", nama)
                                        formData.append("_token", token)
                                        fetch('/category', {
                                            method: 'POST',
                                            headers: {
                                                "X-CSRF-Token": document.querySelector('input[name=_token]').value
                                            },
                                            body : formData
                                        }).then(window.location.href = '/category')
                                    });

                                    document.getElementById('close-button').addEventListener('click', function(event) {
                                        event.preventDefault();
                                        // dismiss the modal here
                                        $('#exampleModal').modal('hide');
                                    });
                                </script>



                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" style="color: #dc3545">ADD CATEGORY</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center row-cols-1 row-cols-md-5 mx-auto">
                    @foreach ($category as $item)
                        <div class="align-center">
                            <!-- Card -->
                            <div class="card mb-4 mx-auto ">
                                <!--Card image-->
                                <!--Card content-->
                                <div class="card-body align-center justify-content-center mx-auto">
                                    <!--Title-->
                                    <h4 class="card-title text-center">{{ $item->name }}</h4>
                                    <!--Text-->
                                    {{-- delete category --}}
                                    <div class="mx-auto justify-content-center">
                                        <form action="{{ route('category.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger rounded-pill"
                                                style="width:190px;">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
</section>
@endsection
