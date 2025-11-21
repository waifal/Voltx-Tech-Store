<?php
$categories = [
    [
        "name" => "Computers", 
        "icon" => "bi-laptop", 
        "link" => "#"
    ],
    [
        "name" => "Components", 
        "icon" => "bi-cpu", 
        "link" => "#"
    ],
    [
        "name" => "Peripherals", 
        "icon" => "bi-keyboard", 
        "link" => "#"
    ],
    [
        "name" => "Networking", 
        "icon" => "bi-wifi", 
        "link" => "#"
    ],
    [
        "name" => "Phones & Wearables", 
        "icon" => "bi-phone", 
        "link" => "#"
    ],
    [
        "name" => "Gaming", 
        "icon" => "bi-controller", 
        "link" => "#"
    ],
    [
        "name" => "Audio & Visual", 
        "icon" => "bi-speaker", 
        "link" => "#"
    ],
    [
        "name" => "Smart Home", 
        "icon" => "bi-house", 
        "link" => "#"
    ]
];
?>

<!-- Category Sidebar -->
<div class="card bg-dark text-white shadow-sm mb-3 sticky-top" style="top: 100px; max-width: 220px;">
    <div class="card-body">
        <h5 class="card-title mb-4">Categories</h5>
        <ul class="nav nav-pills flex-column gap-2">
            <?php foreach ($categories as $category): ?>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center text-white px-3 py-2 rounded category-link" href="<?= $category['link'] ?>">
                        <i class="bi <?= $category['icon'] ?> me-2 fs-5"></i>
                        <span><?= $category['name'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
