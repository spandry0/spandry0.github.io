<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="./css/default.css" rel="stylesheet" type="text/css">	
             <title>Stephane Pandry || WEB250 ||Home</title>
</head>
<body>
  
	   <header>
<h1>Stephane Pandry |Antelpe| WEB250 | Home</h1>
    </header>
  <nav>
<ul class="nav-links">

	      <li><a href = "?p=../contents/home.php">Home</a><li> 
         <li><a href = "?p=../contents/introduction.php">Introduction</a><li>
         <li><a href = "?p=../contents/contract.php">Contract</a><li>
         <li><a href = "?p=../contents/brand.php">brand</a><li>
      <ul>
	</nav>
<main>
</header>
<div class="fab">
<p id="center">
	<main>
	<!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "home.php"; }
	include($sPage);
?>
</main></p></div>
		</main>
    <footer> 
        <div class="nav-links">
            <nav>
            <a href="https://github.com/spandry0">GitHub</a>
            <a href="https://github.com/spandry0/spandry0.github.io">GitHub.io</a>
            <a href="https://www.freecodecamp.org/learn/">freeCodeCamp</a>
            <a href="https://www.codecademy.com/profiles/Spandry0">Codecademy</a>
            <a href="https://jsfiddle.net/">JSFiddle</a>
            <a href="https://www.linkedin.com/in/stephane-pandry-3b811a205/">LinkedIn</a>
            </nav>
            <br>
         <div class="designedBy">
         
         </div>
</footer>
<p>&copy; 2024 Home Pyramid. All rights reserved.</p>  

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
