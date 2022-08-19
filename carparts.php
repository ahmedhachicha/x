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
                                            <a href="autoAccparts.php" class="category-breadcrumb__item-link linkitem">
                                                    ...<span class="ionlink"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                                                    motors > Auto Accessories & Parts > Car/4x4 Parts
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="heatingparts.php" class="linkitem">
                                    <span>A/C & Heating Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="batteries.php" class="linkitem">
                                    <span>Batteries</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="brakes.php" class="linkitem">
                                    <span>Brakes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="enginecomputerparts.php" class="linkitem">
                                    <span>Engine & Computer Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="exhaustair.php" class="linkitem">
                                    <span>Exhaust/Air Intake</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="exteriorparts.php" class="linkitem">
                                    <span>Exterior Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="interiorparts.php" class="linkitem">
                                    <span>Interior Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lighting.php" class="linkitem">
                                    <span>Lighting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="suspention.php" class="linkitem">
                                    <span>Suspension</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wheelstires.php" class="linkitem">
                                    <span>Wheels/Tires</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othercarparts.php" class="linkitem">
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