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
                                            <a href="homeappliances.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Home Appliances > Large Appliances / White Goods
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="airconditioners.php" class="linkitem">
                                    <span class="clickchoice">Air Conditioners</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dishwashers.php" class="linkitem">
                                    <span class="clickchoice">Dishwashers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gascylinders.php" class="linkitem">
                                    <span class="clickchoice">Gas Cylinders</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="humidifiers.php" class="linkitem">
                                    <span class="clickchoice">Humidifiers & Air Purifiers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ovensmicrowaves.php" class="linkitem">
                                    <span class="clickchoice">Ovens & Microwaves</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="rangescooking.php" class="linkitem">
                                    <span class="clickchoice">Ranges & Cooking Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="refrigerators.php" class="linkitem">
                                    <span class="clickchoice">Refrigerators & Freezers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="washersdryers.php" class="linkitem">
                                    <span class="clickchoice">Washers & Dryers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="watercoolers.php" class="linkitem">
                                    <span class="clickchoice">Water Coolers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherlargeapp.php" class="linkitem">
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