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
                                            <a href="clothingaccessories.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Clothing & Accessories > Handbags, Bags & Wallets
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="AthleticBagshand.php" class="linkitem">
                                    <span class="clickchoice">Athletic Bags</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Bagshand.php" class="linkitem">
                                    <span class="clickchoice">Bags</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Briefcaseshand.php" class="linkitem">
                                    <span class="clickchoice">Briefcases</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MensWalletshand.php" class="linkitem">
                                    <span class="clickchoice">Mens Wallets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WomensHandbagshand.php" class="linkitem">
                                    <span class="clickchoice">Women's Handbags</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WomensWalletshand.php" class="linkitem">
                                    <span class="clickchoice">Women's Wallets</span>
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