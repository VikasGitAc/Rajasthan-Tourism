<?php  
// include_once('includes/conn.php');
include 'classes/User.php';
$UserObj = new User();
if(!empty($_POST['email'])){
    $customer_id = $UserObj->signupCustomerUser();
    if(!empty($customer_id)){
        $_SESSION['success'] = 'You are registered successfully. Please login here!';
        header('Location:login.php');
    }
}