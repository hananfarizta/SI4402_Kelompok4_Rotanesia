@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="css/status-order.css">
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section id="status-order">
	 <!-- Cart Start -->
     <div class="container-fluid">
        <div class="row">
            <div class="table-responsive px-5">
                <table class="table table-borderless table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="image/rottan/rottan4.jpg" style="width: 50px"> Rattan Toothbrushes</td>
                            <td><div class="price">$10</div></td>
                            <td>
                                1
                            </td>
                            <td>$10</td>
                        </tr>
                        <tr>
                            <td><img src="image/rottan/rottan5.jpg" style="width: 50px"> Rattan Bucket</td>
                            <td>$30</td>
                            <td>
                            2
                            </td>
                            <td>$60</td>
                        </tr>
                        <tr>
                            <td><img src="image/rottan/rottan7.jpg" style="width: 50px"> Rattan Plate</td>
                            <td>$20</td>
                            <td>
                                2
                            </td>
                            <td>$40</td>
                        </tr>
                        <tr>


                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Cart End -->
    
</section>
@endsection
