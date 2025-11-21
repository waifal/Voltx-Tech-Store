<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Left: Logo + Search -->
        <div class="d-flex align-items-center">
            <a href="#" class="navbar-brand fs-3 fw-bold me-3">Voltx</a>
            <!-- Search Group -->
            <div class="input-group">
                <input type="search" class="form-control form-control-sm" id="nav-search" placeholder="Search here..." required>
                <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <!-- Right: Nav Links -->
        <ul class="navbar-nav d-flex align-items-center ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-heart-fill"></i> Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-cart-check-fill"></i> My Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-bag-check-fill"></i> Checkout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Login</a>
            </li>
        </ul>
        <!-- Far Right: Cart + Total -->
        <div class="d-flex align-items-center ms-4">
            <button class="btn btn-outline-primary position-relative">
                <i class="bi bi-cart-fill"></i>
                <span id="current-items-in-cart" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
            </button>
            <div class="ms-3">
                <span id="total-price" class="fw-semibold">$0.00</span>
            </div>
        </div>
    </div>
</nav>
<div class="category-bar-wrapper bg-dark py-2">
    <button class="scroll-btn left"><i class="bi bi-chevron-left"></i></button>
    <nav class="category-bar">
        <ul class="navbar-nav flex-row flex-nowrap">
            <li class="nav-item"><a class="nav-link px-3" href="#">Laptops</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Desktops</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">PC Components</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Monitors</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Keyboards & Mice</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Storage</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Graphics Cards</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Processors</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Networking</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Smart Home</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Phones</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Audio</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Gaming</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Cameras</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Wearables</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#">Cables & Chargers</a></li>
        </ul>
    </nav>
    <button class="scroll-btn right"><i class="bi bi-chevron-right"></i></button>
</div>
