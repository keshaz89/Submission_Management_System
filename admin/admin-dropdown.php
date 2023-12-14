<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Example</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="sem">Choose Semester:</label>
    <select name="sem" id="sem">
        <option value="sem1">III</option>
        <option value="sem2">IV</option>
        <!-- Add more semesters as needed -->
    </select>

    <label for="div">Choose Division:</label>
    <select name="div" id="div">
        <option value="divA">A</option>
        <option value="divB">B</option>
        <!-- Add more divisions as needed -->
    </select>

    <label for="department">Choose Department:</label>
    <select name="department" id="department">
        <option value="dept1">Computer Engineering</option>
        <option value="dept2">Department 2</option>
        <!-- Add more departments as needed -->
    </select>

    <input type="submit" value="Go">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected values
    $selectedSem = $_POST["sem"];
    $selectedDiv = $_POST["div"];
    $selectedDepartment = $_POST["department"];

    // Validate the selected values (you may want to add more validation)
    if (
        in_array($selectedSem, ['sem1', 'sem2']) &&
        in_array($selectedDiv, ['divA', 'divB']) &&
        in_array($selectedDepartment, ['dept1', 'dept2'])
    ) {
        // Handle redirection based on the selected values
        switch ("$selectedSem-$selectedDiv-$selectedDepartment") {
            case "sem1-divB-dept1":
                header("../admin/view-modules.php");
                exit();
            // Add more cases as needed
            default:
                echo "Invalid selection.";
        }
    } else {
        echo "Invalid selection.";
    }
}
?>

</body>
</html>
