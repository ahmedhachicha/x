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
                                            <a href="babyitems.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Baby Items > Baby Gear
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BackpacksCarriersbabygear.php" class="linkitem">
                                    <span class="clickchoice">Backpacks & Carriers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Chairsbabygear.php" class="linkitem">
                                    <span class="clickchoice">Chairs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="JumpingExercisersbabygear.php" class="linkitem">
                                    <span class="clickchoice">Jumping Exercisers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Swingsbabygear.php" class="linkitem">
                                    <span class="clickchoice">Swings</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Walkersbabygear.php" class="linkitem">
                                    <span class="clickchoice">Walkers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherbabygear.php" class="linkitem">
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