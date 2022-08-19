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
                                            <a href="pets.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Pets > Pet Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="AquariumsFishReptileSupplies.php" class="linkitem">
                                    <span class="clickchoice">Aquariums & Fish/Reptile Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BirdSupplies.php" class="linkitem">
                                    <span class="clickchoice">Bird Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CatSupplies.php" class="linkitem">
                                    <span class="clickchoice">Cat Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DogSupplies.php" class="linkitem">
                                    <span class="clickchoice">Dog Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="RabbitRodentSupplies.php" class="linkitem">
                                    <span class="clickchoice">Rabbit & Rodent Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherPetSupplies.php" class="linkitem">
                                    <span class="clickchoice">Other Pet Supplies</span>
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