<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Buy & sell any Motorcycles online ';
    include 'init.php';
?>

            <style>
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
                                <h1 class="h1-pagecat">Buy & sell any Motorcycles online</h1>
                                <h2 class="div-pagecat"> Motorcycles on Oh Yamal</h2>                    
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
                                                                        <select id="site:swfield" name="typemotor">
                                                                            <option value="spb" selected>Sport Bike</option>
                                                                            <option value="moad">Adventure / Touring</option>
                                                                            <option value="mocr">Cruiser / Chopper</option>
                                                                            <option value="ofrooa">Off-Road</option>
                                                                            <option value="motscco">Scooter</option>
                                                                            <option value="motstan">Standard / Commuter</option>
                                                                            <option value="motccf">Café racer</option>
                                                                            <option value="mottr">Trike</option>
                                                                            <option value="motsti">Trailer</option>
                                                                            <option value="motkrr">Karting</option>
                                                                            <option value="mootp">Mo-Ped</option>
                                                                            <option value="omotr">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- <div id="search-loading-icon"><span>&nbsp;</span></div> -->
                                                                <div class="fields">
                                                                        <div class="range-fields">
                                                                            <label class="heading">
                                                                                    Price ( AED )
                                                                                </label>
                                                                                <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6"><input class="text-field-small" id="price_gte:swfield" name="pricegte" placeholder="Price from" title="Price from" type="text"></div>
                                                                                        <div class="col-lg-6"><input class="text-field-small alt" id="price_gte:swfield" name="pricelte" placeholder="Price to" title="Price to" type="text"></div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                        </div>
                                                                        
                                                                        <div class="range-fields">
                                                                            <label class="heading">
                                                                                    Year
                                                                                </label>
                                                                                <div class="range-fields-inputs">
                                                                                    <select id="yeargte:swfield" name="yeargte">
                                                                                        <option selected value="1920">Year from</option>
                                                                                        <?php
                                                                                            $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                            foreach($allUsers as $user){
                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                    <select id="yeargte:swfield" name="yearlte">
                                                                                        <option selected value="3000">Year to</option>
                                                                                        <?php
                                                                                            $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                            foreach($allUsers as $user){
                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                        <div class="range-fields">
                                                                            <label class="heading">
                                                                                    Kilometers
                                                                                </label>
                                                                                <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6"><input class="text-field-small" id="price_gte:swfield" name="kilometersgte" placeholder="KM from" title="KM from" type="text"></div>
                                                                                        <div class="col-lg-6"><input class="text-field-small alt" id="price_gte:swfield" name="kilometerslte" placeholder="KM to" title="KM to" type="text"></div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <div class="widget-dropdown" id="search-content-site" style="margin-top:15px;">
                                                                    <div class="search-dropdown">
                                                                    <select id="site:swfield" name="sellertype">
                                                                    <option selected value="Owner">Seller type</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "sellertype", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            <input type="hidden" name="is_search" value="1">
                                                                <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>  
                                                                <div class="search-action-link">
                                                                    <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                        save search
                                                                    </button>
                                                                </div>
                                                    </div>

                                                    <div id="search-advanced">
                                                        <div id="advanced-search-header" >
                                                            <input type="text" value="Advanced Options" id="advanced-search-header-button">

                                                            <span class="toggle-info pull-right">
                                                                <ion-icon name="add-outline"></ion-icon>
                                                            </span>          
                                            <!-- <div class="panel-body"> -->


                                                        </div>
                                                            <div id="" class="panel-body ppll">
                                                                        <div class="search-dropdown" style="margin-top: 15px;">
                                                                            <label class="heading">
                                                                                Neighborhoods
                                                                            </label>
                                                                                    <input type="text" name="neighborhood" id="price__gte:swfield" autocomplete="off" class="as-input" placeholder="neighborhood">
                                                                                    <!-- <input type="hidden" class="as-values" name="places__id__in" id="as-values-id_places__id__in"></li></ul> -->
                                                                        </div>

                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="finaldrivesystem">
                                                                                <option selected value="Belt">Final Drive System</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "finaldrivesystem", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   
                                                                        
                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="wheels">
                                                                                <option selected value="4 wheels">Wheels</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "wheels", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   
                                                                    
                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="usagemotor">
                                                                                <option selected value="Still with the dealer">Usage</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "usagemotor", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   

                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="manufacturer">
                                                                                <option selected value="Access Motor">Manufacturer</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "manufacturer", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   

                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="Engine">
                                                                                <option selected value="250cc - 499cc">Engine Size</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "engine", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   

                                                                        <div class="widget-dropdown" id="search-content-site">
                                                                            <div class="search-dropdown">
                                                                                <select id="site:swfield" name="warranty">
                                                                                <option selected value="Yes">Warranty</option>
                                                                                <?php
                                                                                    $allUsers = getAllFrom("*", "warranty", "", "", "Id");
                                                                                    foreach($allUsers as $user){
                                                                                        echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                    }
                                                                                ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>   
                                            
                                                                        <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>      
                                                                        
                                                                        <div class="search-action-link">
                                                                            <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                save search
                                                                            </button>
                                                                        </div>
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
                                                    <div class="col-lg-6">                                    
                                                        <form action="?do=orderprice1" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Highest to Lowest]</button></form> 
                                                    </div>
                                                    <div class="col-lg-6">                                    
                                                        <form action="?do=orderprice2" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Lowest to Highest]</button></form>   
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                            <div class="card">
                                <div class="container" style="padding: 10px;">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Motorcycles</strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%spb%'))){}
                                                    else{?>
                                                        <div class="col-lg-4">
                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="spb" name="searchmakecars1">Sport Bike <span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%spb%'); ?>)</span> </button></a>
                                                            </form>
                                                        </div>                                            
                                                        <?php } ?>

                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%moad%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="moad" name="searchmakecars1">Adventure / Touring<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%moad%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mocr" name="searchmakecars1">Cruiser / Chopper<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="ofrooa" name="searchmakecars1">Off-Road<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motscco" name="searchmakecars1">Scooter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motstan" name="searchmakecars1">Standard / Commuter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'))){}
                                                else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motccf" name="searchmakecars1">Café racer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>      
                                                    <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mottr" name="searchmakecars1">Trike<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motsti" name="searchmakecars1">Trailer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motkrr" name="searchmakecars1">Karting<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mootp" name="searchmakecars1">Mo-Ped<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="omotr" name="searchmakecars1">Other<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                    <?php } ?>
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".hide").hide();
                                                        $(".btn1").click(function(){
                                                            $(".hide").hide();
                                                        });
                                                        $(".btn2").click(function(){
                                                            $(".hide").show();
                                                        });
                                                        });
                                                    </script>     
                                            </div>
                                        </div>                                    
                                    </div>
                                    <!-- <hr> -->
                                </div>
                            </div>
                                <div class="container">
                                        <!-- <div class="container"> -->
                                        <!-- <div class="container"> -->
                                    <div class="row">
                                        
                                        <?php
                                                        if($do == 'one'){
                                                            $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $start = ($page - 1) * $limit;
                                                            $result1 = $con->prepare("SELECT count(Id) AS Id FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)");
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

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
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
                                                        if($do == 'orderprice1'){

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price DESC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }  
                                                        } 
                                                        if($do == 'orderprice2'){
                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price ASC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }   
                                                        }                 
                                                        elseif($do == 'resultsearch'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $finaldrivesystem = $_POST['finaldrivesystem'];
                                                                $wheels = $_POST['wheels'];
                                                                $usagemotor = $_POST['usagemotor'];
                                                                $neighboarhood = $_POST['neighborhood'];
                                                                $manufacturer = $_POST['manufacturer'];
                                                                $Engine = $_POST['Engine'];
                                                                $warranty = $_POST['warranty'];
                                                                $typemotor = $_POST['typemotor'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$typemotor%' AND locationcars like '%$locatecars%' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR( Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$neighboarhood%') OR (finaldrivesystem like '%$finaldrivesystem%') OR (wheels like '%$wheels%') OR (usagemotor like '%$usagemotor%') OR (manufacturer like '%$manufacturer%') OR (Engine like '%$Engine%') OR (warranty like '%$warranty%'))"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                        elseif($do == 'search'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $typemotor = $_POST['typemotor'];
                                                                $all = $_POST['all'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where (Name like '%$all%'  AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND Approve = 1) OR (Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND ((typemotor like '%$typemotor%') OR (locationcars like '%$locatecars%') OR (Price BETWEEN '$pricegte' AND '$pricelte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$all%') OR (finaldrivesystem like '%$all%') OR (wheels like '%$all%') OR (usagemotor like '%$all%') OR (manufacturer like '%$all%') OR (Engine like '%$all%') OR (warranty like '%$all%'))) order by Id DESC"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                            header('Location:motorcycleslink.php');
                                                            exit();                                                
                                                        }     
                                                        // location
                                                        elseif($do == 'searchlocationcars1'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars1'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$make%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                                                Motorcycles in Ajman</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                                Motorcycles in Dubai</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                                Motorcycles in Abu Dhabi</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                                Motorcycles in Ras al Khaimah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                                Motorcycles in Sharjah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                                Motorcycles in Fujairah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                                Motorcycles in Umm al Quwain</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                                Motorcycles in Al Ain</button>
                                                            </form>
                                    </div>  
                                <!-- </div>   -->
                                <!-- </div>   -->
                                </div>  
                        </div>
                        <div class="col-lg-4"></div>
                    </div>        
                </div>                
            </div>

            <div class="d-block d-sm-none">
                <div class="container-fluid">
                    <div class="row" style="padding-left:15px;">
                            <center>
                                <h1 class="h1-pagecat">Buy & sell any Motorcycles online</h1>
                                <h2 class="div-pagecat"> Motorcycles on Oh Yamal</h2>                    
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
                                                                                                    <select id="site:swfield" name="typemotor">
                                                                                                        <option value="spb" selected>Sport Bike</option>
                                                                                                        <option value="moad">Adventure / Touring</option>
                                                                                                        <option value="mocr">Cruiser / Chopper</option>
                                                                                                        <option value="ofrooa">Off-Road</option>
                                                                                                        <option value="motscco">Scooter</option>
                                                                                                        <option value="motstan">Standard / Commuter</option>
                                                                                                        <option value="motccf">Café racer</option>
                                                                                                        <option value="mottr">Trike</option>
                                                                                                        <option value="motsti">Trailer</option>
                                                                                                        <option value="motkrr">Karting</option>
                                                                                                        <option value="mootp">Mo-Ped</option>
                                                                                                        <option value="omotr">Other</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- <div id="search-loading-icon"><span>&nbsp;</span></div> -->
                                                                                            <div class="fields">
                                                                                                    <div class="range-fields">
                                                                                                        <label class="heading">
                                                                                                                Price ( AED )
                                                                                                            </label>
                                                                                                            <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-lg-12"><input class="text-field-small" id="price_gte:swfield" name="pricegte" placeholder="Price from" title="Price from" type="text">
                                                                                                                    <input class="text-field-small alt" id="price_gte:swfield" name="pricelte" placeholder="Price to" title="Price to" type="text"></div>
                                                                                                                </div>
                                                                                                                
                                                                                                                
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <div class="range-fields">
                                                                                                        <label class="heading">
                                                                                                                Year
                                                                                                            </label>
                                                                                                            <div class="range-fields-inputs">
                                                                                                                <select id="yeargte:swfield" name="yeargte">
                                                                                                                    <option selected value="1920">Year from</option>
                                                                                                                    <?php
                                                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                        foreach($allUsers as $user){
                                                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                                <select id="yeargte:swfield" name="yearlte">
                                                                                                                    <option selected value="3000">Year to</option>
                                                                                                                    <?php
                                                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                        foreach($allUsers as $user){
                                                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <div class="range-fields">
                                                                                                        <label class="heading">
                                                                                                                Kilometers
                                                                                                            </label>
                                                                                                            <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-lg-12"><input class="text-field-small" id="price_gte:swfield" name="kilometersgte" placeholder="KM from" title="KM from" type="text">
                                                                                                                    <input class="text-field-small alt" id="price_gte:swfield" name="kilometerslte" placeholder="KM to" title="KM to" type="text"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>

                                                                                            <div class="widget-dropdown" id="search-content-site" style="margin-top:15px;">
                                                                                                <div class="search-dropdown">
                                                                                                <select id="site:swfield" name="sellertype">
                                                                                                <option selected value="Owner">Seller type</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "sellertype", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                        <input type="hidden" name="is_search" value="1">
                                                                                            <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>  
                                                                                            <div class="search-action-link">
                                                                                                <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                    save search
                                                                                                </button>
                                                                                            </div>
                                                                                </div>

                                                                                <div id="search-advanced">
                                                                                    <div id="advanced-search-header" >
                                                                                        <input type="text" value="Advanced Options" id="advanced-search-header-button">

                                                                                        <span class="toggle-info pull-right">
                                                                                            <ion-icon name="add-outline"></ion-icon>
                                                                                        </span>          
                                                                        <!-- <div class="panel-body"> -->


                                                                                    </div>
                                                                                        <div id="" class="panel-body ppll">
                                                                                                                    <div class="search-dropdown" style="margin-top: 15px;">
                                                                                                                        <label class="heading">
                                                                                                                            Neighborhoods
                                                                                                                        </label>
                                                                                                                                <input type="text" name="neighborhood" id="price__gte:swfield" autocomplete="off" class="as-input" placeholder=" neighborhood" style="width: 90%;margin-top: 10px;">
                                                                                                                                <!-- <input type="hidden" class="as-values" name="places__id__in" id="as-values-id_places__id__in"></li></ul> -->
                                                                                                                    </div>

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="finaldrivesystem">
                                                                                                            <option selected value="Belt">Final Drive System</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "finaldrivesystem", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                    
                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="wheels">
                                                                                                            <option selected value="4 wheels">Wheels</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "wheels", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                
                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="usagemotor">
                                                                                                            <option selected value="Still with the dealer">Usage</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "usagemotor", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="manufacturer">
                                                                                                            <option selected value="Access Motor">Manufacturer</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "manufacturer", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="Engine">
                                                                                                            <option selected value="250cc - 499cc">Engine Size</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "engine", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="warranty">
                                                                                                            <option selected value="Yes">Warranty</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "warranty", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                        
                                                                                                    <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>      
                                                                                                    
                                                                                                    <div class="search-action-link">
                                                                                                        <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                            save search
                                                                                                        </button>
                                                                                                    </div>
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
                                                </div><br><br>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display: flex;">                                    
                                                    <form action="?do=orderprice1" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Highest to Lowest]</button></form> 
                                                    <form action="?do=orderprice2" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Lowest to Highest]</button></form>   
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            <div class="card">
                                <div class="container" style="padding: 10px;">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Motorcycles</strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%spb%'))){}
                                                    else{?>
                                                        <div class="col-lg-4">
                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="spb" name="searchmakecars1">Sport Bike <span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%spb%'); ?>)</span> </button></a>
                                                            </form>
                                                        </div>                                            
                                                        <?php } ?>

                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%moad%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="moad" name="searchmakecars1">Adventure / Touring<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%moad%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mocr" name="searchmakecars1">Cruiser / Chopper<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="ofrooa" name="searchmakecars1">Off-Road<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motscco" name="searchmakecars1">Scooter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motstan" name="searchmakecars1">Standard / Commuter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'))){}
                                                else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motccf" name="searchmakecars1">Café racer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>      
                                                    <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mottr" name="searchmakecars1">Trike<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motsti" name="searchmakecars1">Trailer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motkrr" name="searchmakecars1">Karting<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mootp" name="searchmakecars1">Mo-Ped<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="omotr" name="searchmakecars1">Other<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                    <?php } ?>
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".hide").hide();
                                                        $(".btn1").click(function(){
                                                            $(".hide").hide();
                                                        });
                                                        $(".btn2").click(function(){
                                                            $(".hide").show();
                                                        });
                                                        });
                                                    </script>     
                                            </div>
                                        </div>                                    
                                    </div>
                                    <!-- <hr> -->
                                </div>
                            </div>
                                
                                        <!-- <div class="container"> -->
                                        <!-- <div class="container"> -->
                                    <div class="row">
                                        <div class="container">    
                                        <?php
                                                        if($do == 'one'){
                                                            $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $start = ($page - 1) * $limit;
                                                            $result1 = $con->prepare("SELECT count(Id) AS Id FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)");
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

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
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
                                                        if($do == 'orderprice1'){

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price DESC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }  
                                                        } 
                                                        if($do == 'orderprice2'){
                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price ASC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }   
                                                        }                 
                                                        elseif($do == 'resultsearch'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $finaldrivesystem = $_POST['finaldrivesystem'];
                                                                $wheels = $_POST['wheels'];
                                                                $usagemotor = $_POST['usagemotor'];
                                                                $neighboarhood = $_POST['neighborhood'];
                                                                $manufacturer = $_POST['manufacturer'];
                                                                $Engine = $_POST['Engine'];
                                                                $warranty = $_POST['warranty'];
                                                                $typemotor = $_POST['typemotor'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$typemotor%' AND locationcars like '%$locatecars%' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR( Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$neighboarhood%') OR (finaldrivesystem like '%$finaldrivesystem%') OR (wheels like '%$wheels%') OR (usagemotor like '%$usagemotor%') OR (manufacturer like '%$manufacturer%') OR (Engine like '%$Engine%') OR (warranty like '%$warranty%'))"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                        elseif($do == 'search'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $typemotor = $_POST['typemotor'];
                                                                $all = $_POST['all'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where (Name like '%$all%'  AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND Approve = 1) OR (Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND ((typemotor like '%$typemotor%') OR (locationcars like '%$locatecars%') OR (Price BETWEEN '$pricegte' AND '$pricelte') OR( Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$all%') OR (finaldrivesystem like '%$all%') OR (wheels like '%$all%') OR (usagemotor like '%$all%') OR (manufacturer like '%$all%') OR (Engine like '%$all%') OR (warranty like '%$all%'))) order by Id DESC"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                            header('Location:motorcycleslink.php');
                                                            exit();                                                
                                                        }     
                                                        // location
                                                        elseif($do == 'searchlocationcars1'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars1'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$make%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                            echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
                                                                                echo '<div class="borderstyl" style="padding:15px;">';
                                                                                    echo '<div class="row">';
                                                                                        // echo '<div class="col-lg-2">Featured</div>';
                                                                                        // echo '<div class="col-lg-10">History Check</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                        echo '<div class="col-lg-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12"><div class="priceselli" style="text-align: center;">Selling price</div></div>
                                                                                                    <div class="col-lg-12 pricelink">AED 
                                                                                                    ' . number_format($row['Price']) . '</div></div>
                                                                                        </div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-4">';
                                                                                            $i = '';
                                                                                            $res = $row['Image'];
                                                                                            $res = explode(" ", $res);
                                                                                            $countimagess = count($res) - 1;   
                                                                                            $count =  1;                           
                                                                                            for($i = 0; $i<$count; ++$i)
                                                                                            {
                                                                                                echo  "<a href='infomotor.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                            }                                                         
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';

                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                            echo '<div class="row">';
                                                                                                echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-10">';
                                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-2" style="margin-top:10px;"><span class="featured_span">Featured</span></div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div></a>';
                                                                                echo '<hr>';
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
                                                                                Motorcycles in Ajman</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                                Motorcycles in Dubai</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                                Motorcycles in Abu Dhabi</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                                Motorcycles in Ras al Khaimah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                                Motorcycles in Sharjah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                                Motorcycles in Fujairah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                                Motorcycles in Umm al Quwain</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                                Motorcycles in Al Ain</button>
                                                            </form>
                                    </div>  
                                <!-- </div>   -->
                                <!-- </div>   -->
                                </div>  
                        </div>
                        <div class="col-lg-4"></div>
                    </div>        
                </div>
            </div>

            <div class="d-none d-md-block d-lg-none">
            <div class="container-fluid">
                    <div class="row" style="padding-left:15px;">
                            <center>
                                <h1 class="h1-pagecat">Buy & sell any Motorcycles online</h1>
                                <h2 class="div-pagecat"> Motorcycles on Oh Yamal</h2>                    
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
                                                                                                <div class="col-lg-3 col-md-8 col-sm-3 col-xs-3">
                                                                                                    <div id="search-headerresp">
                                                                                                        Search
                                                                                                    </div>
                                                                                                </div>                                    
                                                                                                <div class="col-lg-9 col-md-4 col-sm-9 col-xs-9">
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
                                                                                                    <select id="site:swfield" name="typemotor">
                                                                                                        <option value="spb" selected>Sport Bike</option>
                                                                                                        <option value="moad">Adventure / Touring</option>
                                                                                                        <option value="mocr">Cruiser / Chopper</option>
                                                                                                        <option value="ofrooa">Off-Road</option>
                                                                                                        <option value="motscco">Scooter</option>
                                                                                                        <option value="motstan">Standard / Commuter</option>
                                                                                                        <option value="motccf">Café racer</option>
                                                                                                        <option value="mottr">Trike</option>
                                                                                                        <option value="motsti">Trailer</option>
                                                                                                        <option value="motkrr">Karting</option>
                                                                                                        <option value="mootp">Mo-Ped</option>
                                                                                                        <option value="omotr">Other</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- <div id="search-loading-icon"><span>&nbsp;</span></div> -->
                                                                                            <div class="fields">
                                                                                                                <div class="range-fields">
                                                                                                                    <label class="heading">
                                                                                                                            Price ( AED )
                                                                                                                        </label>
                                                                                                                        <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="text-field-small" id="price_gte:swfield" name="pricegte" placeholder="Price from" title="Price from" type="text"></div>
                                                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="text-field-small alt" id="price_gte:swfield" name="pricelte" placeholder="Price to" title="Price to" type="text"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                    
                                                                                                    <div class="range-fields">
                                                                                                        <label class="heading">
                                                                                                                Year
                                                                                                            </label>
                                                                                                            <div class="range-fields-inputs">
                                                                                                                <select id="yeargte:swfield" name="yeargte">
                                                                                                                    <option selected value="1920">Year from</option>
                                                                                                                    <?php
                                                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                        foreach($allUsers as $user){
                                                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                                <select id="yeargte:swfield" name="yearlte">
                                                                                                                    <option selected value="3000">Year to</option>
                                                                                                                    <?php
                                                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                        foreach($allUsers as $user){
                                                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    
                                                                                                                <div class="range-fields">
                                                                                                                    <label class="heading">
                                                                                                                            Kilometers
                                                                                                                        </label>
                                                                                                                        <div class="range-fields-inputs" style="    padding-right: 15px;">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="text-field-small" id="price_gte:swfield" name="kilometersgte" placeholder="KM from" title="KM from" type="text"></div>
                                                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="text-field-small alt" id="price_gte:swfield" name="kilometerslte" placeholder="KM to" title="KM to" type="text"></div>
                                                                                                                            </div>
                                                                                                                            
                                                                                                                            
                                                                                                                        </div>
                                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="widget-dropdown" id="search-content-site" style="margin-top:15px;">
                                                                                                <div class="search-dropdown">
                                                                                                <select id="site:swfield" name="sellertype">
                                                                                                <option selected value="Owner">Seller type</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "sellertype", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                        <input type="hidden" name="is_search" value="1">
                                                                                            <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>  
                                                                                            <div class="search-action-link">
                                                                                                <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                    save search
                                                                                                </button>
                                                                                            </div>
                                                                                </div>

                                                                                <div id="search-advanced">
                                                                                    <div id="advanced-search-header" >
                                                                                        <input type="text" value="Advanced Options" id="advanced-search-header-button">

                                                                                        <span class="toggle-info pull-right">
                                                                                            <ion-icon name="add-outline"></ion-icon>
                                                                                        </span>          
                                                                        <!-- <div class="panel-body"> -->


                                                                                    </div>
                                                                                        <div id="" class="panel-body ppll">
                                                                                                                    <div class="search-dropdown" style="margin-top: 15px;">
                                                                                                                        <label class="heading">
                                                                                                                            Neighborhoods
                                                                                                                        </label>
                                                                                                                                <input type="text" name="neighborhood" id="price__gte:swfield" autocomplete="off" class="as-input" placeholder=" neighborhood" style="width: 90%;margin-top: 10px;">
                                                                                                                                <!-- <input type="hidden" class="as-values" name="places__id__in" id="as-values-id_places__id__in"></li></ul> -->
                                                                                                                    </div>

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="finaldrivesystem">
                                                                                                            <option selected value="Belt">Final Drive System</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "finaldrivesystem", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                    
                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="wheels">
                                                                                                            <option selected value="4 wheels">Wheels</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "wheels", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                
                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="usagemotor">
                                                                                                            <option selected value="Still with the dealer">Usage</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "usagemotor", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="manufacturer">
                                                                                                            <option selected value="Access Motor">Manufacturer</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "manufacturer", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="Engine">
                                                                                                            <option selected value="250cc - 499cc">Engine Size</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "engine", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   

                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                        <div class="search-dropdown">
                                                                                                            <select id="site:swfield" name="warranty">
                                                                                                            <option selected value="Yes">Warranty</option>
                                                                                                            <?php
                                                                                                                $allUsers = getAllFrom("*", "warranty", "", "", "Id");
                                                                                                                foreach($allUsers as $user){
                                                                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                                                                }
                                                                                                            ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>   
                                                                        
                                                                                                    <center><a href='motorcycleslink.php?do=clear'>Clear Input</a></center>      
                                                                                                    
                                                                                                    <div class="search-action-link">
                                                                                                        <button id="email_alertss" data-require-auth="saveSearch" class="flame-button flame-button--tertiary flame-button--medium" type="submit">
                                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M8.75,12.25 C8.75,13.2125 7.9625,14 7,14 C6.0375,14 5.25,13.2125 5.25,12.25 L8.75,12.25 Z M13.125,9.625 C13.65,9.625 14,9.975 14,10.5 C14,11.025 13.65,11.375 13.125,11.375 L0.875,11.375 C0.35,11.375 0,11.025 0,10.5 C0,9.975 0.35,9.625 0.875,9.625 L1.3125,9.625 C1.925,9.0125 2.625,8.1375 2.625,7 L2.625,4.375 C2.625,1.925 4.55,0 7,0 C9.45,0 11.375,1.925 11.375,4.375 L11.375,7 C11.375,8.1375 12.075,9.0125 12.6875,9.625 L13.125,9.625 Z" id="path-1"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1116.000000, -242.000000)"><g transform="translate(0.000000, 214.000000)"><g transform="translate(144.000000, 24.000000)"><g transform="translate(973.000000, 0.000000)"><g transform="translate(0.000000, 5.000000)"><mask fill="currentColor"><use xlink:href="#path-1"></use></mask><use fill="currentColor" xlink:href="#path-1"></use></g></g></g></g></g></g></svg>
                                                                                                            save search
                                                                                                        </button>
                                                                                                    </div>
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
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                    
                                                <form action="?do=orderprice1" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Highest to Lowest]</button></form> 
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                    
                                                <form action="?do=orderprice2" method="POST"><button class="footer-widgets-links-url"type="submit">[Price Lowest to Highest]</button></form>   
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <div class="card">
                                <div class="container" style="padding: 10px;">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Motorcycles</strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%spb%'))){}
                                                    else{?>
                                                        <div class="col-lg-4">
                                                            <form action="?do=searchmakecars1" method="POST">
                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="spb" name="searchmakecars1">Sport Bike <span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%spb%'); ?>)</span> </button></a>
                                                            </form>
                                                        </div>                                            
                                                        <?php } ?>

                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%moad%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="moad" name="searchmakecars1">Adventure / Touring<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%moad%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mocr" name="searchmakecars1">Cruiser / Chopper<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mocr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="ofrooa" name="searchmakecars1">Off-Road<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%ofrooa%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motscco" name="searchmakecars1">Scooter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motscco%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motstan" name="searchmakecars1">Standard / Commuter<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motstan%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'))){}
                                                else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motccf" name="searchmakecars1">Café racer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motccf%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>      
                                                    <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mottr" name="searchmakecars1">Trike<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mottr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>   
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motsti" name="searchmakecars1">Trailer<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motsti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="motkrr" name="searchmakecars1">Karting<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%motkrr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                            
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="mootp" name="searchmakecars1">Mo-Ped<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%mootp%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>        
                                                        <?php } ?>
                                                
                                                <?php if(empty(countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'))){}
                                                    else{?>
                                                    <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="omotr" name="searchmakecars1">Other<span style="color: black;">(<?php echo countItemsmotcyc('typemotor', 'motorcycles', '%omotr%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>    
                                                    <?php } ?>
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".hide").hide();
                                                        $(".btn1").click(function(){
                                                            $(".hide").hide();
                                                        });
                                                        $(".btn2").click(function(){
                                                            $(".hide").show();
                                                        });
                                                        });
                                                    </script>     
                                            </div>
                                        </div>                                    
                                    </div>
                                    <!-- <hr> -->
                                </div>
                            </div>
                                
                                        <!-- <div class="container"> -->
                                        <!-- <div class="container"> -->
                                    <div class="row">
                                        <div class="container">    
                                        <?php
                                                        if($do == 'one'){
                                                            $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $start = ($page - 1) * $limit;
                                                            $result1 = $con->prepare("SELECT count(Id) AS Id FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)");
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

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
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
                                                        if($do == 'orderprice1'){

                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price DESC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }  
                                                        } 
                                                        if($do == 'orderprice2'){
                                                            $allItems = getAllFrom('*', 'motorcycles', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", '', " Price ASC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                    echo '<div class="borderstyl" style="padding:15px;">';
                                                                        echo '<div class="row">';
                                                                            // echo '<div class="col-lg-2">Featured</div>';
                                                                            // echo '<div class="col-lg-10">History Check</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                            echo '<div class="col-lg-3">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 pricelink">AED 
                                                                                        ' . number_format($item['Price']) . '</div></div>
                                                                            </div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-4">';
                                                                                $i = '';
                                                                                $res = $item['Image'];
                                                                                $res = explode(" ", $res);
                                                                                $countimages = count($res) - 1;   
                                                                                $count =  1;                           
                                                                                for($i = 0; $i<$count; ++$i)
                                                                                {
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $item['usagemotor']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                <span class="featured_span">Featured</span>
                                                                                </div>';
                                                                            echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div></a>';
                                                            }   
                                                        }                 
                                                        elseif($do == 'resultsearch'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $finaldrivesystem = $_POST['finaldrivesystem'];
                                                                $wheels = $_POST['wheels'];
                                                                $usagemotor = $_POST['usagemotor'];
                                                                $neighboarhood = $_POST['neighborhood'];
                                                                $manufacturer = $_POST['manufacturer'];
                                                                $Engine = $_POST['Engine'];
                                                                $warranty = $_POST['warranty'];
                                                                $typemotor = $_POST['typemotor'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$typemotor%' AND locationcars like '%$locatecars%' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR( Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$neighboarhood%') OR (finaldrivesystem like '%$finaldrivesystem%') OR (wheels like '%$wheels%') OR (usagemotor like '%$usagemotor%') OR (manufacturer like '%$manufacturer%') OR (Engine like '%$Engine%') OR (warranty like '%$warranty%'))"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                        elseif($do == 'search'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $typemotor = $_POST['typemotor'];
                                                                $all = $_POST['all'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where (Name like '%$all%'  AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND Approve = 1) OR (Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND ((typemotor like '%$typemotor%') OR (locationcars like '%$locatecars%') OR (Price BETWEEN '$pricegte' AND '$pricelte') OR( Year BETWEEN '$yeargte' AND '$yearlte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Location like '%$all%') OR (finaldrivesystem like '%$all%') OR (wheels like '%$all%') OR (usagemotor like '%$all%') OR (manufacturer like '%$all%') OR (Engine like '%$all%') OR (warranty like '%$all%'))) order by Id DESC"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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
                                                            header('Location:motorcycleslink.php');
                                                            exit();                                                
                                                        }     
                                                        // location
                                                        elseif($do == 'searchlocationcars1'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars1'];

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locationcars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
                                                                        echo '<div class="borderstyl" style="padding:15px;">';
                                                                            echo '<div class="row">';
                                                                                // echo '<div class="col-lg-2">Featured</div>';
                                                                                // echo '<div class="col-lg-10">History Check</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                echo '<div class="col-lg-3">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 pricelink">AED 
                                                                                            ' . number_format($row['Price']) . '</div></div>
                                                                                </div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-4">';
                                                                                    $i = '';
                                                                                    $res = $row['Image'];
                                                                                    $res = explode(" ", $res);
                                                                                    $countimages = count($res) - 1;   
                                                                                    $count =  1;                           
                                                                                    for($i = 0; $i<$count; ++$i)
                                                                                    {
                                                                                        echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                        echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top:10px;">
                                                                                    <span class="featured_span">Featured</span>
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

                                                                $stmt = $con->prepare("SELECT * FROM motorcycles where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typemotor like '%$make%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                            echo '<a href="infomotor.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
                                                                                echo '<div class="borderstyl" style="padding:15px;">';
                                                                                    echo '<div class="row">';
                                                                                        // echo '<div class="col-lg-2">Featured</div>';
                                                                                        // echo '<div class="col-lg-10">History Check</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-9 namelink">' . $row['Name'] . '</div>';
                                                                                        echo '<div class="col-lg-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12"><div class="priceselli" style="text-align: center;">Selling price</div></div>
                                                                                                    <div class="col-lg-12 pricelink">AED 
                                                                                                    ' . number_format($row['Price']) . '</div></div>
                                                                                        </div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-4">';
                                                                                            $i = '';
                                                                                            $res = $row['Image'];
                                                                                            $res = explode(" ", $res);
                                                                                            $countimagess = count($res) - 1;   
                                                                                            $count =  1;                           
                                                                                            for($i = 0; $i<$count; ++$i)
                                                                                            {
                                                                                                echo  "<a href='infomotor.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                            }                                                         
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';

                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                            echo '<div class="row">';
                                                                                                echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Usage:' . '<strong>' . $row['usagemotor']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-10">';
                                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-2" style="margin-top:10px;"><span class="featured_span">Featured</span></div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div></a>';
                                                                                echo '<hr>';
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
                                                                                Motorcycles in Ajman</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                                Motorcycles in Dubai</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                                Motorcycles in Abu Dhabi</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                                Motorcycles in Ras al Khaimah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                                Motorcycles in Sharjah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                                Motorcycles in Fujairah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                                Motorcycles in Umm al Quwain</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                                Motorcycles in Al Ain</button>
                                                            </form>
                                    </div>  
                                <!-- </div>   -->
                                <!-- </div>   -->
                                </div>  
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