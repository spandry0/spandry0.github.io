<!DOCTYPE html>
<html lang="en">
<html lang = "en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="styles/default.css">
      <link rel="stylesheet" href="styles/fizzbuzzbang.css">
            <title>Stephane Pandry's Small penguin | WEB250 | FizzBuzzBang</title>
</head>
<body>
<main>
      <h2>FizzBuzzBang</h2><br>
      <div>
          <main class="introMain">
        <form class="form1" action='' method="POST">
            <label for="name">First name:</label><br>
            <input type="text" id="name" name="name" value="Link" required><br>
            <label for="startNumber">Starting number:</label><br>
            <input type="number" id="startNumber" name="startNumber" value="1" required><br>
            <label for="endNumber">Ending number:</label><br>
            <input type="number" id="endNumber" name="endNumber" value="120" required><br>
            <label for="fizz">Fizz word:</label><br>
            <input type="text" id="fizz" name="fizz" value="fizz" required><br>
            <label for="fizzNumber">Fizz number:</label><br>
            <input type="number" id="fizzNumber" name="fizzNumber" value="3" required><br>
            <label for="buzz">Buzz word:</label><br>
            <input type="text" id="buzz" name="buzz" value="buzz" required><br>
            <label for="buzzNumber">Buzz number:</label><br>
            <input type="number" id="buzzNumber" name="buzzNumber" value="5" required><br>
            <label for="bang">Bang word:</label><br>
            <input type="text" id="bang" name="bang" value="bang" required><br>
            <label for="bangNumber">Bang number:</label><br>
            <input type="number" id="bangNumber" name="bangNumber" value="7" required><br>             
            <input id="submitButton" type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                    $startNumber = $_POST['startNumber'];
                    $endNumber = $_POST['endNumber'];
                    $fizz = $_POST['fizz'];
                    $fizzNumber = $_POST['fizzNumber'];
                    $buzz = $_POST['buzz'];
                    $buzzNumber = $_POST['buzzNumber'];
                    $bang = $_POST['bang'];
                    $bangNumber = $_POST['bangNumber'];
                    $output = "Thank you for your submission $name, here are your results: <br><br>";

                    $resultArray = [];

                    for ($i = $startNumber; $i <= $endNumber; $i++) {
                        $result = '';
                        if ($i % $fizzNumber == 0) {
                            $result .= $fizz;
                        }
                        if ($i % $buzzNumber == 0) {
                            $result .= $buzz;
                        }
                        if ($i % $bangNumber == 0) {
                            $result .= $bang;
                        }

                        if ($result !== '') {
                            $resultArray[] = $result;
                        } else {
                            $resultArray[] = $i;
                        }
                    }

                    $output .= implode(', ', $resultArray);
                    echo "<div class=\"output\">$output</div>";
                }
            }
        ?>
      </div>
    </main>
</body>
</html>
