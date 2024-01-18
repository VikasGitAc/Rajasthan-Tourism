<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">

    <title>About</title>
</head>

<body class="back5">
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

    <p> Follow the links</p>
    <ul class="dot">
        <li><a href="https://www.youtube.com"> Video</a>
            :This links is basically for videos</li><br><br><br>
        <li><a href="https://www.google.com/">Images</a>
            :This is the link for the images which is used in project </li><br><br><br>
        <li> <a href="https://www.tourmyindia.com/states/rajasthan/luxury-holiday.html">Rajasthan hotels</a>
            :Hotels description and ratings are specified</li><br><br><br>
        <li><a href="https://en.wikipedia.org/ ">Wiki</a>
            :Text about the history and the information about particular place is shown</li><br><br><br>
        <li><a href="https://www.tourmyindia.com/states/rajasthan/heritage-tourism.html">Forts</a>
            :Information about numerous forts .</li><br><br><br>
        <li> <a href="https://www.tourmyindia.com/states/rajasthan/rajasthan_wildlife.html"> Wildlife</a>
            :Describes the detail about the wildlife</li><br><br><br>
        <li><a href="https://www.tourmyindia.com/states/rajasthan/rajasthan_festivals.html">Festivals</a>
            : festivals which are celebrated in State</li><br><br><br>
        <footer>
            <p> &copy Winter-2023<a href="http://420931va-yogita.freecluster.eu/Project/home.html">Yogita(6164770)</a></p>
            </p>
            <p> &copy Winter-2023<a href="http://420931va-yogita.freecluster.eu/Project/home.html">Vikas Modi(2102188)</a></p>
            </p>
        </footer>
</body>
</html>