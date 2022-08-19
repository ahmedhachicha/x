<?php 
    ob_start();
    session_start();
    $pageTitle = 'Property for Sale';
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
                                            <a href="forsale.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Commercial for Sale
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Officecomsale.php" class="linkitem">
                                    <span class="clickchoice">Office for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Retailcomsale.php" class="linkitem">
                                    <span class="clickchoice">Retail for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Industrialcomsale.php" class="linkitem">
                                    <span class="clickchoice">Industrial for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Staffcomsale.php" class="linkitem">
                                    <span class="clickchoice">Staff Accomm for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Shopcomsale.php" class="linkitem">
                                    <span class="clickchoice">Shop</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Warehousecomsale.php" class="linkitem">
                                    <span class="clickchoice">Warehouse</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="floorcomsale.php" class="linkitem">
                                    <span class="clickchoice">Commercial Floor</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Buildingcomsale.php" class="linkitem">
                                    <span class="clickchoice">Commercial Building</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Villacomsale.php" class="linkitem">
                                    <span class="clickchoice">Commercial Villa</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Factoryforsal.php" class="linkitem">
                                    <span class="clickchoice">Factory</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherCommercialsale.php" class="linkitem">
                                    <span class="clickchoice">Other</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Showroomcomsale.php" class="linkitem">
                                    <span class="clickchoice">Showroom</span>
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