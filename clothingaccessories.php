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
                                                    ... > <?php echo $pageTitle ?> > Clothing & Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="shoesfootwear.php" class="linkitem">
                                    <span class="clickchoice">Shoes/Footwear</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Clothing.php" class="linkitem">
                                    <span class="clickchoice">Clothing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="handbags.php" class="linkitem">
                                    <span class="clickchoice">Handbags, Bags & Wallets</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="menaccesories.php" class="linkitem">
                                    <span class="clickchoice">Men's Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="womenaccesories.php" class="linkitem">
                                    <span class="clickchoice">Women's Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Luggage.php" class="linkitem">
                                    <span class="clickchoice">Luggage</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Fragrances.php" class="linkitem">
                                    <span class="clickchoice">Fragrances</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WeddingApparel.php" class="linkitem">
                                    <span class="clickchoice">Wedding Apparel</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CostumesUniforms.php" class="linkitem">
                                    <span class="clickchoice">Costumes & Uniforms</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="VintageHighendClothing.php" class="linkitem">
                                    <span class="clickchoice">Vintage & Highend Clothing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MakeupSkinCare.php" class="linkitem">
                                    <span class="clickchoice">Make up & Skin Care</span>
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