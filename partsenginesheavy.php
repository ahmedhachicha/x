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
                                                    motors > Heavy Vehicles > Parts & Engines
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="buspartsenginesheavy.php" class="linkitem">
                                    <span>Bus Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cranepartsenginesheavy.php" class="linkitem">
                                    <span>Crane Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="forkliftpartsenginesheavy.php" class="linkitem">
                                    <span>Forklift Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherpartsenginesheavy.php" class="linkitem">
                                    <span>Other Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tankerpartsenginesheavy.php" class="linkitem">
                                    <span>Tanker Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="trailerpartsenginesheavy.php" class="linkitem">
                                    <span>Trailer Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="truckpartsenginesheavy.php" class="linkitem">
                                    <span>Truck Parts</span>
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