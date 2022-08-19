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
                                            <a href="babyitems.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Baby Items > Bath & Diapers
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BathTubs.php" class="linkitem">
                                    <span class="clickchoice">Bath Tubs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DiaperBins.php" class="linkitem">
                                    <span class="clickchoice">Diaper Bins</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DiapersWipes.php" class="linkitem">
                                    <span class="clickchoice">Diapers & Wipes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LotionsPowdersShampoos.php" class="linkitem">
                                    <span class="clickchoice">Lotions, Powders & Shampoos</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Potties.php" class="linkitem">
                                    <span class="clickchoice">Potties</span>
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