<?php
    require("connection.php");
if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $password = get_safe_value($con, $_POST['password']);

    $sql = "SELECT * FROM admin_user WHERE username='$username' AND password='$password'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_USERNAME'] = $username;
        header('location: categories.php');
    } else {
        $msg = "Please enter correct login details";
    }
}
?>
<?php
    require("nav.php");
?>
    <div class="container mt-5">
        <form method="post">
            <h3 class="text-center">Login With Shopily</h3>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" name="submit" value="submit" class="btn btn-dark mt-3">Login</button>
            </div>
        </form>
        <div>
        </div>
    </div>
