<?php  
// include_once('includes/conn.php');
include 'classes/User.php';
$UserObj = new User();
if(!empty($_POST['email'])){
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $result = $conn->query("SELECT * FROM users WHERE email='$email' and password='$password' and user_type=2");
    // echo 'rowCount'. $result->rowCount();
    $result = $UserObj->authenticateFrontUser();
    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        $row = $result->fetch_assoc();
        unset($row['password']);
        if($row['user_type']==1){
            $_SESSION['admin'] = $row;
            header('Location:admin/dashboard.php');
            exit;
        }else{
            $_SESSION['user'] = $row;
            header('Location:index.php');
            exit;
        }
    }else{
        header('Location:login.php');
        exit;
    }
}