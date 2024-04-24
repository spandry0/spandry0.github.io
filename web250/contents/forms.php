
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/default.css">
        <title>Stephane Pandry | WEB250 | Forms</title>
</head>
<body>
       <main>
           <main class="introMain">
              <h2>Forms</h2>
      
<div class="container">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890"><br>
        
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br>
        
        <label for="register">Registration Number:</label><br>
        <input type="text" id="register" name="register" maxlength="10"><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="18" max="100" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" minlength="8" required><br>
        
        <label for="secret">Secret Key (hidden):</label><br>
        <input type="hidden" id="secret" name="secret" value="mySecretKey123"><br>
        
        <label for="terms">Agree to terms:</label>
        <input type="checkbox" id="terms" name="terms" required><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Form Results:</h2>";
        echo "Name: " . $_POST['name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Phone: " . $_POST['phone'] . "<br>";
        echo "Date of Birth: " . $_POST['dob'] . "<br>";
        echo "Registration Number: " . $_POST['register'] . "<br>";
        echo "Age: " . $_POST['age'] . "<br>";
        // Not displaying the password or secret key for security reasons
        if (isset($_POST['terms'])) {
            echo "Agreed to terms: Yes<br>";
        } else {
            echo "Agreed to terms: No<br>";
        }
    }
    ?>
            </ul>
        </div>
        </main>
        <div class="nav-links"> 
         <div class="designedBy">
         
         </div>
         <div class="validationButtons">
         </div>
        </main>
</body>
</html>
