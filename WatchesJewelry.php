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
                                                    ... > <?php echo $pageTitle ?> > Jewelry & Watches > Watches
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ChildrensWatches.php" class="linkitem">
                                    <span class="clickchoice">Children's Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MensSportWatches.php" class="linkitem">
                                    <span class="clickchoice">Men's Sport Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MensWatches.php" class="linkitem">
                                    <span class="clickchoice">Men's Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PocketWatchesStopWatches.php" class="linkitem">
                                    <span class="clickchoice">Pocket Watches & Stop Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WomensSportWatches.php" class="linkitem">
                                    <span class="clickchoice">Women's Sport Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WomensWatches.php" class="linkitem">
                                    <span class="clickchoice">Women's Watches</span>
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