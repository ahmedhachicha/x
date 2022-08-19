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
                                                    ... > <?php echo $pageTitle ?> > Home Appliances > Outdoor Appliances
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="blowers.php" class="linkitem">
                                    <span class="clickchoice">Blowers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="charcoalgrills.php" class="linkitem">
                                    <span class="clickchoice">Charcoal Grills</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gasgrills.php" class="linkitem">
                                    <span class="clickchoice">Gas Grills</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="icechests.php" class="linkitem">
                                    <span class="clickchoice">Ice Chests</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lawnmowers.php" class="linkitem">
                                    <span class="clickchoice">Lawnmowers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="powertools.php" class="linkitem">
                                    <span class="clickchoice">Power Tools</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pressurewashers.php" class="linkitem">
                                    <span class="clickchoice">Pressure Washers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otheroutdoorappliances.php" class="linkitem">
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