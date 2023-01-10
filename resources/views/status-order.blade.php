@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="css/status-order.css">
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section id="status-order">
	 <center>
        <table border="1" cellpadding="6" >
            <tr>
                <td>No</td>
                <td>Nama Toko</td>
                <td>Alamat Toko</td>
                <td>Price</td>
                <td>Alamat tujuan</td>             
                <td>Quantity</td>
                <td>Status</td>
            </tr>
        </table>
    </center>
</section>
@endsection