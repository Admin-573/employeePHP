<?php
include "emp_init.php";
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