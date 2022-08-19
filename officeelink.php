<?php 
    ob_start();
    session_start();
    $pageTitle = 'Buy & sell any cars online in UAE';
    include 'init.php';
?>
    <div class="container-fluid">
        <div class="row" style="padding-left:15px;">
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
                                                            <select id="site:swfield" name="typeclassifieds">
                                                                <option value="Businessess" selected>Businesses for Sale</option>
                                                                <option value="Constructionn">Construction</option>
                                                                <option value="Foodd">Food & Beverage</option>
                                                                <option value="suplbus">Industrial Supplies</option>
                                                                <option value="officee">Office Furniture & Equipment</option>
                                                                <option value="manbuclass">Manufacturing</option>
                                                                <option value="eqbuclass">Electrical Equipment</option>
                                                                <option value="retailbuclass">Retail & Services</option>
                                                                <option value="heabuclass">Healthcare & Lab</option>
                                                                <option value="copyy">Commercial Printing & Copy Machines</option>
                                                                <option value="packingg">Packing & Shipping</option>
                                                                <option value="agribuclass">Agriculture & Forestry</option>
                                                                <option value="otherbuclass">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

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
                                                    </div>

                                                <input type="hidden" name="is_search" value="1">
                                                    <center><a href='officeelink.php?do=clear'>Clear Input</a></center>  
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
                                            </div>
                                                <div id="" class="panel-body ppll">
                                                            <div class="search-dropdown" style="margin-top: 15px;">
                                                                <label class="heading">
                                                                    Neighborhoods
                                                                </label>
                                                                        <input type="text" name="neighborhood" id="price__gte:swfield" autocomplete="off" class="as-input" placeholder=" neighborhood">
                                                            </div>
                                                            
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="conditionclassifieds">
                                                                    <option  value="Perfect inside and out" selected>Condition</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "conditionclassifieds", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                        
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="usageclassifieds">
                                                                    <option  value="Still in original packaging" selected>Usage</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "usageclassifieds", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   

                                                           
                                                            <div class="group " id="div_selected_places">
                                                                <label class="heading" id=":refine-expand">
                                                                </label>
                                                                <input disabled="disabled" id="selected_neighbourhood_ids" name="selected_places" type="hidden" value="">
                                                            </div>
                                                        
                                                            <div class="group " id="div_selected_agents">
                                                                <label class="heading" id=":refine-expand">
                                                                    
                                                                    
                                                                </label>
                                                                <input disabled="disabled" id="selected_agents_ids" name="selected_agents" type="hidden" value="">
                                                            </div>
                                
                                                            <center><a href='officeelink.php?do=clear'>Clear Input</a></center>      
                                                             
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
                <h1 class="h1-pagecat">Business & Industrial</h1>
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
                                        Browse results in: <a href="">.. > Classifieds > </a> <strong style="color: #626465;">Businesses for Sale</strong>            
                                    </div>
                                    <div class="col-lg-2">
                                            <span class="toggle-info pull-right">
                                                <ion-icon name="remove-outline"></ion-icon>
                                            </span>          
                                    </div>
                                    <div class="panel-body">
                                        <div class="container"><hr></div>
                                        <div class="row">
                                                    <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%Businessess%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars1" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Businessess" name="searchmakecars1"> Businesses for Sale<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%Businessess%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>


                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%Constructionn%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars2" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Constructionn" name="searchmakecars2">Construction<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%Constructionn%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%Foodd%');
                                                        if($var != 0){
                                                            ?> 
                                                                    <div class="col-lg-4">
                                                                        <form action="?do=searchmakecars3" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Foodd" name="searchmakecars3">Food & Beverage<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%Foodd%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%suplbus%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars4" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="suplbus" name="searchmakecars4">Supplies<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%suplbus%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%officee%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars5" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="officee" name="searchmakecars5">Furniture&Equipment<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%officee%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%manbuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                    <div class="col-lg-4">
                                                                        <form action="?do=searchmakecars6" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="manbuclass" name="searchmakecars6">Manufacturing<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%manbuclass%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%eqbuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars7" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="eqbuclass" name="searchmakecars7">Electrical Equipment<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%eqbuclass%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%retailbuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                    <div class="col-lg-4">
                                                                        <form action="?do=searchmakecars8" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="retailbuclass" name="searchmakecars8">Retail & Services<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%retailbuclass%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%heabuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars9" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="heabuclass" name="searchmakecars9">Healthcare & Lab<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%heabuclass%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%copyy%');
                                                        if($var != 0){
                                                            ?> 
                                                                    <div class="col-lg-4">
                                                                        <form action="?do=searchmakecars10" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="copyy" name="searchmakecars10"> Printing & Machines<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%copyy%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%packingg%');
                                                        if($var != 0){
                                                            ?> 
                                                                        <div class="col-lg-4">
                                                                            <form action="?do=searchmakecars11" method="POST">
                                                                                                <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="packingg" name="searchmakecars11">Packing & Shipping<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%packingg%'); ?>)</span> </button></a>
                                                                            </form>
                                                                        </div>
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%agribuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                    <div class="col-lg-4">
                                                                        <form action="?do=searchmakecars12" method="POST">
                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="agribuclass" name="searchmakecars12">Agriculture & Forestry<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%agribuclass%'); ?>)</span> </button></a>
                                                                        </form>
                                                                    </div>  
                                                       <?php }
                                                    ?>

                                            <?php $var = countItemsclassifieds('typeclassifieds', 'classifieds', '%otherbuclass%');
                                                        if($var != 0){
                                                            ?> 
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars12" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="otherbuclass" name="searchmakecars12">Other<span style="color: black;">(<?php echo countItemsclassifieds('typeclassifieds', 'classifieds', '%otherbuclass%'); ?>)</span> </button></a>
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
                    
                        
                        <div class="row">
                            <div class="container">    
                                <?php
                                                if($do == 'one'){
                                                    $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 2;
                                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                    $start = ($page - 1) * $limit;
                                                    $result1 = $con->prepare("SELECT count(Id) AS Id FROM classifieds
                                                    where Approve = 1 AND typeclassifieds like '%Constructionn%'");
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

                                                    $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND typeclassifieds like '%officee%'", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                    foreach($allItems as $item)
                                                    {                                           
                                                        echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
                                                            echo '<div class="borderstyl" style="padding:15px;">';
                                                                echo '<div class="row">';
                                                                    // echo '<div class="col-lg-2">Featured</div>';
                                                                    // echo '<div class="col-lg-10">History Check</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                    echo '<div class="col-lg-3">
                                                                            <div class="row">
                                                                                <div class="col-lg-12"><div class="priceselli" style="text-align: center;">Selling price</div></div>
                                                                                <div class="col-lg-12 pricelink">AED 
                                                                                ' . $item['price'] . '</div></div>
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
                                                                            echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                            echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                        }                                                         
                                                                    echo '</div>';
                                                                    echo '<div class="col-lg-8">';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-6">Age :' . '<strong>' . $item["ageclassifieds"] . '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Condition :' . '<strong>' . $item['conditionclassifieds']. '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Usage :' . '<strong>' . $item['usageclassifieds']. '</strong>' . '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-10">';
                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                    echo '</div>';
                                                                        echo '<div class="col-lg-2">
                                                                        <a href="infoclasselec.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                            <ion-icon name="flag-outline"></ion-icon></div>';
                                                                echo '</div>';
                                                            echo '</div>';
                                                            echo '<hr>';
                                                        echo '</div>';
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
                                                    
                                                    <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="UAE" name="locationcars1">
                                                                        Used Cars for Sale in UAE</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                        Used Cars for Sale in Dubai</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                        Used Cars for Sale in Abu Dhabi</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                        Used Cars for Sale in Ras al Khaimah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                        Used Cars for Sale in Sharjah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                        Used Cars for Sale in Fujairah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                        Used Cars for Sale in Umm al Quwain</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                        Used Cars for Sale in Al Ain</button>
                                                    </form>
                                                    <?php
                                                }            
                                                elseif($do == 'orderprice1'){

                                                    $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND typeclassifieds like '%officee%'", '', "price DESC", "LIMIT 20");
                                                    foreach($allItems as $item)
                                                    {                                           
                                                        echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
                                                            echo '<div class="borderstyl" style="padding:15px;">';
                                                                echo '<div class="row">';
                                                                    // echo '<div class="col-lg-2">Featured</div>';
                                                                    // echo '<div class="col-lg-10">History Check</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                    echo '<div class="col-lg-3">
                                                                            <div class="row">
                                                                                <div class="col-lg-12"><div class="priceselli" style="text-align: center;">Selling price</div></div>
                                                                                <div class="col-lg-12 pricelink">AED 
                                                                                ' . $item['price'] . '</div></div>
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
                                                                            echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                            echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                        }                                                         
                                                                    echo '</div>';
                                                                    echo '<div class="col-lg-8">';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-6">Age :' . '<strong>' . $item["ageclassifieds"] . '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Condition :' . '<strong>' . $item['conditionclassifieds']. '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Usage :' . '<strong>' . $item['usageclassifieds']. '</strong>' . '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-10">';
                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                    echo '</div>';
                                                                        echo '<div class="col-lg-2">
                                                                        <a href="infoclasselec.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                            <ion-icon name="flag-outline"></ion-icon></div>';
                                                                echo '</div>';
                                                            echo '</div>';
                                                            echo '<hr>';
                                                        echo '</div>';
                                                    }   
                                                    ?>
                                                    
                                                    <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="UAE" name="locationcars1">
                                                                        Used Cars for Sale in UAE</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                        Used Cars for Sale in Dubai</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                        Used Cars for Sale in Abu Dhabi</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                        Used Cars for Sale in Ras al Khaimah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                        Used Cars for Sale in Sharjah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                        Used Cars for Sale in Fujairah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                        Used Cars for Sale in Umm al Quwain</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                        Used Cars for Sale in Al Ain</button>
                                                    </form>
                                                    <?php
                                                } 
                                                elseif($do == 'orderprice2'){

                                                    $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND typeclassifieds like '%officee%'", '', "price ASC", "LIMIT 20");
                                                    foreach($allItems as $item)
                                                    {                                           
                                                        echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
                                                            echo '<div class="borderstyl" style="padding:15px;">';
                                                                echo '<div class="row">';
                                                                    // echo '<div class="col-lg-2">Featured</div>';
                                                                    // echo '<div class="col-lg-10">History Check</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-9 namelink">' . $item['Name'] . '</div>';
                                                                    echo '<div class="col-lg-3">
                                                                            <div class="row">
                                                                                <div class="col-lg-12"><div class="priceselli" style="text-align: center;">Selling price</div></div>
                                                                                <div class="col-lg-12 pricelink">AED 
                                                                                ' . $item['price'] . '</div></div>
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
                                                                            echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                            echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                        }                                                         
                                                                    echo '</div>';
                                                                    echo '<div class="col-lg-8">';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $item["categoryy"] .'</p></div>';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-6">Age :' . '<strong>' . $item["ageclassifieds"] . '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Condition :' . '<strong>' . $item['conditionclassifieds']. '</strong>' . '</div>';
                                                                            echo '<div class="col-lg-6">Usage :' . '<strong>' . $item['usageclassifieds']. '</strong>' . '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                                echo '<div class="row">';
                                                                    echo '<div class="col-lg-10">';
                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['location'] . '</div>';
                                                                    echo '</div>';
                                                                        echo '<div class="col-lg-2">
                                                                        <a href="infoclasselec.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                            <ion-icon name="flag-outline"></ion-icon></div>';
                                                                echo '</div>';
                                                            echo '</div>';
                                                            echo '<hr>';
                                                        echo '</div>';
                                                    }    
                                                    ?>
                                                    <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="UAE" name="locationcars1">
                                                                        Used Cars for Sale in UAE</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                        Used Cars for Sale in Dubai</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                        Used Cars for Sale in Abu Dhabi</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                        Used Cars for Sale in Ras al Khaimah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                        Used Cars for Sale in Sharjah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                        Used Cars for Sale in Fujairah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                        Used Cars for Sale in Umm al Quwain</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                        Used Cars for Sale in Al Ain</button>
                                                    </form>
                                                    <?php
                                                }                 
                                                elseif($do == 'resultsearch'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";
                                                        $locatecars = $_POST['locationcars'];
                                                        $pricegte = $_POST['pricegte'];
                                                        $pricelte = $_POST['pricelte'];
                                                        $neighboarhood = $_POST['neighborhood'];
                                                        $typeclassifieds = $_POST['typeclassifieds'];
                                                        $usageclassifieds = $_POST['usageclassifieds'];
                                                        $conditionclassifieds = $_POST['conditionclassifieds'];
                                                                
                                                                $stmt = $con->prepare("SELECT * FROM classifieds where (price BETWEEN '$pricegte' AND '$pricelte') AND locationcars = '$locatecars' AND Approve = 1 AND location like '%$neighboarhood%' AND typeclassifieds like '%$typeclassifieds%' AND conditionclassifieds like '%$conditionclassifieds%' AND usageclassifieds like '%$usageclassifieds%'");

                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row)
                                                                    {                                           
                                                                        echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                                ' . $row['price'] . '</div></div>
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
                                                                                            echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                            echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                        echo '</div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                                    echo '</div>';
                                                                                        echo '<div class="col-lg-2">
                                                                                        <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                            <ion-icon name="flag-outline"></ion-icon></div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<hr>';
                                                                        echo '</div>';
                                                                    }   
                                                                }    
                                                                else{
                                                                    echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                                }
                                                    }
                                                } 
                                                elseif($do == 'clear'){
                                                    header('Location:officeelink.php');
                                                    exit();                                                
                                                }     
                                                // location
                                                elseif($do == 'searchlocationcars1'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $locatecars = $_POST['locationcars1'];
                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC");
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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
                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%officee%' AND locationcars like '%$locatecars%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
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

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }      
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars2'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars2'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }       
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars3'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars3'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }     
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars4'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars4'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }       
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars5'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars5'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }       
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars6'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars6'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }       
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars7'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars7'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }       
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars8'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars8'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }      
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars9'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars9'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }    
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars10'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars10'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }     
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars11'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars11'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }      
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars12'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars12'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }     
                                                    }

                                                } 
                                                elseif($do == 'searchmakecars13'){
                                                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                        echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                        $make = $_POST['searchmakecars13'];

                                                        $stmt = $con->prepare("SELECT * FROM classifieds where Approve = 1 AND typeclassifieds like '%$make%' order by Id DESC"); 
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll(); 
                                                        if(!empty($rows)){
                                                            foreach($rows as $row)
                                                            {                                           
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                        ' . $row['price'] . '</div></div>
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-12"> <p class="spanyyitli">' . $row["categoryy"] .'</p></div>';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["date"], date("Y-m-d H:i:s")) .'</p></div>';     
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6">Age :' . '<strong>' . $row["ageclassifieds"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Condition :' . '<strong>' . $row['conditionclassifieds']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6">Usage :' . '<strong>' . $row['usageclassifieds']. '</strong>' . '</div>';
                                                                                    if(empty($row['brandclassifieds'])){
                                                                                         
                                                                                    }   
                                                                                    else{
                                                                                        echo '<div class="col-lg-6">Brand :' . '<strong>' . $row['brandclassifieds']. '</strong>' . '</div>';
                                                                                    }  
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="row">';
                                                                            echo '<div class="col-lg-10">';
                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['location'] . '</div>';
                                                                            echo '</div>';
                                                                                echo '<div class="col-lg-2">
                                                                                <a href="infoclasselec.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                                    <ion-icon name="flag-outline"></ion-icon></div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<hr>';
                                                                echo '</div>';
                                                            }    
                                                        }    
                                                        else{
                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                        }     
                                                    }

                                                } 
                                ?>
                            </div>  
                        </div>  
            </div>
            <div class="col-lg-4"></div>
        </div>        
    </div>

<?php
    include 'includes/templates/footer.php';
    ob_end_flush();
?>