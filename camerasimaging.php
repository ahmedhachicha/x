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
                                            <a href="classifieds.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Cameras & Imaging
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="DigitalCameras.php" class="linkitem">
                                    <span class="clickchoice">Digital Cameras</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LensesFiltersLighting.php" class="linkitem">
                                    <span class="clickchoice">Lenses, Filters & Lighting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ProfessionalEquipment.php" class="linkitem">
                                    <span class="clickchoice">Professional Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CameraAccessories.php" class="linkitem">
                                    <span class="clickchoice">Camera Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="TripodsStands.php" class="linkitem">
                                    <span class="clickchoice">Tripods & Stands</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Camcorders.php" class="linkitem">
                                    <span class="clickchoice">Camcorders</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FilmCameras.php" class="linkitem">
                                    <span class="clickchoice">Film Cameras</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BinocularsTelescopes.php" class="linkitem">
                                    <span class="clickchoice">Binoculars/Telescopes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CamcorderAccessories.php" class="linkitem">
                                    <span class="clickchoice">Camcorder Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CameraDrones.php" class="linkitem">
                                    <span class="clickchoice">Camera Drones</span>
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