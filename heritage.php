<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Heritage </title>
    <meta charset="utf-8" />
    <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
    <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
    <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
    <link rel="stylesheet" type="text/css" href="./css/tabs.css">
</head>

<body class="back4">
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
    <h2>Heritage</h2>
    <div class="heritage">
        <p>Padharo mare des</p>
        <iframe width="1450" height="480" src="https://www.youtube.com/embed/GhfqU1v5Pbc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    <br>
    <div>
        <p></p>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/hawa.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Hawa Mahal</h3>
            <p>The Hawa Mahal is a palace in the city of Jaipur, India. Built from red and pink sandstone,
                the palace sits on the edge of the City Palace,
                Jaipur, and extends to the Zenana, or women's chambers.
                The structure was built in 1799 by the Maharaja Sawai Pratap Singh, the grandson of Maharaja Sawai Jai Singh,
                who was the founder of the city of Jaipur, India. He was so inspired by the unique structure
                the of Khetri Mahal that he built this grand and historical palace.
                It was designed by Lal Chand Ustad. Its five-floor exterior is akin to a honeycomb with its 953 small windows
                called Jharokhas decorated with intricate latticework.[2] The original intent of the lattice design was to allow royal ladies to
                observe everyday life and festivals celebrated in the street below without being seen, since they had to obey the strict rules of "purdah",
                which forbade them to appear in public without face coverings. This architectural feature also allowed cool air from the Venturi effect to
                pass through, thus making the whole area more pleasant during the high temperatures in summer. Many people see the Hawa Mahal from the street
                view and think it is the front of the palace, but it is the back.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/amer.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Amber Fort</h3>
            <p>Amber Palace aka Amber Fort was constructed in 1592 AD by Raja Man Singh,
                the Rajput commander of Akbar's army.
                Later it was expanded and renovated by Raja Jai Sigh I.
                Situated at a distance of 11 km from the city, it carries the pride of Jaipur.
                There are various other buildings within these courtyards i.e.,
                Palace of Man Singh I, Garden, Tripolia gate, Lion gate, Diwan-I-Aam, Sheesh Mahal, Sukh Mahal, etc.
                Jaipur trip is incomplete without visiting the light show at this grand fort.
                This palace, along with Jaigarh Fort, is located immediately above on the Cheel ka Teela (Hill of Eagles)
                of the same Aravalli range of hills. The palace and Jaigarh Fort are considered one complex, as the two are
                connected by a subterranean passage. This passage was meant as an escape route in times of war to enable the
                royal family members and others in the Amer Fort to shift to the more redoubtable Jaigarh Fort.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/mehar.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Mehargarh Fort</h3>
            <p>Jodhpur is popularly known for its famous Mehrangarh Fort History. Rao Jodha the ruler of Mandore built this famous
                fort of Mehrangarh in 1459. Mehrangarh fort was earlier known as Mihirgarh which is made of two words; “Mihir” which
                means sun deity and “Garh” means fort. Sun deity is said to be the chief deity of the Rathore dynasty. There are various
                Mehrangarh fort facts which make it a pride of Jodhpur. The fort is not only historically significant but also has architectural
                importance.
                The fort is massive, enclosed with thick walls and sprawled over a large area. The fort is situated 410 ft. above the ground level.
                Within the fort, there are several other palaces built to serve different purposes and there are many beautiful carvings inside these palaces.
                The fort spreads over 5 kilometers above the hilltop and one can have a full view of the city from the fort.
            </p>
        </div>
    </div>
    <br><br>
    <div class="contain">
        <div class="image">
            <img src="Images/Castle-Mandawa.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Castle-Mandawa</h3>
            <p>
                Castle Mandawa is a beautiful palace turned hotel- standing tall and proud as a testimony to the charming and colourful city of Mandawa.
                It was originally a palace and a fortress which has now been converted into a luxurious heritage hotel.
                <br>Known for its very popular Mandawa Fort, Mandawa is a quaint little town in the Jhunjhunu district of
                Rajasthan. Popularly known as the Open Art Gallery,
                the town is replete with paved archways and magnificent havelis and fortresses.
                A number of antiques and paintings enhance the beauty of the darbar halls of this fort.
                The Castle Mandawa has now been converted into a heritage hotel with all modern facilities and is managed by the royal family of Mandawa,
                highly attracted by tourists.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/junagarh-fort-bikaner.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Junagarh Fort</h3>
            <p> Junagarh Fort, Bikaner Overview
                The Junagarh Fort of Bikaner is a magnificent structure around which the city of Bikaner grew up.
                The fort was initially called Chintamani and later renamed the Junagarh or Old fort in the 20th century.
                The foundations of the Junagarh fort was built in 1478 by Rao Bika. However,
                it existed just as a stone fort then. The present grand structure was inaugurated on 17th February 1589.
                Bikaner has everything a traveler would love doing. It has a huge Junagarh Fort Bikaner which speaks loudly
                of its rich culture and heritage, beautiful gardens, and magnificent museum. One unique thing that you would
                definitely get entice is the bazaar of Bikaner. So here are some of the things that you must go for once you visit Bikaner.

                Junagarh is itself a very beautiful fort and one of the few forts that are not built on a hilltop. But other than Junagarh Fort there is so
                much to see one can vouch for. Within the vicinity of the fort, there are seven other places to entertain you. There are Palaces like Phool Mahal,
                Anup Mahal, Bikaneri Havelies, Ganga Mahal, Badal Mahal, and Chandra Mahal.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/mama-camp-jaisalmer.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>Nightlife</h3>
            <p>Nightlife is all about having fun after the sun sets.

                Nightlife in Jaisalmer is full of energy and vigor.

                People of all sectors come together to enjoy the thrilling nightlife in this jewel city.

                For all those who do not like nightclubs and pubs, rest assured! The nightlife in Jaisalmer has much more to show than just nightclubs and pubs.

                Following are some best places to visit in Jaisalmer at night.
            <p>
                If you love the desert and looking for things to do in Jaisalmer at night, this amazing desert safari experience and camp stay overnight will thrill you.

                The trip begins with camel rides over the sand dunes of Jaisalmer at twilight. Later you will receive a traditional and royal Rajasthani welcome complete with delicious tea and snacks. Before dinner, folk dancers and musicians will perform to entertain you during your time at the campfire.

                Later at night, a delicious dinner is served before you head to bed in comfortable tents set up amidst the desert. You can lie down on the sand beneath the skies and enjoy the spectacular view.

                If you are looking for a retreat away from the hustle bustle of the city,
                the Mirvana Resort is one of the best places to visit Jaipur at night. It is perfect for those who seek a quiet nature retreat to rejuvenate the body and mind. Ride along the desert on camels and later stay the night at the elegant Mirvana Resort. The resort has an orchard and farm overgrown with vegetables, fruits, flowers, and herbs. During your stay at the Mirvana Resort,
                you can enjoy tractor rides along the farm and harvest your own vegetables and fruits too!</p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="Images/nahargarh-fort-head-325.jpeg" class="ok" />
        </div>
        <div class="text">
            <h3>Nahargarh Fort</h3>
            <p>
                Nahargarh Fort, situated on the outskirts of Jaipur, is known for breathtaking views of the city and
                for its extended wall that connects it to Jaigarh Fort. Embellished with delicate carvings and stonework,
                the Nahargarh Fort in Rajasthan is an impregnable structure. The Padao Restaurant is also a must-visit
                if you're near Nahargarh Fort from where you're sure to enjoy a panoramic view of the city of Jaipur.
                Built mainly in 1734 by Maharaja Sawai Jai Singh, the king of Jaipur, the fort was constructed as a place
                of retreat on the summit of the ridge above the city. Walls extended over the surrounding hills, forming fortifications
                that connected this fort to Jaigarh, the fort above the old capital of Amber. Though the fort never came under attack during
                the course of its history, it did see some historical events, notably, the treaties with the Maratha forces who warred with
                Jaipur in the 18th century. During the Indian Mutiny of 1857, the Europeans of the region, including the British Resident's
                wife, were moved to Nahargarh fort by the king of Jaipur, Sawai Ram Singh, for their protection.
            </p>
        </div>
    </div>
    </div>
    <br>
    <p>You can explore more at : <a href="https://traveltriangle.com/blog/forts-in-rajasthan/">forts</a></p>
    <footer>
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>
</body>
</html>