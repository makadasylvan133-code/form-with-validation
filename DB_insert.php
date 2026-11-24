<?php
include ("DB_config.php");

$name = mysqli_real_escape_string($connection, $_REQUEST['name']);
    $program = mysqli_real_escape_string($connection, $_REQUEST['program']);
    $year = mysqli_real_escape_string($connection, $_REQUEST['year']);
    $email = mysqli_real_escape_string($connection, $_REQUEST['email']);

    $sql = "INSERT INTO student (name, program, year_of_study, email) VALUES ('$name','$program','$year','$email')";



try
{
    if(mysqli_query($connection, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}
catch(Exception $e)
{
    echo "<p style='color:red;'>Slight error, Please check your values " . mysqli_error($connection)."</p> ";
}

mysqli_close($connection);



?>
