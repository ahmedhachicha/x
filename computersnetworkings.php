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
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="computers.php" class="linkitem">
                                    <span class="clickchoice">Computers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="computercomponents.php" class="linkitem">
                                    <span class="clickchoice">Computer Components</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="accessories.php" class="linkitem">
                                    <span class="clickchoice">Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="networkingcommunication.php" class="linkitem">
                                    <span class="clickchoice">Networking & Communication</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="software.php" class="linkitem">
                                    <span class="clickchoice">Software</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="monitorsperipherals.php" class="linkitem">
                                    <span class="clickchoice">Monitors, Printers & Other Peripherals</span>
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