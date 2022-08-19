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
                                            <a href="classifieds.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Electronics
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="homeelectronics.php" class="linkitem">
                                    <span class="clickchoice">Home Audio & Turntables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="televisionselectronics.php" class="linkitem">
                                    <span class="clickchoice">Televisions</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dvdelectronics.php" class="linkitem">
                                    <span class="clickchoice">DVD & Home Theater</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="accessorieselectronics.php" class="linkitem">
                                    <span class="clickchoice">Electronic Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gadgetselectronics.php" class="linkitem">
                                    <span class="clickchoice">Gadgets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carelectronics.php" class="linkitem">
                                    <span class="clickchoice">Car Electronics</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="playerselectronics.php" class="linkitem">
                                    <span class="clickchoice">Mp3 Players and Portable Audio</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="satelliteelectronics.php" class="linkitem">
                                    <span class="clickchoice">Satellite & Cable TV</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="healthelectronics.php" class="linkitem">
                                    <span class="clickchoice">Health Electronics</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="smartelectronics.php" class="linkitem">
                                    <span class="clickchoice">Smart Home</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wearableelectronics.php" class="linkitem">
                                    <span class="clickchoice">Wearable Technology</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherelectronics.php" class="linkitem">
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