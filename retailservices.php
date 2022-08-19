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
                                                    ... > <?php echo $pageTitle ?> > Business & Industrial > Retail & Services
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="storedisplay.php" class="linkitem">
                                    <span class="clickchoice">In Store Display Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="launderingsupplies.php" class="linkitem">
                                    <span class="clickchoice">Laundering Equip. & Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="racksfixtures.php" class="linkitem">
                                    <span class="clickchoice">Racks & Fixtures</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="securitysurveillance.php" class="linkitem">
                                    <span class="clickchoice">Security & Surveillance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherretailservices.php" class="linkitem">
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