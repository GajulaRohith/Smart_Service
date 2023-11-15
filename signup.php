<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="sheet1.css">
        <style>
            .button{
                background-color: darkgray;
                font-size: 20px;
                border-radius:10px;
                position:relative;
                left:43%;
            }

            h1{
                color:rgb(15, 4, 40);
                font-style: italic;
                text-align: center;
            }

            body{
                border-radius:20px ;
                border-style: solid;
                border-width: medium;
                border-color: black;
                margin-inline: 200px;
                background-color: rgb(233, 234, 240);
            }
        </style>
    </head>
    <body>

        <img src="SSlogo.jpg" width=50px style="float:left">
        <h2 style="float:left">Smart Service</h2>
        <br>
        <br>
        <br>

        <h1>Welcome to Smart Service </h1>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "8790";
        $db = "wtproject";

        $fname = $lname = $phno = $email = $pwd = "";

        $conn = mysqli_connect($host, $username, $password, $db);

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
            $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
            $phno = isset($_POST['phno']) ? $_POST['phno'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

            $sql = "INSERT INTO account (fname, lname, phno, email, password) VALUES ('$fname', '$lname', '$phno', '$email', '$pwd')";

            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Account Created successfully")</script>';
                header("Location: home.html");
                exit(); // Ensure that the script stops executing after the header is sent
            }
        }
        ?>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h2 align="center">Firstname:<br><input type="text" name="fname" size="30px" required></h2>
            <h2 align="center">Lastname:<br><input type="text" name="lname" size="30px" required ></h2>
            <h2 align="center">Mobile Number:<br><input type="tel" name="phno" size="30px" required></h2>
            <h2 align="center">E-mail:<br><input type="email" name="email" size="30px" required></h2>
            <h2 align="center">Password:<br><input type="password" name="pwd" size="30px" required></h2>

            <input type="submit" class="button" value="create" >
            <input type="reset" class="button" value="cancel">
            <br>
            <h3><a href="forgotPassword.html">Forgot your password?</a></h3>
        </form>

    </body>
</html>
