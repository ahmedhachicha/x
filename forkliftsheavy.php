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
                                                    motors > Heavy Vehicles > Forklifts
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="allterrainforklitsheavy.php" class="linkitem">
                                    <span>All Terrain</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dieselforklitsheavy.php" class="linkitem">
                                    <span>Diesel</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="electricforklitsheavy.php" class="linkitem">
                                    <span>Electric</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherforklitsheavy.php" class="linkitem">
                                    <span>Other</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sideloaderforklitsheavy.php" class="linkitem">
                                    <span>Side Loader</span>
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