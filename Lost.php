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
                                            <a href="lostfound.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Lost/Found > Lost
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="jewelryLost.php" class="linkitem">
                                    <span class="clickchoice">Jewelry, Watches & Sunglasses</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="keysLost.php" class="linkitem">
                                    <span class="clickchoice">Keys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="mobileLost.php" class="linkitem">
                                    <span class="clickchoice">Mobile Phone</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="passportLost.php" class="linkitem">
                                    <span class="clickchoice">Passport & Documents</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="petsLost.php" class="linkitem">
                                    <span class="clickchoice">Pets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="walletLost.php" class="linkitem">
                                    <span class="clickchoice">Wallet</span>
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