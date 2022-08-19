<?php 
    ob_start();
    session_start();
    $pageTitle = 'motors';
    include 'init.php';

    if(isset($_SESSION['uid'])){
    ?>

        <div class="container" style="margin-top: 20px;text-align:center;">
            <div class="row content">
                <h3 style="color: #9FCE64;font-weight: 700;">Now choose the right category for your ad:</h3>
                <div id="tax-category-list">
                    <div id="tax-breadcrumbs-container">
                        <ul class="category-breadcrumb " style="list-style: none;">
                                <li class="category-breadcrumb__item liitem">
                                            <a href="autoAccparts.php" class="category-breadcrumb__item-link linkitem">
                                                    ...<span class="ionlink"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                                                    motors > Auto Accessories & Parts > Body Parts
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="bodyparts.php" class="linkitem">
                                    <span>Body Parts & Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="electronicboatparts.php" class="linkitem">
                                    <span>Electronic Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="engineboatparts.php" class="linkitem">
                                    <span>Engine Parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="plumbingboatparts.php" class="linkitem">
                                    <span>Plumbing & Ventilation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sailingboatparts.php" class="linkitem">
                                    <span>Sailing Gear</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherboatparts.php" class="linkitem">
                                    <span>Other</span>
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