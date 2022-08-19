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
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking > Computers Components
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="cpus.php" class="linkitem">
                                    <span class="clickchoice">CPUs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="casestowers.php" class="linkitem">
                                    <span class="clickchoice">Cases & Towers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="drivers.php" class="linkitem">
                                    <span class="clickchoice">Drivers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="fanscooling.php" class="linkitem">
                                    <span class="clickchoice">Fans & Cooling</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="graphicsvidiocards.php" class="linkitem">
                                    <span class="clickchoice">Graphics & Video Cards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="memory.php" class="linkitem">
                                    <span class="clickchoice">Memory</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="powersupplies.php" class="linkitem">
                                    <span class="clickchoice">Power Supplies</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="screenslcd.php" class="linkitem">
                                    <span class="clickchoice">Screens & LCD Panels</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="soundcards.php" class="linkitem">
                                    <span class="clickchoice">Sound Cards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="storage.php" class="linkitem">
                                    <span class="clickchoice">Storage</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="motherboards.php" class="linkitem">
                                    <span class="clickchoice">Motherboards</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="pthercomputercomponents.php" class="linkitem">
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