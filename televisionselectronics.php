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
                                            <a href="electronics.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Electronics > Televisions
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="flatpanelelectronics.php" class="linkitem">
                                    <span class="clickchoice">Flat Panel</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lcdelectronics.php" class="linkitem">
                                    <span class="clickchoice">LCD</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ledlcdelectronics.php" class="linkitem">
                                    <span class="clickchoice">LED LCD</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="oledtvselectronics.php" class="linkitem">
                                    <span class="clickchoice">OLED TVs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="plasmaelectronics.php" class="linkitem">
                                    <span class="clickchoice">Plasma</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="projectionelectronics.php" class="linkitem">
                                    <span class="clickchoice">Projection</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="standardcrtelectronics.php" class="linkitem">
                                    <span class="clickchoice">Standard CRT</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othertelevisionelectronics.php" class="linkitem">
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