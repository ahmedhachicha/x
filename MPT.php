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
                                            <a href="mobilephonestablets.php" class="category-breadcrumb__item-link linkitem">
                                                    ... > <?php echo $pageTitle ?> > Mobile Phones & Tabletsn > Mobile Phones
                                            </a>
                                </li><hr>
                        </ul>
                    </div>
                    <div id="tax-categories">
                        <ul class="motors" style="list-style: none;">
                            <li class="liitem">
                                <a href="Acer.php" class="linkitem">
                                    <span class="clickchoice">Acer</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Alcatel.php" class="linkitem">
                                    <span class="clickchoice">Alcatel</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="AppleiPhone.php" class="linkitem">
                                    <span class="clickchoice">Apple iPhone</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Asus.php" class="linkitem">
                                    <span class="clickchoice">Asus</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Blackberry.php" class="linkitem">
                                    <span class="clickchoice">Blackberry</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CAT.php" class="linkitem">
                                    <span class="clickchoice">CAT</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="CECT.php" class="linkitem">
                                    <span class="clickchoice">CECT</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Google.php" class="linkitem">
                                    <span class="clickchoice">Google</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HTC.php" class="linkitem">
                                    <span class="clickchoice">HTC</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="HewlettPackard.php" class="linkitem">
                                    <span class="clickchoice">Hewlett Packard</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Huawei.php" class="linkitem">
                                    <span class="clickchoice">Huawei</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="LG.php" class="linkitem">
                                    <span class="clickchoice">LG</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Lava.php" class="linkitem">
                                    <span class="clickchoice">Lava</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Lenovo.php" class="linkitem">
                                    <span class="clickchoice">Lenovo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Meizu.php" class="linkitem">
                                    <span class="clickchoice">Meizu</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Motorola.php" class="linkitem">
                                    <span class="clickchoice">Motorola</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Nokia.php" class="linkitem">
                                    <span class="clickchoice">Nokia</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="OnePlus.php" class="linkitem">
                                    <span class="clickchoice">OnePlus</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Oppo.php" class="linkitem">
                                    <span class="clickchoice">Oppo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Palm.php" class="linkitem">
                                    <span class="clickchoice">Palm</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Realme.php" class="linkitem">
                                    <span class="clickchoice">Realme</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Samsung.php" class="linkitem">
                                    <span class="clickchoice">Samsung</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Sanyo.php" class="linkitem">
                                    <span class="clickchoice">Sanyo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Sidekick.php" class="linkitem">
                                    <span class="clickchoice">Sidekick</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="SonyEricsson.php" class="linkitem">
                                    <span class="clickchoice">Sony Ericsson</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Vertu.php" class="linkitem">
                                    <span class="clickchoice">Vertu</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Vivo.php" class="linkitem">
                                    <span class="clickchoice">Vivo</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Xiaomi.php" class="linkitem">
                                    <span class="clickchoice">Xiaomi</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Yota.php" class="linkitem">
                                    <span class="clickchoice">Yota</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="iMate.php" class="linkitem">
                                    <span class="clickchoice">iMate</span>
                                </a>
                            </li><hr>
                            <li class="liitem">
                                <a href="Othermp.php" class="linkitem">
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