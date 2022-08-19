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
                                            <a href="mobilephonestablets.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Mobile Phones & Tabletsn > Mobile Phone & Tablet Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Batteriesmpt.php" class="linkitem">
                                    <span class="clickchoice">Batteries</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cablesmpt.php" class="linkitem">
                                    <span class="clickchoice">Cables & Adapters</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carkitsmpt.php" class="linkitem">
                                    <span class="clickchoice">Car Kits</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="casesmpt.php" class="linkitem">
                                    <span class="clickchoice">Cases & Sleeves</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="chargersmpt.php" class="linkitem">
                                    <span class="clickchoice">Chargers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gimbalsmpt.php" class="linkitem">
                                    <span class="clickchoice">Gimbals & Selfie Sticks</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="headsets.php" class="linkitem">
                                    <span class="clickchoice">Headsets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othermptAcc.php" class="linkitem">
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