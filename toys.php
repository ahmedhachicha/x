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
                                                    ... > <?php echo $pageTitle ?> > Toys
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ElectronicToys.php" class="linkitem">
                                    <span class="clickchoice">Electronic & Remote Control Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ActionVehicles.php" class="linkitem">
                                    <span class="clickchoice">Action Figures & Toy Vehicles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OutdoorToys.php" class="linkitem">
                                    <span class="clickchoice">Outdoor Toys & Structures</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Hobbies.php" class="linkitem">
                                    <span class="clickchoice">Hobbies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PretendToys.php" class="linkitem">
                                    <span class="clickchoice">Pretend Play & Preschool Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="EducationalToys.php" class="linkitem">
                                    <span class="clickchoice">Educational Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DollsStuffedAnimals.php" class="linkitem">
                                    <span class="clickchoice">Dolls & Stuffed Animals</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="GamesPuzzles.php" class="linkitem">
                                    <span class="clickchoice">Games & Puzzles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ClassicToys.php" class="linkitem">
                                    <span class="clickchoice">Classic & Vintage Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BuildingToys.php" class="linkitem">
                                    <span class="clickchoice">Building Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othertoys.php" class="linkitem">
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