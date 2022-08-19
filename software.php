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
                                            <a href="computersnetworkings.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking > Software
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="businesssoftware.php" class="linkitem">
                                    <span class="clickchoice">Business</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="designsoftware.php" class="linkitem">
                                    <span class="clickchoice">Design</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="educationsoftware.php" class="linkitem">
                                    <span class="clickchoice">Education</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="gamingsoftware.php" class="linkitem">
                                    <span class="clickchoice">Gaming</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="networkingsoftware.php" class="linkitem">
                                    <span class="clickchoice">Networking</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="personalmanagmentsoftware.php" class="linkitem">
                                    <span class="clickchoice">Personal Managment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="securitysoftware.php" class="linkitem">
                                    <span class="clickchoice">Security</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othersoftware.php" class="linkitem">
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