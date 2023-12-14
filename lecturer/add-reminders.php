<!DOCTYPE html>
<html>
<head>
    <?php
    include "../includes/header.php";
    include "../includes/admin-navbar.php";
    include "../db_handler.php";
    ?>
    <meta charset="utf-8">
    <title>Set Reminder</title>
    <style>
        /* Styles for the descriptive box and form elements */
        .descriptive-box {
            width: 50%;
            margin: 0 auto; /* Center align */
            border: 3px solid maroon; /* Border color */
            padding: 20px;
            color: maroon; /* Text color */
    border-radius: 15px; /* Curved border */
}

        }
        .descriptive-box {
    /* Existing styles */
    font-size: 18px; /* Increase text size */
}

/* Additional styles for form elements */
form label,
form select,
form input,
form textarea,
form button {
    font-size: 18px; /* Adjust the text size of form elements */
}

            form button {
    margin-top: 20px;
    background-color: maroon; /* Change button background color */
    color: white; /* Change button text color */
    border: none; /* Remove button border if necessary */
    padding: 15px; /* Adjust padding for better appearance */
    cursor: pointer; /* Add pointer cursor on hover */
}

        }
    </style>
</head>
<body>
  <br><br>
    <div class="descriptive-box">
        <h1>Add Reminder</h1>
        <form id="reminderForm">
        <label for="taskType">Type of Task:</label>
    <select id="taskType" onchange="showOptions()" required>
      <option value="" disabled selected>Select Task Type</option>
      <option value="assignment">Assignment</option>
      <option value="exp">Experiment</option>
      <option value="ia">Internal Assessment</option>
      <option value="tut">Tutorial</option>
    </select><br><br>

    <div id="extraOptions"></div><br><br>


            <label for="branch">Branch:</label>
            <select id="taskType" onchange="showOptions()" required>
      <option value="" disabled selected>Select Branch</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="it">IT</option>
                <option value="ai">AI</option>
                <option value="extc">EXTC</option>
            </select><br><br>

            <label for="class">Class:</label>
            <select id="taskType" onchange="showOptions()" required>
      <option value="" disabled selected>Select Class</option>
                <option value="SY">FY</option>
                <option value="ty">SY</option>
                <option value="fy">TY</option>
                <option value="ly">LY</option>
            </select><br><br>

            <label for="division">Division:</label>
            <select id="taskType" onchange="showOptions()" required>
      <option value="" disabled selected>Select Division</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
                <option value="e">E</option>
                <option value="f">F</option>
            </select><br><br>

            <label for="division">Batch:</label>
            <select id="taskType" onchange="showOptions()" required>
      <option value="" disabled selected>Select Batch</option>
                <option value="a">1</option>
                <option value="b">2</option>
                <option value="c">3</option>
                <option value="d">4</option>
            </select><br><br>

            <label for="dueDate">Due Date:</label>
            <input type="date" id="dueDate" required><br><br>

            <button type="button" onclick="sendReminder()">Send Reminder</button>
        </form>
        <script src="script.js"></script>

        <div id="successMessage" style="display: none;" class="descriptive-box">
            <h2>Reminder Sent Successfully!</h2>
            <button onclick="dismissSuccessMessage()">OK</button>
        </div>

        <?php
if(isset($_POST['typ'], $_POST['branch'], $_POST['class'], $_POST['division'], $_POST['duedate'], $_POST['time'])) {
    $localhost= "localhost";
    $username = "username";
    $password = "password";
    $users = "users";

    $conn = new mysqli($localhost, $username, $password, $users);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $division = mysqli_real_escape_string($conn, $_POST['division']);
    $duedate = mysqli_real_escape_string($conn, $_POST['duedate']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $duedateTime = date("Y-m-d H:i:s", strtotime("$duedate $time"));

    $fetchStudentsQuery = "SELECT * FROM users WHERE class = '$class' AND division = '$division' AND branch = '$branch'";
    $fetchStudentsResult = mysqli_query($conn, $fetchStudentsQuery);

    if ($fetchStudentsResult) {
        while ($row = mysqli_fetch_assoc($fetchStudentsResult)) {
            $userId = $row['id'];

            $taskQuery = "INSERT INTO tasks (user_id, type_of_task, due_date) VALUES ('$userId', '$type', '$dueDateTime')";
            $taskResult = mysqli_query($conn, $taskQuery);

            if (!$taskResult) {
                echo "Error inserting task details for user ID: " . $userId . "<br>" . $conn->error;
            }
        }
        echo "Tasks added successfully";
    } else {
        echo "Error fetching students: " . $conn->error;
    }

    $conn->close();
}
?>


        <script>
          function showOptions() {
  const taskType = document.getElementById("taskType").value;
  const extraOptions = document.getElementById("extraOptions");

  // Clear previous options
  extraOptions.innerHTML = "";

  if (taskType === "assignment") {
    const assignmentOptions = document.createElement("div");
    assignmentOptions.innerHTML = `
      <label for="numAssignments">Select Number of Assignments:</label>
      <select id="numAssignments" required>
        <option value="" disabled selected>Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
    `;
    extraOptions.appendChild(assignmentOptions);
  } else if (taskType === "exp") {
    const expOptions = document.createElement("div");
    expOptions.innerHTML = `
      <label for="numExperiments">Select Number of Experiments:</label>
      <select id="numExperiments" required>
        <option value="" disabled selected>Select</option>
      </select>
    `;
    for (let i = 1; i <= 12; i++) {
      const option = document.createElement("option");
      option.value = i;
      option.textContent = i;
      expOptions.querySelector("#numExperiments").appendChild(option);
    }
    extraOptions.appendChild(expOptions);
    function submitTask() {
    const type = document.getElementById('type').value;
    const branch = document.getElementById('branch').value;
    const classSelected = document.getElementById('class').value;
    const division = document.getElementById('division').value;
    const dueDate = document.getElementById('dueDate').value;
    const time = document.getElementById('time').value;

    const formData = new FormData();
    formData.append('type', type);
    formData.append('branch', branch);
    formData.append('class', classSelected);
    formData.append('division', division);
    formData.append('dueDate', dueDate);
    formData.append('time', time);

    fetch('insert_task.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {
        console.log(data); // Confirmation message from PHP
        // You can perform additional actions based on the response
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
}

  }
}
    </script>
    </html>