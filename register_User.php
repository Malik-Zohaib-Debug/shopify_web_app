<?php
    require("connection.php");
    require('functions.php');
    if(isset($_POST['submit'])){
        $firstname = get_safe_value($con, $_POST['firstname']);
        $lastname = get_safe_value($con, $_POST['lastname']);
        $username = get_safe_value($con, $_POST['username']);
        $password = get_safe_value($con, $_POST['password']);
        $address = get_safe_value($con, $_POST['address']);
        $email = get_safe_value($con, $_POST['email']);
        $country = get_safe_value($con, $_POST['country']);
        $city = get_safe_value($con, $_POST['city']);
        $state = get_safe_value($con, $_POST['state']);
     
        $sql = "INSERT INTO `register_user` (`firstname`, `lastname`, `username`, `email`, `password`, `address`, `country`, `city`, `state`) VALUES ('$firstname', '$lastname', '$username', '$email', ' $password', '$address', '$country', '$city', '$state');"; 
        //$res=mysqli_query($con, $sql);
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
    }
?>

<?php
require('nav.php');
?>
<div class="container">
<form class="row g-3 mt-4" method="POST">
    <h3 class="mt-3 text-center">Register Your Account With Shopily</h3><hr />
    <div class="col-md-6">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" name="firstname" id="firstname" required>
    </div>
    <div class="col-md-6">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" class="form-control" name="lastname" id="lastname" required>
    </div>
    <div class="col-6">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com" required>
    </div>
    <div class="col-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>
    <div class="col-md-12">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" required name="username">
    </div>
    <div class="col-md-12">
        <label for="address" class="form-label">Residence Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="col-md-6">
        <label for="country" class="form-label">Country</label>
        <input type="text" name="country" id="country" class="form-control" required>
    </div>
    <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" name="state" id="state" required>
    </div>
    <div class="col-md-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" name="city" id="city">
    </div>
    <div class="col-12 text-center">
        <button type="submit" name="submit" value="submit" class="btn btn-dark mt-3 text-center">Register My Account</button>
    </div>
</form>
</div>