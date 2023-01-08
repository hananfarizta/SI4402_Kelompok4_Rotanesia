<?php
	$videourl = "https://www.youtube.com/watch?v=DqYZ8wADF2E";
	$convertedurl = str_replace("watch?v=","embed/", $videourl);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Rotanesia</title>
	<link rel="shortcut icon" href="image/favicon.png">

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animations.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">

        {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>
<body id="home">
	<nav>
		<div class="logo font-weight-bold">
			<h3><a href="/home" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
			<!--BG MENU-->
		</div>

					
					<ul>
						<li class="nav-item">
							<a class="nav-link fw-bold active" href="/home"><i class="bi bi-house-door-fill" style="padding: 3px"></i>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-bold" href="/product"><i class="bi bi-basket-fill" style="padding: 3px"></i>Products</a>
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
							<a class="nav-link fw-bold" href="#"><i class="bi bi-person-fill" style="padding: 3px"></i>Account <i class="bi bi-caret-down-fill"></i></a>
							<ul class="dropdown">
								<li><a href="/login">Login</a></li>
								<li><a href="/register">Register</a></li>
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
				<div class="col-md-12">
					<div class="banner">
						<div class="back-blur">
						<div class="text-banner text-center">
							<h1> Quality is the best <br> Business Plan</h1>
							<p class="fs-5">
								"Unique and top quality items for sale at affordable prices. Get yours now!"
							</p>
							<button class="btn-gradient">
								Get Started
							</button>
						</div>
						</div>
					</div>
				</div>

	<div class="wrapper">
			<div class="bg-konten row">
				<div class="center">
					<section id="best-seller">
						<div class="col-lg-12">
							<div class="judul-konten">
								<h4>Best Seller</h4>
								<h2>Most Popular Products</h2>
							</div>
							<!--judul konten-->
						</div>
						<!--/col lg 12-->

						<div class="col-lg-4 col-md-4 animatedParent">
							<div class="konten animated bounceInLeft slowest">
								<img src="home_image/best-seller/home1.jpg">
								<div class="deskripsi">
									<h3>Bag</h3>
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
										|
										413 Reviews
									</p>
									<p class="text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p style="text-align: center;">
										<button class="btn-view">View More</button>
										<button class="btn-book">Book Now</button>
									</p>
								</div>
								<!--/DESKRIPSI-->
							</div>
							<!--/konten-->
						</div>
						<!--/col 4-->

						<div class="col-lg-4 col-md-4 animatedParent">
							<div class="konten animated bounceInDown slowest">
								<img src="home_image/best-seller/home2.jpg">
								<div class="deskripsi">
									<h3>Lamp</h3>
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
										|
										216 Reviews
									</p>
									<p class="text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p style="text-align: center;">
										<button class="btn-view">View More</button>
										<button class="btn-book">Book Now</button>
									</p>
								</div>
								<!--/DESKRIPSI-->
							</div>
							<!--/konten-->
						</div>
						<!--/col 4-->

						<div class="col-lg-4 col-md-4 animatedParent">
							<div class="konten animated bounceInRight slowest">
								<img src="home_image/best-seller/home3.jpg">
								<div class="deskripsi">
									<h3>Table & Chair</h3>
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
										|
										500 Reviews
									</p>
									<p class="text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p style="text-align: center;">
										<button class="btn-view">View More</button>
										<button class="btn-book">Book Now</button>
									</p>
								</div>
								<!--/DESKRIPSI-->
							</div>
							<!--/konten-->
						</div>
						<!--/col 4-->
					</section>
				</div>
				<!--/CENTER-->
			</div>
			<!--/BG KONTEN ROW-->


		<section id="about">
		<div class="bg-konten-2 row">
			<div class="col-lg-5 col-md-12 animatedParent">
				<div class="konten-2 animated bounceInLeft Slow" style="background-color: rgba(0, 0, 0, 0.6)">
					<h2>ABOUT US</h2>
					<h4>What Is Rotanesia?</h4>
					<hr class="divider">
					<p style="font-size: 14px; text-align:justify">E-commerce atau perdagangan elektronik adalah kegiatan berbelanja dan jual beli melalui jaringan internet. Perusahaan yang menjalankan kegiatan e-commerce akan membuat website yang menampilkan produk yang dijual dan memberikan sistem pembayaran online bagi pelanggan.<br>
					Rotanesia adalah perusahaan e-commerce yang menjual kerajinan yang terbuat dari bahan baku rotan. Kerajinan rotan adalah produk yang terbuat dari rotan sebagai bahan baku utamanya. Rotan merupakan salah satu jenis pohon yang tumbuh di hutan tropis dan memiliki sifat yang mudah dibentuk sehingga sering digunakan untuk membuat berbagai jenis kerajinan. Kerajinan rotan biasanya digunakan sebagai hiasan rumah atau objek yang memiliki nilai estetika tinggi. Kerajinan rotan dapat dibuat dalam berbagai bentuk dan ukuran sesuai dengan kebutuhan dan selera pelanggan.
					</p>

					<div align="center">
						<button class="btn-view-2">View More <i class="fa fa-angle-right"></i></button>
					</div>
					<!--/CENTER-->
				</div>
				<!--/ KONTEN 2-->
			</div>
			<!--/COL LG 5-->

			<div class="col-lg-7 col-md-12 animatedParent">
				<div class="bg-slider animated bounceInRight slowest">
					<iframe
                                src="<?php echo $convertedurl; ?>"
                                frameborder="0"
                                width="100%"
                                height="400"
                                style="margin-top: 66px; border: 6px solid#fff; border-radius: 5px;"
								allowfullscreen
                            ></iframe>
				</div>
				<!--/BG SLIDER-->
			</div>
			<!--/COL LG 7-->
		</div>
		<!--/BG KONTEN 2-->
		</section>

		<div class="bg-galery row">
			<div class="center">
				<div class="col-lg-12">
					<div class="judul-konten">
						<h4>Gallery</h4>
						<h2>Photos Our Customers</h2>
					</div>
					<!--judul konten-->
				</div>
				<!--/col lg 12-->
                
                <div class="col-lg-4 col-md-4 animatedParent">
					<div class="konten animated bounceInLeft slowest">
						<img src="image/customer/customer1.jpg">
						<div class="deskripsi">
							<h3>Bag</h3>
							<p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>
							</p>
							<p class="text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<p style="text-align: center;">
								<button class="btn-view">View More</button>
								<button class="btn-book">Book Now</button>
							</p>
						</div>
						<!--/DESKRIPSI-->
					</div>
					<!--/konten-->
				</div>
				<!--/col 4-->

				<div class="col-lg-4 col-md-4 animatedParent">
					<div class="konten animated bounceInDown slowest">
						<img src="image/customer/customer2.jpg">
						<div class="deskripsi">
							<h3>Lamp</h3>
							<p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>

							</p>
							<p class="text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<p style="text-align: center;">
								<button class="btn-view">View More</button>
								<button class="btn-book">Book Now</button>
							</p>
						</div>
						<!--/DESKRIPSI-->
					</div>
					<!--/konten-->
				</div>
				<!--/col 4-->

				<div class="col-lg-4 col-md-4 animatedParent">
					<div class="konten animated bounceInRight slowest">
						<img src="image/customer/customer3.jpg">
						<div class="deskripsi">
							<h3>Table & Chair</h3>
							<p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half"></i>

							</p>
							<p class="text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<p style="text-align: center;">
								<button class="btn-view">View More</button>
								<button class="btn-book">Book Now</button>
							</p>
						</div>
						<!--/DESKRIPSI-->
					</div>
					<!--/konten-->
				</div>
				<!--/col 4-->

                                <!-- markup structure
                article, wrapping container
                    figure, wrapping the image
                    div, wrapping container for a quote and  the name of the testimonial
                -->
                {{-- <article>
                    <figure>
                        <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="https://images.pexels.com/photos/2317904/pexels-photo-2317904.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                    </figure>

                    <div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?
                        </p>
                        <h1>
                            Marvellous Macaw
                        </h1>
                    </div>
                </article> --}}


				
			</div>
			<!--/CENTER-->
		</div>
		<!--/BG GALERY-->

		<div class="bg-news row">
			<div class="center">
				<div class="col-lg-12">
					<div class="judul-konten">
						<h4 style="color: #fff">News</h4>
						<h2 style="color: #fff">News Articles for you</h2>
					</div>
					<!--/JUDUL KONTEN-->
				</div>
				<!--/COL LG 12-->

				<div class="col-lg-4">
					<div class="konten-news">
						<img src="home_image/destination/home4.jpg">
						<h2>News Articles #1</h2>
						<p class="text-news">
							<i class="fa fa-calendar"></i> 04/15/2018
							<i class="fa fa-users"></i> Jhon Doe
							<i class="fa fa-comment"></i>56 Comments
						</p>

						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>

						<button class="btn-news">Read More</button>
					</div>
					<!--/KONTEN NEWS-->
				</div>
				<!--/COL LG 4-->

				<div class="col-lg-4">
					<div class="konten-news">
						<img src="home_image/destination/home5.jpg">
						<h2>News Articles #2</h2>
						<p class="text-news">
							<i class="fa fa-calendar"></i> 04/15/2018
							<i class="fa fa-users"></i> Jhon Doe
							<i class="fa fa-comment"></i>56 Comments
						</p>

						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>

						<button class="btn-news">Read More</button>
					</div>
					<!--/KONTEN NEWS-->
				</div>
				<!--/COL LG 4-->

				<div class="col-lg-4">
					<div class="konten-news">
						<img src="home_image/destination/home8.jpg">
						<h2>News Articles #3</h2>
						<p class="text-news">
							<i class="fa fa-calendar"></i> 04/15/2018
							<i class="fa fa-users"></i> Jhon Doe
							<i class="fa fa-comment"></i>56 Comments
						</p>

						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>

						<button class="btn-news">Read More</button>
					</div>
					<!--/KONTEN NEWS-->
				</div>
				<!--/COL LG 4-->

			</div>
			<!--/CENTER-->
		</div>
		<!--/BG NEWS-->

		<div class="bg-contact row">
			<div class="center">
				<div class="col-lg-12">
					<div class="judul-konten" style="margin-top: -30px">
						<h4>Contect</h4>
						<h2>Get In Touch</h2>
					</div>
					<!--/JUDUL KONTEN-->
				</div>
				<!--/COL LG 12-->

				<div class="col-lg-6">
					<div class="contact">
						<input type="text" name="" placeholder="Enter Your Name...">
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 6-->

				<div class="col-lg-6">
					<div class="contact">
						<input type="text" name="" placeholder="Enter Your Email...">
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 6-->

				<div class="col-lg-6">
					<div class="contact">
						<input type="text" name="" placeholder="Subject...">
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 6-->

				<div class="col-lg-6">
					<div class="contact">
						<input type="text" name="" placeholder="Company...">
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 6-->

				<div class="col-lg-12">
					<div class="contact">
						<textarea placeholder="Enter Your Comment..." rows="10"></textarea>
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 12-->


				<div class="col-lg-12">
					<div class="contact">
						<button class="btn-sumbit">Submit</button>
					</div>
					<!--/CONTACT-->
				</div>
				<!--/COL LG 12-->
			</div>
			<!--/CENTER-->
		</div>
		<!--/BG CONTACT-->

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


	</div>
	<!--/wrapper -->

	<script type="text/javascript">
		function openNav() {
			document.getElementById('mySidenav').style.width = '100%'
		}

		function closeNav() {
			document.getElementById('mySidenav').style.width = '0'
		}
	</script>

	<script src="js/script.js"></script>
    <script src="js/move-card.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/css3-animate-it.js"></script>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>

	<script type="text/javascript">
		$(function () {
			SyntaxHighlighter.all();
		});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

</body>

</html>