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
                                            <a href="music.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Music > Digital
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ArabicDigital.php" class="linkitem">
                                    <span class="clickchoice">Arabic</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CountryDigital.php" class="linkitem">
                                    <span class="clickchoice">Country</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="JazzDigital.php" class="linkitem">
                                    <span class="clickchoice">Jazz</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LatinDigital.php" class="linkitem">
                                    <span class="clickchoice">Latin</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MetalDigital.php" class="linkitem">
                                    <span class="clickchoice">Metal</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="rockDigital.php" class="linkitem">
                                    <span class="clickchoice">Rock & Indie Rock</span>
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