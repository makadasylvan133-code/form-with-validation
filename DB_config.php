>
    <?php
    define ("HOST", "localhost");
    define ("DB_USER","root");
    define ("PASSWORD", "");
    define("DB","student_info");

    $connection =mysqli_connect(HOST, DB_USER, PASSWORD, DB);

    IF($connection ===false){
        die("ERROR: Could not connect." .mysqli_connect_error());
        }
        ?>

    