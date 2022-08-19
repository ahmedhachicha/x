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
                                            <a href="dvdsmovies.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > DVDs & Movies > Digital
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ActionDigital.php" class="linkitem">
                                    <span class="clickchoice">Action, Adventure</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="AnimationDigital.php" class="linkitem">
                                    <span class="clickchoice">Animation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ChildrenDigital.php" class="linkitem">
                                    <span class="clickchoice">Children & Family</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ComedyDigital.php" class="linkitem">
                                    <span class="clickchoice">Comedy</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ConcertDigital.php" class="linkitem">
                                    <span class="clickchoice">Concert/Music</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DocumentaryDigital.php" class="linkitem">
                                    <span class="clickchoice">Documentary Film</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DramaDigital.php" class="linkitem">
                                    <span class="clickchoice">Drama</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HorrorDigital.php" class="linkitem">
                                    <span class="clickchoice">Horror</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MysteryDigital.php" class="linkitem">
                                    <span class="clickchoice">Mystery/Suspense</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SeriesDigital.php" class="linkitem">
                                    <span class="clickchoice">Series</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SportsDigital.php" class="linkitem">
                                    <span class="clickchoice">Sports</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherDigital.php" class="linkitem">
                                    <span class="clickchoice">Other Genre</span>
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