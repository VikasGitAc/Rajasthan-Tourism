<?php session_start(); ?>
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

<body class="back2">
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
    <h2>Fairs and Festivals</h2>
    <div class="ghagra">
        <h2 class="padharo">Padharo mare des</h2>
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
            <img src="./Images/Desert Festival.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>DESERT FESTIVAL - 2022</h3>
            <p> Dates: 14-16 February </p>
            <br>
            <p>Once a year, the empty sands around Jaisalmer come alive with a mesmerising performance on the sand dunes in the form of the Desert Festival.
                The festival, organised by the Department of Tourism around January-February, goes on for three whole days and lets you enjoy the rich and colourful Rajasthani folk culture.
                Rajasthani men and tall, beautiful women dressed in their best and brightest costumes dance and sing ballads of valour, romance and tragedy, while traditional musicians attempt to outdo each other to showcase their musical superiority.
                The high points of the festival are puppeteers, acrobats, camel tattoo shows, camel races, camel polo, traditional processions, camel mounted bands, folk dances, etc.</p>
            <br>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="./Images/Gangaur.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>GANGAUR FESTIVAL - 2022</h3>
            <p> Dates: 4-5 April </p>
            <p>
                Gangaur is one of the most important festivals in Rajasthan. In some form or the other, it is celebrated all over Rajasthan.
                “Gan” is a synonym for Lord Shiva & “Gauri” or “Gaur” stands for Goddess Parvati, the heavenly consort of Lord Shiva.
                Gangaur celebrates the union of the two and is a symbol of conjugal & marital happiness.
                Gangaur is celebrated in the month of Chaitra (March-April), the first month of the Hindu calendar.
                This month marks the end of winter & the onset of spring. This festival is celebrated especially by women, who worship clay idols of “Gan” & “Gauri” in their houses.
                These idols are worshipped by unmarried girls who seek the blessings of Gan & Gauri for a good husband, while the married women pray for the good health and long life of their husbands.
                This worship which starts from the first day of the chaitra month culminates on the 18th day into Gangaur festival with a great religious fervor.
                On the eve of Gangaur festival, women decorate their palms and fingers with henna. The idols of Gan and Gauri are immersed in a pond or in a nearby lake on the last day of the festival. A traditional procession of Gangaur commences form the Zanani-Deodhi of the City Palace, passing through Tripolia Bazaar, Chhoti Chaupar, Gangauri Bazaar, Chaugan stadium and finally converges near the Talkatora.
                The procession is headed by a colorful pageantry of old palanquins, chariots, bullock carts and performing folk artists.
            </p>
        </div>
    </div>
    <br><br>
    <div class="contain">
        <div class="image">
            <img src="./Images/Abhaneri.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>ABHANERI FESTIVAL - 2022</h3>
            <p> Dates: 27-28 September </p>
            <p>
                ‘Abhaneri festival’ is named after the village Abhaneri in the Dausa district which is around 90 km from Jaipur on the Agra road.
                This two-day festival has gained immense popularity amongst the tourists around the globe.
                This year, it will commence from 17th September to 19th September with various Rajasthani & local folk performances like Kachhi Ghori, Kalbeliya, Ghoomar, and Bhawai.
                Festival was initiated by Rajasthan Tourism in 2008, it is of great significance for Rajasthan. The village of Abhaneri was originally named Abha Nagri, meaning "city of brightness”.
                The place is popular for the Chand Baori-step well, one of the largest step wells built over a thousand years ago.
                Be a part of the celebrations at Abhaneri and dip into the rustic charm of traditional Rajasthani music.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="./Images/Dussehra.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>DUSSEHRA - 2022 - 2022</h3>
            <p> Dates: 5-22 October </p>
            <p>
                Dussehra is a Hindu festival celebrated all over the country. As the name suggests, it is the ‘Tenth Day’ of the fierce battle fought; when Lord Rama killed King Ravana.
                This holy day marks the victory of good over evil. The Dussehra Festival of Kota is quite a unique experience for both, the residents and tourists.
                Villagers dress themselves in colourful traditional wear and join long processions to offer their prayers to Lord Rama. Cultural programmes are organised and include scintillating performances by well-known artists.
                However, the highlight of the festivities is the theatrical representation of the encounter popularly known as ‘Ramleela’.
                The drama is so highly anticipated among the locals that spectators start chanting the name of Lord Rama during the show.
                The climax of the show holds most appeal as it ends with setting alight gigantic effigies of the 10-headed Ravana along with his brother Kumbhkarana and his son Meghnath.
                These 75-feet tall statues are stuffed with crackers and once set on fire, they burst to create an extravagant show.
            </p>

        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="./Images/pushkar fair.jpg" class="ok" />
        </div>
        <div class="text">
            <h3>pushkar FAIR - 2022</h3>
            <p> Dates: 1-8 November </p>
            <p>
                The Pushkar Fair (Pushkar Camel Fair) or Pushkar Mela, as it is locally known as, is an annual weeklong camel and livestock fair held in the town of Pushkar between the months of October and November.
                It is one of the world's largest camel fairs. Apart from the buying and selling of livestock, it has become an important tourist attraction.
                Competitions such as the ‘matka phod’, ‘longest moustache’ and ‘bridal competition’ are the main draws for this fair which attracts thousands of tourists.
                In recent years, the fair has also included an exhibition cricket match between the local Pushkar Club and a team of foreign tourists.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="./Images/Bundi.jpg" class="ok" />
        </div>
        <div class="text">
            <h1>BUNDI FESTIVAL - 2022</h1>
            <p> Dates: 11-13 November </p>
            <p>
                The Bundi Festival is celebrated in the month of Kartik (October-November) and includes several spiritual and traditional activities.
                It is a remarkable cluster of traditional art, culture and craftsmanship and visitors are left charmed by its magnificence.
                The program includes a colourful Shobha Yatra, arts & crafts fair, ethnic sports, cultural exhibition, classical music & dance program, turban competitions, bridal clothing, musical band competitions, and a sparkling fireworks display.
                Early in the morning, after the full moon night of Kartik Purnima, women and men clad in attractive colourful costumes light diyas or lamps on the banks of River Chambal and seek blessings.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="contain">
        <div class="image">
            <img src="./Images/Kolayat Fair.jpg" class="ok" />
        </div>
        <div class="text">
            <h1>KOLAYAT FAIR - 2022</h1>
            <p> Dates: 28-30 November </p>
            <p>
                The Kolayat Fair of Bikaner holds great importance for the locals who eagerly await it. Tourists also experience a great time as the fair is celebrated on an expansive scale.
                Also known as ‘Kapil Muni Fair’, it is held in the month of November. The pomp and show of the fair is not its only attraction as it also possesses great religious significance.
                A large number of devotees visit the fair to take a holy dip in the Kolayat Lake. It is believed that a holy dip can absolve them of all their sins.
            </p>
        </div>
    </div>
    <p>You can explore more at : <a href="https://www.rajasthantourplanner.com/Fair-Festival/index.html">festivals</a></p>
    <footer>
    <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
    </footer>
</body>
</html>