<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/status-order.css">
        {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Status Order</title>
</head>
<body>
    <nav>
		<div class="logo font-weight-bold">
			<h3><a href="/home" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
			<!--BG MENU-->
		</div>		
					<ul>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="/home"><i class="bi bi-house-door-fill" style="padding: 3px"></i>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold active" href="/product"><i class="bi bi-basket-fill" style="padding: 3px"></i>Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="#best-seller"> <i class="bi bi-fire" style="padding: 3px"></i>Best Seller</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="/about-us"><i class="bi bi-building-fill" style="padding: 3px"></i>About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="#about"><i class="bi bi-headset" style="padding: 3px"></i>Services</a>
						</li>
						<li class="nav-item" onclick="myFunction()">
							<a class="nav-link fw-bold" href="#"><i class="bi bi-person-fill" style="padding: 3px"></i>Nierimam <i class="bi bi-caret-down-fill"></i></a>
							<ul class="dropdown">
								<li><a href="/status-order">Status Order</a></li>
								<li><a href="/edit-profile">Edit Profile</a></li>
                                <li><a href="">Logout</a></li>
							</ul>
						</li>
					</ul>
					
					<div class="menu-toggle">
						<input type="checkbox" />
						<span></span>
						<span></span>
						<span></span>
						<!-- Menu TOGGLE-->
					</div>
		</nav>

    <center>
        <table border="1" cellpadding="6">
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


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>