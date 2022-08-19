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
                                                    ... > <?php echo $pageTitle ?> > Books > Children's Books
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="ColoringChildren.php" class="linkitem">
                                    <span class="clickchoice">Coloring/Activity Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="EducatbooksChildren.php" class="linkitem">
                                    <span class="clickchoice">Educational Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="FictionChildren.php" class="linkitem">
                                    <span class="clickchoice">Fiction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="NonfictionChildren.php" class="linkitem">
                                    <span class="clickchoice">Nonfiction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PictureBooksChildren.php" class="linkitem">
                                    <span class="clickchoice">Picture/Pop Up Books</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OtherChildren.php" class="linkitem">
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