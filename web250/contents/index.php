
<!DOCTYPE html>
<html lang = "en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/default.css">
               <title>Stephane Pandry's Small Penguin | WEB250| Contract</title>
  	
</head>
<body>
	<?php include 'components/header.html'; ?>
         <header>
               <h1>Stephane Pandry's Small Penguin | WEB250 |</h1>
         </header>
    <nav>
           <ul class="nav-links">
		<li><a href = "index.html">Home</a></li> 
		<li><a href = "?p=home">PHP Home</a></li>
       		<li><a href = "?p=introduction">Introduction</a></li>
        	<li><a href = "?p=contract">Contract</a></li>
        	<li><a href = "?p=brand">Brand</a></li>
		<li><a href = "?p=fizzbuzzbang">FizzBuzzBang</a></li> 
		<li><a href = "?p=login">Login</a></li>
		<li><a href = "?p=forms">Forms</a></li>
            </ul>
    </nav>
	<p id="center">

	<!-- dynamic content goes here -->

<?php
if($_GET) 
{
	//echo("<h1>it found it<h1>");
	$sPage = $_GET["p"];
}
else  
{
	//echo("<h1>it failed it<h1>");
    $sPage = "home";
}


	//echo ("<h1>You picked the page: " . $sPage . "<h1>"); 
	
	$sPage = "contents/" . $sPage . ".php";
	include($sPage);
?>

</main></p></div>
    <main>
	    <h2>Home</h2>
        <p>
            Welcome to my WEB250 website page! <br>You can find all the necessary information about me in the <a href=introduction.html>Introduction</a>. </P>

    </main>
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
         <div class="designedBy">
         
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
<?php include 'components/footer.html'; ?>
    <script src="scripts/HTMLInclude.js"></script>
</body>
</html>
