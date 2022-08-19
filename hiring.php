<?php 
    ob_start();
    session_start();
    $pageTitle = 'Jobs';
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
                                            <a href="jobs.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Jobs Hiring
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="accountinghiring.php" class="linkitem">
                                    <span class="clickchoice">Accounting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="architecturehiring.php" class="linkitem">
                                    <span class="clickchoice">Architecture & Interior Design</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="automotivehiring.php" class="linkitem">
                                    <span class="clickchoice">Automotive</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="beautyhiring.php" class="linkitem">
                                    <span class="clickchoice">Beauty</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="businesshiring.php" class="linkitem">
                                    <span class="clickchoice">Business Development</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="constructionhiring.php" class="linkitem">
                                    <span class="clickchoice">Construction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="customerhiring.php" class="linkitem">
                                    <span class="clickchoice">Customer Service</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="educationhiring.php" class="linkitem">
                                    <span class="clickchoice">Education</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="engineerhiring.php" class="linkitem">
                                    <span class="clickchoice">Engineering</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="fashionhiring.php" class="linkitem">
                                    <span class="clickchoice">Fashion</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="foodhiring.php" class="linkitem">
                                    <span class="clickchoice">Food & Beverages</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="graphichiring.php" class="linkitem">
                                    <span class="clickchoice">Graphic Design</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="hospitalityhiring.php" class="linkitem">
                                    <span class="clickchoice">Hospitality & Restaurants</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="hrrecruihiring.php" class="linkitem">
                                    <span class="clickchoice">HR & Recruitment</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="industrialhiring.php" class="linkitem">
                                    <span class="clickchoice">Industrial & Manufacturing</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="informationhiring.php" class="linkitem">
                                    <span class="clickchoice">Information Technology</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="internethiring.php" class="linkitem">
                                    <span class="clickchoice">Internet</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="legalhiring.php" class="linkitem">
                                    <span class="clickchoice">Legal Services</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="logishiring.php" class="linkitem">
                                    <span class="clickchoice">Logistics & Distribution</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="marketinghiring.php" class="linkitem">
                                    <span class="clickchoice">Marketing & Advertising</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="mediahiring.php" class="linkitem">
                                    <span class="clickchoice">Media</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="medicalhiring.php" class="linkitem">
                                    <span class="clickchoice">Medical & Healthcare</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="onlinehiring.php" class="linkitem">
                                    <span class="clickchoice">Online Media</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="realhiring.php" class="linkitem">
                                    <span class="clickchoice">Real Estate</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="retailhiring.php" class="linkitem">
                                    <span class="clickchoice">Retail & Consumer Goods</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="safetyhiring.php" class="linkitem">
                                    <span class="clickchoice">Safety & Security</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="saleshiring.php" class="linkitem">
                                    <span class="clickchoice">Sales</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="secretarialhiring.php" class="linkitem">
                                    <span class="clickchoice">Secretarial</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="soprthiring.php" class="linkitem">
                                    <span class="clickchoice">Sports & Fitness</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="transporthiring.php" class="linkitem">
                                    <span class="clickchoice">Transportation</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="travelhiring.php" class="linkitem">
                                    <span class="clickchoice">Travel & Tourism</span>
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