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
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking > Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="bagscases.php" class="linkitem">
                                    <span class="clickchoice">Bags & Cases</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="chargerscables.php" class="linkitem">
                                    <span class="clickchoice">Chargers & Cables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dockingstations.php" class="linkitem">
                                    <span class="clickchoice">Docking Stations</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="externalhard.php" class="linkitem">
                                    <span class="clickchoice">External Hard Drives</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="headsetsmicrophones.php" class="linkitem">
                                    <span class="clickchoice">Headsets & Microphones</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="speakers.php" class="linkitem">
                                    <span class="clickchoice">Speakers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                            <a href="webcams.php" class="linkitem">
                                    <span class="clickchoice">Webcams</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otheraccessories.php" class="linkitem">
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