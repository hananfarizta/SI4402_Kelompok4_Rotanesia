<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


	<link rel="stylesheet" type="text/css" href="css/edit-profile.css">
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
							<a class="nav-link fw-bold" href="/best-seller"> <i class="bi bi-fire" style="padding: 3px"></i>Best Seller</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="#about"><i class="bi bi-building-fill" style="padding: 3px"></i>About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="#about"><i class="bi bi-headset" style="padding: 3px"></i>Services</a>
						</li>
						<li class="nav-item" onclick="myFunction()">
							<a class="nav-link fw-bold" href="#"><i class="bi bi-person-fill" style="padding: 3px"></i>Nierimam <i class="bi bi-caret-down-fill"></i></a>
							<ul class="dropdown">
								<li><a href="/login">Status Order</a></li>
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

        <script src="js/script.js"></script>
</body>
</html>