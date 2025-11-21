<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voltx - Your Favorite Tech Store</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="src/assets/css/main.css">
</head>

<body>
    <noscript>Please ensure JavaScript is enabled to view this webpage!</noscript>
    <div id="app">
        <?php include_once 'src/components/Navbar.inc.php' ?>
        <section class="p-5">
            <aside>
                <?php include_once 'src/components/CategoriesBar.inc.php' ?>
            </aside>
        </section>
    </div>
    <!-- JavaScript -->
    <script src="src/assets/js/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>