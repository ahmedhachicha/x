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
                                                    ... > <?php echo $pageTitle ?> > Business & Industrial > Industrial Supplies
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="adhesivessealant.php" class="linkitem">
                                    <span class="clickchoice">Adhesives & Sealant</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cleaningequipsupplies.php" class="linkitem">
                                    <span class="clickchoice">Cleaning Equip. & Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="generators.php" class="linkitem">
                                    <span class="clickchoice">Generators</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="hvac.php" class="linkitem">
                                    <span class="clickchoice">HVAC</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="hardware.php" class="linkitem">
                                    <span class="clickchoice">Hardware</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="liftsparts.php" class="linkitem">
                                    <span class="clickchoice">Lifts & Lift parts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="lightinglasers.php" class="linkitem">
                                    <span class="clickchoice">Lighting & Lasers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="paintionequip.php" class="linkitem">
                                    <span class="clickchoice">Painting Equip. & Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="plumbingparts.php" class="linkitem">
                                    <span class="clickchoice">Plumbing Parts & Equip.</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="safetyequip.php" class="linkitem">
                                    <span class="clickchoice">Safety Equip.</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherindustrialsupplies.php" class="linkitem">
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