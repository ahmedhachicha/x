<?php 
    ob_start();
    session_start();
    $pageTitle = 'Classifieds';
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
                                                    ... > <?php echo $pageTitle ?> > Musical Instruments
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="GuitarsMusical.php" class="linkitem">
                                    <span class="clickchoice">Guitars</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PianosKeyboardsOrgansMusical.php" class="linkitem">
                                    <span class="clickchoice">Pianos, Keyboards & Organs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PercussionMusical.php" class="linkitem">
                                    <span class="clickchoice">Percussion</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="StringInstrumentsMusical.php" class="linkitem">
                                    <span class="clickchoice">String Instruments</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="WindInstrumentsMusical.php" class="linkitem">
                                    <span class="clickchoice">Wind Instruments</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DJRecordingEquipmentMusical.php" class="linkitem">
                                    <span class="clickchoice">DJ & Recording Equipment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherMusical.php" class="linkitem">
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