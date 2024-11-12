<header class="d-flex justify-content-center align-items-center py-3 sticky-top bg-light border-bottom shadow-sm">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?php echo $base_url; ?>/index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/product-list.php" class="nav-link">Product List</a></li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/cart.php" class="nav-link">Cart (<?php echo count($_SESSION['cart'] ?? []); ?>)</a></li>
    </ul>
    <a href="index.php?logout='1'" class="nav-link ms-auto me-3" style="color: red;">Logout</a>
</header>