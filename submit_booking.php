<?php

include 'classes/HotelBooking.php';
$HotelBookingObj = new HotelBooking();
if(!isset($_SESSION['user']['first_name'])){
    header('Location:login.php');
}
$result = $HotelBookingObj->saveHotelBooking();
if(empty($result)){
    $_SESSION['error'] = 'All rooms booked already';
    header('Location:add_to_booking.php?id='.$_POST['id']);
    exit;
}
$_SESSION['success'] = 'Your hotel has been booked successfully!';
header('Location:my_bookings.php');