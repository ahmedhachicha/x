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
                                                    ... > <?php echo $pageTitle ?> > Furniture, Home & Garden > Furniture
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="armoiresFurniture.php" class="linkitem">
                                    <span class="clickchoice">Armoires & Wardrobes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="bedsFurniture.php" class="linkitem">
                                    <span class="clickchoice">Beds & Bed Sets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="bookcasesFurniture.php" class="linkitem">
                                    <span class="clickchoice">Bookcases</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cabinetsFurniture.php" class="linkitem">
                                    <span class="clickchoice">Cabinets & Cupboards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="chairsFurniture.php" class="linkitem">
                                    <span class="clickchoice">Chairs, Benches & Stools</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="childrensFurniture.php" class="linkitem">
                                    <span class="clickchoice">Childrens Furniture</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="diningFurniture.php" class="linkitem">
                                    <span class="clickchoice">Dining Sets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dressesrsFurniture.php" class="linkitem">
                                    <span class="clickchoice">Dressers & Vanities</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="entretaimentFurniture.php" class="linkitem">
                                    <span class="clickchoice">Entertainment Centers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="kitchenFurniture.php" class="linkitem">
                                    <span class="clickchoice">Kitchen Islands & Carts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="nightstandsFurniture.php" class="linkitem">
                                    <span class="clickchoice">Nightstands</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="officeeFurniture.php" class="linkitem">
                                    <span class="clickchoice">Office Furniture</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sofasFurniture.php" class="linkitem">
                                    <span class="clickchoice">Sofas, Futons, & Lounges</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="TablesFurniture.php" class="linkitem">
                                    <span class="clickchoice">Tables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherFurniture.php" class="linkitem">
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