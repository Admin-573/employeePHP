<?php
    
    //Database Configuration
    $DATABASE_NAME='emp';
    $HOST='localhost';
    $USER="root";
    $PASSWORD='';

    //Table With Fields
    $EMPLOYEE='employee';
    $emp_id='emp_id';
    $emp_name='emp_name';
    $emp_gender='emp_gender';
    $emp_contact='emp_contact';
    $emp_salary='emp_salary';

    $con = mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
    if(!$con){
        mysqli_connect_error();
    } else {
        // echo "Connected To DB";
    }
?>