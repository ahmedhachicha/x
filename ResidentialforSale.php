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
                                                    ... > <?php echo $pageTitle ?> > Residential for Sale
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ApartmentforSale.php" class="linkitem">
                                    <span class="clickchoice">Apartment for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="VillaHouseforSale.php" class="linkitem">
                                    <span class="clickchoice">Villa/House for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="TownhouseforSale.php" class="linkitem">
                                    <span class="clickchoice">Townhouse</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PenthouseforSale.php" class="linkitem">
                                    <span class="clickchoice">Penthouse</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ResidentialBuildingforSale.php" class="linkitem">
                                    <span class="clickchoice">Residential Building</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ResidentialFloorforSale.php" class="linkitem">
                                    <span class="clickchoice">Residential Floor</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="VillaCompoundforSale.php" class="linkitem">
                                    <span class="clickchoice">Villa Compound</span>
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