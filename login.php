<?php session_start(); ?>
<?php include_once('layouts/front/header.php') ?>
<style>
    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
</style>
<form id="login-form" method="post" action="loginPost.php" novalidate>
    <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; ?>
        </div>
    <?php
            unset($_SESSION['success']);
    } ?>
    <h1>Login</h1>
    <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
    <br>
    <input name="password" type="password" class="form-control" placeholder="Password" required>
    <br>
    <!---- <button type="submit" value="submit">submit</button>-->
    <button type="Validate Email" id="validate" style="width:50px; font-size:16px">Login</button>
    <a href="signup.php" style="color:#fff" >New Customer?</a>
</form>
<script>
    $("#login-form").validate();
</script>
<?php include_once('layouts/front/footer.php') ?>