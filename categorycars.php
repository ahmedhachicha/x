<?php
    $pageTitle = 'Add Cars';
    include 'init.php';
?>
    <div class="container">
        <h1 class="text-center h1-index">Show Categories Products</h1>
        <div class="row">
            <?php
                if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                    $category = intval($_GET['pageid']);
                    $allItems = getAllFrom("*", "items", "where Cat_ID = {$category}", "AND Approve = 1", "items_ID", "");
                        foreach($allItems as $item)
                        { 
                            echo '<div class="col-sm-6 col-md-4" id="myList">';
                                echo '<div class="thumbnail item-box">';
                                echo '<span class="price-tag">$' . $item['Price'] .'</span>';  
                                    echo '<div>';
                                        if(empty($item['image'])){ echo "<img class='imgavataritem' src='admin/Update-Image/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                        else{  echo  "<img class='imgavataritem' src='admin/Update-Image/uploads/avatars/" . $item['image'] ."' alt='avtar' />";}
                                    echo '</div>';
                                    echo '<div class="caption">';
                                        echo '<h3><a href="items.php?itemid=' . $item['items_ID'] .'">' . $item['Name'] . '</a></h3>';
                                        echo '<b>' .$item['Description'] . '</b>';
                                        echo '<div class="date">' .$item['Add_Date'] . '</div>';
                                        echo '<a href="cart.php?itemid=' . $item['items_ID'] .'" class="btn btn-primary buttoncart">+</a>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                else{echo "You Must Add Page ID.";}
                ?>
        </div>
    </div>

<?php
    include $tpl . 'footer.php';
?>