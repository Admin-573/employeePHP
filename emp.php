<html>
    <head>
        <title>Employee</title>
    </head>
    <body>
        <form action="" method="post">
        <center>
        <h1>Add Employee</h1>
        <table>
            <tr>
                <td>
                    Employee ID
                </td>
                <td>
                    <input type="text" id="emp_id" name="emp_id" required/>
                </td>
            </tr>
            <tr>
                <td>
                    Employee Name
                </td>
                <td>
                    <input type="text" id="emp_name" name="emp_name" required/>
                </td>
            </tr>
            <tr>
                <td>
                    Employee Gender
                </td>
                <td>
                    <select name="emp_gender" id="emp_gender">
                        <option id="male" name="male">Male</option>
                        <option id="female" name="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Contact No
                </td>
                <td>
                    <input type="text" id="emp_contact" name="emp_contact" required/>
                </td>
            </tr>
            <tr>
                <td>
                    Salary
                </td>
                <td>
                    <input type="text" id="emp_salary" name="emp_salary" required/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="btn_add" name="btn_add" value="Add Employee"/>
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
    $createTblEmp = "CREATE TABLE IF NOT EXISTS $EMPLOYEE($emp_id int primary key,$emp_name text,$emp_gender varchar(64),$emp_contact varchar(32),$emp_salary text)";
    $queryExe = mysqli_query($con,$createTblEmp);

    if(isset($_POST['btn_add'])){

        $ID = $_POST[$emp_id];
        $Name = $_POST[$emp_name];
        $Gender = $_POST[$emp_gender];
        $Contact = $_POST[$emp_contact];
        $Salary= $_POST[$emp_salary];

        $sql = "SELECT * FROM $EMPLOYEE WHERE $emp_id=$ID";
        $dbquery = mysqli_query($con,$sql);
        $data = mysqli_num_rows($dbquery);

        if ($data) {
            ?>
                <script>
                    alert("Employee Exists !")
                    alert("Please Add Something Unique !")
                </script>
            <?php
        } else{
           $insertData = "INSERT INTO $EMPLOYEE VALUES($ID,'$Name','$Gender','$Contact','$Salary')";
           $queryExe = mysqli_query($con,$insertData);
           if ($queryExe){
            ?>
                <script>
                    alert("Employee Added !")
                    window.open("http://localhost/emp/emp.php","_self");
                </script>
            <?php
           }
        }
    }

    ?>
        <center>
        <table border="2px">
            <tr>
                <th>
                    ID

                </th>
                <th>
                    Name
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Contact
                </th>
                <th>
                    Salary
                </th>
                <th colspan="2">
                    Action
                </th>
            </tr>
        
        

        <?php

            include "emp_init.php";
            $sql = "SELECT * FROM $EMPLOYEE";
            $queryExe = mysqli_query($con,$sql);
            $data = mysqli_num_rows($queryExe);
            if($data){
                while($row  = mysqli_fetch_array($queryExe))
                {
                    ?>
                        <tr>
                            <td>
                                <?php
                                    echo $row[$emp_id];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row[$emp_name];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row[$emp_gender];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row[$emp_contact];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row[$emp_salary];
                                ?>
                            </td>
                            <td>
                                <a href="emp_update.php?emp_id=<?php echo $row[$emp_id] ?>">
                                    <button>Update</button>
                                </a>
                            </td>
                            <td>
                                <a href="emp_delete.php?emp_id=<?php echo $row[$emp_id] ?>">
                                    <button>Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                }
            } else {
                echo "
                <center> 
                    <h2>
                        No Records Added Yet ! 
                    </h2>
                </center>";
            }

        ?>
        </table>

        </center>
    <?php
?>