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
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/style1.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
		<title>Home</title>
	</head>
	<body>
		<div class="container">
			<div class="wrapper">
		<hr>
			
            <div class="panel panel-primary filterable" style="border-color: #800000;">
            <div class="panel-heading" style="background-color: #800000;">
                <h3 class="panel-title" style="font-size:2.7rem;">Theory Subjects: Sem III</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Subject Incharge</th>
                       
                    </tr>
                </thead>
                <tbody>
                	<?php 
                    	$user = $_SESSION['id']; 				
						$sql = "SELECT level FROM users WHERE username = '$user'"; 

						$res = mysqli_query($conn, $sql); // SAVES 'sql' QUERY RESULT
						$test = mysqli_fetch_array($res); // FETCHES THE DATA FROM THAT RESULT

						$level = $test['level']; // SAVES THE ARRAY AS A STRING
						$query = "SELECT * FROM module WHERE level = '$level'"; // SEARCHES THE 'module' TABLE BASED ON THE 'level' IN 'users' TABLE

						$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

						$output = '';				
				        while($row = mysqli_fetch_array($result)) {                               
	                    	$output .= '
	                    	<tr>
	                        	<td>'.$row["Subject_Code"].'</td>
	                            <td>'.$row["Subject_Name"].'</td>
								<td>'.$row["Subject_Incharge"].'</td>';								

	                            $lid = $row["Subject_Incharge"];

	                            $asql2 = "SELECT name, surname FROM users WHERE id = '$lid'";
								$res1 = mysqli_query($conn, $asql2) or die(mysqli_error($conn));

	                            while($arow = mysqli_fetch_array($res1)) {
			                    	$output .= '
			                            <td>'.$arow["name"].' '.$arow["surname"].'</td>
			                          ';
			                    }

	                                        


	                    }
	                    echo $output;
                    ?>
                    </tbody>
                </table>
            </div>
            <hr>
			
            <div class="panel panel-primary filterable" style="border-color: #800000;">
            <div class="panel-heading" style="background-color: #800000;">
			<h3 class="panel-title" style="font-size:2.7rem;">Practical Subjects: Sem III</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Subject Incharge</th>
                       
                    </tr>
                </thead>
                <tbody>
                	<?php 
                    	$user = $_SESSION['id']; 				
						$sql = "SELECT level FROM users WHERE username = '$user'"; 

						$res = mysqli_query($conn, $sql); // SAVES 'sql' QUERY RESULT
						$test = mysqli_fetch_array($res); // FETCHES THE DATA FROM THAT RESULT

						$level = $test['level']; // SAVES THE ARRAY AS A STRING
						$query = "SELECT * FROM practicals WHERE level = '$level'"; // SEARCHES THE 'module' TABLE BASED ON THE 'level' IN 'users' TABLE

						$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

						$output = '';				
				        while($row = mysqli_fetch_array($result)) {                               
	                    	$output .= '
	                    	<tr>
	                        	<td>'.$row["Subject_Code"].'</td>
	                            <td>'.$row["Subject_Name"].'</td>
								<td>'.$row["Subject_Incharge"].'</td>';								

	                            $lid = $row["Subject_Incharge"];

	                            $asql2 = "SELECT name, surname FROM users WHERE id = '$lid'";
								$res1 = mysqli_query($conn, $asql2) or die(mysqli_error($conn));

	                            while($arow = mysqli_fetch_array($res1)) {
			                    	$output .= '
			                            <td>'.$arow["name"].' '.$arow["surname"].'</td>
			                          ';
			                    }

	                                        


	                    }
	                    echo $output;
                    ?>
                    </tbody>
                </table>
            </div>
                </table>
            </div>
		</div>
	</body>
	</div>
</html>

<style type="text/css">
	a, a:hover, a:active, a:visited { 
		color: white;
	}
</style>