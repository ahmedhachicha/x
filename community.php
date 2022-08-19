<?php 
    ob_start();
    session_start();
    $pageTitle = 'Community';
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
                                            <a href="Ad.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?>
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="autoservices.php" class="linkitem">
                                    <span class="clickchoice">Auto Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="consultancyservices.php" class="linkitem">
                                    <span class="clickchoice">Consultancy Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="domestic.php" class="linkitem">
                                    <span class="clickchoice">Domestic</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="evententertainment.php" class="linkitem">
                                    <span class="clickchoice">Event & Entertainment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="freelancers.php" class="linkitem">
                                    <span class="clickchoice">Freelancers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="healthwellbeing.php" class="linkitem">
                                    <span class="clickchoice">Health & Wellbeing Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="homemaintenance.php" class="linkitem">
                                    <span class="clickchoice">Home Maintenance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="moversremovals.php" class="linkitem">
                                    <span class="clickchoice">Movers & Removals</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherservices.php" class="linkitem">
                                    <span class="clickchoice">Other Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="restorationrapairs.php" class="linkitem">
                                    <span class="clickchoice">Restoration & Repairs</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="tutorsclasses.php" class="linkitem">
                                    <span class="clickchoice">Tutors & Classes</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="webcomputer.php" class="linkitem">
                                    <span class="clickchoice">Web & Computer Services</span>
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