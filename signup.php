<?php include_once('layouts/front/header.php') ?>
<form id="signup-form" method="post" action="signupPost.php">
    <h1>Signup</h1>
    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name" required>
    <br>
    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name" required>
    <br>
    <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
    <br>
    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
    <br>
    <input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required>
    <br>
    <!---- <button type="submit" value="submit">submit</button>-->
    <button type="Validate Email" id="validate" style="width:50px; font-size:16px">Signup</button>
    <a href="login.php" style="color:#fff" >Already a customer?</a>
</form>
<script>
    $("#signup-form").validate({
    rules: {
        password: {
            minlength: 5,
        },
        confirm_password: {
            minlength: 5,
            equalTo: "#password"
        }
    }
});
</script>
<?php include_once('layouts/front/footer.php') ?>