<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Introduction Form</title>
</head>
<body>

<h2>User Introduction Form</h2>

<form method="post" action="process_introduction.php">
    <label for="fullname">Full Name:</label><br>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br><br>

    <label for="gender">Gender:</label><br>
    <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="bio">Bio:</label><br>
    <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $bio = $_POST["bio"];

    // You can process the data here, such as saving to a database or sending via email

    // For demonstration purposes, let's just display the submitted data
    echo "<h2>Introduction Submitted Successfully</h2>";
    echo "<p>Full Name: $fullname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Bio: $bio</p>";
}
?>
