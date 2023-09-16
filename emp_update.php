<?php
    //error_reporting(0);
    include "emp_init.php";
    $getID = $_GET[$emp_id];
    $queryExe = "SELECT * FROM $EMPLOYEE WHERE $emp_id=$getID";
    $data = mysqli_query($con,$queryExe);
    $row = mysqli_fetch_array($data);
?>

<html>
    <head>
        <title>Update Employee</title>
    </head>
    <body>
        <form action="" method="post">
        <center>
        <h1>Update Employee</h1>
        <table>
            <tr>
                <td>
                    Employee ID
                </td>
                <td>
                    <input type="text" id="emp_id" name="emp_id" value="<?php echo $row[$emp_id] ?>" disabled/>
                </td>
            </tr>
            <tr>
                <td>
                    Update Employee Name
                </td>
                <td>
                    <input type="text" id="emp_name" name="emp_name" value="<?php echo $row[$emp_name] ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Update Employee Gender
                </td>
                <td>
                    <select name="emp_gender" id="emp_gender" value="<?php echo $row[$emp_gender] ?>">
                        <option id="male" name="male">Male</option>
                        <option id="female" name="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Update Contact No
                </td>
                <td>
                    <input type="text" id="emp_contact" name="emp_contact" value="<?php echo $row[$emp_contact] ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Update Salary
                </td>
                <td>
                    <input type="text" id="emp_salary" name="emp_salary" value="<?php echo $row[$emp_salary] ?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="btn_upd" name="btn_upd" value="Update Employee"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" value="Clear Fields"/>
                </td>
            </tr>
        </table>
        </center>
        </form>
    </body>
</html>

<?php
    include "emp_init.php";
    if (isset($_POST['btn_upd'])){
        
        $Name = $_POST[$emp_name];
        $Gender = $_POST[$emp_gender];
        $Contact = $_POST[$emp_contact];
        $Salary = $_POST[$emp_salary];

        $queryExe = "UPDATE $EMPLOYEE SET $emp_name='$Name' , $emp_gender='$Gender' , $emp_contact='$Contact' , $emp_salary='$Salary' WHERE $emp_id=$getID";
        $upd = mysqli_query($con,$queryExe);

        if(!$upd){
            ?>
                <script>
                    alert("Error Occured");
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Employee Updated");
                    window.open("http://localhost/emp/emp.php","_self")
                </script>
            <?php
        }
    }
?>


