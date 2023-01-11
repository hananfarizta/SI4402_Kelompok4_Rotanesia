@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<script src="js/script.js"></script>

<section id="product">
			<div class="container">
				<div class="row text-center mb-3">
					<div class="col">
						<h2 style="color:#9c9c9c;">Best Seller</h2><h2 style="">From Our Product</h2>
					</div>
				</div>
				<div class="row justify-content-center">
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rattan Toothbrushes</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: $10</li>
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
								<a href="/detail-product"><button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button></a>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rattan Bucket</h5>
                                                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: $30</li>
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
								<a href="/detail-product2"><button class="btn-book">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button></a>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="image/rottan/rottan7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rattan Plate</h5>
                                                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: $20</li>
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
@endsection
