<?php 
    ob_start();
    session_start();
    $pageTitle = 'community';
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
                                            <a href="community.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Tutors & Classes
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="artstutors.php" class="linkitem">
                                    <span class="clickchoice">Arts & Crafts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="dancetutors.php" class="linkitem">
                                    <span class="clickchoice">Dance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="fitnesstutors.php" class="linkitem">
                                    <span class="clickchoice">Fitness and Sport</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="languagestutors.php" class="linkitem">
                                    <span class="clickchoice">Languages</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="proftrainingtutors.php" class="linkitem">
                                    <span class="clickchoice">Professional Training Courses</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="subjecttutors.php" class="linkitem">
                                    <span class="clickchoice">Subject Tutors</span>
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