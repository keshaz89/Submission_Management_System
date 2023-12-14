<!DOCTYPE html>
<html lang="en">
<?php 
		include "../includes/header.php";
		include "../includes/lecturer-navbar.php";
        include "../db_handler.php";
	?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marks</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php

// Function to convert a CSV file to a 2D array
function csvToArray($file)
{
    $rows = array_map('str_getcsv', file($file));
    $header = array_shift($rows);
    $csv = array();
    foreach ($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
    return $csv;
}


if ($_SESSION['id'] == 'Shreya') {
// Specify the path to your CSV file
$csvFile = 'C:/xampp/htdocs/assessment/assessment/spreadsheets/ds.csv';

// Check if the file exists
if (file_exists($csvFile)) {
    // Read the CSV file into an array
    $csvData = csvToArray($csvFile);

    // Check if there is data in the CSV file
    if (!empty($csvData)) {
        // Display the data in a table
        echo '<table>';
        echo '<tr>';
        // Output the table header
        foreach ($csvData[0] as $key => $value) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';

        // Output the table rows
        foreach ($csvData as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'The CSV file is empty.';
    }
} else {
    echo 'The CSV file does not exist.';
}
}


elseif ($_SESSION['id'] == 'Minal') {
    $csvFile = 'C:/xampp/htdocs/assessment/assessment/spreadsheets/ds.csv';


// Check if the file exists
if (file_exists($csvFile)) {
    // Read the CSV file into an array
    $csvData = csvToArray($csvFile);

    // Check if there is data in the CSV file
    if (!empty($csvData)) {
        // Display the data in a table
        echo '<table>';
        echo '<tr>';
        // Output the table header
        foreach ($csvData[0] as $key => $value) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';

        // Output the table rows
        foreach ($csvData as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'The CSV file is empty.';
    }
} else {
    echo 'The CSV file does not exist.';
}
}



elseif ($_SESSION['id'] == 'Vandana') {
    $csvFile = 'C:/xampp/htdocs/assessment/assessment/spreadsheets/ds.csv';


// Check if the file exists
if (file_exists($csvFile)) {
    // Read the CSV file into an array
    $csvData = csvToArray($csvFile);

    // Check if there is data in the CSV file
    if (!empty($csvData)) {
        // Display the data in a table
        echo '<table>';
        echo '<tr>';
        // Output the table header
        foreach ($csvData[0] as $key => $value) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';

        // Output the table rows
        foreach ($csvData as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'The CSV file is empty.';
    }
} else {
    echo 'The CSV file does not exist.';
}
}


elseif ($_SESSION['id'] == 'Pashmi') {
    $csvFile = 'C:/xampp/htdocs/assessment/assessment/spreadsheets/ds.csv';


// Check if the file exists
if (file_exists($csvFile)) {
    // Read the CSV file into an array
    $csvData = csvToArray($csvFile);

    // Check if there is data in the CSV file
    if (!empty($csvData)) {
        // Display the data in a table
        echo '<table>';
        echo '<tr>';
        // Output the table header
        foreach ($csvData[0] as $key => $value) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';

        // Output the table rows
        foreach ($csvData as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'The CSV file is empty.';
    }
} else {
    echo 'The CSV file does not exist.';
}
}


elseif ($_SESSION['id'] == 'Aarti') {
    $csvFile = 'C:/xampp/htdocs/assessment/assessment/spreadsheets/ds.csv';


// Check if the file exists
if (file_exists($csvFile)) {
    // Read the CSV file into an array
    $csvData = csvToArray($csvFile);

    // Check if there is data in the CSV file
    if (!empty($csvData)) {
        // Display the data in a table
        echo '<table>';
        echo '<tr>';
        // Output the table header
        foreach ($csvData[0] as $key => $value) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';

        // Output the table rows
        foreach ($csvData as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'The CSV file is empty.';
    }
} else {
    echo 'The CSV file does not exist.';
}
}

?>

</body>
</html>