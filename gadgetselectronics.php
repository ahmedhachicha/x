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
                                                    ... > <?php echo $pageTitle ?> > Electronics >  Gadgets
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="calculators.php" class="linkitem">
                                    <span class="clickchoice">Calculators</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dictaphones.php" class="linkitem">
                                    <span class="clickchoice">Dictaphones</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="digitalclocks.php" class="linkitem">
                                    <span class="clickchoice">Digital Clocks/Radios</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="digitalscales.php" class="linkitem">
                                    <span class="clickchoice">Digital Scales</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gpsnavigation.php" class="linkitem">
                                    <span class="clickchoice">GPS Navigation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="landline.php" class="linkitem">
                                    <span class="clickchoice">Landline Telephones</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="surveillance.php" class="linkitem">
                                    <span class="clickchoice">Surveillance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ebookreaders.php" class="linkitem">
                                    <span class="clickchoice">eBook Readers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othergadgets.php" class="linkitem">
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