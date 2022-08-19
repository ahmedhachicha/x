<?php 
    ob_start();
    session_start();
    $pageTitle = 'community';
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
                                            <a href="community.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Restoration & Repairs
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="electronicrestoration.php" class="linkitem">
                                    <span class="clickchoice">Electronic Appliances Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="fridgerestoration.php" class="linkitem">
                                    <span class="clickchoice">Fridge Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="furniturerestoration.php" class="linkitem">
                                    <span class="clickchoice">Furniture & Sofa Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="itrepairrestoration.php" class="linkitem">
                                    <span class="clickchoice">IT Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="jewelryrestoration.php" class="linkitem">
                                    <span class="clickchoice">Jewelry & Watches Repairs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="washingrestoration.php" class="linkitem">
                                    <span class="clickchoice">Washing Machine Repair</span>
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