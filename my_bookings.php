<?php
include 'classes/HotelBooking.php';
$HotelBookingObj = new HotelBooking();
if(!isset($_SESSION['user']['first_name'])){
    header('Location:login.php');
}
$hotel_bookings = $HotelBookingObj->getMyBookings();
?>
<!--Simranjeet Kaur id:2102116     contribution:33.33% -->
<!--Nancy Bansal  id:2021590   contribution:33.33% -->
<!--Yogita  id:6164770   contribution:33.33% -->
<!DOCTYPE html>
<html>

<head>
    <title> Fairs & Festivals</title>
    <meta charset="utf-8" />
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
    <link rel="stylesheet" type="text/css" href="./css/tabs.css">
</head>
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
<body style="background-color: #ccc !important; background-image:none !important;">
    <header class="navbar">
        <img src="./Images/fav.jpg" class="logo">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i>HOME</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle"></i>ABOUT</a></li>
                <li><a href="contact.php"><i class="fa fa-envelope"></i>CONTACT</a></li>
                <?php if (empty($_SESSION['user']['email'])) { ?>
                    <li><a href="login.php"><i class="fa fa-user-circle"></i>Login</a></li>
                <?php } else { ?>
                    <li>
                    <a href="my_bookings.php"><i class="fa fa-user-circle"></i><?php echo $_SESSION['user']['first_name']; ?></a>
                        <a href="logout.php"><i class="fa fa-sign-out"></i></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
 
    <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; ?>
        </div>
    <?php
            unset($_SESSION['success']);
    } ?>
    <p style="font-size: 22px; color:#777"><b>My Bookings</b></p>

    <?php 
    
    $i=0;
    if(!empty($hotel_bookings)){
        foreach ($hotel_bookings as $booking) {
        if($i%2==0){
            $background_color = '#eee';
        }else{
            $background_color = '#777';
        }
        ?>
        <div class="contain" style="background-color:<?php echo $background_color; ?>; color:#000; padding:10px; justify-content:left !important;">
            <div class="image" style="flex-basis:33% !important">
                <img src="<?php echo BASE_URL ?>uploads/hotels/<?php echo $booking['hotel_pic'] ?>" class="ok" style="width:300px; height: 300px;" />
            </div>
            <div class="text" style="text-align: left;">
                <h3><?php echo $booking['hotel_title'] ?></h3>
                <p> <b>Booking Date:</b> <?php echo $booking['checkin_date'] ?> to <?php echo $booking['checkout_date'] ?><br><br>
                <b>Number of rooms:</b> <?php echo $booking['no_of_rooms'] ?>
                </p>
            </div>
        </div>
        <!-- <hr/> -->
    <?php $i++; } } ?>

    <footer>
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>
</body>
</html>