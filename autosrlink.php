<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Buy & sell any Auto Services online';
    include 'init.php';
?>
            <style>
                ion-icon.searchbtn.md.hydrated {
                    margin-right: 5px;
                    margin-left: -5px;
                }
                ul.pagination {
                    border: 1px solid #fff;
                    border-radius: 15px;
                    padding-left: 20px;
                    padding-top: 5px;
                    padding-bottom: 5px;
                    font-size: 18px;
                    box-shadow: 0 2px 8px #7fc4e3;
                }
                li .page-link{
                    border: none;
                }
                li .page-link:hover{
                    background-color: #7FC4E3;
                }
                div#search-widgetresp {
                    background-color: #f5f5f5;
                    border-radius: 12px;
                    /* float: left; */
                    padding: 10px;
                    width: 350px;
                    box-sizing: border-box;
                    margin-left: 35px;
                    margin-right: 35px;
                }
                div#search-widgetresptel {
                    background-color: #f5f5f5;
                    border-radius: 6px;
                    float: left;
                    padding: 12px;
                    width: 300px;
                    box-sizing: border-box;
                }
                div#search-headerresp {
                    font-size: 25px;
                    color: #0093D5;
                    font-weight: 600;
                    margin: 8px;
                }
            </style>

        <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
            <div class="container-fluid">
                <div class="row" style="padding-left:15px;">
                                    <center>
                                        <h1 class="h1-pagecat">Buy & sell any Auto Services </h1>
                                        <h2 class="div-pagecat"> Auto Services on Oh Yamal</h2>                    
                                    </center>
                    <div class="col-lg-2">
                        <?php $do = isset($_GET['do']) ? $_GET['do'] : 'one';
                            // if($do == 'search')
                            // {
                                ?>
                                    <div id="search-widget-wrapper">
                                        <div id="search-widget">
                                            <form id="search-widget-form" action="?do=resultsearch" method="POST">
                                                
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div id="search-header">
                                                            Search
                                                        </div>
                                                    </div>                                    
                                                    <div class="col-lg-9">
                                                        <div id="email_alerts-top-wrap">
                                                                <div style="display:block;" class="visible unsaved_search_btn">
                                                                        <button type="submit" id="email_alerts" >
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                            Save Search
                                                                        </button>
                                                                </div>
                                                                <div class="ajax_saved_search_btn" style="display: none;">	
                                                                    <button id="email_alerts" href="/email_alerts/" onclick="return dbzglobal_event_adapter(this,'email_alerts');" class="flame-button flame-button--tertiary flame-button--small" type="button">	
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>	
                                                                        Saved	
                                                                    </button>	
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="search-content">
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                <select id="site:swfield" name="locationcars">
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "locationcars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="typecommunity">
                                                                        <option value="auto" selected>Auto Services</option>
                                                                        <option value="conserv">Consultancy Services</option>
                                                                        <option value="domcl">Domestic</option>
                                                                        <option value="evencat">Event & Entertainment</option>
                                                                        <option value="freelancers">Freelancers</option>
                                                                        <option value="healthcom">Health & Wellbeing Services</option>
                                                                        <option value="homincom">Home Maintenance</option>
                                                                        <option value="movlscom">Movers & Removals</option>
                                                                        <option value="Other Services">Other Services</option>
                                                                        <option value="eltrcom">Restoration & Repairs</option>
                                                                        <option value="tutorscom">Tutors & Classes</option>
                                                                        <option value="webgracom">Web & Computer Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        <input type="hidden" name="is_search" value="1">
                                                            <center><a href='autosrlink.php?do=clear'>Clear Input</a></center>  
                                                            <div class="search-action-link">
                                                                <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                    save search
                                                                </button>
                                                            </div>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                <?php
                            // }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php   $sort = 'DESC';
                        $sortt ='';
                                $sort_array = array('ASC', 'DESC');
                                if(isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)){$sort = $_GET['sort'];}?>
                                <div class="container ordering pull-right">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <label>Sort:</label>
                                        </div>     
                                        <div class="col-lg-11">
                                            <div class="row">
                                                <div class="col-lg-6"> 
                                                    <a class="<?php if($sort == 'DESC'){echo 'active';} ?>" href="?sort=DESC">[Newest to Oldest]</a> | 
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="<?php if($sort == 'ASC'){echo 'active';} ?>"href="?sort=ASC">[Oldest to Newest]</a> | 
                                                </div>
                                                <!-- <div class="col-lg-6">                                    
                                                    <form action="?do=orderprice1" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Highest to Lowest]</button></form> 
                                                </div>
                                                <div class="col-lg-6">                                    
                                                    <form action="?do=orderprice2" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Lowest to Highest]</button></form>   
                                                </div> -->
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                        <div class="card">
                            <div class="container" style="padding: 10px;">
                                <div class="row">
                                    <div class="col-lg-10">
                                        Browse results in: <a href="allcommunity.php">.. > Community > </a> <strong style="color: #626465;">Auto Services</strong>            
                                    </div>
                                    <div class="col-lg-2">
                                            <span class="toggle-info pull-right">
                                                <ion-icon name="remove-outline"></ion-icon>
                                            </span>          
                                    </div>
                                    <div class="panel-body">
                                        <div class="container"><hr></div>
                                        <div class="row">
                                                            <?php $var = countItemscomminity('typecommunity', 'community', '%auto%');
                                                                if($var != 0){
                                                                    ?> 
                                            <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="auto" name="searchmakecars1">Auto Services <span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%auto%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%conserv%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="conserv" name="searchmakecars1">Consultancy Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%conserv%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%domcl%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="domcl" name="searchmakecars1">Domestic<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%domcl%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%evencat%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="evencat" name="searchmakecars1">Event & Entertainment<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%evencat%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%freelancers%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="freelancers" name="searchmakecars1">Freelancers<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%freelancers%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%healthcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="healthcom" name="searchmakecars1">Health & Wellbeing<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%healthcom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%homincom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="homincom" name="searchmakecars1">Home Maintenance<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%homincom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%movlscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="movlscom" name="searchmakecars1">Movers & Removals<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%movlscom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%Other Services%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Other Services" name="searchmakecars1">Other Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%Other Services%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%eltrcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="eltrcom" name="searchmakecars1">Restoration & Repairs<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%eltrcom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%tutorscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                        <div class="col-lg-4">
                                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="tutorscom" name="searchmakecars1">Tutors & Classes<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%tutorscom%'); ?>)</span> </button></a>
                                                                            </form>
                                                                        </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%webgracom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-8">
                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="webgracom" name="searchmakecars1">Web & Computer Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%webgracom%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>                                                            
                                                            <?php }
                                                            ?>

                                        </div>
                                    </div>                                    
                                </div>
                                <!-- <hr> -->
                            </div>
                        </div>
                            <!-- <div class="container"> -->
                                    <!-- <div class="container"> -->
                                <div class="row">
                                    
                                    <?php
                                                    if($do == 'one'){
                                                        $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result1 = $con->prepare("SELECT count(Id) AS Id FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' ");
                                                        $result1->execute();
                                                        $custCount = $result1->fetchAll();
                                                        $total = $custCount[0]['Id'];
                                                        $pages = ceil( $total / $limit );
                                                        $second_last = $pages - 1;
                                                        $adjacents = "2"; 
                                                        $prone = 1;
                                                        $Previous = $page - 1;
                                                        $nextfin = $total;
                                                        $Next = $page + 1;

                                                        $allItems = getAllFrom('*', 'community', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%'", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                        foreach($allItems as $item)
                                                                {                                           
                                                                    echo '<a href="infocommunity.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                echo '<div class="borderstyl" style="padding:15px;">';
                                                                    echo '<div class="row">';
                                                                        // echo '<div class="col-lg-2">Featured</div>';
                                                                        // echo '<div class="col-lg-10">History Check</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["Name"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                        echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                </div>';
                                                                        echo '</div>';
                                                                echo '</div>';
                                                                echo '<hr>';
                                                            echo '</div></a>';
                                                        }   
                                                        ?>
                                                        <br> 
                                                        <div class="container">
                                                        <!--    <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                <div class="col-lg-8"> -->
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                        <li class='page-item'  <?php if($page <= 1){ echo "class='disabled'"; } ?>>
                                                                        <a  class='page-link' <?php if($page > 1){ echo "href='?page=$Previous'"; } ?>>Previous</a>
                                                                        </li>
                                                                                                                    <?php 
                                                                                    if ($pages <= 10){  	 
                                                                                        for ($counter = 1; $counter <= $pages; $counter++){
                                                                                            if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                    }
                                                                                    elseif($pages > 10){
                                                                                        
                                                                                    if($page <= 4) {			
                                                                                    for ($counter = 1; $counter < 8; $counter++){		 
                                                                                            if ($counter == $page) {
                                                                                        echo "<li  class='page-item' class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";
                                                                                        }

                                                                                    elseif($page > 4 && $page < $pages - 4) {		 
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {			
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                  
                                                                                    }
                                                                                    echo "<li class='page-item' ><a>...</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";      
                                                                                            }
                                                                                        
                                                                                        else {
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";

                                                                                        for ($counter = $pages - 6; $counter <= $pages; $counter++) {
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                   
                                                                                                }
                                                                                            }
                                                                                    }
                                                                            ?>
                                                                            <li class="page-item" <?php if($page >= $pages){ echo "class='disabled'"; } ?>>
                                                                            <a class="page-link" <?php if($page < $pages) { echo "href='?page=$Next'"; } ?>>Next</a>
                                                                            </li>
                                                                            <?php if($page < $pages){
                                                                                echo "<li><a class='page-link' href='?page=$pages'>Last</a></li>";
                                                                                } ?>
                                                                        </ul>
                                                                    </nav>                                    
                                                                <!-- </div>
                                                                <div class="col-lg-2"></div>                                
                                                            </div>-->
                                                        </div> 
                                                        
                                                        <?php
                                                    }             
                                                    elseif($do == 'resultsearch'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars'];
                                                            $typecommunity = $_POST['typecommunity'];

                                                            $stmt = $con->prepare("SELECT * FROM community where locationcars like '%$locatecars%' AND Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$typecommunity%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                         </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }
                                                    } 
                                                    elseif($do == 'clear'){
                                                        header('Location:autosrlink.php');
                                                        exit();                                                
                                                    }     
                                                    // location
                                                    elseif($do == 'searchlocationcars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars2'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars2'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars3'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars3'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }         
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars4'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars4'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars5'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars5'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars6'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars6'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }        
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars7'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars7'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars8'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars8'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }       
                                                        }

                                                    } 

                                                    // make
                                                    elseif($do == 'searchmakecars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $make = $_POST['searchmakecars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$make%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                    ?>
                                                        <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ajman" name="locationcars1">
                                                                            Auto Services in Ajman</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                            Auto Services in Dubai</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                            Auto Services in Abu Dhabi</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                            Auto Services in Ras al Khaimah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                            Auto Services in Sharjah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                            Auto Services in Fujairah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                            Auto Services in Umm al Quwain</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                            Auto Services in Al Ain</button>
                                                        </form>
                                </div>  
                            <!-- </div>   -->
                            <!-- </div>   -->
                    </div>
                    <div class="col-lg-4"></div>
                </div>        
            </div>
        </div>

        <div class="d-block d-sm-none">
            <div class="container-fluid">
                <div class="row" style="padding-left:15px;">
                                    <center>
                                        <h1 class="h1-pagecat">Buy & sell any Auto Services </h1>
                                        <h2 class="div-pagecat"> Auto Services on Oh Yamal</h2>                    
                                    </center>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button style="background: none;
                                border: none;" class="flame-button flame-button--tertiary flame-button--medium btnshar" data-bs-toggle="modal" data-bs-target="#exampleModalll"><span class="price-taggg" style="cursor:pointer;">
                                <ion-icon name="search-outline" class="searchbtn"></ion-icon>Search
                                </span></button>
                        </div>
                        <?php
                                echo '<div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">';
                                                
                                                ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php $do = isset($_GET['do']) ? $_GET['do'] : 'one';
                            // if($do == 'search')
                            // {
                                ?>
                                    <div id="search-widget-wrapper">
                                        <div id="search-widgetresptel">
                                            <form id="search-widget-form" action="?do=resultsearch" method="POST">
                                                
                                            <div class="row">
                                                                                                    <div class="col-lg-3 col-md-8 col-sm-12 col-xs-12">
                                                                                                        <div id="search-headerresp">
                                                                                                            Search                                                                                                                    
                                                                                                            <button type="submit" id="email_alerts" style="height: 35px;">
                                                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                                            Save Search
                                                                                                                        </button>
                                                                                                        </div>
                                                                                                    </div>     
                                                                                                </div>

                                                <div id="search-content">
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                <select id="site:swfield" name="locationcars">
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "locationcars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="typecommunity">
                                                                        <option value="auto" selected>Auto Services</option>
                                                                        <option value="conserv">Consultancy Services</option>
                                                                        <option value="domcl">Domestic</option>
                                                                        <option value="evencat">Event & Entertainment</option>
                                                                        <option value="freelancers">Freelancers</option>
                                                                        <option value="healthcom">Health & Wellbeing Services</option>
                                                                        <option value="homincom">Home Maintenance</option>
                                                                        <option value="movlscom">Movers & Removals</option>
                                                                        <option value="Other Services">Other Services</option>
                                                                        <option value="eltrcom">Restoration & Repairs</option>
                                                                        <option value="tutorscom">Tutors & Classes</option>
                                                                        <option value="webgracom">Web & Computer Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        <input type="hidden" name="is_search" value="1">
                                                            <center><a href='autosrlink.php?do=clear'>Clear Input</a></center>  
                                                            <div class="search-action-link">
                                                                <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                    save search
                                                                </button>
                                                            </div>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                <?php
                            // }
                        ?>
                    </div>
                    <?php
                                            echo '</div>
                                        </div>
                                    </div>
                                </div>';
                        ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php   $sort = 'DESC';
                        $sortt ='';
                                $sort_array = array('ASC', 'DESC');
                                if(isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)){$sort = $_GET['sort'];}?>
                                <div class="container ordering pull-right">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                            <label>Sort:</label><br><br>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                                                    <a class="<?php if($sort == 'DESC'){echo 'active';} ?>" href="?sort=DESC">[Newest to Oldest]</a> |
                                                    <a class="<?php if($sort == 'ASC'){echo 'active';} ?>"href="?sort=ASC">[Oldest to Newest]</a>
                                                </div><br>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                        <div class="card">
                            <div class="container" style="padding: 10px;">
                                <div class="row">
                                    <div class="col-lg-10">
                                        Browse results in: <a href="allcommunity.php">.. > Community > </a> <strong style="color: #626465;">Auto Services</strong>            
                                    </div>
                                    <div class="col-lg-2">
                                            <span class="toggle-info pull-right">
                                                <ion-icon name="remove-outline"></ion-icon>
                                            </span>          
                                    </div>
                                    <div class="panel-body">
                                        <div class="container"><hr></div>
                                        <div class="row">
                                                            <?php $var = countItemscomminity('typecommunity', 'community', '%auto%');
                                                                if($var != 0){
                                                                    ?> 
                                            <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="auto" name="searchmakecars1">Auto Services <span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%auto%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%conserv%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="conserv" name="searchmakecars1">Consultancy Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%conserv%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%domcl%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="domcl" name="searchmakecars1">Domestic<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%domcl%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%evencat%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="evencat" name="searchmakecars1">Event & Entertainment<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%evencat%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%freelancers%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="freelancers" name="searchmakecars1">Freelancers<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%freelancers%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%healthcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="healthcom" name="searchmakecars1">Health & Wellbeing<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%healthcom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%homincom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="homincom" name="searchmakecars1">Home Maintenance<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%homincom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%movlscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="movlscom" name="searchmakecars1">Movers & Removals<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%movlscom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%Other Services%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Other Services" name="searchmakecars1">Other Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%Other Services%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%eltrcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="eltrcom" name="searchmakecars1">Restoration & Repairs<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%eltrcom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%tutorscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                        <div class="col-lg-4">
                                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="tutorscom" name="searchmakecars1">Tutors & Classes<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%tutorscom%'); ?>)</span> </button></a>
                                                                            </form>
                                                                        </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%webgracom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-8">
                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="webgracom" name="searchmakecars1">Web & Computer Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%webgracom%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>                                                            
                                                            <?php }
                                                            ?>

                                        </div>
                                    </div>                                    
                                </div>
                                <!-- <hr> -->
                            </div>
                        </div>
                            <!-- <div class="container"> -->
                                <div class="row">
                                    
                                    <?php
                                                    if($do == 'one'){
                                                        $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result1 = $con->prepare("SELECT count(Id) AS Id FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' ");
                                                        $result1->execute();
                                                        $custCount = $result1->fetchAll();
                                                        $total = $custCount[0]['Id'];
                                                        $pages = ceil( $total / $limit );
                                                        $second_last = $pages - 1;
                                                        $adjacents = "2"; 
                                                        $prone = 1;
                                                        $Previous = $page - 1;
                                                        $nextfin = $total;
                                                        $Next = $page + 1;

                                                        $allItems = getAllFrom('*', 'community', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%'", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                        foreach($allItems as $item)
                                                                {                                           
                                                                    echo '<a href="infocommunity.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                echo '<div class="borderstyl" style="padding:15px;">';
                                                                    echo '<div class="row">';
                                                                        // echo '<div class="col-lg-2">Featured</div>';
                                                                        // echo '<div class="col-lg-10">History Check</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["Name"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                        echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                </div>';
                                                                        echo '</div>';
                                                                echo '</div>';
                                                                echo '<hr>';
                                                            echo '</div></a>';
                                                        }   
                                                        ?>
                                                        <br> 
                                                        <div class="container">
                                                        <!--    <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                <div class="col-lg-8"> -->
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                        <li class='page-item'  <?php if($page <= 1){ echo "class='disabled'"; } ?>>
                                                                        <a  class='page-link' <?php if($page > 1){ echo "href='?page=$Previous'"; } ?>>Previous</a>
                                                                        </li>
                                                                                                                    <?php 
                                                                                    if ($pages <= 10){  	 
                                                                                        for ($counter = 1; $counter <= $pages; $counter++){
                                                                                            if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                    }
                                                                                    elseif($pages > 10){
                                                                                        
                                                                                    if($page <= 4) {			
                                                                                    for ($counter = 1; $counter < 8; $counter++){		 
                                                                                            if ($counter == $page) {
                                                                                        echo "<li  class='page-item' class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";
                                                                                        }

                                                                                    elseif($page > 4 && $page < $pages - 4) {		 
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {			
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                  
                                                                                    }
                                                                                    echo "<li class='page-item' ><a>...</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";      
                                                                                            }
                                                                                        
                                                                                        else {
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";

                                                                                        for ($counter = $pages - 6; $counter <= $pages; $counter++) {
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                   
                                                                                                }
                                                                                            }
                                                                                    }
                                                                            ?>
                                                                            <li class="page-item" <?php if($page >= $pages){ echo "class='disabled'"; } ?>>
                                                                            <a class="page-link" <?php if($page < $pages) { echo "href='?page=$Next'"; } ?>>Next</a>
                                                                            </li>
                                                                            <?php if($page < $pages){
                                                                                echo "<li><a class='page-link' href='?page=$pages'>Last</a></li>";
                                                                                } ?>
                                                                        </ul>
                                                                    </nav>                                    
                                                                <!-- </div>
                                                                <div class="col-lg-2"></div>                                
                                                            </div>-->
                                                        </div> 
                                                        
                                                        <?php
                                                    }             
                                                    elseif($do == 'resultsearch'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars'];
                                                            $typecommunity = $_POST['typecommunity'];

                                                            $stmt = $con->prepare("SELECT * FROM community where locationcars like '%$locatecars%' AND Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$typecommunity%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }
                                                    } 
                                                    elseif($do == 'clear'){
                                                        header('Location:autosrlink.php');
                                                        exit();                                                
                                                    }     
                                                    // location
                                                    elseif($do == 'searchlocationcars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars2'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars2'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars3'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars3'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }         
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars4'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars4'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars5'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars5'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars6'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars6'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }        
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars7'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars7'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars8'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars8'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }       
                                                        }

                                                    } 

                                                    // make
                                                    elseif($do == 'searchmakecars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $make = $_POST['searchmakecars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$make%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                    ?>
                                                        <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ajman" name="locationcars1">
                                                                            Auto Services in Ajman</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                            Auto Services in Dubai</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                            Auto Services in Abu Dhabi</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                            Auto Services in Ras al Khaimah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                            Auto Services in Sharjah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                            Auto Services in Fujairah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                            Auto Services in Umm al Quwain</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                            Auto Services in Al Ain</button>
                                                        </form>
                                </div>  
                            <!-- </div>   -->
                    </div>
                    <div class="col-lg-4"></div>
                </div>        
            </div>
        </div>

        <div class="d-none d-md-block d-lg-none">
            <div class="container-fluid">
                <div class="row" style="padding-left:15px;">
                                    <center>
                                        <h1 class="h1-pagecat">Buy & sell any Auto Services </h1>
                                        <h2 class="div-pagecat"> Auto Services on Oh Yamal</h2>                    
                                    </center>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button style="background: none;
                                border: none;" class="flame-button flame-button--tertiary flame-button--medium btnshar" data-bs-toggle="modal" data-bs-target="#exampleModallle"><span class="price-taggg" style="cursor:pointer;">
                                <ion-icon name="search-outline" class="searchbtn"></ion-icon>Search
                                </span></button>
                        </div>
                        <?php
                                echo '<div class="modal fade" id="exampleModallle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">';
                                                
                                                ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php $do = isset($_GET['do']) ? $_GET['do'] : 'one';
                            // if($do == 'search')
                            // {
                                ?>
                                    <div id="search-widget-wrapper">
                                        <div id="search-widgetresp">
                                            <form id="search-widget-form" action="?do=resultsearch" method="POST">
                                                
                                            <div class="row">
                                                                                                    <div class="col-lg-3 col-md-8 col-sm-12 col-xs-12">
                                                                                                        <div id="search-headerresp">
                                                                                                            Search                                                                                                                    
                                                                                                            <button type="submit" id="email_alerts" style="height: 35px;">
                                                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                                            Save Search
                                                                                                                        </button>
                                                                                                        </div>
                                                                                                    </div>     
                                                                                                </div>

                                                <div id="search-content">
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                <select id="site:swfield" name="locationcars">
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "locationcars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="typecommunity">
                                                                        <option value="auto" selected>Auto Services</option>
                                                                        <option value="conserv">Consultancy Services</option>
                                                                        <option value="domcl">Domestic</option>
                                                                        <option value="evencat">Event & Entertainment</option>
                                                                        <option value="freelancers">Freelancers</option>
                                                                        <option value="healthcom">Health & Wellbeing Services</option>
                                                                        <option value="homincom">Home Maintenance</option>
                                                                        <option value="movlscom">Movers & Removals</option>
                                                                        <option value="Other Services">Other Services</option>
                                                                        <option value="eltrcom">Restoration & Repairs</option>
                                                                        <option value="tutorscom">Tutors & Classes</option>
                                                                        <option value="webgracom">Web & Computer Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        <input type="hidden" name="is_search" value="1">
                                                            <center><a href='autosrlink.php?do=clear'>Clear Input</a></center>  
                                                            <div class="search-action-link">
                                                                <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                    save search
                                                                </button>
                                                            </div>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                <?php
                            // }
                        ?>
                    </div>
                    <?php
                                            echo '</div>
                                        </div>
                                    </div>
                                </div>';
                        ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php   $sort = 'DESC';
                        $sortt ='';
                                $sort_array = array('ASC', 'DESC');
                                if(isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)){$sort = $_GET['sort'];}?>
                            <div class="container ordering pull-right">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                        <label>Sort:</label>
                                    </div>     
                                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                                                <a class="<?php if($sort == 'DESC'){echo 'active';} ?>" href="?sort=DESC">[Newest to Oldest]</a> | 
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a class="<?php if($sort == 'ASC'){echo 'active';} ?>"href="?sort=ASC">[Oldest to Newest]</a> | 
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        <div class="card">
                            <div class="container" style="padding: 10px;">
                                <div class="row">
                                    <div class="col-lg-10">
                                        Browse results in: <a href="allcommunity.php">.. > Community > </a> <strong style="color: #626465;">Auto Services</strong>            
                                    </div>
                                    <div class="col-lg-2">
                                            <span class="toggle-info pull-right">
                                                <ion-icon name="remove-outline"></ion-icon>
                                            </span>          
                                    </div>
                                    <div class="panel-body">
                                        <div class="container"><hr></div>
                                        <div class="row">
                                                            <?php $var = countItemscomminity('typecommunity', 'community', '%auto%');
                                                                if($var != 0){
                                                                    ?> 
                                            <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="auto" name="searchmakecars1">Auto Services <span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%auto%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%conserv%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="conserv" name="searchmakecars1">Consultancy Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%conserv%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%domcl%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="domcl" name="searchmakecars1">Domestic<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%domcl%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%evencat%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="evencat" name="searchmakecars1">Event & Entertainment<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%evencat%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%freelancers%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="freelancers" name="searchmakecars1">Freelancers<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%freelancers%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%healthcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                        <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="healthcom" name="searchmakecars1">Health & Wellbeing<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%healthcom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%homincom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="homincom" name="searchmakecars1">Home Maintenance<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%homincom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%movlscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="movlscom" name="searchmakecars1">Movers & Removals<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%movlscom%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%Other Services%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-4">
                                                <form action="?do=searchmakecars1" method="POST">
                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Other Services" name="searchmakecars1">Other Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%Other Services%'); ?>)</span> </button></a>
                                                </form>
                                            </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%eltrcom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                                                            <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="eltrcom" name="searchmakecars1">Restoration & Repairs<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%eltrcom%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                            <?php }
                                                            ?>

                                            <?php $var = countItemscomminity('typecommunity', 'community', '%tutorscom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                        <div class="col-lg-4">
                                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="tutorscom" name="searchmakecars1">Tutors & Classes<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%tutorscom%'); ?>)</span> </button></a>
                                                                            </form>
                                                                        </div>
                                                            <?php }
                                                            ?>
                                            
                                            <?php $var = countItemscomminity('typecommunity', 'community', '%webgracom%');
                                                                if($var != 0){
                                                                    ?> 
                                                                    <div class="col-lg-8">
                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="webgracom" name="searchmakecars1">Web & Computer Services<span style="color: black;">(<?php echo countItemscomminity('typecommunity', 'community', '%webgracom%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>                                                            
                                                            <?php }
                                                            ?>

                                        </div>
                                    </div>                                    
                                </div>
                                <!-- <hr> -->
                            </div>
                        </div>
                            <!-- <div class="container"> -->
                                <div class="row">
                                    
                                    <?php
                                                    if($do == 'one'){
                                                        $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result1 = $con->prepare("SELECT count(Id) AS Id FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' ");
                                                        $result1->execute();
                                                        $custCount = $result1->fetchAll();
                                                        $total = $custCount[0]['Id'];
                                                        $pages = ceil( $total / $limit );
                                                        $second_last = $pages - 1;
                                                        $adjacents = "2"; 
                                                        $prone = 1;
                                                        $Previous = $page - 1;
                                                        $nextfin = $total;
                                                        $Next = $page + 1;

                                                        $allItems = getAllFrom('*', 'community', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%'", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                        foreach($allItems as $item)
                                                                {                                           
                                                                    echo '<a href="infocommunity.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                echo '<div class="borderstyl" style="padding:15px;">';
                                                                    echo '<div class="row">';
                                                                        // echo '<div class="col-lg-2">Featured</div>';
                                                                        // echo '<div class="col-lg-10">History Check</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["Name"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                        echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                </div>';
                                                                        echo '</div>';
                                                                echo '</div>';
                                                                echo '<hr>';
                                                            echo '</div></a>';
                                                        }   
                                                        ?>
                                                        <br> 
                                                        <div class="container">
                                                        <!--    <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                <div class="col-lg-8"> -->
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                        <li class='page-item'  <?php if($page <= 1){ echo "class='disabled'"; } ?>>
                                                                        <a  class='page-link' <?php if($page > 1){ echo "href='?page=$Previous'"; } ?>>Previous</a>
                                                                        </li>
                                                                                                                    <?php 
                                                                                    if ($pages <= 10){  	 
                                                                                        for ($counter = 1; $counter <= $pages; $counter++){
                                                                                            if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                    }
                                                                                    elseif($pages > 10){
                                                                                        
                                                                                    if($page <= 4) {			
                                                                                    for ($counter = 1; $counter < 8; $counter++){		 
                                                                                            if ($counter == $page) {
                                                                                        echo "<li  class='page-item' class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }
                                                                                        }
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";
                                                                                        }

                                                                                    elseif($page > 4 && $page < $pages - 4) {		 
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";
                                                                                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {			
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                  
                                                                                    }
                                                                                    echo "<li class='page-item' ><a>...</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$second_last'>$second_last</a></li>";
                                                                                    echo "<li class='page-item' ><a  class='page-link' href='?page=$pages'>$pages</a></li>";      
                                                                                            }
                                                                                        
                                                                                        else {
                                                                                        echo "<li class='page-item' ><a  class='page-link' href='?page=1'>1</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link'  href='?page=2'>2</a></li>";
                                                                                        echo "<li class='page-item' ><a class='page-link' >...</a></li>";

                                                                                        for ($counter = $pages - 6; $counter <= $pages; $counter++) {
                                                                                        if ($counter == $page) {
                                                                                        echo "<li class='page-item'  class='active'><a class='page-link' >$counter</a></li>";	
                                                                                                }else{
                                                                                        echo "<li class='page-item' ><a class='page-link' href='?page=$counter'>$counter</a></li>";
                                                                                                }                   
                                                                                                }
                                                                                            }
                                                                                    }
                                                                            ?>
                                                                            <li class="page-item" <?php if($page >= $pages){ echo "class='disabled'"; } ?>>
                                                                            <a class="page-link" <?php if($page < $pages) { echo "href='?page=$Next'"; } ?>>Next</a>
                                                                            </li>
                                                                            <?php if($page < $pages){
                                                                                echo "<li><a class='page-link' href='?page=$pages'>Last</a></li>";
                                                                                } ?>
                                                                        </ul>
                                                                    </nav>                                    
                                                                <!-- </div>
                                                                <div class="col-lg-2"></div>                                
                                                            </div>-->
                                                        </div> 
                                                        
                                                        <?php
                                                    }             
                                                    elseif($do == 'resultsearch'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars'];
                                                            $typecommunity = $_POST['typecommunity'];

                                                            $stmt = $con->prepare("SELECT * FROM community where locationcars like '%$locatecars%' AND Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$typecommunity%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }
                                                    } 
                                                    elseif($do == 'clear'){
                                                        header('Location:autosrlink.php');
                                                        exit();                                                
                                                    }     
                                                    // location
                                                    elseif($do == 'searchlocationcars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars2'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars2'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars3'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars3'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }         
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars4'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars4'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars5'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars5'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars6'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars6'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }     
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }        
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars7'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars7'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }          
                                                        }

                                                    } 
                                                    elseif($do == 'searchlocationcars8'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars8'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%auto%' AND locationcars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }       
                                                        }

                                                    } 

                                                    // make
                                                    elseif($do == 'searchmakecars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $make = $_POST['searchmakecars1'];

                                                            $stmt = $con->prepare("SELECT * FROM community where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecommunity like '%$make%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row)
                                                                                {                                           
                                                                                    echo '<a href="infocommunity.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["Name"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"> <p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;" ><span class="featured_span">Featured</span>
                                                                                    </div>';
                                                                                echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<hr>';
                                                                    echo '</div></a>';
                                                                }   
                                                            }    
                                                            else{
                                                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                            }      
                                                        }

                                                    } 
                                    ?>
                                                        <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ajman" name="locationcars1">
                                                                            Auto Services in Ajman</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                            Auto Services in Dubai</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                            Auto Services in Abu Dhabi</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                            Auto Services in Ras al Khaimah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                            Auto Services in Sharjah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                            Auto Services in Fujairah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                            Auto Services in Umm al Quwain</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                            Auto Services in Al Ain</button>
                                                        </form>
                                </div>  
                            <!-- </div>   -->
                    </div>
                    <div class="col-lg-4"></div>
                </div>        
            </div>
        </div>



        <?php
                    echo navone();
                ?>
                <?php

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