<?php 
    require('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
    
        $sql = "SELECT * FROM register_user WHERE username='$username' AND password='$password'";
        $res = mysqli_query($con, $sql);
        $num = mysqli_num_rows($res);
        if ($num > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['ADMIN_USERNAME'] = $username;
            header('location: home.php');
        } else {
            echo "Please enter correct login details";
        }
    }
    
?>
<?php
    require('login.php')
?>


