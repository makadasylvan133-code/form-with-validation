<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Students Infomation</h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "db_config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM student";
                    if($result = mysqli_query($connection, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class=" table-responsive  table table-bordered table-hover table-striped">';
                                echo "<thead class='thead-dark'>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Program of study</th>";
                                        echo "<th>Year of study</th>";
                                        echo "<th>Email</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $num_rows = mysqli_num_rows($result);

                                for ($i = 0; $i < $num_rows; $i++) {
                                    $row = mysqli_fetch_array($result);
                                    echo "<tr>";
                                        echo "<td>" . $row['stu_id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['program'] . "</td>";
                                        echo "<td>" . $row['year_of_study'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($connection);
                    
                    ?>
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>