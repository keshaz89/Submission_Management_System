<!-- FIX LOGOUT - SESSION DOESNT STOP RUNNING -->
<div class="con">
<?php session_start(); ?>
<nav id="navbar">
            
    <ul>
      <li><div id="logo">
      <img src="somaiya.jpg" alt="somaiya" name="somaiya" style="width: 450px; height: 100px;
    margin: 10px 10px;
    border-radius: 10px; float: left;"></li>
        <li class="item"><a href="../home/studentHome.php">Home</a></li>
        <li>
        <?php
        if(isset($_SESSION['id'])) {
          echo '<li><a href="#">Welcome, '. $_SESSION["id"] . '</a></li>';
          echo '<li><a href="../logout.php">Logout</a></li>';
        } else {
            echo '<li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
        }
        ?></li></ul>
        <div class="toggle-menu">
    <button id="toggle-button">&#9776;</button>
    <div id="menu">
        
        <br><a href="../home/student2.php">View Subjects</a>
        <br><a href="../home/tt.php">View Timetable</a>
        <br><a href="../view-marks-student.php">View Marks</a>

     
    </div>
    </div>
  </div>
</nav>
<div>
<script>
document.getElementById('toggle-button').addEventListener('click', function() {
  var menu = document.getElementById('menu');
  menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'block' : 'none';
});
</script>
<style type="text/css">
#navbar ul{
    display:flex;
    align-items:right;
    font-family: 'Times New Roman';
}
#navbar ul li{
    list-style-type: none;
    font-size: 1.85rem;
    text-align: right;
    margin-top:10px;
    margin-bottom:10px;

}
#navbar ul li a{
  background-color:maroon;
    color: white;
    display: block;
    padding: 3px 22px;
    border-radius: 17px;
    text-decoration: none;
    font-size:2.5rem;
    align-items:right;
}
#navbar ul li a:hover{
    color: black;
    background-color: white;
}
.con{
  background-color:maroon;
}

    .navbar-inverse .navbar-nav>li>a {
        color: #9d9d9d;
        border: none!important;
        font-size: 12px;
        text-transform: uppercase;
        color: #ececec;
        font-family: "Raleway","Helvetica Neue","Helvetica","Roboto","Arial",sans-serif;
        font-feature-settings: "lnum";
        font-variant-numeric: lining-nums;
    }

    div {
        display: block;
    }

    .navbar-inverse {
        background-color: #363636;
        border-color: #080808;
        height: 75px;
    }

    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 10px;
    }

    #container1 {
      margin-top: -65px;
      margin-bottom: 50px;
      margin-left: 255px
    }

    .nav ul {
        list-style: none;
        background-color: black;
        text-align: center;
        padding: 0;
        margin: auto;
        z-index: 1000;
        align-items: center;
    }

    ul, menu, dir {
        display: block;
        list-style-type: disc;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 40px;
    }

    .nav ul {
      list-style: none;
      background-color: #99CCCC;
      text-align: center;
      padding: 0;
      margin: auto;
      z-index: 1000;
      background-color: #363636;
      }

    .nav li {
      font-family: 'Gabriola', sans-serif;
      font-size: 1.2em;
      line-height: 40px;
      text-align: left;
      background-color: #363636;
      }

    .nav a {
      text-decoration: none;
      color: #FFFFFF;
      display: block;
      padding-left: 15px;
      border-bottom: 1px solid #888;
      transition: .3s background-color;
      }

    .nav a:hover {
      background-color: #005f5f;
    }

    .nav a:active {
      background-color: #aaa;
      color: #444;
      cursor: default;
    }    

    .toggle-menu {
    position: fixed;
    top: 50px;
    right: 25px;
    cursor: pointer;
    size:20px;
}

.menu-icon {
    font-size: 24px;
    color: white;

}

#menu-options {
    display: none;
    position: absolute;
    top: 30px;
    right: 15px;
    height:400px;
    width:200px;
    background-color: white;
    border: solid white;
    border-radius: 5px;
    padding: 40px;
    font-size: 16px;
    
}

.menu-options a {
    display: flex;
    color: white;
    text-decoration: justify;
    padding: 50px;
    width:150px;
}

.menu-options a:hover {
    background-color: white;
    color: maroon;
}


body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.toggle-menu {
  position: fixed;
  top: 0;
  right: 0;
  padding: 15px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

#menu {
  display: none;
  background-color: white; /* Set background color for the menu container */
  padding: 10px; /* Add padding for better appearance */
  border-radius: 5px; /* Add border-radius for rounded corners */
  font-size:2rem;
  width:200px;
  height:400px;
}

#menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#menu li {
  margin-bottom: 10px;
}

#menu a {
  text-decoration: none;
  color: maroon;
  transition: all 0.3s;
  display: block; /* Ensure each option takes full width */
}

#menu a:hover {
  text-decoration: underline;
  font-weight: bold;
}

#toggle-button {
  background-color: maroon;
  border: none;
  font-size: 38px;
  color: white;
  cursor: pointer;
}

#toggle-button:focus {
  outline: none;
}

.content {
  margin-top: 60px;
}




    div {
        display: block;
    }

    .navbar-inverse {
      
        background-color: #363636;
        border-color: #080808;
        height: 75px;
    }

    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 10px;
    }

    #container1 {
      margin-top: -65px;
      margin-bottom: 50px;
      margin-left: 255px
    }

    .nav ul {
        list-style: none;
        background-color: black;
        text-align: center;
        padding: 0;
        margin-top:20px;
        z-index: 1000;
        align-items: center;
    }

    ul, menu, dir {
        display: block;
        list-style-type: disc;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 40px;
    }   
#navbar ul{
    display:flex;
    align-items:right;
    font-family: 'Times New Roman';
}
#navbar ul li{
    list-style-type: none;
    font-size: 1.85rem;
    text-align: right;
    margin-top:10px;
    margin-bottom:10px;

}
#navbar ul li a{
  background-color:maroon;
    color: white;
    display: block;
    padding: 3px 22px;
    border-radius: 17px;
    text-decoration: none;
    font-size:3.5rem;
    align-items:right;
    margin-top:30px;
}
#navbar ul li a:hover{
    color: black;
    background-color: white;
}
.con{
  background-color:maroon;
  align-items:right;
}
</style>