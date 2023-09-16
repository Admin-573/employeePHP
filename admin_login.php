<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <form action="" method="post">
        <center>
        <h1>Admin Login</h1>
        <table>
            <tr>
                <td>
                    Admin Email ID
                </td>
                <td>
                    <input type="email" id="admin_id" name="admin_id" required/>
                </td>
            </tr>
            <tr>
                <td>
                    Admin Password
                </td>
                <td>
                    <input type="password" id="admin_pass" name="admin_pass" required/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="btn_login" name="btn_login" value="Admin Login"/>
                </td>
            </tr>
            
        </table>
        </center>
        </form>
        <center>
            <form action="" method="post">
                <input type="submit" id="btn_user" name="btn_user" value="User Login"/>
            </form>
        </center>
        <?php
             if(isset($_POST['btn_user'])){
                ?>
                    <script>
                        window.open("http://localhost/emp/user_login.php","_self")
                    </script>
                <?php
            }
        ?>
    </body>
</html>

<?php
    include "emp_init.php";
    if(isset($_POST['btn_login'])){
            ?>
                <script>
                    alert("Good To Go ~")
                    window.open("http://localhost/emp/emp.php","_self")
                </script>
            <?php
    } else {

    }
?>