<?php 
    ob_start();
    session_start();
    $pageTitle = 'motors';
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
                                            <a href="boats.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Boats > Motorboats
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="fishingboat.php" class="linkitem">
                                    <span class="clickchoice">Fishing Boat</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="outboarddaboat.php" class="linkitem">
                                    <span class="clickchoice">Outboard Dayboat</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pontoonhoseboat.php" class="linkitem">
                                    <span class="clickchoice">Pontoon/House Boat</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="racingboat.php" class="linkitem">
                                    <span class="clickchoice">Racing Boat</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sellerminiyachtboat.php" class="linkitem">
                                    <span class="clickchoice">Sleeper/Mini Yacht</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wakeboardingskiboat.php" class="linkitem">
                                    <span class="clickchoice">Wakeboarding/Ski Boat</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="yachtboat.php" class="linkitem">
                                    <span class="clickchoice">Yacht</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othermotorboats.php" class="linkitem">
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