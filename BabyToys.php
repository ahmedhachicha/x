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
                                                    ... > <?php echo $pageTitle ?> > Baby Items > Baby Toys
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ActivityToys.php" class="linkitem">
                                    <span class="clickchoice">Activity Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CribToys.php" class="linkitem">
                                    <span class="clickchoice">Crib Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DevelopmentLearningToys.php" class="linkitem">
                                    <span class="clickchoice">Development/Learning Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PlushSoftToys.php" class="linkitem">
                                    <span class="clickchoice">Plush/Soft Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="RattlesTeethers.php" class="linkitem">
                                    <span class="clickchoice">Rattles & Teethers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherbadytoys.php" class="linkitem">
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