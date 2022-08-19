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
                                                    ... > <?php echo $pageTitle ?> > Auto Services
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="airconditionauto.php" class="linkitem">
                                    <span class="clickchoice">Air Condition & Electrical Repairing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="bodydetailingauto.php" class="linkitem">
                                    <span class="clickchoice">Body Detailing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carreapairauto.php" class="linkitem">
                                    <span class="clickchoice">Car Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carserviceauto.php" class="linkitem">
                                    <span class="clickchoice">Car Service</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carwashauto.php" class="linkitem">
                                    <span class="clickchoice">Car Wash</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="roadsideassistanceauto.php" class="linkitem">
                                    <span class="clickchoice">Roadside Assistance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tyrechangeauto.php" class="linkitem">
                                    <span class="clickchoice">Tyre Change</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="moversremovalsauto.php" class="linkitem">
                                    <span class="clickchoice">Movers & Removals</span>
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