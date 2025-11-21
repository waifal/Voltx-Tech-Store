<?php
$navbar_items = [
    [
        "name" => "Wishlist",
        "link" => "#"
    ],
    [
        "name" => "My Cart",
        "link" => "#"
    ],
    [
        "name" => "Checkout",
        "link" => "#"
    ],
    [
        "name" => "Login",
        "link" => "#"
    ]
];

$category_items = [
    [
        "name" => "Laptops",
        "link" => "#"
    ],
    [
        "name" => "Desktops",
        "link" => "#"
    ],
    [
        "name" => "PC Components",
        "link" => "#"
    ],
    [
        "name" => "Monitors",
        "link" => "#"
    ],
    [
        "name" => "Keyboards & Mice",
        "link" => "#"
    ],
    [
        "name" => "Storage",
        "link" => "#"
    ],
    [
        "name" => "Graphics Cards",
        "link" => "#"
    ],
    [
        "name" => "Processors",
        "link" => "#"
    ],
    [
        "name" => "Networking",
        "link" => "#"
    ],
    [
        "name" => "Smart Home",
        "link" => "#"
    ],
    [
        "name" => "Phones",
        "link" => "#"
    ],
    [
        "name" => "Audio",
        "link" => "#"
    ],
    [
        "name" => "Gaming",
        "link" => "#"
    ],
    [
        "name" => "Cameras",
        "link" => "#"
    ],
    [
        "name" => "Wearables",
        "link" => "#"
    ],
    [
        "name" => "Cables & Chargers",
        "link" => "#"
    ]
];
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid px-5">
        <!-- Left: Logo -->
        <a class="navbar-brand fs-3 fw-bold me-3" href="#">Voltx</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Search -->
            <div class="d-flex flex-grow-0 flex-lg-grow-1 ms-0 ms-lg-3 my-2 my-lg-0" style="max-width: 300px;">
                <div class="input-group w-100">
                    <input type="search" class="form-control form-control-sm" id="nav-search"
                        placeholder="Search here..." required>
                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <!-- Right: Nav Links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-lg-center">
                <?php foreach ($navbar_items as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- Far Right: Cart + Total -->
            <div class="d-flex align-items-center ms-lg-4 mt-2 mt-lg-0">
                <button class="btn btn-outline-primary position-relative me-2">
                    <i class="bi bi-cart-fill"></i>
                    <span id="current-items-in-cart"
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
                <span id="total-price" class="fw-semibold">$0.00</span>
            </div>
        </div>
    </div>
</nav>
<!-- Category Bar -->
<div class="category-bar-wrapper bg-dark py-2 position-relative px-5">
    <button class="scroll-btn left d-none d-md-flex position-absolute top-50 start-0 translate-middle-y btn btn-dark">
        <i class="bi bi-chevron-left"></i>
    </button>
    <div class="category-bar-inner">
        <ul class="navbar-nav flex-row flex-nowrap">
            <?php foreach ($category_items as $category): ?>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo $category['link']; ?>"><?php echo $category['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <button class="scroll-btn right d-none d-md-flex position-absolute top-50 end-0 translate-middle-y btn btn-dark">
        <i class="bi bi-chevron-right"></i>
    </button>
</div>
