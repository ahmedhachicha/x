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
                                            <a href="computersnetworkings.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking > Monitors, Printers & Other Peripherals
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="keyboardsmonitor.php" class="linkitem">
                                    <span class="clickchoice">Keyboards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="micemonitor.php" class="linkitem">
                                    <span class="clickchoice">Mice</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="monitorsmonitor.php" class="linkitem">
                                    <span class="clickchoice">Monitors</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="printersmonitor.php" class="linkitem">
                                    <span class="clickchoice">Printers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="projectorsmonitor.php" class="linkitem">
                                    <span class="clickchoice">Projectors</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="scannersmonitor.php" class="linkitem">
                                    <span class="clickchoice">Scanners</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othermonitor.php" class="linkitem">
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