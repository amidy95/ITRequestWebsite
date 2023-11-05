<?php
include "db.php"; // include the connection to the data base.?> 

<?php session_start(); // sett up session.?> 

<?php
if(isset($_POST['sign_in']))
{
    $employee_id = $_POST['username']; // Assuming the username input contains the employee ID.
    
    // This protects the database from SQL injection and hackers.
    $employee_id = mysqli_real_escape_string($connection, $employee_id);
 
    $query = "SELECT * FROM users WHERE employee_id = '{$employee_id}'";
    $select_user_query = mysqli_query($connection, $query);
 
    if(!$select_user_query)
    {
        die("Query Failed: " . mysqli_error($connection));
    }
 
    if ($row = mysqli_fetch_array($select_user_query)) 
    {
        $db_id = $row['id']; // Assuming 'id' is the user's ID in the 'users' table.
        $db_employee_id = $row['employee_id'];
        $db_first_name = $row['first_name'];
        $db_last_name = $row['last_name'];
        $db_email = $row['email'];
 
        // Set up the session variables.
        $_SESSION['user_id'] = $db_id;
        $_SESSION['user_employee_id'] = $db_employee_id;
        $_SESSION['user_first_name'] = $db_first_name;
        $_SESSION['user_last_name'] = $db_last_name;

        // Redirect to the user's main page after successful login.
        header("Location: user_mainpage.php");
        exit();

    } 
    else 
    {
        // Employee ID not found. Display an error message.
        echo "Employee ID Not Found.";
    }
}

?>
