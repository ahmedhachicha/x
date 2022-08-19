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
                                            <a href="electronics.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Electronics > Home Audio & Turntables
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="amplifiershome.php" class="linkitem">
                                    <span class="clickchoice">Amplifiers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cdplayershome.php" class="linkitem">
                                    <span class="clickchoice">CD Players/Recorders</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="cassettehome.php" class="linkitem">
                                    <span class="clickchoice">Cassette Players/Recorders</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="digitalhome.php" class="linkitem">
                                    <span class="clickchoice">Digital Music Systems</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="karaokehome.php" class="linkitem">
                                    <span class="clickchoice">Karaoke</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="minidischome.php" class="linkitem">
                                    <span class="clickchoice">MiniDisc Players</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="radioshome.php" class="linkitem">
                                    <span class="clickchoice">Radios</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="receivershome.php" class="linkitem">
                                    <span class="clickchoice">Receivers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="speakershome.php" class="linkitem">
                                    <span class="clickchoice">Speakers & Subwoofers</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="turntablehome.php" class="linkitem">
                                    <span class="clickchoice">Turntable Parts & Accessories</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="turntableshome.php" class="linkitem">
                                    <span class="clickchoice">Turntables</span>
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