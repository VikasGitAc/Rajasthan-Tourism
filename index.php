<?php session_start(); ?>
<?php include_once('layouts/front/header.php') ?>
<div class="row">
    <div class="col">
        <h4>RAJASTHAN TOURISM </h4>
    </div>
    <div class="col">
        <a href="heritage.php">
            <div class="card card1">
                <ul class="pic">
                    <li><i class="fa fa-university"></i><h5>HERITAGE</h5></li>
                </ul>
            </div>
        </a>
        <a href="wildlife.php">
            <div class="card card2">
                <ul class="pic">
                    <li><i class="fas fa-paw"></i><h5>WILDLIFE</h5></li>
                </ul>	
            </div>
        </a>
        <a href="festivals.php">  
            <div class="card card3">
                <ul class="pic">
                    <li><i class="fa fa-circle"></i><h5>FESTIVALS<h5></li>
                </ul>
            </div>
        </a>
        <a href="hotels.php">
            <div class="card card4">
                <ul class="pic">
                    <li><i class="fa-solid fa-hotel"></i><h5>HOTELS</h5></li>
                </ul>
            </div>
        </a>
    </div>
</div>
<?php include_once('layouts/front/footer.php') ?>