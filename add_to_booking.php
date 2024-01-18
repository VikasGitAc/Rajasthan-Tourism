<?php
include 'classes/Hotel.php';
$HotelObj = new Hotel();
if(!isset($_SESSION['user']['first_name'])){
    header('Location:login.php');
}
$hotels = $HotelObj->getHotelById($_GET['id']);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Add to booking</title>
    <meta charset="utf-8" />
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
    <link rel="stylesheet" type="text/css" href="./css/tabs.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        var base_url = "<?php echo BASE_URL ?>";
    </script>
    <style>
        label.error{
            color:red;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert {
            /* position: relative; */
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
    </style>
</head>

<body class="back3">
    <header class="navbar">
        <img src="Images/fav.jpg" class="logo">
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
    <br>
    <br>
    <?php if(!empty($_SESSION['error'])){ ?>
        <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
    <?php 
    unset($_SESSION['error']);
    } ?>
    <?php
    if(!empty($hotels)){
        foreach ($hotels as $hotel) {
            ?>
        <div class="contain" style="background-color:#777">
            <div class="image">
                <img src="<?php echo BASE_URL ?>uploads/hotels/<?php echo $hotel['hotel_pic'] ?>" class="ok" style="width:300px; height: 300px;" />
            </div>
            <div class="text" style="text-align: left;">
                <h3><?php echo $hotel['title'] ?></h3>
                <p> <?php echo $hotel['description'] ?><br><br>
                <ul id="star">
                    <li> <?php echo $hotel['hotel_rating'] ?>-star hotel</li>
                    <li>Located in: <?php echo $hotel['location'] ?></li>
                    <li>Address: <?php echo $hotel['address'] ?></li>
                    <li>Phone: <?php echo $hotel['phone'] ?></li>
                    <li>Price: <?php echo $hotel['price'] ?> per day</li>
                </ul>
                <form method="post" action="submit_booking.php" id="submit_booking">
                    <div>
                        <label>Number Of Rooms: </label>
                        <input type="number" name="no_of_rooms" id="no_of_rooms" placeholder="Number of Rooms" required />
                    </div>
                    <br>
                    <div>
                        <label>Booking Date: </label>
                        <input type="date" name="checkin_date" id="checkin_date" placeholder="Checkin Date" required /> to <input type="date" name="checkout_date" id="checkout_date" placeholder="Checkout Date" required />
                    </div>
                    <br><br>
                    <div style="text-align: right;">
                    <input type="hidden" name="id" id="id" value="<?php echo $hotel['id'] ?>" />
                    <input type="submit" name="submit_booking" id="submit_booking" value="Book" style="padding:10px; background-color:blue;color:#fff; border-radius:3px; border:1px solid #000;"  />
                    </div>
                </form>
                
                </p>
            </div>
        </div>
    <?php } } ?>
    <p>You can explore more at : <a href="https://www.tripadvisor.ca/HotelsList-Rajasthan-Heritage-Hotels-Blender-zfp11985034.html">HOTELS</a></p>
    <footer>
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>

    <script>
        $('#searchButton').click(function(){
            var searchText = $('#search').val();
            window.location.href = base_url+'hotels.php?search='+searchText;
        });
        $.validator.addMethod("greaterStart", function (value, element, params) {
            return this.optional(element) || new Date(value) >= new Date($(params).val());
        },'Must be greater than start date.');
        $("#submit_booking").validate({
            rules: {
                "checkout_date": {
                    greaterStart: "#checkin_date"
                }
            }
        });
    </script>
</body>

</html>