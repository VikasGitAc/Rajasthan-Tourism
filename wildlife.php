<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Rajasthan wildlife</title>
        <meta charset="utf-8" />
        <meta name="description" content="Love travelling?The official website for planning your vacations in Rajasthan.Here you can find about heritage,festivals,wildlife and hotels of Rajasthan.">
        <link rel="icon" type="image/x-icon" href="./Images/favi.ico">
        <link rel="stylesheet" type="text/css" href="./css/pagestyle.css">
        <link rel="stylesheet" type="text/css" href="./css/form.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css ">
        <link rel="stylesheet" type="text/css" href="./css/tabs.css">
    </head>
    <body class="back1">
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
        <h2>Wildlife Tourism Rajasthan</h2>
        <h2 class="wild">Jaane Kya Dikh Jaye</h2>
        <div>
            <p class="info">Rajasthan wildlife tour is really a benevolent experience as it lets you steep deep
                into the lush foliage of the major sanctuaries and wildlife reserves which is heaven for
                the royal tigers along with the abundance of species like leopard, village dogs, assess
                , calves and goats. Above all, the Rajasthan wildlife tourism brings the ultimate sighting
                of thousands of species of birds including the migratory one.</p>
        </div>
        <br>
        <br>
        <div class="contain">
            <div class="image">
                <img src="Images/ranthambore.jpg" class="ok" />
            </div>
            <div class="text">
                <h3>Ranthambore National Park</h3>
                <p>Ranthambore National Park is one of the star attractions of wildlife tourism in Rajasthan.
                    Ranthambore is located just 180 km away from Jaipur.It is best described as a tiger friendly
                    land that proudly preserves the most famous tigers in India, which are identified by the distinguished
                    marks on their body and ruling territory.</p>
                <p>November to March is the main tourism season of Ranthambore national park, as all the safari gates remain
                    open in this time period. Ranthambore park remains closed during the monsoon season from July to mid-October,
                    but tourists can also visit it during this time as a few gates are partially opened.</p>
                <h3>Safari Timings</h3>
                <table>
                    <tr>
                        <th> S.No. </th>
                        <th> Month </th>
                        <th> Morning Trip </th>
                        <th>Evening Trip </th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> 1 oct to 31 oct </td>
                        <td> 7:00 AM to 10:30 AM</td>
                        <td>2:30 PM to 06:00 PM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> 1 Nov to 31 Jan</td>

                        <td> 7:00 AM to 10:30 AM</td>
                        <td> 02:00 PM to 05:30 PM</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> 1 Feb to 31 March </td>
                        <td>6:30 AM to 10:30 AM </td>
                        <td>02:30 PM to 06:00 PM </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> 1 April to 15 May </td>
                        <td> 6:00 AM to 09:30 AM</td>
                        <td> 03:00 PM to 06:30 PM</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <div class="contain">
            <div class="image">
                <img src="Images/sariska.jpg" class="ok" />
            </div>
            <div class="text">
                <h3>Sariska National Park</h3>
                <p>Nestled amidst the Aravali Hills, the Sariska Tiger Reserve is known for the presence and conservation of tiger
                    species. Covered with deciduous dry forests, Sariska brings amazing topography at the largest area of Rajasthan.</p>
                <p>The center of Sariska is also being famed for Pandupol, one of the retreats of Pandavas and the famous Hanuman temple
                    is the reason for the favorite pilgrimage site.Apart from that Sariska is also renowned for Tal Briksh, the hot water spring.
                    Today, the park is home to numerous carnivores including Leopard, Wild Dog, Jungle Cat, Civets Hyena, Jackal, and Tiger.
                    Their common preys are species like Sambar, Chital, Nilgai, Chausingha, Wild Boar and Langur. Sariska is also well known
                    for its large population of Rhesus Monkeys.Basically, the forest type is tropical, dry, deciduous, and tropical thorn and
                    is regarded as the sole forest patch in the whole world of the western Aravali Hills.</p>
                <p>Jeep safaris in Sariska Tiger Reserve are normally provided twice a day and are being accompanied by the forest department
                    guards with the vehicles being protected with grills. The best time to visit Sariska Reserve is during the months of October to
                    June with rest of the season being closed, the safari timings for Sariska are:</p>
                <table>
                    <tr>
                        <th> S.No. </th>
                        <th> Season </th>
                        <th> Morning Trip </th>
                        <th>Evening Trip </th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> Winter </td>
                        <td> 6:00 AM to 10:30 AM</td>
                        <td>2:00 PM to 06:00 PM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> Summer</td>
                        <td> 6:00 AM to 10:00 AM</td>
                        <td> 02:30 PM to 06:30 PM</td>
                    </tr>
                </table>
            </div>
        </div>
        <br><br>
        <div class="contain">
            <div class="image">
                <img src="Images/bharatpur.jpg" class="ok" />
            </div>
            <div class="text">
                <h3>Bharatpur Bird Sanctuary</h3>
                <p> The Bharatpur Bird Sanctuary,also known as Keoladeo National Park , a World Heritage Site, is the perfect home to almost thousands
                    of birds all across the world.
                    Located in Bharatpur, Rajasthan, it's a famous Avifauna Sanctuary that hosts almost thousands of birds
                    especially in winter season to find the migratory species.
                    Nesting indigenous water birds and migratory water birds specifically the Siberian
                    Crane, the Bharatpur Sanctuary also boasts with many species of Sambar, Chital, Nilgai and Boar.
                    The park is also referred as Ghana National Park
                    since 'Ghana' means dense referring to the thick forest that covers the whole Bharatpur area. </p>
                <p>The numerous counts of the bird species are the major attractions for the tourists in Bharatpur. These species fly through distant places like
                    Siberia and Central Asia specifically in winters.
                    Migratory birds at Bharatpur Bird Sanctuary include several species of Cranes, Pelicans, Geese,
                    Ducks, Eagles, Hawks, Shanks, Stints, Wagtails, Warblers, Wheatears, Flycatchers, Buntings, Larks and Pipits, etc.
                    Along with that some major counts of Sambal, Chital, Nilgai and Boar can also be found at the sanctuary.</p>
                <p>The forest in Bahratpur is semi-arid biotype with significant vegetation and that is why the sanctuary is termed as 'Ghana'-thicket.
                    Principally
                    it is a dry deciduous forest type, intermixed with dry grassland in the area where the forest has been degraded.
                    Along with that the forest is also
                    being covered with medium sized trees and shrubs.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="contain">
            <div class="image">
                <img src="Images/desert.jpg" class="ok" />
            </div>
            <div class="text">
                <h3>Desert National Park</h3>
                <p>Desert National Park, located 40 km from Jaisalmer in Rajasthan, is counted as the largest park in the state of Rajasthan. This area offers to be
                    exemplary in its contrasting image of being a barren desert ecosystem and at the same time being home to a plethora of migratory birds.
                    There is a whole range of birds that migrate to this area, since it is near Bharatpur. A variety of Eagles, Vultures, Buzzards, Falcons and many other predatory birds are
                    among the many that migrate to this area.
                    The Great Indian Buzzard is one of the most famous birds found in this region. The area is an ideal spot to explore
                    wildlife thriving in very harsh conditions, and getting to know and spending time amidst the beauty of a very different and harsh nature.</p>

                <p>Desert National Park is extensively covered by sand dunes over large extents. There are ancient lake beds of salt lakes that used to exist long times
                    ago in this part.
                    They are filled with thorny shrubs and the topography of the region hence mostly seems to be unlivable and uninhabitable by flora and fauna.
                    However flora and fauna of different kinds are found to flourish in this region in various seasons, though they are mostly found in the winter season. The best
                    time to visit this place would be the winters and early spring, from the month of November to March. This is the time when the maximum numbers of migratory birds
                    visit this area.</p>

                <p>The best way to get a real feel of the wilderness of this place is by travelling in a Jeep safari, and going into the deserted areas. Wildlife can be extensively
                    spotted. Many tourists also enjoy camping here to spend a considerable amount of time in reading nature, or spending a thrilling time around bonfires. It is an exciting
                    and invigorating experience to be able to visit this place, and take in nature in one of its most unusual and ruthlessly beautiful forms.</p>
            </div>
        </div>
        <br>
        <p>You can explore more at : <a href="https://www.rajasthantourplanner.com/About-Rajasthan/Wildlife-in-Rajasthan.html">wildlife</a></p>
        <footer>
        <p> &copy Winter-2023<a href="">Yogita(6164770)</a></p>
    </p>
    <p> &copy Winter-2023<a href="">Vikas Modi(2102188)</a></p>
    </p>
        </footer>
    </body>
</html>