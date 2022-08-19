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
                                            <a href="sportsequipment.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Sports Equipment > Water Sports
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="divingsnorkeling.php" class="linkitem">
                                    <span class="clickchoice">Diving & Snorkeling</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="fishing.php" class="linkitem">
                                    <span class="clickchoice">Fishing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="kayaking.php" class="linkitem">
                                    <span class="clickchoice">Kayaking & Rafting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="kitesurfing.php" class="linkitem">
                                    <span class="clickchoice">Kitesurfing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Surfing.php" class="linkitem">
                                    <span class="clickchoice">Surfing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Swimming.php" class="linkitem">
                                    <span class="clickchoice">Swimming</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Wakeboarding.php" class="linkitem">
                                    <span class="clickchoice">Wakeboarding & Waterskiing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Wetsuits.php" class="linkitem">
                                    <span class="clickchoice">Wetsuits & Drysuits</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherwatersports.php" class="linkitem">
                                    <span class="clickchoice">Other</span>
                                </a>
                            </li><hr>
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