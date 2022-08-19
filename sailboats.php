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
                                            <a href="boats.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Boats > Sailboats
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="catamransailboats.php" class="linkitem">
                                    <span class="clickchoice">Catamaran</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cruiserdaysailorsailboats.php" class="linkitem">
                                    <span class="clickchoice">Cruiser/Day Sailor</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dhowvoiliersailboats.php" class="linkitem">
                                    <span class="clickchoice">DhowVoilier</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dinghysailboats.php" class="linkitem">
                                    <span class="clickchoice">Dinghy</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="racersailboats.php" class="linkitem">
                                    <span class="clickchoice">Racer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="sailingyachtsailboats.php" class="linkitem">
                                    <span class="clickchoice">Sailing Yacht</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="yachtsailboats.php" class="linkitem">
                                    <span class="clickchoice">Yacht</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othersailboats.php" class="linkitem">
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