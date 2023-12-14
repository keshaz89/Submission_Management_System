<!DOCTYPE html>
<html>
<?php 
    include "../includes/header.php";
    include "../includes/student-navbar.php";
    include "../db_handler.php"; 
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?= time(); ?> /">
    <link rel="stylesheet" href="css/style1.css?<?= time(); ?> /">
    <link rel="stylesheet" href="css/tile.css?<?= time(); ?> /">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <title>Home</title>
    <style type="text/css">
        a, a:hover, a:active, a:visited { 
            color: white;
        }

        .descriptive-box {
            background-color: white;
            padding: 20px;
            border: 2px solid darkred;
            border-radius: 10px;
            margin-top: 20px;
            margin-left:150px;
            margin-right:150px;
            font-size:2rem;
            text-align:left;
            color: #800000; /* Set font color to dark red */
        }

        .descriptive-format p {
            margin: 10px 0;
            background-color: white;
            color: darkred;
            padding: 10px;
            border-radius: 5px;
        }
            

    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <?php 
                $user = $_SESSION['id'];
                $userDetailsQuery = "SELECT * FROM users WHERE username = '$user'";
                $userDetailsResult = mysqli_query($conn, $userDetailsQuery);

                if ($userDetailsResult && mysqli_num_rows($userDetailsResult) > 0) {
                    $userData = mysqli_fetch_assoc($userDetailsResult);
                    $id = $userData['id'];
                    $name = $userData['name'];
                    $surname = $userData['surname'];
                    $class = $userData['class'];
                    $division = $userData['division'];
                    $roll_Number = $userData['roll_no'];
                    $semester = $userData['semester'];
                    $branch = $userData['branch'];
                    $email = $userData['email'];
            ?>
            <h1>Welcome, <?= $name ?> <?= $surname ?></h1>
            <hr>
            <div class="panel-heading" style="background-color: #800000; color:white;margin-left:150px;
            margin-right:150px;font-size:2rem;">
                <h3 class="panel-title" style="font-size:2.2rem;">Student Details</h3>
            </div>            
            <div class="descriptive-box">
                <p><b>ID: </b><?= $id ?></p>
                <p><b>Name: </b><?= $name ?></p>
                <p><b>Surname:</b> <?= $surname ?></p>
                <p><b>Class: </b><?= $class ?></p>
                <p><b>Division: </b><?= $division ?></p>
                <p><b>Roll Number: </b><?= $roll_Number?></p>
                <p><b>Semester: </b><?= $semester?></p>
                <p><b>Branch:</b> <?= $branch?></p>
                <p><b>Email:</b> <?= $email?></p>
            </div>

            <!-- Add a button below the details -->
            <hr>
        
            <!-- ... (your existing code) ... -->
            <?php
                } else {
                    echo "<p>No data found for the user.</p>";
                }
            ?>
        </div>
    </div>
</body>

</html>