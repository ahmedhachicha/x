<?php 
    ob_start();
    session_start();
    $pageTitle = 'Product';
    include 'init.php';
    
        $do = isset($_GET['do']) ? $_GET['do'] : 'Insert';
        // if(isset($_GET['pageeid']) && is_numeric($_GET['pageeid'])){
        //     $blog = intval($_GET['pageeid']);  
        if($do == 'Insert')
        {
         echo '<div style="margin-top:200px;">';
            echo "<h1 class='text-center h1-index'>Insert Food</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                
                    // $Name          = $_POST['name'];
                    // $price          = $_POST['price'];
                    // $qty            = $_POST['qty'];
                    // $description       = $_POST['description'];
                    
                    //         $stmtaddfood = $con->prepare("INSERT INTO
                    //                             requests(user_id, Name_product, Price_Product, Qty, Total, Date_request, Status, mycart)
                    //                             VALUES(:zuserid, :ztitle, :zprice, :zqty, :ztotal, now(), 0, 1)");
                    //         $stmtaddfood->execute(array(
                    //             'zuserid' =>  $_SESSION['uid'],
                    //             'ztitle'    => $Name,
                    //             'zprice'    => $price,
                    //             'zqty'   => $qty,
                    //             'ztotal' => $price * $qty
                    //         ));
                    //         echo "<div class='alert alert-success'>" . $stmtaddfood->rowCount() . " Record Inserted. </div>";
                    //         echo "<a href='products.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return. </a>";
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='products.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return . </a>";
            }
            echo '</div>';
         echo '</div>';
        }

        // }
                    // if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                    //     $blog = intval($_GET['pageid']);        

// }
// else{echo "You Must Add Page ID.";}
        include 'includes/templates/footer.php';   
ob_end_flush();
?>