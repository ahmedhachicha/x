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
                                                    ... > <?php echo $pageTitle ?> > gaming > Video Games
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                    <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="MicrosoftXboxgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Microsoft Xbox 360</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MicrosoftXboxOnegamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Microsoft Xbox One</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Nintendogamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo 64</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoDSgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo DS</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoGameCubegamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo GameCube</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoNESgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo NES</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoSwitchgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo Switch</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NintendoWiigamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Nintendo Wii</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PSVitagamingvidio.php" class="linkitem">
                                    <span class="clickchoice">PS Vita</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPSPgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PSP</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationgamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 2</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationngamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 3</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationnngamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 4</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyPlayStationnnngamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Sony PlayStation 5</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SuperNintendogamingvidio.php" class="linkitem">
                                    <span class="clickchoice">Super Nintendo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othergamingvidio.php" class="linkitem">
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