@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="css/detail-product.css">

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
                                    <img src="image/rottan/rottan10.jpg" alt="Product photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="info">
                                <h1>Rattan Plate</h1>
                                <p>A rattan plate is a plate made of rattan which can be used as a plate in general. This rattan plate is environmentally friendly and also does not cause plastic waste. Because it is made of rattan, this plate is durable and also strong.</p>
                                <p>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
										|
										4.7 Reviews
								</p>
                                <div class="price">$20</div>
                                <div class="quantity-selector">
                                    <button class="minus">-</button>
                                    <span class="quantity">1</span>
                                    <button class="plus">+</button>
                                </div>
                                <div class="card-body">
								    <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Now &emsp13;<i class="bi bi-cart-fill"></i></button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment Method</h1>
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
                                                            <div class="modal-footer">
                                                                <button id="close-button" type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <a href="/direct-succes">
                                                                    <button type="button"
                                                                    class="btn btn-danger">Pay</button>
                                                                </a>
                                                            </div>
                                                    </div>



                                                </div>
                                            </div>
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
        <script src="{{asset('js/detail-product3.js')}}"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
