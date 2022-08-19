<?php 
    ob_start();
    session_start();
    $pageTitle = 'motors';
    include 'init.php';

    if(isset($_SESSION['uid'])){
    ?>

        <div class="container" style="margin-top: 20px;text-align:center;">
            <div class="row content">
                <h3 style="color: #175DE3;font-weight: 700;">Now choose the right category for your ad:</h3>
                <div id="tax-category-list">
                    <div id="tax-breadcrumbs-container">
                        <ul class="category-breadcrumb " style="list-style: none;">
                                <li class="category-breadcrumb__item liitem">
                                            <a href="motors.php" class="category-breadcrumb__item-link linkitem">
                                                    ...<span class="ionlink"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                                                    motors > motorcycles
                                            </a>
                                </li><hr>
                        </ul>
                    </div>

                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="sportbike.php" class="linkitem">
                                    <span>Sport Bike</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="adventuretouring.php" class="linkitem">
                                    <span>Adventure / Touring</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cruiserchopper.php" class="linkitem">
                                    <span>Cruiser / Chopper</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="offroad.php" class="linkitem">
                                    <span>Off-Road</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="scooter.php" class="linkitem">
                                    <span>Scooter</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="standardcommuter.php" class="linkitem">
                                    <span>Standard / Commuter</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="caferacer.php" class="linkitem">
                                    <span>Café racer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="trike.php" class="linkitem">
                                    <span>Trike</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Trailer.php" class="linkitem">
                                    <span>Trailer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Karting.php" class="linkitem">
                                    <span>Karting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="moped.php" class="linkitem">
                                    <span>Mo-Ped</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="other.php" class="linkitem">
                                    <span>Other</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    <?php

    } 
        else  {
        header('Location:login.php');
        exit();
                }
    include 'includes/templates/footer.php';
    ob_end_flush();
?>