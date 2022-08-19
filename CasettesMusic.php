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
                                            <a href="music.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Music > Casettes
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ClassicalCasettes.php" class="linkitem">
                                    <span class="clickchoice">Classical</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CountryCasettes.php" class="linkitem">
                                    <span class="clickchoice">Country</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="JazzCasettes.php" class="linkitem">
                                    <span class="clickchoice">Jazz</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LatinCasettes.php" class="linkitem">
                                    <span class="clickchoice">Latin</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MetalCasettes.php" class="linkitem">
                                    <span class="clickchoice">Metal</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="soulCasettes.php" class="linkitem">
                                    <span class="clickchoice">R&B, Soul & Funk</span>
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