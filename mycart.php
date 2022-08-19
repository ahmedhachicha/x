<?php 
    ob_start();
    session_start();
    $pageTitle = 'MyCart';
    include 'init.php';

    if(isset($_SESSION['uid'])){
        $getUser = $con->prepare("SELECT * FROM users WHERE Id = ?");
        $getUser->execute(array($sessionUserid));
        $info = $getUser->fetch();

        $userid = $info['Id'];
    ?>

        <div id="my-carts" class="my-carts block">
            <div class="container ads infoads">
                <div class="panel panel-primary">
                    <div class="panle-heading"><div class="mycartss"><ion-icon name="newspaper-outline"></ion-icon> My Carts</div></div>
                    <div class="panel-body">
                        <div class="row">
                            <?php
                            $myCarts = getAllFrom("*", "requests", "where user_id = $userid", "and mycart = 1", "Id", "");
                            if(!empty($myCarts))
                            {
                                echo '<div class="row marginads">';
                                    foreach(getCarts('user_id', $info['Id'], 1) as $cart)
                                    { 
                                        echo '<div class="col-sm-6 col-md-4"  >';
                                            echo '<div class="thumbnail item-box">';
                                                echo '<br/><span class="itemcart">' .$cart['Name_product'] .'</span>';
                                                echo '<div class=" fw-bold mb-1 pricecard">$price</div>'; 
                                                // echo '<span class="price-tag">Price: $' .$cart['Price_product'] .'</span>';  
                                                echo '<div class="buttonmycart"><a href="BuyNow.php?pageid=' . $cart['Id'] . '"><button class="input_product">Buy Now</button></a></div>';
                                                echo '<a href="BuyNow.php?do=Delete&orderid=' . $cart['Id'] . '" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></a>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                echo '</div>';
                            }else{
                                echo '<div class="alert alert-danger">Sorry, no requests to view</div>';
                            }
                            ?>
                        </div>
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