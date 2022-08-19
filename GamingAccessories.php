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
                                            <a href="gaming.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > gaming > Gaming Accessories
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="MicrosoftXboxgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Microsoft Xbox 360</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MicrosoftXboxOnegamingacc.php" class="linkitem">
                                    <span class="clickchoice">Microsoft Xbox One</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Nintendogamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo 64</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoDSgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo DS</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoGameCubegamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo GameCube</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoNESgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo NES</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoSwitchgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo Switch</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoWiigamingacc.php" class="linkitem">
                                    <span class="clickchoice">Nintendo Wii</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PSVitagamingacc.php" class="linkitem">
                                    <span class="clickchoice">PS Vita</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPSPgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PSP</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationgamingacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 2</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationngamingacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 3</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationnngamingacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 4</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationnnngamingacc.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 5</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SuperNintendogamingacc.php" class="linkitem">
                                    <span class="clickchoice">Super Nintendo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othergamingacc.php" class="linkitem">
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