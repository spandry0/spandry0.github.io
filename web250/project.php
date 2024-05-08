<?php
// Start session
session_start();

// Include database connection
include_once('db_connect.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user's children from database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM children WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

// Include header
include_once('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/default.css">
               <title>Stephane Pandry's Small Penguin | WEB250| Brand</title>
  
</head>
<body>
    <header>
        <h1>Stephane Pandry's Small penguin | WEB250|</h1>
        <nav>
            <ul>
                <li><a href="index.php?p=home">Home</a></li>
                <li><a href="index.php?p=brand">Brand</a></li>
               <li><a href="login.php?p=login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Welcome to KidConnect!</h1>
        <p>Explore and register your children for exciting workshops!</p>
        
        <!-- Display user's children -->
        <h2>Your Children:</h2>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <li><?php echo $row['child_name']; ?> - Age: <?php echo $row['age']; ?></li>
            <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No children found. Add a child <a href="add_child.php">here</a>.</p>
        <?php endif; ?>
        
        <a href="workshops.php">Explore Workshops</a>
        <a href="logout.php">Logout</a>
    </div>

    
    <footer>
        <div class="nav-links">
            <nav>
            <a href="https://github.com/spandry0">GitHub </a>
            <a href="https://github.com/spandry0/spandry0.github.io">GitHub.io </a>
            <a href="https://www.freecodecamp.org/learn">freeCodeCamp </a>
            <a href="https://www.codecademy.com/profiles/Spandry0">Codecademy </a>
            <a href="https://jsfiddle.net/">JSFiddle </a>
            <a href="https://www.linkedin.com/in/stephane-pandry-3b811a205/">LinkedIn </a>
            <a href="https://github.com/spandry0/web250.io">Web250.oi </a>
            </nav>
            <br>
        </div>
        <div class="validationButtons">
            <a href="http://validator.w3.org/check?uri=referer" style = "text-decoration: none">
                <img src="images/html_validation_button.gif" alt="Validate HTML" /> 
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer" style = "text-decoration: none">
                <img src="images/validation_button_css_rectangle.gif" alt="Validate CSS" />
            </a> 
        </div>
    </footer>
</body>
</html>

<?php
// Include footer
include_once('footer.php');
?>
