<?php
ob_start();
session_start();
$pageTitle = 'BuyNow';
$backgroungimage = "background: url('layout/images/2.jpg')repeat ;";
$pageTitle = 'REQUESTS';
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

        if($do == 'Manage'){

            if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                $blog = intval($_GET['pageid']);
            $stmtmanageorder = $con->prepare("SELECT * FROM requests Where Id = {$blog}");
            $stmtmanageorder->execute();
            $orders = $stmtmanageorder->fetchAll();
            if(!empty($orders)){
            ?>
                <h1 class="text-center h1-member"> My cart</h1>
                        
                    <div class="">
                    <div class="table-responsive container" style="margin-top:100px;">
                        <table class="main-table text-center table table-bordered table-hover">
                                <tr class="trcart">
                                    <th>#</th>
                                    <th>Name Product</th>
                                    <th>Price Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            <?php
                                foreach($orders as $order)
                                { 
                                    echo '<tbody id="myTable">';
                                        echo "<tr>";
                                            echo "<td>" . $order['Id'] ."</td>";
                                            echo "<td>" . $order['Name_product'] ."</td>";
                                            echo "<td>" . "$" . $order['Price_product'] ."</td>";
                                            echo "<td>" . $order['Date_request'] ."</td>";
                                            echo "<td>"; 
                                                if($order['Status'] == 0){ echo '<span style="color:black;"> Approve </span>';}
                                                elseif($order['Status'] == 1){ echo '<span style="color:red;"> Ordered </span>';}
                                                elseif($order['Status'] == 2){ echo '<span style="color:blue;"> On Delivery</span>';}
                                                elseif($order['Status'] == 3){ echo '<span style="color:green;"> Delivered</span>';}
                                                elseif($order['Status'] == 4){ echo "<a href='cart.php?do=Delete&orderid=" . $order['Id'] . "' class='btn btn-danger confirm'>Cancelled</a>";}
                                            echo "</td>";
                                            echo "<td>
                                            <a href='BuyNow.php?do=Edit&orderid=" . $order['Id'] . "' class='btn btn-success'><ion-icon name='create-outline'></ion-icon></a>
                                            <a href='BuyNow.php?do=Delete&orderid=" . $order['Id'] . "' class='btn btn-danger'><ion-icon name='trash-outline'></ion-icon></a>
                                            <a href='pay.php?orderid=" . $order['Id'] . "' class='btn btn-primary' style='margin-left: 3%;'> Pay ... </a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    echo '</tbody>';
                                }
                            ?>
                            </table>
                </div>
                
            </div>
            <?php } else {
                    echo '<div class="container">';
                        echo '<div class="alert alert-danger">There\'s No request To Show.</div>';
                    echo '</div>';
            }?>
            <?php

}
// else{echo "You Must Add Page ID.";}

            
        }


        elseif($do  == 'Edit'){
            $orderid = isset($_GET['orderid']) && is_numeric($_GET['orderid']) ? intval($_GET['orderid']) : 0;
            $stmteditorder = $con->prepare("SELECT * FROM requests WHERE Id = ? ");
            $stmteditorder->execute(array($orderid));
            $order = $stmteditorder->fetch();
            $count = $stmteditorder->rowCount();

            if($count > 0){
            ?>
              <h1 class="text-center h1-member">Edit </h1>
                <div class="container page-member" style="margin-top:100px;">
                    <form class="form-horizontal" action="?do=Update" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="orderid" value="<?php echo $orderid ?>" />
                        <div class="form-group form-group-lg "> 
                            <label class="col-sm-2 control-label" style="color: gray; font-style: oblique; font-size: x-large; margin-bottom: 10px;">Status :</label>
                            <div class="col-lg-7 col-md-8 col-sm-12 col-xs-2">
                                <div class="col-md-6 mb-3"><input id="qty" type="number" name="qty"  class="qty" value="1" required
                                style="background: gray;border: 1px solid black;border-radius: 5px;
                                        height: 50px;text-align: center;font-size: 20px;font-weight: 800;"></div>
                            </div>
                        </div>
                        <div class="btn-formmember"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value=" Save " class="btn btn-primary btn-lg" />
                            </div>
                        </div>
                    </form>
                </div>
            <?php 
            }
            else{
                echo '<div class="alert alert-danger">Theres No Such ID.</div>';
                echo "<a href='cart.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Edit requests page. </a>";
                }
        }
        elseif($do == 'Update'){
            echo "<h1 class='text-center h1-member'>Update Request</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $id     = $_POST['orderid'];
                $status  = $_POST['qty'];
                    $stmtorderupdate = $con->prepare("UPDATE requests SET Qty = ? WHERE  Id = ?");
                                $stmtorderupdate->execute(array($status, $id));
                                echo "<div class='alert alert-success'>" . $stmtorderupdate->rowCount() . ' Record Updated. </div>';
                                echo "<a href='mycart.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to requests page. </a>";
            }
            echo '</div>';
        }
        elseif($do == 'Delete'){
            echo "<h1 class='text-center h1-member'>Delete Request</h1>";
            echo "<div class='container'>";
            $orderid = isset($_GET['orderid']) && is_numeric($_GET['orderid']) ? intval($_GET['orderid']) : 0;
            $check = checkItem('Id', 'requests', $orderid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM requests WHERE Id = :zcart");
                $stmtdelete->bindParam(":zcart", $orderid);
                $stmtdelete->execute();
                echo "<div class='alert alert-success'>" . ' Record Deleted </div>';
                echo "<a href='mycart.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return . </a>";
            }  else {
                echo '<div class="alert alert-danger">This ID is Not Exist.</div>';
                echo "<a href='mycart.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return . </a>";
            }
            echo '</div>';
        }      
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>