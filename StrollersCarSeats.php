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
                                                    ... > <?php echo $pageTitle ?> > Baby Items > Strollers & Car Seats
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="CarSeatAccessories.php" class="linkitem">
                                    <span class="clickchoice">Car Seat Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="InfantCarSeats.php" class="linkitem">
                                    <span class="clickchoice">Infant Car Seats</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="JoggingStrollers.php" class="linkitem">
                                    <span class="clickchoice">Jogging Strollers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PramStrollers.php" class="linkitem">
                                    <span class="clickchoice">Pram Strollers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="StandardStrollers.php" class="linkitem">
                                    <span class="clickchoice">Standard Strollers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="StrollerAccessories.php" class="linkitem">
                                    <span class="clickchoice">Stroller Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ToddlerCarSeats.php" class="linkitem">
                                    <span class="clickchoice">Toddler Car Seats</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="TravelSystemStrollers.php" class="linkitem">
                                    <span class="clickchoice">Travel System Strollers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherstroller.php" class="linkitem">
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