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
                                            <a href="jewelrywatches.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Jewelry & Watches > Women's Jewelry
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BodyJewelry.php" class="linkitem">
                                    <span class="clickchoice">Body Jewelry</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Bracelets.php" class="linkitem">
                                    <span class="clickchoice">Bracelets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Earrings.php" class="linkitem">
                                    <span class="clickchoice">Earrings</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="EthnicArtisanJewelry.php" class="linkitem">
                                    <span class="clickchoice">Ethnic & Artisan Jewelry</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HairJewelry.php" class="linkitem">
                                    <span class="clickchoice">Hair Jewelry</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PinsBrooches.php" class="linkitem">
                                    <span class="clickchoice">Pins & Brooches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Rings.php" class="linkitem">
                                    <span class="clickchoice">Rings</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherwomenshewelry.php" class="linkitem">
                                    <span class="clickchoice">Other</span>
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