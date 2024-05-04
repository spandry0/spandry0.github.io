
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/default.css">
        <title>Stephane Pandry's Small penguin | WEB250 Forms</title>
</head>
<body>
        <main>
             <h2>Forms</h2>
        <div class="introList">
           <div class="container">
                <!-- Form 1 - POST -->
                <form class="form1" action='' method="POST">
                    <h3>POST Form</h3>
                    <label for="firstName">First name:</label><br>
                    <input type="text" id="firstName" name="firstName" required><br>
                    <label for="lastName">Last name:</label><br>
                    <input type="text" id="lastName" name="lastName" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="birthday">Birthday:</label><br>
                    <input type="date" id="birthday" name="birthday" ><br>
                    <input id="submitButton" type="submit" value="Submit POST Form">
                </form>
                <hr/>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['firstName'])) {
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $email = $_POST['email'];
                        $birthday = $_POST['birthday'];
                        echo "<h3>POST Form Results:</h3>";
                        echo "First Name: $firstName <br>";
                        echo "Last Name: $lastName <br>";
                        echo "Email: $email <br>";
                        echo "Birthday: $birthday <br>";
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

                <!-- Form 2 - GET -->
                <form class="form2" action='' method="GET">
                    <h3>GET Form</h3>
                    <label for="firstName2">First name:</label><br>
                    <input type="text" id="firstName2" name="firstName2" required><br>
                    <label for="lastName2">Last name:</label><br>
                    <input type="text" id="lastName2" name="lastName2" required><br>
                    <label for="email2">Email:</label><br>
                    <input type="email" id="email2" name="email2" required><br>
                    <label for="birthday2">Birthday:</label><br>
                    <input type="date" id="birthday2" name="birthday2"><br>
                    <input type='hidden' name='p' id='p' value='forms'/>
                    <input id="submitButton" type="submit" value="Submit GET Form">
                </form>
                <hr/>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if (isset($_GET['firstName2'])) {
                        $firstName = $_GET['firstName2'];
                        $lastName = $_GET['lastName2'];
                        $email = $_GET['email2'];
                        $birthday = $_GET['birthday2'];
                        echo "<h3>Submission Successful!</h3>";
                        echo "Thank you for visiting our site $firstName!<br>";
                        echo "Check your inbox for more information at $email <br>";
                       }
                }
                ?>

                <!-- Form 3 - POST -->
                <form class="form3" action='' method="POST" enctype="multipart/form-data">
                    <h3>Everything Form</h3>
                    <label for="firstName3">First name:</label><br>
                    <input type="text" id="firstName3" name="firstName3" required><br>
                    <label for="lastName3">Last name:</label><br>
                    <input type="text" id="lastName3" name="lastName3" required><br>
                    <label for="email3">Email:</label><br>
                    <input type="email3" id="email" name="email3" required><br>
                    <label for="phoneNumber">Phone Number:</label><br>
                    <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="###-###-####" required><br>
                    <label for="birthday3">Birthday:</label><br>
                    <input type="date" id="birthday3" name="birthday3"><br>
                    <label>Gender:</label><br>
                    <input style="margin-right: 1vh; margin-top: 1vh;" type="radio" id="male" name="gender" value="male">Male</input><br>
                    <input style="margin-right: 1vh; margin-bottom: 1vh;" type="radio" id="female" name="gender" value="female">Female</input><br>
                  <input id="submitButton" type="submit" value="Submit Everything Form">
                </form>
                  
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['firstName3'])) {
                        $firstName = $_POST['firstName3'];
                        $lastName = $_POST['lastName3'];
                        $email = $_POST['email3'];
                        $phoneNumber = $_POST['phoneNumber']; // Added phone number field
                        $birthday = $_POST['birthday3'];
                        $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; // Handling gender input
                        
                        }

                        if ($gender === 'male') {
                        $genderOutput = 'Male';
                        } elseif ($gender === 'female') {
                            $genderOutput = 'Female';
                        } else {
                            $genderOutput = '';
                        }
                      
                        $file = isset($_FILES['file']) ? $_FILES['file'] : null;
                        $fileName = ($file && $file['error'] === UPLOAD_ERR_OK) ? $file['name'] : 'None';
                        $languagesOutput = !empty($languages) ? implode(", ", $languages) : "None";
                        echo "<hr style=\"margin-bottom: 2.5vh;\"/>";
                        echo "<h2 class=\"everythingH2\">Everything Form Results:</h2>";
                        echo "First Name: $firstName <br>";
                        echo "Last Name: $lastName <br>";
                        echo "Email: $email <br>";
                        echo "Phone Number: $phoneNumber <br>"; 
                        echo "Birthday: $birthday <br>";
                        echo "Gender: $genderOutput <br>";
                        echo "File: $fileName <br>"; 
                    }
                }

                ?>
            </div>
        </main>
    </body>
</html>
