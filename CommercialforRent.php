<?php 
    ob_start();
    session_start();
    $pageTitle = 'Property for Rent';
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
                                            <a href="forrent.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Commercial for Rent
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="officeforrent.php" class="linkitem">
                                    <span class="clickchoice">Office for Rent</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="industrialforrent.php" class="linkitem">
                                    <span class="clickchoice">Industrial for Rent</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="retailforrent.php" class="linkitem">
                                    <span class="clickchoice">Retail for Rent</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="staffforrent.php" class="linkitem">
                                    <span class="clickchoice">Staff Accomm for Rent</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="shopforrent.php" class="linkitem">
                                    <span class="clickchoice">Shop</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="warehouseforrent.php" class="linkitem">
                                    <span class="clickchoice">Warehouse</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="commercialfloorforrent.php" class="linkitem">
                                    <span class="clickchoice">Commercial Floor</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="commercialvillaforrent.php" class="linkitem">
                                    <span class="clickchoice">Commercial Villa</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othercommforrent.php" class="linkitem">
                                    <span class="clickchoice">Other</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="bulkunitforrent.php" class="linkitem">
                                    <span class="clickchoice">Bulk Unit</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="commercialplotforrent.php" class="linkitem">
                                    <span class="clickchoice">Commercial Plot</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="factoryforrent.php" class="linkitem">
                                    <span class="clickchoice">Factory</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="industiallandforrent.php" class="linkitem">
                                    <span class="clickchoice">Industrial Land</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="mixeduseforrent.php" class="linkitem">
                                    <span class="clickchoice">Mixed Use Land</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="showroomforrent.php" class="linkitem">
                                    <span class="clickchoice">Showroom</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="commercialbuildingforrent.php" class="linkitem">
                                    <span class="clickchoice">Commercial Building</span>
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