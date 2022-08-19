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
                                                    ... > <?php echo $pageTitle ?> > Baby Items > Nursery Furniture & Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>


                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BabyDressers.php" class="linkitem">
                                    <span class="clickchoice">Baby Dressers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BassinetsCradlesRockers.php" class="linkitem">
                                    <span class="clickchoice">Bassinets, Cradles & Rockers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ChangingTables.php" class="linkitem">
                                    <span class="clickchoice">Changing Tables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Cribs.php" class="linkitem">
                                    <span class="clickchoice">Cribs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NurseryBedding.php" class="linkitem">
                                    <span class="clickchoice">Nursery Bedding</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NurseryDecorAccessories.php" class="linkitem">
                                    <span class="clickchoice">Nursery Decor & Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NurseryFurnitureSets.php" class="linkitem">
                                    <span class="clickchoice">Nursery Furniture Sets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherNurseryFurnitureAccessories.php" class="linkitem">
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