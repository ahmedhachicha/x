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
                                                    ... > <?php echo $pageTitle ?> > Home Appliances
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="largeappwhitegoods.php" class="linkitem">
                                    <span class="clickchoice">Large Appliances / White Goods</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="smallkitchen.php" class="linkitem">
                                    <span class="clickchoice">Small Kitchen Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="outdoorappliances.php" class="linkitem">
                                    <span class="clickchoice">Outdoor Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="smallbathroom.php" class="linkitem">
                                    <span class="clickchoice">Small Bathroom Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ironssewing.php" class="linkitem">
                                    <span class="clickchoice">Irons & Sewing Machines</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="vaccumsfloorcare.php" class="linkitem">
                                    <span class="clickchoice">Vaccums & Floor Care</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherhomeappliances.php" class="linkitem">
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