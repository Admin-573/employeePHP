<?php
    include "emp_init.php";
    $ID = $_GET[$emp_id];

    $deleteQuery = "DELETE FROM $EMPLOYEE WHERE $emp_id=$ID";
    $queryExe = mysqli_query($con,$deleteQuery);
    if($queryExe){
        ?>
            <script>
                alert("Employee Deleted")
                window.open("http://localhost/emp/emp.php","_self")
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("Error")
            </script>
        <?php
    }

?>