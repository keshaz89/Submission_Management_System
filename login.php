<?php
  if(!isset($_SESSION)) {
    session_start();
  }
  include "db_handler.php";  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
    <style>
      /* Added style for red button */
      .login-form button {
        background-color: #800000;
      
      
}.login-page {
    margin-top: 150px; /* Adjust the value to increase/decrease the distance */
color: maroon; 
  }
 
  .login-heading {
      margin-bottom: 10px;
      color: #800000;
      font-weight: bold;
      font-size: 16px;
      text-align: center;
    }

    .form {
      text-align: center; /* Center the form content */
    }

    .form input[type="text"],
    .form input[type="password"],
    .form button {
      display: block;
      margin: 10px auto; /* Center the input and button */
    }
    #navbar .submission-system {
      position: absolute;
      bottom: 5px; /* Adjust the distance from the bottom */
      right: 50px; /* Adjust the distance from the right */
      color: white;
      font-weight: bold;
      font-size: 50px;
      font-family: 'Times New Roman', sans-serif;
      margin-right:2px;
  
    }
  #navbar{vscode-file://vscode-app/c:/Users/USER/Desktop/Microsoft%20VS%20Code/resources/app/out/vs/code/electron-sandbox/workbench/workbench.html
    content: "";
    background-color: maroon;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    z-index: -1;
}
    </style>
  </head>
  <body>



      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="../js/index.js"></script>
    </div>
  </body>
</html>


<div>
<nav id="navbar">
            <div id="logo">
                <img src="somaiya.jpg" alt="somaiya"style="width: 400px; height: 100px;
    margin: 10px 10px;
    border-radius: 10px; float: left;">    
    </div>
    <span class="submission-system" style="font-size:4rem;"> Submission Management System</span> 
  <!-- Added this line -->
    </nav>
  </div>
</nav>
</div>
  <div class="wrapper">
    <section>
      <div class="login-page">
        <div class="form">
        <h2 class="login-heading">Enter your credentials</h2> 
          <form method="POST" class="register-form">
            <input type="text" name="email" placeholder="email address"/>
            <button type="submit">Submit</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form" method="POST">
            <input type="text" name="userid" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit" name="submit">Login</button>
          </form>
        </div>
      </div>
      
    </section>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="../js/index.js"></script>
    </div>
  </body>
</html>


<?php
  if(isset($_POST['submit'])) {


    $username = $_POST['userid'];
    $pass = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql)  or die("Could not connect database " .mysqli_error($conn));


    if (!$row = $result->fetch_assoc()) {
      // ERROR MESSAGE SHOWS AT THE TOP OF THE PAGE
    } else {
      $_SESSION['id'] = $row['username'];


      if($row['rank'] == 'Admin' || $row['rank'] == 'admin' || $row['rank'] == 'Lecturer' || $row['rank'] == 'lecturer' || $row['rank'] == 'Student' || $row['rank'] == 'student') {


        $_SESSION['rank'] = $row['rank'];


        if(isset($_SESSION['rank'])) {
          if($_SESSION['rank'] == 'Admin' || $row['rank'] == 'admin') {
            header("Location: home/adminHome.php");
          }
          else if($_SESSION['rank'] == 'Lecturer' || $row['rank'] == 'lecturer') {
            header("Location: home/lecturerHome.php");
          }
          else if($_SESSION['rank'] == 'Student' || $row['rank'] == 'student') {
            header("Location: home/studentHome.php");
          }
        }
      }
      else {
        echo "Role not found.";
      }
    }
  }
?>
<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['userid'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql)  or die("Could not connect database " .mysqli_error($conn));

    if (!$row = $result->fetch_assoc()) {
      echo "<div id='hidden-box' style='display: none; text-align: center; background-color: #ffffff; border: 1px solid white; padding: 20px;'>
              <h2 style='color: #800000;'>Incorrect Credentials Entered<br> </h2>
              <h4 style='color: #800000;'>Username or Password is incorrect.<br>
              Please try again.</h4>
            </div>";
    }
  }
?>
<script>
  // JavaScript code to display the hidden box
  document.addEventListener('DOMContentLoaded', function() {
    var hiddenBox = document.getElementById('hidden-box');
    if (hiddenBox) {
      hiddenBox.style.display = 'block';
    }
  });
</script>