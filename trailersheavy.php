<?php 
    ob_start();
    session_start();
    $pageTitle = 'motors';
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
                                            <a href="heavyvzhicles.php" class="category-breadcrumb__item-link linkitem">
                                                    ...<span class="ionlink"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                                                    motors > Heavy Vehicles > Trailers
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="bdoubletrailersheavy.php" class="linkitem">
                                    <span>B Double</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="curtainsidertrailersheavy.php" class="linkitem">
                                    <span>Curtain Sider</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dogtrailersheavy.php" class="linkitem">
                                    <span>Dog Trailer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dollytrailersheavy.php" class="linkitem">
                                    <span>Dolly Trailer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dripdeckertrailersheavy.php" class="linkitem">
                                    <span>Drop Decker</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="extendabletrailersheavy.php" class="linkitem">
                                    <span>Extendable Trailer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="flatdecktrailersheavy.php" class="linkitem">
                                    <span>Flat Deck</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lowloadertrailersheavy.php" class="linkitem">
                                    <span>Low Loader</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othertrailersheavy.php" class="linkitem">
                                    <span>Other</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="refrigeratedtrailersheavy.php" class="linkitem">
                                    <span>Refrigerated Trailer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="toppertrailersheavy.php" class="linkitem">
                                    <span>Tipper</span>
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