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
                                                    ... > <?php echo $pageTitle ?> > Home Maintenance
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="acmainrepairhome.php" class="linkitem">
                                    <span class="clickchoice">AC Maintenance & Repair</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="alarmhome.php" class="linkitem">
                                    <span class="clickchoice">Alarm & Security</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="carpentershome.php" class="linkitem">
                                    <span class="clickchoice">Carpenters</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="electricianshome.php" class="linkitem">
                                    <span class="clickchoice">Electricians</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="generalhome.php" class="linkitem">
                                    <span class="clickchoice">General Maintenance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="handymanhome.php" class="linkitem">
                                    <span class="clickchoice">Handyman</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="interiorhome.php" class="linkitem">
                                    <span class="clickchoice">Interior Design & Architects</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="paintershome.php" class="linkitem">
                                    <span class="clickchoice">Painters</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pesthome.php" class="linkitem">
                                    <span class="clickchoice">Pest Control</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="plumbershome.php" class="linkitem">
                                    <span class="clickchoice">Plumbers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="renovationshome.php" class="linkitem">
                                    <span class="clickchoice">Renovations & General Contracting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="smarthome.php" class="linkitem">
                                    <span class="clickchoice">Smart Home Services</span>
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