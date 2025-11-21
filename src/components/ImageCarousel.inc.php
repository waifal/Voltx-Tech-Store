<?php
$slides = [
    [
        "image" => "src/assets/images/front-cover/msi-product-promo.jpg",
        "title" => "MSI Gaming Gear",
        "description" => "From powerful gaming laptops to high-performance components, MSI has you covered."
    ],
    [
        "image" => "src/assets/images/front-cover/nzxt-product-promo.png",
        "title" => "NZXT Gaming Collection",
        "description" => "Sleek PCs, cases, and accessories designed for gamers who demand style and performance."
    ],
    [
        "image" => "src/assets/images/front-cover/aorus-prodcut-promo.jpg",
        "title" => "AORUS Gaming Setup",
        "description" => "Premium laptops, graphics cards, and peripherals engineered for elite gamers."
    ],
    [
        "image" => "src/assets/images/front-cover/gigabyte-aorus.jpg",
        "title" => "Gigabyte Gaming Gear",
        "description" => "High-end gaming laptops, components, and accessories built for ultimate performance."
    ]
];
?>

<div class="frontcover-carousel w-100 position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
            <?php foreach ($slides as $index => $slide): ?>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $index ?>"
                    class="<?= $index === 0 ? 'active' : '' ?>"
                    aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                    aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        </div> -->
        <div class="carousel-inner rounded-3 shadow-lg">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div style="height: 522px; overflow: hidden;">
                        <img src="<?= $slide['image'] ?>" alt="<?= htmlspecialchars($slide['title']) ?>"
                            class="d-block w-100" style="height: 100%; object-fit: cover">
                    </div>
                    <!-- <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                        <h5><?= htmlspecialchars($slide['title']) ?></h5>
                        <p><?= htmlspecialchars($slide['description']) ?></p>
                    </div> -->
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="carousel-shop-btn text-center position-absolute w-100">
        <a href="#" class="btn shop-now-btn">Shop Now</a>
    </div>
</div>