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
                                                    motors > Auto Accessories & Parts > Apparel, Merchandise & Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="apparels.php" class="linkitem">
                                    <span>Apparels</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="boataccessories.php" class="linkitem">
                                    <span>Boat Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="caraccessories.php" class="linkitem">
                                    <span>Car/4x4 Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="merchandise.php" class="linkitem">
                                    <span>Merchandise</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="motorcycleaccessories.php" class="linkitem">
                                    <span>Motorcycle Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherapparelmeracc.php" class="linkitem">
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