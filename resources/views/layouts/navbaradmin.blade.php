<nav>
    <div class="logo font-weight-bold">
        <h3><a href="/admindash" style="color: #c32334; text-decoration:none">ROTANESIA</a></h3>
        <!--BG MENU-->
    </div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="nav-item">
            <a class="nav-link fw-bold" href="/admindash"><i class="bi bi-person-fill" style="padding: 3px"></i>Admin Area</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold active" href="/category"><i class="bi bi-basket-fill" style="padding: 3px"></i>Create Category</a>
        </li>

        <li class="nav-item" onclick="myFunction()">
            <a class="nav-link fw-bold" href="#"><i class="bi bi-arrow-down-circle-fill"></i></a>
            <ul class="dropdown">
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
</nav>
