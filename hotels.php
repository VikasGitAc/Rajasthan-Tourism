<?php
include 'classes/Hotel.php';
$HotelObj = new Hotel();
$hotels = $HotelObj->getAllHotels($_GET);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Hotels</title>
    <meta charset="utf-8" />
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
    <link rel="stylesheet" type="text/css" href="./css/tabs.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        var base_url = "<?php echo BASE_URL ?>";
    </script>
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
    <h2>HOTELS</h2>
    <br>
    <br>
    <div class="hotel">
    </div>
    <br>
    <br>
    <div>
        Search:
        <input type="text" placeholder="Search" name="search" id="search" value="<?php if(!empty($_GET['search'])){ echo $_GET['search']; } ?>" />
        <input type="button" value="Search" name="searchButton" id="searchButton" />
    </div>
    <?php 
    
    $i=0;
    if(!empty($hotels)){
        foreach ($hotels as $hotel) {
    // while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        if($i%2==0){
            $background_color = '#ccc';
        }else{
            $background_color = '#777';
        }
        ?>
        <div class="contain" style="background-color:<?php echo $background_color; ?>">
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
                <div style="text-align: right;">
                    <a href="add_to_booking.php?id=<?php echo $hotel['id'] ?>" style="padding:10px; background-color:blue;color:#fff; border-radius:3px; border:1px solid #000;">Add to booking</a>
                </div>
                </p>
            </div>
        </div>
        <!-- <hr/> -->
    <?php $i++; } } ?>
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
    </script>
</body>

</html>