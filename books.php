<?php 
    ob_start();
    session_start();
    $pageTitle = 'Classifieds';
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
                                            <a href="classifieds.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Books
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Textbooks.php" class="linkitem">
                                    <span class="clickchoice">Textbooks</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NonfictionBooks.php" class="linkitem">
                                    <span class="clickchoice">Nonfiction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FictionBooks.php" class="linkitem">
                                    <span class="clickchoice">Fiction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ChildrensBooks.php" class="linkitem">
                                    <span class="clickchoice">Children's Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="BookAcc.php" class="linkitem">
                                    <span class="clickchoice">Book Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DigitalEbooks.php" class="linkitem">
                                    <span class="clickchoice">Digital/E-books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Audiobooks.php" class="linkitem">
                                    <span class="clickchoice">Audiobooks</span>
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