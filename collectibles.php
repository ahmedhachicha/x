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
                                                    ... > <?php echo $pageTitle ?> > Collectibles
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="AntiquesCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Antiques</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="ArtCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Art</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="DecorationsCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Decorations</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="PensCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Pens & Writing Instruments</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="MemorabiliaCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Memorabilia</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="RocksCollectibles.php" class="linkitem">
                                    <span class="clickchoice">Rocks/Fossils/Artifacts</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="otherCollectibles.php" class="linkitem">
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