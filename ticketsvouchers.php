<?php 
    ob_start();
    session_start();
    $pageTitle = 'Classifieds';
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
                                                    ... > <?php echo $pageTitle ?> > Tickets & Vouchers
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Concertstickets.php" class="linkitem">
                                    <span class="clickchoice">Concerts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SportingEventstickets.php" class="linkitem">
                                    <span class="clickchoice">Sporting Events</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Traveltickets.php" class="linkitem">
                                    <span class="clickchoice">Travel</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Eventstickets.php" class="linkitem">
                                    <span class="clickchoice">Events</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Moviestickets.php" class="linkitem">
                                    <span class="clickchoice">Movies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Theatertickets.php" class="linkitem">
                                    <span class="clickchoice">Theater</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ActivitiesAttractionstickets.php" class="linkitem">
                                    <span class="clickchoice">Activities & Attractions</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="VouchersGiftCardstickets.php" class="linkitem">
                                    <span class="clickchoice">Vouchers & Gift Cards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othertickets.php" class="linkitem">
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