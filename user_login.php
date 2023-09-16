<html>
    <head>
        <title>User</title>
    </head>
    <body>
        <form action="" method="post">
        <center>
        <h1>User Login</h1>
        <table>
            <tr>
                <td>
                    User Email ID
                </td>
                <td>
                    <input type="email" id="admin_id" name="admin_id" required/>
                </td>
            </tr>
            <tr>
                <td>
                    User Password
                </td>
                <td>
                    <input type="password" id="admin_pass" name="admin_pass" required/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="btn_login" name="btn_login" value="User Login"/>
                </td>
            </tr>
            
        </table>
        </center>
        </form>
        <center>
            <form action="" method="post">
            <input type="submit" id="btn_admin" name="btn_admin" value="Admin Login"/>
            </form>
        </center>
    </body>
</html>

<?php
    include "emp_init.php";
    if(isset($_POST['btn_login'])){
            ?>
                <script>
                    alert("Good To Go ~")
                    window.open("http://localhost/emp/emp_user.php","_self")
                </script>
            <?php
    } else {

    }

    if(isset($_POST['btn_admin'])){
        ?>
            <script>
                window.open("http://localhost/emp/admin_login.php","_self")
            </script>
        <?php
    }
?>