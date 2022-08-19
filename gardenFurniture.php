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
                                            <a href="furniturehomegarden.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Furniture, Home & Garden > Garden & Outdoor
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="GardenAcc.php" class="linkitem">
                                    <span class="clickchoice">Garden Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="GardenDecor.php" class="linkitem">
                                    <span class="clickchoice">Garden Decor</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="GardenFurni.php" class="linkitem">
                                    <span class="clickchoice">Garden Furniture</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="GardenStructures.php" class="linkitem">
                                    <span class="clickchoice">Garden Structures & Fences</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="JacuzzisGarden.php" class="linkitem">
                                    <span class="clickchoice">Jacuzzis & Pools</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PlantsGarden.php" class="linkitem">
                                    <span class="clickchoice">Plants</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherGarden.php" class="linkitem">
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