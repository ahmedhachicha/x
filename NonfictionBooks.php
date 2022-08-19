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
                                            <a href="books.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Books > Nonfiction
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="BusinessTechnology.php" class="linkitem">
                                    <span class="clickchoice">Business/Science/Technology</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CookBooks.php" class="linkitem">
                                    <span class="clickchoice">Cook Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HistoryBiography.php" class="linkitem">
                                    <span class="clickchoice">History/Biography</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HowToBooks.php" class="linkitem">
                                    <span class="clickchoice">How-To Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PictureBooks.php" class="linkitem">
                                    <span class="clickchoice">Picture Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ReligiousBooks.php" class="linkitem">
                                    <span class="clickchoice">Religious Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SelfBooks.php" class="linkitem">
                                    <span class="clickchoice">Self Help / Motivational Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SportsBooks.php" class="linkitem">
                                    <span class="clickchoice">Sports/Health Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="TravelBooks.php" class="linkitem">
                                    <span class="clickchoice">Travel Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othernonti.php" class="linkitem">
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