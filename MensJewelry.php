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
                                                    ... > <?php echo $pageTitle ?> > Jewelry & Watches > Men's Jewelry
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BeltBucklesjewelry.php" class="linkitem">
                                    <span class="clickchoice">Belt Buckles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Braceletsjewelry.php" class="linkitem">
                                    <span class="clickchoice">Bracelets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ChainsNecklacesjewelry.php" class="linkitem">
                                    <span class="clickchoice">Chains & Necklaces</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Cufflinksjewelry.php" class="linkitem">
                                    <span class="clickchoice">Cufflinks</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PinsTieClipsjewelry.php" class="linkitem">
                                    <span class="clickchoice">Pins & Tie Clips</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Ringsjewelry.php" class="linkitem">
                                    <span class="clickchoice">Rings</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Studsjewelry.php" class="linkitem">
                                    <span class="clickchoice">Studs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherjewelry.php" class="linkitem">
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