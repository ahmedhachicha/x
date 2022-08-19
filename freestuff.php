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
                                                    ... > <?php echo $pageTitle ?> > Free Stuff
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="FurnitureStuff.php" class="linkitem">
                                    <span class="clickchoice">Furniture, Home & Garden</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HomeStuff.php" class="linkitem">
                                    <span class="clickchoice">Home Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BabyStuff.php" class="linkitem">
                                    <span class="clickchoice">Baby Items</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ElectronicsStuff.php" class="linkitem">
                                    <span class="clickchoice">Electronics</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ClothingStuff.php" class="linkitem">
                                    <span class="clickchoice">Clothing & Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BooksStuff.php" class="linkitem">
                                    <span class="clickchoice">Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SportsStuff.php" class="linkitem">
                                    <span class="clickchoice">Sports Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherStuff.php" class="linkitem">
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