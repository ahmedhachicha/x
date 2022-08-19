<?php 
    ob_start();
    session_start();
    $pageTitle = 'classifieds';
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
                                            <a href="camerasimaging.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Cameras & Imaging > Lenses, Filters & Lighting
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="FilterAccessories.php" class="linkitem">
                                    <span class="clickchoice">Filter Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Filters.php" class="linkitem">
                                    <span class="clickchoice">Filters</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FlashAccessories.php" class="linkitem">
                                    <span class="clickchoice">Flash Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FlashUnits.php" class="linkitem">
                                    <span class="clickchoice">Flash Units</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LensAccessories.php" class="linkitem">
                                    <span class="clickchoice">Lens Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Lenses.php" class="linkitem">
                                    <span class="clickchoice">Lenses</span>
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