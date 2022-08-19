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
                                            <a href="heavyvzhicles.php" class="category-breadcrumb__item-link linkitem">
                                                    ...<span class="ionlink"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                                                    motors > Heavy Vehicles > Trucks
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="cabchassis.php" class="linkitem">
                                    <span>Cab-Chassis</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cherrypicker.php" class="linkitem">
                                    <span>Cherry Picker</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cranetruck.php" class="linkitem">
                                    <span>Crane Truck</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="curtainslider.php" class="linkitem">
                                    <span>Curtain Sider</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dyalcab.php" class="linkitem">
                                    <span>Dual Cab</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="firetruck.php" class="linkitem">
                                    <span>Fire Truck</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="primemover.php" class="linkitem">
                                    <span>Prime Mover</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="refrigeratedtruck.php" class="linkitem">
                                    <span>Refrigerated Truck</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="servicevehicle.php" class="linkitem">
                                    <span>Service Vehicle</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tipper.php" class="linkitem">
                                    <span>Tipper</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="towtilt.php" class="linkitem">
                                    <span>Tow & Tilt</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wrecking.php" class="linkitem">
                                    <span>Wrecking</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othertruck.php" class="linkitem">
                                    <span>Other Truck</span>
                                </a>
                            </li><hr>
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