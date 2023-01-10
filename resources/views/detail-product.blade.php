@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="css/detail-product.css">
<script src="js/detail-product.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="row1 text-center">
					<div class="col">
						<h2>Product Details</h2>
						<hr class="divider" />
					</div>
				</div>
				<!--row -->
				<div class="row justify-content-center fs-5 text-center mb-5">
                        <div class="col-md-6 mb-4">
                            <div class="detail-page">
                                <div class="photo">
                                    <img src="image/rottan/rottan4.jpg" alt="Product photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="info">
                                <h1>Rattan toothbrushes</h1>
                                <p>Rattan toothbrushes are considered effective in cleaning teeth and reducing the risk of caries when used properly. However, there are a number of things that need to be considered when using a rattan toothbrush, such as choosing rattan that is still fresh and making sure it is not too rough or too soft. Wicker toothbrushes should also be replaced every few weeks to maintain their effectiveness.</p>
                                <p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										4.7 Reviews
								</p>
                                <div class="price">$10</div>
                                <div class="quantity-selector">
                                    <button class="minus">-</button>
                                    <span class="quantity">1</span>
                                    <button class="plus">+</button>
                                </div>
                                <div class="card-body">
								    <a href="/direct-succes"><button class="btn-buy">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
				</div>
				<!-- ROW2 -->
			</div>
			<!--CONTAINER -->
		</section>
		<!-- AKHIR ABOUT -->

        <hr>
        <!-- Contact -->
		<section id="review">
			<div class="contact">
				<div class="row text-center mb-3">
					<div class="col">
						<h2>Review</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<form>
							<div class="mb-3">
								<label for="name" class="form-label"
									>Fullname</label
								>
								<input
									type="text"
									class="form-control"
									id="name"
									aria-describedby="name" />
							</div>

							<div class="mb-3">
								<label for="email" class="form-label"
									>Email</label
								>
								<input
									type="email"
									class="form-control"
									id="email"
									aria-describedby="email" />
							</div>

							<div class="mb-3">
								<label for="pesan" class="form-label"
									>Feedback</label
								>
								<textarea
									class="form-control"
									id="pesan"
									rows="3"></textarea>
							</div>

							<button type="submit" class="btn btn-primary">
								Submit
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Contact -->

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