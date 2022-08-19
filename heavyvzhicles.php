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
                                                    motors > Heavy Vehicles 
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="trucksheavy.php" class="linkitem">
                                    <span>Trucks</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="busesheavy.php" class="linkitem">
                                    <span>Buses</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="forkliftsheavy.php" class="linkitem">
                                    <span>Forklifts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="trailersheavy.php" class="linkitem">
                                    <span>Trailers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cranesheavy.php" class="linkitem">
                                    <span>Cranes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tankersheavy.php" class="linkitem">
                                    <span>Tankers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="partsenginesheavy.php" class="linkitem">
                                    <span>Parts & Engines</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherheavy.php" class="linkitem">
                                    <span>Other Heavy Vehicles</span>
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