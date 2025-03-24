<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiteBazar - Home</title>
    <link rel="stylesheet" href="css/homepage-style.css">
</head>
<body>

<header>
    <h2>BiteBazar</h2>
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="add_restaurant.php">Add Restaurant</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php if (isset($_SESSION['user_name'])): ?>
                <li>👤 <?php echo $_SESSION['user_name']; ?></li>
                <li><a href="php/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Signup</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<!-- Search Bar -->
<div class="search-container">
    <input type="text" id="searchBox" placeholder="Search for restaurants..." onkeyup="searchRestaurants()">
    <div id="searchResults"></div>
</div>

<main>
    <h1>Welcome to BiteBazar</h1>
    <p>Order food online from small-town restaurants!</p>
</main>

<footer>
    <p>&copy; 2025 BiteBazar. All rights reserved.</p>
</footer>

<script src="js/search.js"></script>

</body>
</html>
