<?php 
    ob_start();
    session_start();
    $pageTitle = 'community';
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
                                            <a href="community.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Web & Computer Services
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="graphicweb.php" class="linkitem">
                                    <span class="clickchoice">Graphic & Web Designers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="servicesweb.php" class="linkitem">
                                    <span class="clickchoice">IT Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="mediavidioweb.php" class="linkitem">
                                    <span class="clickchoice">Media & Video Editing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="websiteappweb.php" class="linkitem">
                                    <span class="clickchoice">Website & App Development services</span>
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