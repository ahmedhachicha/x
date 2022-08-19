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
                                            <a href="businessindustrial.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Business & Industrial > Manufacturing
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="manufacturingequiptools.php" class="linkitem">
                                    <span class="clickchoice">Manufacturing Equip. & Tools</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="metals.php" class="linkitem">
                                    <span class="clickchoice">Metals</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="textiles.php" class="linkitem">
                                    <span class="clickchoice">Textiles</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="welding.php" class="linkitem">
                                    <span class="clickchoice">Welding</span>
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