<!DOCTYPE html>
<html>	
	<?php 
		include "../includes/lecturer-navbar.php";
		include "../db_handler.php"; 
	?>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
 <link rel="stylesheet" href="css/style1.css?<?php echo time(); ?> /">
<link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
		<title>Home</title>
	</head>
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
		.dropbtn {
  background-color: #800000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: grey;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
    </style>
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
                    $branch = $userData['branch'];
                    $email = $userData['email'];
            ?>
 <h1>Welcome, <?= $name ?> <?= $surname ?></h1>
            <hr>
            <div class="panel-heading" style="background-color: #800000; color:white;margin-left:150px;
            margin-right:150px;font-size:2rem;">
                <h3 class="panel-title" style="font-size:2.2rem;">Faculty Details</h3>
            </div>   
<div class="descriptive-box">
                <p><b>ID: </b><?= $id ?></p>
                <p><b>Name: </b><?= $name ?></p>
                <p><b>Surname:</b> <?= $surname ?></p>
                <p><b>Lab No.: </b><?= $class ?></p>
                <p><b>Department: </b><?= $branch ?></p>
                <p><b>Email Id:</b> <?= $email ?></p>
            </div>
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