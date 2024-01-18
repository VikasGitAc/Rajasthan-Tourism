<?php
include 'classes/HotelBooking.php';
$HotelBookingObj = new HotelBooking();
$hotel_bookings = $HotelBookingObj->getMyBookings();
?>
<!--Simranjeet Kaur id:2102116     contribution:33.33% -->
<!--Nancy Bansal  id:2021590   contribution:33.33% -->
<!--Yogita  id:6164770   contribution:33.33% -->
<!DOCTYPE html>
<html>

<head>
        <title> Booking Success </title>
		<meta charset="utf-8" />
		<meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
		<link rel="icon" type="image/x-icon" href="./Images/favi.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            .white_link{
                color: #fff;;
            }
        </style>
</head>
<body style="background-color: #e47200 !important; background-image:none !important;">
    <div>
        <div class="alert alert-success">
            Congratulation! Your hotel booked successfully!
        </div>
        <div>
            
        </div>
    </div>
    <footer style="background-color: #fff;">
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>
</body>
</html>