<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Property For Rent';
   ?>
    <link rel="stylesheet" href="dist/css/lightbox.min.css"> 
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
   <?php
    include 'init.php';
    $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
    if($do == 'Add'){
                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                        $blog = intval($_GET['pageid']);                                 
                                $allItems = getAllFrom("*", "forrent", "where Id = {$blog}", "AND Approve = 1", "Id", "");
                                foreach($allItems as $item){
                                    echo '<div id="navbar">
                                    <div class="container">
                                        <div class="row content">
                                            <div class="col-lg-6 mb-3 style_navp d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">';
                                                echo '<div class="titlenava">AED ' . number_format($item['Price']) . '</div>';
                                                echo '<div class="titlenava"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                            echo '</div>';
                                            echo '<div class="col-lg-6  d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" dir="rtl">
                                                <div class="row content">
                                                <div class="col-lg-4">';
                                                    echo '<button class="divapel btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Show Phone Number</button>
                                                    </div>';
                                                    $gettype = $con->prepare("SELECT * FROM users where user_id = {$item['user_Id']} ");
                                                    $gettype->execute();
                                                    $info = $gettype->fetch();
                                                    $valuunique = $info['unique_id'];
                                                    echo '<div class="col-lg-2">
                                                        <button class="divchat btn" style="color:black;"><a style="color:black;" href="chat.php?user_id='. $valuunique .'">Chat</a><ion-icon name="chatbox-ellipses-outline"></ion-icon></button>
                                                    </div>
                                                    <div class="col-lg-4">';
                                                    echo '<button class="divfavorit btn"><a style="color:black; text-decoration:none;" href="infomobphontab.php?do=Update&userid=' . $blog . '" >Favorite</a><ion-icon name="heart-outline"></ion-icon></button>
                                                </div>';
                                                echo '</div>';
                                            echo '</div>';

                                            echo '<div class="col-lg-6 d-block d-sm-none ">';
                                                echo '<div class="pricenava">AED ' . number_format($item['Price']) . '</div>';
                                                echo '<div class="titlenava"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                            echo '</div>';
                                            echo '<div class="col-lg-6  d-block d-sm-none" dir="rtl">';
                                                        echo '<ion-icon data-bs-toggle="modal" data-bs-target="#exampleModal" name="call-outline" style="margin-left: 20px; cursor: pointer;" class="ioconnav" ></ion-icon>';
                                                        echo '<a style="color:black; text-decoration:none;" href="infomobphontab.php?do=Update&userid=' . $blog . '" ><ion-icon style="margin-left: 15px; cursor: pointer;" class="ioconnav"name="heart-outline"></ion-icon></a>';
                                            echo '</div>';

                                            echo '<div class="col-lg-6 d-none d-md-block d-lg-none">';
                                                echo '<div class="pricenava">AED ' . number_format($item['Price']) . '</div>';
                                                echo '<div class="titlenava"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                            echo '</div>';
                                            echo '<div class="col-lg-6  d-none d-md-block d-lg-none" dir="rtl">';
                                                        echo '<ion-icon data-bs-toggle="modal" data-bs-target="#exampleModal" name="call-outline" style="margin-left: 20px; cursor: pointer;" class="ioconnav" ></ion-icon>';
                                                        echo '<a style="color:black; text-decoration:none;" href="infomobphontab.php?do=Update&userid=' . $blog . '" ><ion-icon style="margin-left: 15px; cursor: pointer;" class="ioconnav"name="heart-outline"></ion-icon></a>';
                                            echo '</div>';
                                        echo '</div>
                                        </div>
                                    </div>';
                                    ?>
                                        <div class="d-block d-sm-none">
                                            <nav class="navbar fixed-bottom navbar-light bg-light">
                                                <div class="container">
                                                    <?php
                                                        $gettype = $con->prepare("SELECT * FROM users where user_id = {$item['user_Id']} ");
                                                        $gettype->execute();
                                                        $info = $gettype->fetch();
                                                        $valuuniquee = $info['unique_id'];
                                                        echo '<button style="width: 30%;" class="divapchat btn"><a style="color: #fff; margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;
                                                        font-weight: 600;" href="chat.php?user_id='. $valuuniquee .'">Chat</a></button>';
                                                            echo '<button style="width: 30%;" class="divapll btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Call
                                                            </button>  ';
                                                    ?>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="d-none d-md-block d-lg-none">
                                            <nav class="navbar fixed-bottom navbar-light bg-light">
                                                <div class="container">
                                                    <?php
                                                        $gettype = $con->prepare("SELECT * FROM users where user_id = {$item['user_Id']} ");
                                                        $gettype->execute();
                                                        $info = $gettype->fetch();
                                                        $valuuniqueee = $info['unique_id'];
                                                        echo '<div class="col-lg-6"><button style="width:100%;" class="divapchat btn"><a style="color: #fff; margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;
                                                        font-weight: 600;" href="chat.php?user_id='. $valuuniqueee .'">Chat with seller</a></button> </div>';
                                                            echo '<div class="col-lg-6"><button style="width:100%;" class="divapll btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Show Phone Number
                                                            </button></div>';
                                                    ?>
                                                </div>
                                            </nav>
                                        </div>
                                    <?php

                echo '<div class="container productdiv">';
                    echo '<div class="row content">';
                        echo '<div class="col-lg-9">';
                            echo '<h2 class="prodtitle">' . $item['Name'] . '</h2>' ;
                            echo '<p class="datepostd">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                        echo '</div>';    
                        echo '<div class="col-lg-3">';
                             echo '<p class="proddd">Reference ID:<b>' . $item['propertyreference'] . '</b></p>' ;
                        echo '</div>'; 
                    echo '</div>';
                echo '</div>';
                echo '<div class="container">';
                    echo '<div class="row content">';
                        echo '<div class="col-lg-9 col-md-12 col-xs-12">';
                        echo '<div class="stysp"><span class="price-taggf" style="cursor:pointer;">
                        <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline" style="position: relative; left: -5px; top: 3px;"></ion-icon><a style="color:black; text-decoration:none;" href="infoforrent.php?do=Update&userid=' . $blog . '" >Favorite</a>
                        </span>
                        <button style="background: none;
                        border: none;" class="flame-button flame-button--tertiary flame-button--medium btnshar" data-bs-toggle="modal" data-bs-target="#exampleModalll"><span class="price-tagggg" style="cursor:pointer;">
                        <ion-icon name="arrow-redo-outline" style="position: relative; left: -5px; top: 3px;"></ion-icon> Share
                        </span></button></div>';
                            ?>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php  
                                      $i = '';
                                        $res = $item['Image'];
                                        $res = explode(" ", $res);
                                        // $count = count($res) - 1;   
                                        $count = 1;   
                                        for($i = 0; $i<$count; ++$i)
                                            {    
                                                echo '<div class="carousel-item active">
                                                <img style="height: 620px;" src="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .'" class="d-block w-100 " alt="...">
                                                ';
                                                echo wathmark_img();
                                                echo '</div>';
                                            }
                                        ?>          

                                        <?php    $i = '';
                                    $res = $item['Image'];
                                    $res = explode(" ", $res);
                                    $count = count($res) - 1;   
                                    for($i = 1; $i<$count; ++$i)
                                        {    
                                            echo '<div class="carousel-item">
                                            <img style="height: 620px;" src="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .'" class="d-block w-100 " alt="...">
                                            ';
                                                echo wathmark_img();
                                                echo '</div>';
                                        }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                                <style>
                                    .slidebutn{
                                        background-color: #0093D5;
                                            margin-top: 40px;
                                            padding: 8px;
                                            text-align: center;
                                            float: right;
                                            font-weight: 900;
                                            box-shadow: 0 4px 8px 1px black;
                                            border-radius: 15px;}
                                </style>
                                            <span class="slidebutn">></span>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view">
                                                    <?php
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        for($i = 1; $i<$count; ++$i)
                                                            {
                                                                echo '<a class="example-image-link" href="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                                                <img title="click" style="width:165px;height: 130px;object-fit: cover;" class="example-image" src="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " alt=""/>
                                                                    </a>';
                                                            }
                                                    ?>
                                                </div> 
                                            </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <style>
                                    .slidebutn{
                                        background-color: #0093D5;
                                            margin-top: 40px;
                                            padding: 8px;
                                            text-align: center;
                                            float: right;
                                            font-weight: 900;
                                            box-shadow: 0 4px 8px 1px black;
                                            border-radius: 15px;}
                                </style>
                                            <span class="slidebutn">></span>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                                    <?php
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        for($i = 1; $i<$count; ++$i)
                                                            {
                                                                echo '<a class="example-image-link" href="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                                                <img title="click" style="width:110px;height: 130px;object-fit: cover;" class="example-image" src="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " alt=""/>
                                                                    </a>';
                                                            }
                                                    ?>
                                                </div> 
                                            </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <style>
                                    .slidebutn{
                                        background-color: #0093D5;
                                            margin-top: 40px;
                                            padding: 8px;
                                            text-align: center;
                                            float: right;
                                            font-weight: 900;
                                            box-shadow: 0 4px 8px 1px black;
                                            border-radius: 15px;}
                                </style>
                                            <span class="slidebutn">></span>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view">
                                                    <?php
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        for($i = 1; $i<$count; ++$i)
                                                            {
                                                                echo '<a class="example-image-link" href="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                                                <img title="click" style="width:140px;height: 130px;object-fit: cover;" class="example-image" src="admin/Update_Imageforrent/uploads/avatars/' . $res[$i] .' " alt=""/>
                                                                    </a>';
                                                            }
                                                    ?>
                                                </div> 
                                            </div>
                            </div>
                                                <script src="js/jquery.min.js"></script>
                                                <script src="js/slick.min.js"></script>
                                                <script>
                                                    $('.carousel-view').slick({
                                                    dots: false,
                                                    infinite: false,
                                                    speed: 300,
                                                    slidesToShow: 5,
                                                    slidesToScroll: 5,
                                                    responsive: [
                                                        {
                                                        breakpoint: 600,
                                                        settings: {
                                                            slidesToShow: 5,
                                                            slidesToScroll: 5
                                                        }
                                                        },
                                                        {
                                                        breakpoint: 480,
                                                        settings: {
                                                            slidesToShow: 3,
                                                            slidesToScroll: 3
                                                        }
                                                        }
                                                    ]
                                                    });
                                                </script>		
                                            <?php
                        echo '</div>';
                        echo '<div class="col-lg-3 col-md-12 col-xs-12">';
                        echo '<div class="card initial">';
                        $gettype = $con->prepare("SELECT * FROM users where user_id = {$item['user_Id']} ");
                        $gettype->execute();
                        $info = $gettype->fetch();
                        $valuuniques = $info['unique_id'];
                            echo '<div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">';
                                echo '<button class="divapchat btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a style="color: #fff; margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;
                                font-weight: 600;" href="chat.php?user_id='. $valuuniques .'">Chat with seller</a></button>';
                                echo '<button class="divapll btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Show Phone Number
                                </button>';                                
                            echo '</div>';

                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">';
                                    echo '<button class="divaplll btn" >' . $item["phone"] . '</button>';
                                    echo '<div class="lighalo">';
                                        echo '<p color="#4294ff" class="sc-1q498l3-0 sc-1q498l3-1 gsCoQc eoIXmr sc-62uu82-7 iBUXHx">Tips for a safer transaction:</p>';
                                        echo '<ul style="list-style: none;">';
                                        echo '<li>';
                                        echo '<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="StyledIconBase-ea9ulj-0 hPhvO"><path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>';
                                        echo '<span>Check the condition of the item</span>';
                                        echo '</li>';
                                        echo '<li>';
                                        echo '<svg viewBox="0 0 640 512" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="StyledIconBase-ea9ulj-0 hPhvO"><path fill="currentColor" d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"></path></svg>';
                                        echo '<span>Meet the seller in person</span>';
                                        echo '</li>';
                                        echo '<li>';
                                        echo '<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="StyledIconBase-ea9ulj-0 hPhvO"><path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"></path><path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"></path></svg>';
                                        echo '<span>Don’t wire money online</span>';
                                        echo '</li>';
                                        echo '</ul>';
                                    echo '</div>';
                                echo '</div>
                                </div>
                            </div>
                            </div>';
                            echo '<div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">';
                                            $gettype = $con->prepare("SELECT * FROM users where user_id = {$item['user_Id']}");
                                            $gettype->execute();
                                            $infoo = $gettype->fetch();
                                            $type = $infoo['FullName'];
                                            ?>
                                            <center style="font-weight: 600;">Share this listing</center>
                                            <div class="container"><div class="row" style="margin: 15px;">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-6"><input type="text" value="<?php echo linkcopy(); ?>" id="myInput" class="btninshare"></div><div class="col-lg-3"><button onclick="myFunctionchatt()" class="btncopyy">Copy</button></div>
                                                </div>
                                            </div>
                                            <link href="distshareon/shareon.min.css" rel="stylesheet">
                                            <script src="distshareon/shareon.min.js" type="text/javascript"></script>
                                            <link href="distshareon/shareon.min.css" rel="stylesheet">
                                            <script src="distshareon/noinit/shareon.min.js" type="text/javascript"></script>
                                            <script type="text/javascript">
                                            shareon();
                                            </script>
                                            <div class="shareon">
                                                <a class="facebook"></a>
                                                <a class="linkedin"></a>
                                                <a class="mastodon"></a>
                                                <a class="messenger" data-fb-app-id="0123456789012345"></a>
                                                <a class="odnoklassniki"></a>
                                                <a class="pinterest"></a>
                                                <a class="pocket"></a>
                                                <button class="reddit"></button>
                                                <button class="telegram"></button>
                                                <button class="twitter"></button>
                                                <button class="viber"></button>
                                                <button class="vkontakte"></button>
                                                <button class="whatsapp"></button>
                                            </div>
                                            <?php
                                        echo '</div>
                                    </div>
                                </div>
                            </div>';
                            echo '</div>';
                            echo '<hr>';
                        echo '</div>';
                    echo '</div>'; 
                echo '</div>';
                // d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block
                echo '<div class="container ">';
                echo '<div class="row content  divitemover">';
                    echo '<div class="col-lg-9">';
                        echo '<div class="row content">';
                            echo '<div class="col-lg-12">';
                                echo '<div class=" cardstyl  initial">';echo '<br>';
                                    echo '<h5 class="itemdivv">AED  ' . $item["price"] . '</h5>';                           
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">';
                                echo '<div class=" cardstyl  initial">';
                                    echo '<div class="itemdivv"><svg style="margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15.24 9"><g data-name="Group 10902" fill="currentColor"><circle data-name="Ellipse 43" cx="1.701" cy="1.701" r="1.701" transform="translate(2.345 1.332)"></circle><path data-name="Path 3593" d="M12.176 1.3H7.364a.753.753 0 00-.754.754v3.241H1.572V.433A.431.431 0 001.139 0H.433A.431.431 0 000 .433v8.134A.431.431 0 00.433 9h.706a.431.431 0 00.433-.433v-1.7h12.1v1.684a.431.431 0 00.433.433h.706a.431.431 0 00.433-.433V4.364A3.064 3.064 0 0012.176 1.3z"></path></g></svg>      ' . $item["beds"] . '      Beds</div>';                           
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">';
                                echo '<div class=" cardstyl  initial">';
                                    echo '<div class="itemdivv"><svg style="margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.908 12"><g data-name="Group 11275"><path data-name="Path 3594" d="M14.465 4.526H5.337a.465.465 0 00-.1-.012l-2.574.011.012-2.272C2.691 1.488 3.156.888 3.74.888a1.306 1.306 0 011.278 1.106.447.447 0 00.887-.1 2.187 2.187 0 00-2.16-1.89 2.126 2.126 0 00-1.952 2.242L1.775 4.53H.444A.444.444 0 000 4.97v.742a4.322 4.322 0 003.424 4.222l-.873 1.363a.444.444 0 10.745.479l1.123-1.748h6.07l1.123 1.748a.443.443 0 00.745-.479l-.873-1.363a4.322 4.322 0 003.424-4.222V4.97a.444.444 0 00-.443-.444z" fill="currentColor"></path></g></svg>      ' . $item["baths"] . '      Baths</div>';                           
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">';
                                echo '<div class=" cardstyl  initial">';
                                    echo '<div class="itemdivv"><svg style="margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><defs><clipPath id="SizeFilled_svg__a"><path d="M0 0h16v16H0z"></path></clipPath></defs><g data-name="Group 10905" clip-path="url(#SizeFilled_svg__a)"><path data-name="Path 3596" d="M13.615 2H2.385A.385.385 0 002 2.385v11.23a.385.385 0 00.385.385h11.23a.385.385 0 00.385-.385V2.385A.385.385 0 0013.615 2zm-5.23 10h-4A.385.385 0 014 11.615v-4a.385.385 0 01.769 0v3.615h3.615a.385.385 0 010 .769zM12 8.385a.385.385 0 01-.769 0V4.769H7.615a.385.385 0 010-.769h4a.385.385 0 01.385.385z" fill="currentColor"></path></g></svg>      ' . $item["size"] . '      SqFt</div>';                           
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-12 col-md-4 col-sm-4 col-xs-4">';
                                echo '<div class=" cardstyl  initial">';echo '<br>';
                                    echo '<h5 class="itemdivlo"><ion-icon name="location-outline"></ion-icon>      ' . $item["location"] . '</h5>';                           
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>'; 
                // echo '<div class="itemdiv"><ion-icon name="location-outline"></ion-icon>      ' . $item["location"] . '</div>';                           
                echo '</div>';

                echo '<div class="container">';
                    echo '<div class="row content  divitemover">';
                        echo '<div class="col-lg-9">';echo '<hr>';
                            echo '<div class="row content">';
                                echo '<div class="col-lg-12">';
                                    echo '<div type="large">' . $item['description'] . '</div><hr>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

                echo '<div class="container  d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">';
                echo '<div class="itemover">property_info</div>';
                echo '<div class="row content  divitemover">';
                    echo '<div class="col-lg-9">';
                        echo '<div class="row content">';
                            echo '<div class="col-lg-12">';
                                echo '<div class="card  initial">';
                                    echo '<div class="row content">';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemall"> Listed By </div>';                        
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['listedby'] . '</div>';                           
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Posted On </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Property Reference </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['propertyreference'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Size </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['size'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> 360 Tour URL </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['urltour'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> YouTube URL </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['urlyutub'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Bathrooms </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['baths'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Bedrooms </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['beds'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Category </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['categoryy'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Ready By </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['readyby'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Other </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['extras'] . '</div>';                          
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="itemall"> Short Term </div>';                       
                                        echo '</div>';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="itemsql">' . $item['shortterm'] . '</div>';                          
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>'; 
                echo '</div>';

                echo '<div class="container d-block d-sm-none">';
                echo '<div class="itemover">property_info</div>';
                echo '<div class="row content  divitemover">';
                                    echo '<div class="row content">';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Listed By </span>';                        
                                            echo '<span class="itemsqll">' . $item['listedby'] . '</span>';
                                            echo '<hr>';                         
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Posted On </span>';                        
                                            echo '<span class="itemsqll">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Property Reference </span>';                        
                                            echo '<span class="itemsqll">' . $item['propertyreference'] . '</span>'; 
                                            echo '<hr>';                             
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Size </span>';                        
                                            echo '<span class="itemsqll">' . $item['size'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> 360 Tour URL </span>';                        
                                            echo '<span class="itemsqll">' . $item['urltour'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> YouTube URL </span>';                        
                                            echo '<span class="itemsqll">' . $item['urlyutub'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Bathrooms </span>';                        
                                            echo '<span class="itemsqll">' . $item['baths'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Bedrooms </span>';                        
                                            echo '<span class="itemsqll">' . $item['beds'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Category </span>';                        
                                            echo '<span class="itemsqll">' . $item['categoryy'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Ready By </span>';                        
                                            echo '<span class="itemsqll">' . $item['readyby'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Other </span>';                        
                                            echo '<span class="itemsqll">' . $item['extras'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                        echo '<div class="col-lg-12">';
                                            echo '<span class="itemalll"> Short Term </span>';                        
                                            echo '<span class="itemsqll">' . $item['shortterm'] . '</span>';  
                                            echo '<hr>';                            
                                        echo '</div>';
                                    echo '</div>';
                echo '</div>'; 
                echo '</div>';


                echo '<div class="container d-none d-md-block d-lg-none">';
                echo '<div class="itemover">property_info</div>';
                echo '<div class="row content  divitemover">';
                                    echo '<div class="row content">';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Listed By </span>';                        
                                        echo '<span class="itemsqll">' . $item['listedby'] . '</span>';
                                        echo '<hr>';                         
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Posted On </span>';                        
                                        echo '<span class="itemsqll">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Property Reference </span>';                        
                                        echo '<span class="itemsqll">' . $item['propertyreference'] . '</span>'; 
                                        echo '<hr>';                             
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Size </span>';                        
                                        echo '<span class="itemsqll">' . $item['size'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> 360 Tour URL </span>';                        
                                        echo '<span class="itemsqll">' . $item['urltour'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> YouTube URL </span>';                        
                                        echo '<span class="itemsqll">' . $item['urlyutub'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Bathrooms </span>';                        
                                        echo '<span class="itemsqll">' . $item['baths'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Bedrooms </span>';                        
                                        echo '<span class="itemsqll">' . $item['beds'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Category </span>';                        
                                        echo '<span class="itemsqll">' . $item['categoryy'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Ready By </span>';                        
                                        echo '<span class="itemsqll">' . $item['readyby'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Other </span>';                        
                                        echo '<span class="itemsqll">' . $item['extras'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '<div class="col-lg-12">';
                                        echo '<span class="itemalll"> Short Term </span>';                        
                                        echo '<span class="itemsqll">' . $item['shortterm'] . '</span>';  
                                        echo '<hr>';                            
                                    echo '</div>';
                                    echo '</div>';
                echo '</div>'; 
                echo '</div>';

                echo '<div class="container">';
                echo '<div class="row content  divitemover">';
                    echo '<div class="col-lg-9">';
                    echo '<br><hr>';
                        echo '<div class="row content">';
                            echo '<div class="col-lg-12">';
                                echo '<h5 >Location</h5>';
                            echo '</div>';
                            echo '<div class="col-lg-12">';
                                echo '<div type="large" ><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="container">';
                echo '<div class="row content  divitemover">';
                    echo '<div class="col-lg-9">';
                    echo '<hr>';
                        echo '<div class="row content">';
                            echo '<div class="col-lg-12">';
                                echo '<div >Is there an issue? <span class="spanrepot">Report this ad</span></div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
                ?>
                                <?php
                    echo navone();
                ?>
                <?php
                                }
                                   }
                                    else{
                                        ?>
                                        <style>
                                            .pageindexnofound {
                                                text-decoration: none;
                                                border: 1px solid gray;
                                                padding: 10px;
                                                border-radius: 5px;
                                                color: blue;
                                            }
                                            .pageindexnofound:hover{
                                                color: black;
                                            }
                                        </style><?php
                                        echo '<center><h1 style="font-size: 150px;">404</h1></center>
                                        <center><h3 style="font-size: 50px;">Page Not Found</h3></center>';}    
                                    echo '</div>';
                                echo '</div>';

    }
    elseif($do == 'Update'){
        echo '<h1 class="text-center h1-member">Activate Favorite</h1>';
        echo "<div class='container'>";
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
        if(isset($_SESSION['uid']))
        {
          $getUser = $con->prepare("SELECT * FROM users WHERE user_id = ?");
          $getUser->execute(array($sessionUserid));
          $infoId = $getUser->fetch();
          $useridd = $infoId['user_id'];

            $stmtitemadd = $con->prepare("INSERT INTO favorite(iditem, userid, favorite, nameitem) VALUES(:ziditem, :zuserid, 1, 'forrent')");
                $stmtitemadd->execute(array('ziditem' => $userid, 'zuserid' => $useridd));
                header('Location:myfavorite.php');
                exit();
         echo '</div>';
        }
        else{
            header('Location:loginn.php');
            exit();
        }
    }

    include 'includes/templates/footer.php'; 
        ?>
        <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block backfooter">
          <footer class="site-footer">
                <div class="container">
                  <div class="row content">
                    <div class="col-lg-4 col-md-6 col-xs-6">
                      <ul class="footer-links">
                        <style>
                          #logo_1_icon1 {
                              width: 76px;
                              height: 75px;
                            }
                            #Rectangle_74 { fill: rgba(251,201,0,1);}
                            .Rectangle_74 {
                                overflow: visible;
                                width: 52px;
                                height: 5px;
                                left: 0px;
                                top: 5px;
                            }
                        </style>
                        <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                        <li>
                        <div id="We_are_recognized_for_exceedin">
                          <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                        </div>
                        </li>
                        <div class="row">
                        <ul class="social-icons">
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                          </ul>
                        </div>

                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6">
                      <h5 class="hsinqftr">Quick Links</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6">
                      <h5 class="hsinqftr">Popular Searches</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-xs-6">
                      <h5 class="hsinqftr">Support</h5>
                        <svg class="Rectangle_74">
                          <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                          </rect>
                        </svg>
                        <ul class="footer-links">
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 col-xs-6">
                      <h5 class="hsinqftr">Subscribe</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <div class="row content">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
                            </div>             
                        </form>  
                        <div class="the-errors text-center">
                          <?php
                                      if(isset($successMsg1)){
                                          echo '<div class="msg success">' . $successMsg1 . '</div>';
                                      }
                          ?>
                        </div>
                        <?php
                                  if(isset($_SESSION['uid'])){
                                    if(isset($_POST['subsc']))
                                    {
                                        $email = $_POST['email'];
                                        $name = $_POST['name'];
                                                $check = checkItem("Email", "subscribe", $email);
                                                if($check == 1)
                                                {
                                                    $successMsg1 = 
                                                    '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                }
                                                else{
                                                    $stmtadd = $con->prepare("INSERT INTO
                                                                            subscribe(Name, Email, date)
                                                                            VALUES(:zname, :zemail, now())");
                                                    $stmtadd->execute(array(
                                                        'zname' => $_SESSION['email'],
                                                        'zemail' => $email
                                                    ));
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
                                                    if(mail($email, $subject, $message, $sender)){
                                                        ?>
                                                          <?php
                                                                $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                          ?>
                                                        <?php
                                                        $email = "";
                                                      }else{
                                                        ?>
                                                        <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                        <?php
                                                      }
                                                }
                                    }
                                  }
                                    ?>
                      </div>
                    </div>
                  <hr class="footer_hr">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-sm-6 col-xs-12">
                      <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
          </footer>          
        </div>

        <div class="d-block d-sm-none backfooter2">
          <footer class="site-footer">
                <div class="container">
                  <div class="row content">
                    <div class="col-lg-4 col-md-6 col-xs-6">
                      <ul class="footer-links">
                        <style>
                          #logo_1_icon1 {
                              width: 76px;
                              height: 75px;
                            }
                            #Rectangle_74 { fill: rgba(251,201,0,1);}
                            .Rectangle_74 {
                                overflow: visible;
                                width: 52px;
                                height: 5px;
                                left: 0px;
                                top: 5px;
                            }
                        </style>
                        <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                        <li>
                        <div id="We_are_recognized_for_exceedin">
                          <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                        </div>
                        </li>
                        <br>
                        <div class="row">
                        <ul class="social-icons">
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                          </ul>
                        </div>

                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                      <h5 class="hsinqftr">Quick Links</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                      <h5 class="hsinqftr">Popular Searches</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                      <h5 class="hsinqftr">Support</h5>
                        <svg class="Rectangle_74">
                          <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                          </rect>
                        </svg>
                        <ul class="footer-links">
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                      <h5 class="hsinqftr">Subscribe</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <div class="row content">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
                            </div>             
                        </form>  
                        <div class="the-errors text-center">
                          <?php
                                      if(isset($successMsg1)){
                                          echo '<div class="msg success">' . $successMsg1 . '</div>';
                                      }
                          ?>
                        </div>
                        <?php
                                  if(isset($_SESSION['uid'])){
                                    if(isset($_POST['subsc']))
                                    {
                                        $email = $_POST['email'];
                                        $name = $_POST['name'];
                                                $check = checkItem("Email", "subscribe", $email);
                                                if($check == 1)
                                                {
                                                    $successMsg1 = 
                                                    '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                }
                                                else{
                                                    $stmtadd = $con->prepare("INSERT INTO
                                                                            subscribe(Name, Email, date)
                                                                            VALUES(:zname, :zemail, now())");
                                                    $stmtadd->execute(array(
                                                        'zname' => $_SESSION['email'],
                                                        'zemail' => $email
                                                    ));
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
                                                    if(mail($email, $subject, $message, $sender)){
                                                        ?>
                                                          <?php
                                                                $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                          ?>
                                                        <?php
                                                        $email = "";
                                                      }else{
                                                        ?>
                                                        <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                        <?php
                                                      }
                                                }
                                    }
                                  }  
                                    ?>
                      </div>
                    </div>
                  <hr class="footer_hr">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-sm-6 col-xs-12">
                      <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
          </footer>          
        </div>

        <div class="d-none d-md-block d-lg-none backfooter1">
          <footer class="site-footer">
                <div class="container">
                  <div class="row content">
                    <div class="col-lg-4 col-md-6 col-xs-6">
                      <ul class="footer-links">
                        <style>
                          #logo_1_icon1 {
                              width: 76px;
                              height: 75px;
                            }
                            #Rectangle_74 { fill: rgba(251,201,0,1);}
                            .Rectangle_74 {
                                overflow: visible;
                                width: 52px;
                                height: 5px;
                                left: 0px;
                                top: 5px;
                            }
                        </style>
                        <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                        <li>
                        <div id="We_are_recognized_for_exceedin">
                          <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                        </div>
                        </li>
                        <br>
                        <div class="row">
                        <ul class="social-icons">
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                            <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                          </ul>
                        </div>

                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6">
                      <h5 class="hsinqftr">Quick Links</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-xs-6">
                      <h5 class="hsinqftr">Popular Searches</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <ul class="footer-links">
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                        <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-xs-6">
                      <h5 class="hsinqftr">Support</h5>
                        <svg class="Rectangle_74">
                          <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                          </rect>
                        </svg>
                        <ul class="footer-links">
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                          <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 col-xs-6">
                      <h5 class="hsinqftr">Subscribe</h5>
                      <svg class="Rectangle_74">
                        <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                        </rect>
                      </svg>
                      <div class="row content">


                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">                      
                                <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">

                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc1" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
                            </div>             
                        </form>  
                        <div class="the-errors text-center">
                          <?php
                                      if(isset($successMsg1)){
                                          echo '<div class="msg success">' . $successMsg1 . '</div>';
                                      }
                          ?>
                        </div>
                        <?php
                                  if(isset($_SESSION['uid'])){
                                    if(isset($_POST['subsc1']))
                                    {
                                        $email = $_POST['email'];
                                        $name = $_POST['name'];
                                                $check = checkItem("Email", "subscribe", $email);
                                                if($check == 1)
                                                {
                                                    $successMsg1 = 
                                                    '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                }
                                                else{
                                                    $stmtadd = $con->prepare("INSERT INTO
                                                                            subscribe(Name, Email, date)
                                                                            VALUES(:zname, :zemail, now())");
                                                    $stmtadd->execute(array(
                                                        'zname' => $_SESSION['email'],
                                                        'zemail' => $email
                                                    ));
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
                                                    if(mail($email, $subject, $message, $sender)){
                                                        ?>
                                                          <?php
                                                                $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                          ?>
                                                        <?php
                                                        $email = "";
                                                      }else{
                                                        ?>
                                                        <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                        <?php
                                                      }
                                                }
                                    }
                                  }  
                                    ?>
                      </div>
                    </div>
                  <hr class="footer_hr">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-sm-6 col-xs-12">
                      <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
          </footer>          
        </div>

<?php
    ob_end_flush();
?>