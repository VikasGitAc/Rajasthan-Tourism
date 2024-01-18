<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title> contact</title>
    <meta charset="utf-8" />
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link href="./css/form.css" rel="stylesheet">
    <link href="./css/tabs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
</head>
<body>
    <header class="navbar" class="hey">
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
    <ul class="tabs">
        <li data-tab-target="#Address" class="active tab">Address</li>
        <li data-tab-target="#Call" class="active tab">Call</li>
        <li data-tab-target="#E-Mail" class="active tab">E-Mail</li>
        <li data-tab-target="#Chat" class="active tab">Chat</li>
    </ul>
    <div class="tab-content">
        <div id="Address" data-tab-content class="active">
            <br><br>
            <h1 class="add">Address</h1>
            <h3 class="add">821 Avenue Sainte-Croix<br><br>
                Montreal, Quebec<br><br>
                H4L 3X9 Canada</h2>
                <br><br>
                <p>Phone: 514-744-7500<br><br>
                    Toll-Free: 1-855-744-7500<br><br>
                    Fax: 514-744-7505<br><br>
                    Email: Send Email</p><br>
                <h4>Media Contact
            </h3>
            <p>Name: Marguerite Corriveau<br><br>
                Phone: 514.744.7500 local 7596<br><br>
                Email: Click here<br><br>
                Website: Newsroom</p>

        </div>
    </div>
    <div class="tab-content">
        <div id="Call" data-tab-content>
            <h1>Call</h1>
            <h2>You can call us at :</h2>
            <br>
            <br>
            <br>
            <br>
            <p>Vikas Modi -------- contact: 12345678888
                <br><br>
                Yogita -------- contact:67757463890890
                <br><br><br><br><br><br><br>
                other contacts :
                <br><br>
                Phone: 514-744-7500 <br><br>
                Toll-Free: 1-855-744-7500 <br><br>
                Fax: 514-744-7505<br>

            </p>
        </div>
    </div>

    <div class="tab-content">
        <div id="E-Mail" data-tab-content>
            <h1>E-Mail</h1>
            <p>
            <div class="contact-title">
                <h1>Hello</h1>
                <br><br>
                <h2>We are always ready to serve you!</h2>
            </div>
            <br>
            <div class="contact-form">
                <form id="contact-form" method="get" action="">
                    <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    <br>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Your Email" required>
                    <br>
                    <input name="topic" type="text" class="form-control" placeholder="Your Topic" required>
                    <br>
                    <textarea name="text" class="form-control" placeholder="Type the text" row="4" required></textarea>
                    <br>
                    <!---- <button type="submit" value="submit">submit</button>-->
                    <button type="Validate Email" id="validate">Submit</button>
                </form>

            </div>
            </p>
        </div>
    </div>
    <div class="tab-content">
        <div id="Chat" data-tab-content>
            <h1>Chat</h1>
            <p>
            <div class="contact-title">
                <h1>HII</h1>
                <br><br>
                <h2>You can chat with us here</h2>
            </div>
            <div class="contact-form">
                <form id="contact-form" method="get" action="">
                    <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    <br>
                    <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                    <br>
                    <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                    <br>
                    <input type="submit" class="form-control submit" value="SEND MESSAGE" onclick="submit()"></input>
                </form>
            </div>
            </p>
        </div>
    </div>
    <footer>
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>
    <script src="./js/script.js" defer></script>
</body>
</html>