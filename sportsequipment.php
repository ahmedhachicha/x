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
                                                    ... > <?php echo $pageTitle ?> > Sports Equipment
                                            </a>
                                </li><hr>
                        </ul>
                    </div>

                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Cycling.php" class="linkitem">
                                    <span class="clickchoice">Cycling</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Exercise.php" class="linkitem">
                                    <span class="clickchoice">Exercise Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Watersports.php" class="linkitem">
                                    <span class="clickchoice">Water Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Campinghiking.php" class="linkitem">
                                    <span class="clickchoice">Camping & Hiking</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Golf.php" class="linkitem">
                                    <span class="clickchoice">Golf</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Indoorsports.php" class="linkitem">
                                    <span class="clickchoice">Indoor Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Teamsports.php" class="linkitem">
                                    <span class="clickchoice">Team Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tennissports.php" class="linkitem">
                                    <span class="clickchoice">Tennis & Racquet Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wintersports.php" class="linkitem">
                                    <span class="clickchoice">Winter Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othersportsequipment.php" class="linkitem">
                                    <span class="clickchoice">Other Sports</span>
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