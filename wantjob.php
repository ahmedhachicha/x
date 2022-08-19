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
                                                    ... > <?php echo $pageTitle ?> > Jobs Wanted
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Accountingrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Accounting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Architecturerwantjob.php" class="linkitem">
                                    <span class="clickchoice">Architecture/Eng.</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Artrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Art/Design</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Bankrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Bank/Finance</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Businessrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Business Dev.</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Constructionrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Construction</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Consultingrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Consulting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Educationrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Education</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Executiverwantjob.php" class="linkitem">
                                    <span class="clickchoice">Executive</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Hospitalityrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Hospitality</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HRrwantjob.php" class="linkitem">
                                    <span class="clickchoice">HR/Recruiting</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ITrwantjob.php" class="linkitem">
                                    <span class="clickchoice">IT/Telecom</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MarketingrwantjobR.php" class="linkitem">
                                    <span class="clickchoice">Marketing/PR</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Mediarwantjob.php" class="linkitem">
                                    <span class="clickchoice">Media</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Medicalrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Medical/Health</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Oilrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Oil/Gas</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Retailrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Retail</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Salesrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Sales</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Secretarialrwantjob.php" class="linkitem">
                                    <span class="clickchoice">Secretarial</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Otherwantjob.php" class="linkitem">
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