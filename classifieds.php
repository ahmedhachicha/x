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
                                            <a href="Ad.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?>
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="electronics.php" class="linkitem">
                                    <span class="clickchoice">Electronics</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="computersnetworkings.php" class="linkitem">
                                    <span class="clickchoice">Computers & Networkings</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="businessindustrial.php" class="linkitem">
                                    <span class="clickchoice">Business & Industrial</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="homeappliances.php" class="linkitem">
                                    <span class="clickchoice">Home Appliances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sportsequipment.php" class="linkitem">
                                    <span class="clickchoice">Sports Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="clothingaccessories.php" class="linkitem">
                                    <span class="clickchoice">Clothing & Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="camerasimaging.php" class="linkitem">
                                    <span class="clickchoice">Cameras & Imaging</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="jewelrywatches.php" class="linkitem">
                                    <span class="clickchoice">Jewelry & Watches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pets.php" class="linkitem">
                                    <span class="clickchoice">Pets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="musicalinstruments.php" class="linkitem">
                                    <span class="clickchoice">Musical Instruments</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gaming.php" class="linkitem">
                                    <span class="clickchoice">Gaming</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="babyitems.php" class="linkitem">
                                    <span class="clickchoice">Baby Items</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="toys.php" class="linkitem">
                                    <span class="clickchoice">Toys</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ticketsvouchers.php" class="linkitem">
                                    <span class="clickchoice">Tickets & Vouchers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="collectibles.php" class="linkitem">
                                    <span class="clickchoice">Collectibles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="books.php" class="linkitem">
                                    <span class="clickchoice">Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="music.php" class="linkitem">
                                    <span class="clickchoice">Music</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="freestuff.php" class="linkitem">
                                    <span class="clickchoice">Free Stuff</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lostfound.php" class="linkitem">
                                    <span class="clickchoice">Lost/Found</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dvdsmovies.php" class="linkitem">
                                    <span class="clickchoice">DVDs & Movies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="furniturehomegarden.php" class="linkitem">
                                    <span class="clickchoice">Furniture, Home & Garden</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="mobilephonestablets.php" class="linkitem">
                                    <span class="clickchoice">Mobile Phones & Tablets</span>
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