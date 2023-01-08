<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="css/product.css">
    <title>Document</title>


    <title>Rotanesia | Product</title>
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

        <section id="product">
			<div class="container">
				<div class="row text-center mb-3">
					<div class="col">
						<h2>Products</h2>
					</div>
				</div>
				<div class="row justify-content-center">
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
					<div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan9.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan15.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan16.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: Rp. 70.000.00</li>
                                <li class="list-group-item"><p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										413 Reviews
									</p></li>
                                <li class="list-group-item">413 items sold</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn-view">Wishlist &emsp13;<i class="bi bi-bag-heart-fill"></i></button>
								<button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                            </div>
                        </div>
					</div>
            </div>              
		</section>
		<!-- AKHIR PROJECTS -->

        {{-- BG FOOTER --}}
        <footer class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <div class="footer">
                    <h5>About Us</h5>
                    <p>Rotanesia adalah perusahaan e-commerce yang menjual kerajinan yang terbuat dari bahan baku rotan. Kerajinan rotan adalah produk yang terbuat dari rotan sebagai bahan baku utamanya. <a href=""> ...view more</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                    <li>123 Main Street</li>
                    <li>Banduing, Indonesia</li>
                    <li>555-555-5555</li>
                    <li>Rotanesia@gmail.com</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer" style="border: none;">
                        <h5>Social Media</h5>
                        <ul class="list-unstyled">
                        <li><a href="#"><img src="image/icon/Facebook.png" alt="" width="20"> Facebook</a></li>
                        <li><a href="#"><img src="image/icon/twitter.png" alt="" width="20"> Twitter</a></li>
                        <li><a href="#"><img src="image/icon/instagram.png" alt="" width="20"> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        {{-- BG FOOTER --}}

		<script src="js/script.js"></script>
        </body>
</html>