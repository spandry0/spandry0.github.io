<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="styles/default.css">
    <title>Business Card</title>
    <style>
        .business-card {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .business-card h2 {
            margin-bottom: 10px;
        }
        .business-card p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
$name = "Stephane Pandry";
$title = "Data Consulting";
$email = "spandry0@gmail.com";
$phone = "888-456-7890";
?>

<div class="business-card">
    <h2><?php echo $name; ?></h2>
    <p><?php echo $title; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
</div>

</body>
</html>
	<footer> 
	
</html>
</body>
</html>
