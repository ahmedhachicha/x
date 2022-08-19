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
                                            <a href="mobilephonestablets.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Mobile Phones & Tabletsn > Tablets
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Appletab.php" class="linkitem">
                                    <span class="clickchoice">Apple</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Delltab.php" class="linkitem">
                                    <span class="clickchoice">Dell</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Franklintab.php" class="linkitem">
                                    <span class="clickchoice">Franklin</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HPCompaqtab.php" class="linkitem">
                                    <span class="clickchoice">HP/Compaq</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HTCtab.php" class="linkitem">
                                    <span class="clickchoice">HTC</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Handspringtab.php" class="linkitem">
                                    <span class="clickchoice">Handspring</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Huaweitab.php" class="linkitem">
                                    <span class="clickchoice">Huawei</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Lenovotab.php" class="linkitem">
                                    <span class="clickchoice">Lenovo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Palmtab.php" class="linkitem">
                                    <span class="clickchoice">Palm</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="RIMtab.php" class="linkitem">
                                    <span class="clickchoice">RIM</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Samsungtab.php" class="linkitem">
                                    <span class="clickchoice">Samsung</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Sharptab.php" class="linkitem">
                                    <span class="clickchoice">Sharp</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Sonytab.php" class="linkitem">
                                    <span class="clickchoice">Sony</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Symboltab.php" class="linkitem">
                                    <span class="clickchoice">Symbol</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Wintouchtab.php" class="linkitem">
                                    <span class="clickchoice">Wintouch</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="iMatetab.php" class="linkitem">
                                    <span class="clickchoice">iMate</span>
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