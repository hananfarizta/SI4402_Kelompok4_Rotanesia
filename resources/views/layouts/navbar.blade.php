<nav>
		<div class="logo font-weight-bold">
			<h3><a href="/home" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
			<!--BG MENU-->
		</div>
        @if (session('user'))
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
							<a class="nav-link fw-bold" href="/about-us"><i class="bi bi-building-fill" style="padding: 3px"></i>About Us</a>
                        </li>
						<li class="nav-item" onclick="myFunction()">
							<a class="nav-link fw-bold" href="#"><i class="bi bi-person-fill" style="padding: 3px"></i><i class="bi bi-caret-down-fill"></i></a>
							<ul class="dropdown">
								<li><a href="/profileview">Profile</a></li>
								<li><a href="/status-order">Order</a></li>
                        <li>
														<form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="outline: none; text-decoration: none; color: #c32334; margin-left: -13px; margin-top: -8px; font-weight: 700;" class="btn bg-transparent">Logout</button>
                            </form>
                        </li>
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

        @else
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
							<a class="nav-link fw-bold" href="/about-us"><i class="bi bi-building-fill" style="padding: 3px"></i>About Us</a>
						</li>
						<li class="nav-item" onclick="myFunction()">
							<a class="nav-link fw-bold" href="#"><i class="bi bi-person-fill" style="padding: 3px"></i><i class="bi bi-caret-down-fill"></i></a>
							<ul class="dropdown">
								<li><a href="/login">Login</a></li>
                        <li>
							<a href="/register">Register</a>
                        </li>
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
        @endauth
</nav>
