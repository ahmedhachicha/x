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
                                            <a href="camerasimaging.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Cameras & Imaging > Professional Equipment
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="AudioProfessional.php" class="linkitem">
                                    <span class="clickchoice">Audio</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CablesProfessional.php" class="linkitem">
                                    <span class="clickchoice">Cables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="EditingProfessional.php" class="linkitem">
                                    <span class="clickchoice">Editing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LightingProfessional.php" class="linkitem">
                                    <span class="clickchoice">Lighting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MonitorsProfessional.php" class="linkitem">
                                    <span class="clickchoice">Monitors</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PrintingProfessional.php" class="linkitem">
                                    <span class="clickchoice">Printing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ProjectionScreensProfessional.php" class="linkitem">
                                    <span class="clickchoice">Projection/Screens</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="VideoCamerasProfessional.php" class="linkitem">
                                    <span class="clickchoice">Video Cameras</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherProfessional.php" class="linkitem">
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