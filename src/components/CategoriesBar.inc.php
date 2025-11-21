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
<div class="card bg-dark text-white shadow-sm mb-3" style="max-width: 100%; width: 220px;">
    <div class="card-body">
        <h5 class="card-title mb-3">Categories</h5>
        <ul class="nav nav-pills flex-column gap-1">
            <?php foreach ($categories as $category): ?>
                <li class="nav-item">
                    <a class="nav-link text-white d-flex align-items-center category-link" href="<?php echo $category['link']; ?>">
                        <i class="bi <?php echo $category['icon']; ?> me-2"></i> <?php echo $category['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
