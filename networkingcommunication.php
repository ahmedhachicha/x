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
                                                    ... > <?php echo $pageTitle ?> > Computers & Networking > Networking & Communication
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="modemsnetworking.php" class="linkitem">
                                    <span class="clickchoice">Modems</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="networkingcablesnetworking.php" class="linkitem">
                                    <span class="clickchoice">Networking Cables</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="networkinghubsnetworking.php" class="linkitem">
                                    <span class="clickchoice">Networking Hubs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="networkingswitchesnetworking.php" class="linkitem">
                                    <span class="clickchoice">Networking Switches</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="routersnetworking.php" class="linkitem">
                                    <span class="clickchoice">Routers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="securitynetworking.php" class="linkitem">
                                    <span class="clickchoice">Security</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="voipnetworking.php" class="linkitem">
                                    <span class="clickchoice">VoIP Business Phones</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="wirelessnetworking.php" class="linkitem">
                                    <span class="clickchoice">Wireless Access Points</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="othernetworking.php" class="linkitem">
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