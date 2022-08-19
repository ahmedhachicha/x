<?php 
    ob_start();
    session_start();
    $pageTitle = 'Motors';
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
                                <a href="choceadcars.php" class="linkitem">
                                    <span class="clickchoice">Cars</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="motorcycles.php" class="linkitem">
                                    <span class="clickchoice">Motorcycles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="autoAccparts.php" class="linkitem">
                                    <span class="clickchoice">Auto Accessories &amp; Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="heavyvzhicles.php" class="linkitem">
                                    <span class="clickchoice">Heavy Vehicles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="boats.php" class="linkitem">
                                    <span class="clickchoice">Boats</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="numberplates.php" class="linkitem">
                                    <span class="clickchoice">Number Plates</span>
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