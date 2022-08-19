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
                                            <a href="furniturehomegarden.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Furniture, Home & Garden > Rugs & Carpets
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="AbstractRugs.php" class="linkitem">
                                    <span class="clickchoice">Abstract/Modern</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="AnimalRugs.php" class="linkitem">
                                    <span class="clickchoice">Animal Skin</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="AsianRugs.php" class="linkitem">
                                    <span class="clickchoice">Asian</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ChildrenRugs.php" class="linkitem">
                                    <span class="clickchoice">Children</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="EuropeanRugs.php" class="linkitem">
                                    <span class="clickchoice">European/Classical</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MiddleRugs.php" class="linkitem">
                                    <span class="clickchoice">Middle Eastern/Indian</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SolidRugs.php" class="linkitem">
                                    <span class="clickchoice">Solid Color</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherRugs.php" class="linkitem">
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