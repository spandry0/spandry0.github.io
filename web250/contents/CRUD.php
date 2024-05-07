<?php
    require_once('db_connection.php');
    
    if (isset($_POST['login']) && isset($_POST['password']))
    {
        $conn = connectDB();
        $login = $_POST['login'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM login WHERE value_login = '$login' AND value_password = '$pass'";
        $results = $conn->query($sql);
        
        if ($results->num_rows == 1)
        {
            $_SESSION['username'] = $login;
            header('Location: index.php?p=services.php');
            exit();
        }
        else
            $error_message = 'Login/Password incorrect.';
    }    

    function create($table, $fields, $datas)
    {
        $conn = connectDB();
        $sql = "INSERT INTO $table ($fields) VALUES ($datas)";
        $stmt = $conn->prepare($sql);
        try {
            $stmt->execute();
            echo 'Registration successfully Complete. Log in.';
        } catch (\Throwable $th) {
            echo 'An error occurred when trying to register.. Please, try again.';
        }
    }

    function update()
    {
        $conn = connectDB();
    }

    function select($table)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        $row = [];
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
                $rows[] = $row;
        }
        return $rows;
    }

    function delete()
    {
        $conn = connectDB();
    }
?>
