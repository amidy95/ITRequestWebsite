<?php
include "db.php"; // include the connection to the data base.?> 

<?php session_start(); // sett up session.?> 

<?php
if(isset($_POST['sign_in'])){

   $username = $_POST['username'];
   $password = $_POST['password'];
    // this protects the database from sql injection and hackers
    $username = mysqli_real_escape_string($connection, $username);// this checks the data before it goes into the database
    $password = mysqli_real_escape_string($connection, $password);

    
    $query = "SELECT * FROM users inner join login using (user_id) WHERE user_email =  '{$username}'; ";
    $select_user_query = mysqli_query($connection, $query);
   
    if(!$select_user_query){
        die("Query Failed" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)){
        echo $db_id = $row['user_id'];
        echo $db_email = $row['user_email'];
        echo $db_password = $row['password'];
        echo $db_first_name = $row['first_name'];
        echo $db_last_name = $row['last_name'];
        echo $db_dob = $row['dob'];
        echo $db_city = $row['city'];
        echo $db_state = $row['state'];
        echo $db_zip_code = $row['zip_code'];
        echo $db_user_type = $row['user_type'];
        echo $db_failed = $row['failed_attempts'];

/*
user_id Primary	int			No	None		AUTO_INCREMENT	Change Change	Drop Drop	
More More
                user_email

                password
                
                first_name
                last_name
                dob	date
More More
	7	user_addre
More More
	8	city	va
More More
	9	state	va
More More
	10	zip_code
More More
	11	user_type
More More
*/
    }


    




    if($username === $db_email && $password != $db_password){
        $db_failed++;

        $update_query =  "Update login SET ";  
        $update_query .= " failed_attempts = {$db_failed}  WHERE user_id = {$db_id} ";
        $result_of_update_query = mysqli_query($connection, $update_query);
        if(!$result_of_update_query){
            die("Query Failed" . mysqli_error($connection));
        }
        header("Location: ../index.php");
    }
    if($db_failed >= 3){
            // send email code
        header("Location: ../reset_password_locked_out.php");

        
    }

    



    else if($username === $db_email && $password === $db_password && $db_user_type == "admin"){
        // CORRECT CREDENTIALS SUCCESSFUL LOG IN USE CASE
            $_SESSION['user_id'] = $db_id;
            $_SESSION['user_email'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['last_name'] = $db_last_name ;
            $_SESSION['dob'] = $db_dob;
            $_SESSION['city'] =  $db_city;
            $_SESSION['state'] = $db_state ;
            $_SESSION['zip_code'] = $db_zip_code;
            $_SESSION['user_type'] = $db_user_type;




            header("Location: ../admin/index.php");
    }
    else if($username === $db_email && $password === $db_password && $db_user_type == "student"){
        // CORRECT CREDENTIALS SUCCESSFUL LOG IN USE CASE
            $_SESSION['user_id'] = $db_id;
            $_SESSION['user_email'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['last_name'] = $db_last_name ;
            $_SESSION['dob'] = $db_dob;
            $_SESSION['city'] =  $db_city;
            $_SESSION['state'] = $db_state ;
            $_SESSION['zip_code'] = $db_zip_code;
            $_SESSION['user_type'] = $db_user_type;


            header("Location: ../student/index.php");
    }
    else if($username === $db_email && $password === $db_password && $db_user_type == "faculty"){
        // CORRECT CREDENTIALS SUCCESSFUL LOG IN USE CASE
            $_SESSION['user_id'] = $db_id;
            $_SESSION['user_email'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['last_name'] = $db_last_name ;
            $_SESSION['dob'] = $db_dob;
            $_SESSION['city'] =  $db_city;
            $_SESSION['state'] = $db_state ;
            $_SESSION['zip_code'] = $db_zip_code;
            $_SESSION['user_type'] = $db_user_type;

            header("Location: ../faculty/index.php");
    }
    else if($username === $db_email && $password === $db_password && $db_user_type == "researcher"){
        // CORRECT CREDENTIALS SUCCESSFUL LOG IN USE CASE
            $_SESSION['user_id'] = $db_id;
            $_SESSION['user_email'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['last_name'] = $db_last_name ;
            $_SESSION['dob'] = $db_dob;
            $_SESSION['city'] =  $db_city;
            $_SESSION['state'] = $db_state ;
            $_SESSION['zip_code'] = $db_zip_code;
            $_SESSION['user_type'] = $db_user_type;

            header("Location: ../researcher/index.php");
    }
    else if($username !== $db_email && $password == $db_password){
        header("Location: ../index.php");
        //PASSWORD RIGHT USERNAME WRONG

        // if your passowrd and username does not match then we send the user back to the index page which is the first page.
        //TODO
        // NEED TO PUT THE FUNCTION WHERE THE USER IS LOCKED OUT FROM THE ACCOUNT
    }
    else if($username == $db_email && $password !== $db_password){
        header("Location: ../index.php");
        //PASSWORD WRONG USERNAME RIGHT
        
        // if your passowrd and username does not match then we send the user back to the index page which is the first page.
        //TODO
        // NEED TO PUT THE FUNCTION WHERE THE USER IS LOCKED OUT FROM THE ACCOUNT
    }
    else if($username != $db_email && $password !== $db_password){
        header("Location: ../index.php");
        //PASSWORD WRONG USERNAME RIGHT
        
        // if your passowrd and username does not match then we send the user back to the index page which is the first page.
        //TODO
        // NEED TO PUT THE FUNCTION WHERE THE USER IS LOCKED OUT FROM THE ACCOUNT
    }
}

?>
