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
                                                    ... > <?php echo $pageTitle ?> > Domestic
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="childcaredomestic.php" class="linkitem">
                                    <span class="clickchoice">Childcare & Nannies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cooksdomestic.php" class="linkitem">
                                    <span class="clickchoice">Cooks</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gardenersdomestic.php" class="linkitem">
                                    <span class="clickchoice">Gardeners & Outdoor Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="maidsdomestic.php" class="linkitem">
                                    <span class="clickchoice">Maids</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pooldomestic.php" class="linkitem">
                                    <span class="clickchoice">Pool maintenance</span>
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