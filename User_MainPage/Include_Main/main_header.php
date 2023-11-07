<?php
// Include the database connection
include "../includes/db.php";

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Query to fetch user data based on user ID
    $query = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    }

    // Fetch user data into $row
    $row = mysqli_fetch_assoc($result);

    // Assign user data to variables
    $db_id = $row['id'];
    $db_employee_id = $row['employee_id'];
    $db_first_name = $row['first_name'];
    $db_last_name = $row['last_name'];
    $db_email = $row['email'];
}
?>

<html>
<head>
   <!-- BOOTSTRAP LIBRARIES -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/b559e0b638.js" crossorigin="anonymous"></script>

    <!-- CUSTOM WORK -->
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <!-- Your HTML body content here -->
</body>
</html>