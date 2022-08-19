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
                                            <a href="classifieds.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Business & Industrial
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="businessesforsale.php" class="linkitem">
                                    <span class="clickchoice">Businesses for Sale</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="construction.php" class="linkitem">
                                    <span class="clickchoice">Construction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="foodbeverage.php" class="linkitem">
                                    <span class="clickchoice">Food & Beverage</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="industrialsupplies.php" class="linkitem">
                                    <span class="clickchoice">Industrial Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="officefurniture.php" class="linkitem">
                                    <span class="clickchoice">Office Furniture & Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="manufacturingbusiness.php" class="linkitem">
                                    <span class="clickchoice">Manufacturing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="electricalequipment.php" class="linkitem">
                                    <span class="clickchoice">Electrical Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="retailservices.php" class="linkitem">
                                    <span class="clickchoice">Retail & Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="healthcare.php" class="linkitem">
                                    <span class="clickchoice">Healthcare & Lab</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="commercialprinting.php" class="linkitem">
                                    <span class="clickchoice">Commercial Printing & Copy Machines</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="packingshipping.php" class="linkitem">
                                    <span class="clickchoice">Packing & Shipping</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="agricultureforestry.php" class="linkitem">
                                    <span class="clickchoice">Agriculture & Forestry</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherbusinessindustrial.php" class="linkitem">
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