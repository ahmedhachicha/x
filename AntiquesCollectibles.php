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
                                            <a href="collectibles.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Collectibles > Antiquities
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Antiquities.php" class="linkitem">
                                    <span class="clickchoice">Antiquities</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BooksMapsAntiquities.php" class="linkitem">
                                    <span class="clickchoice">Books & Maps</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DecorationsAntiquities.php" class="linkitem">
                                    <span class="clickchoice">Decorations</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FurnitureAntiquities.php" class="linkitem">
                                    <span class="clickchoice">Furniture</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MachinesAntiquities.php" class="linkitem">
                                    <span class="clickchoice">Machines, Instruments & Tools</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherAntiquities.php" class="linkitem">
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