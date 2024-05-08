<?php
session_start();

$is_loggedin = false;

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $is_loggedin = true;
}
?>

<!DOCTYPE html>
<html lang = "en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/default.css">
               <title>Stephane Pandry's Small Penguin | WEB250| Home</title>
  	
</head>
<body>
	
         <header>
               <h1>Stephane Pandry's Small Penguin | WEB250 |</h1>
         
    <nav>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="contract.php">Contract</a></li>
        <li><a href="brand.php">Brand</a></li>
        <li><a href="forms.php">Forms</a></li>
        <li><a href="FizzBuzzBang.php">FizzBuzz</a></li>
	<li><a href="login.php">Login</a></li>
    </ul>
</nav>
</header>
	

<main>
        <?php
        // Include content based on the 'page' parameter in the URL
        $pageFound = true;
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $content_path = 'contents/' . $_GET['page'] . '.php';
            if (file_exists($content_path)) {
                include $content_path;
            } else {
                $pageFound = false;
            }
        } else {
            include 'contents/home.php';
        }
        // Display "Page not found." message if the page is not found
        if (!$pageFound) {
            echo 'Page not found.';
        }
        ?>
    </main><br>

	    
<h2>Home</h2>
<p>
    Welcome to my WEB250 website page! You can find all the necessary information about me in the <a href="introduction.php">Introduction</a>.
</p>

<footer> 
    <div class="nav-links">
        <nav>
            <a href="https://github.com/spandry0">GitHub </a>
            <a href="https://github.com/spandry0/spandry0.github.io">GitHub.io </a>
            <a href="https://github.com/spandry0/web250.io">WEB250.oi </a>
            <a href="https://www.freecodecamp.org/learn">freeCodeCamp </a>
            <a href="https://www.codecademy.com/profiles/Spandry0">Codecademy </a>
            <a href="https://jsfiddle.net/">JSFiddle </a>
            <a href="https://www.linkedin.com/in/stephane-pandry-3b811a205/">LinkedIn </a>
        </nav>
        <br>
         
        </div>
        <div class="validationButtons">
            <a href="http://validator.w3.org/check?uri=referer" style="text-decoration: none">
                <img src="images/html_validation_button.gif" alt="Validate HTML" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer" style="text-decoration: none">
                <img src="images/validation_button_css_rectangle.gif" alt="Validate CSS" />
            </a> 
        </div>
    </div>
</footer>
</body>
</html>
