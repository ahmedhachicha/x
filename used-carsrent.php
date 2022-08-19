<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Buy & sell any Used Cars For Rent online ';
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
                                <h1 class="h1-pagecat">Buy & sell any Used Cars For Rent </h1>
                                <h2 class="div-pagecat"> Used Cars For Rent on Oh Yamal</h2>                    
                            </center>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
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
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
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

                                                            <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                <div class="search-dropdown">
                                                                    <select id="country" name="make">
                                                                            <option value="Audi" selected>Makes & Model</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "make", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . ' ' . $user['model'] . "'>" .$user['Name'] . ' ' . $user['model'] . "</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                                <script src="select2.min.js"></script>
                                                                <script>
                                                                    $("#country").select2( {
                                                                        placeholder: "Makes & Model",
                                                                        allowClear: true
                                                                        } );
                                                            </script>
                                                            <style>
                                                                .select2-container--default .select2-selection--single {
                                                                    width: 157px;
                                                                    height: 40px;
                                                                    background-color: #fff;
                                                                    border: 1px solid #aaa;
                                                                    border-radius: 4px;
                                                                }
                                                                .select2-container--default .select2-selection--single .select2-selection__arrow {
                                                                    height: 43px;
                                                                    position: absolute;
                                                                    top: 1px;
                                                                    right: 139px;
                                                                    width: 20px;
                                                                }
                                                            </style>
                                                    
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
                                                                                    <option value="">Year from</option>
                                                                                    <?php
                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                        foreach($allUsers as $user){
                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                                                <select id="yeargte:swfield" name="yearlte">
                                                                                    <option value="">Year to</option>
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
                                                                        
                                                                            <!-- <div class="group " id="div_seller_type">
                                                                                <label class="heading" id="seller-type:refine-expand">
                                                                                    Seller type 
                                                                                </label>
                                                                                <select id="site:swfield" name="sellertype">
                                                                                    <option value="" selected="selected">All Types</option>
                                                                                    <option value="OW">Owner</option>
                                                                                    <option value="DL">Dealer</option>
                                                                                    <option value="DS">Dealership/Certified Pre-Owned</option>
                                                                                </select>
                                                                            </div> -->
                                                            </div>
                                        
                                                    <!-- <div id="keywords">
                                                        <label class="heading">
                                                            Keywords
                                                                <a href="/motors/used-cars/?added__gte=0&amp;is_search=1&amp;site=14&amp;s=MT&amp;rc=140&amp;is_basic_search_widget=0&amp;c1=--" class="clear-link" id="keywords-clear">
                                                                    clear
                                                                </a>
                                                        </label>
                                                        <input id="id_keywords" type="text" name="keywords" class="text-field">
                                                        <input id="is-basic-search-widget" value="0" name="is_basic_search_widget" type="hidden">
                                                    </div> -->

                                                        <input type="hidden" name="is_search" value="1">
                                                        <!-- <input type="submit" value="Update Search" id="search-button" class="flame-button flame-button--primary flame-button--medium"> -->
                                                        
                                                            <!-- <div class="search-action-link" id="clear-search-link">
                                                                <a href="#">
                                                                    clear search
                                                                </a>
                                                            </div> -->
                                                            <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>  
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
                                                        <!-- <span class="opened" id="advanced-search-header-icon:advanced-search-header">
                                                            <strong id="advanced-option-symbol:advanced-search-header">
                                                                    -
                                                            </strong>
                                                        </span> -->
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
                                                                                <!-- <input type="hidden" class="as-values" name="places__id__in" id="as-values-id_places__id__in"></li></ul> -->
                                                                    </div>

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="bodytypecars">
                                                                            <option  value="Coupe" selected>Body Type</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "bodytypecars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>   
                                                                    
                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="doors">
                                                                            <option  value="4 door" selected>Doors</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "doors", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>   
                                                                
                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="cylinders">
                                                                            <option  value="4" selected>No. of Cylinders</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "cylinders", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>   

                                                                    <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="extrascars">
                                                                                <option value="," selected="selected"> Extras</option>
                                                                                <option value="Climate Control">Climate Control</option>
                                                                                <option value="Cooled Seats">Cooled Seatso</option>
                                                                                <option value="DVD Player">DVD Player</option>
                                                                                <option value="Front Wheel Drive">Front Wheel Drive</option>
                                                                                <option value="Keyless Entry">Keyless Entry</option>
                                                                                <option value="Navigation System">Navigation System</option>
                                                                                <option value="Parking Sensors">Parking Sensors</option>
                                                                                <option value="Premium Sound System">Premium Sound System</option>
                                                                                <option value="Rear View Camera">Rear View Camera</option>
                                                                                <option value="4 Wheel Drive">4 Wheel Drive</option>
                                                                                <option value="Air Conditioning">Air Conditioning</option>
                                                                                <option value="Alarm/Anti-Theft System">Alarm/Anti-Theft System</option>
                                                                                <option value="All Wheel Drive">All Wheel Drive</option>
                                                                                <option value="All Wheel Steering">All Wheel Steering</option>
                                                                                <option value="AM/FM Radio">AM/FM Radio</option>
                                                                                <option value="Anti-Lock Brakes/ABS">Anti-Lock Brakes/ABS</option>
                                                                                <option value="Aux Audio In">Aux Audio In</option>
                                                                                <option value="Bluetooth System">Bluetooth System</option>
                                                                                <option value="Body Kit">Body Kit</option>
                                                                                <option value="Brush Guard">Brush Guard</option>
                                                                                <option value="Cassette Player">Cassette Player</option>
                                                                                <option value="CD Player">CD Player</option>
                                                                                <option value="Cruise Control">Cruise Control</option>
                                                                                <option value="Dual Exhaust">Dual Exhaust</option>
                                                                                <option value="Fog Lights">Fog Lights</option>
                                                                                <option value="Front Airbags">Front Airbags</option>
                                                                                <option value="Heat">Heat</option>
                                                                                <option value="Heated Seats">Heated Seats</option>
                                                                                <option value="Keyless Start">Keyless Start</option>
                                                                                <option value="Moonroof">Moonroof</option>
                                                                                <option value="N2O System">N2O System</option>
                                                                                <option value="Off-Road Kit">Off-Road Kit</option>
                                                                                <option value="Power Mirrors">Power Mirrors</option>
                                                                                <option value="Power Seats">Power Seats</option>
                                                                                <option value="Power Steering">Power Steering</option>
                                                                                <option value="Power Sunroof">Power Sunroof</option>
                                                                                <option value="Power Windows">Power Windows</option>
                                                                                <option value="Premium Lights">Premium Lights</option>
                                                                                <option value="Premium Paint">Premium Paint</option>
                                                                                <option value="Premium Wheels/Rims">Premium Wheels/Rims</option>
                                                                                <option value="Racing Seats">Racing Seats</option>
                                                                                <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                                                                                <option value="Roof Rack">Roof Rack</option>
                                                                                <option value="Satellite Radio">Satellite Radio</option>
                                                                                <option value="Side Airbags">Side Airbags</option>
                                                                                <option value="Spoiler">Spoiler</option>
                                                                                <option value="Sunroof">Sunroof</option>
                                                                                <option value="Tiptronic">Tiptronic</option>
                                                                                <option value="Gears">Gears</option>
                                                                                <option value="VHS">VHS</option>
                                                                                <option value="Player">Player</option>
                                                                                <option value="Winch">Winch</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="horsepowercars">
                                                                            <option selected value="150 - 200 HP">Horsepower</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "horsepowercars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>   

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="transmissiontype">
                                                                            <option selected value="Manual Transmission">Transmission Type</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "transmissiontype", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>   
                                                                
                                                                    <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="Exteriorcolor">
                                                                                <option value="Black" selected="selected"> Color </option>
                                                                                <option value="black">Black</option>
                                                                                <option value="blue">Blue</option>
                                                                                <option value="Brown">Brown</option>
                                                                                <option value="Burgundy">Burgundy</option>
                                                                                <option value="Gold">Gold</option>
                                                                                <option value="Grey">Grey</option>
                                                                                <option value="Orange">Orange</option>
                                                                                <option value="Green">Green</option>
                                                                                <option value="Purple">Purple</option>
                                                                                <option value="Red">Red</option>
                                                                                <option value="Silver">Silver</option>
                                                                                <option value="Beige">Beige</option>
                                                                                <option value="Tan">Tan</option>
                                                                                <option value="Teal">Teal</option>
                                                                                <option value="White">White</option>
                                                                                <option value="Yellow">Yellow</option>
                                                                                <option value="Other Color">Other Color</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="warrantycars">
                                                                            <option selected value="Yes">Warranty</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "warrantycars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>  

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="fueltypecars">
                                                                            <option selected value="Gasoline">Fuel Type</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "fueltypecars", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>  

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="regionalspec">
                                                                            <option selected value="GCC Specs">Regional Specs</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
                                                                                foreach($allUsers as $user){
                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>  

                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                        <div class="search-dropdown">
                                                                            <select id="site:swfield" name="side">
                                                                            <option selected value="Left Hand Side">Steering Side</option>
                                                                            <?php
                                                                                $allUsers = getAllFrom("*", "side", "", "", "Id");
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
                                        
                                                                    <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>      
                                                                    
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
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Cars </strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                        <?php if(empty(countItemscars1('make', 'products', '%Audi%'))){
                                                        }
                                                        else{?>
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars1" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Audi" name="searchmakecars1">Audi <span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Audi%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                            <?php } ?>                                            

                                                <?php if(empty(countItemscars1('make', 'products', '%Hummer%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hummer" name="searchmakecars1">Hummer<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hummer%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>                                                     
                                                <?php if(empty(countItemscars1('make', 'products', 'Maserati'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Maserati" name="searchmakecars1">Maserati<span style="color: black;">(<?php echo countItemscars1('make', 'products', 'Maserati'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%BMW%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BMW" name="searchmakecars1">BMW<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BMW%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Hyunai%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hyunai" name="searchmakecars1">Hyunai<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hyunai%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>   
                                                <?php if(empty(countItemscars1('make', 'products', '%Mazda%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mazda" name="searchmakecars1">Mazda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mazda%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Cadillac%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Cadillac" name="searchmakecars1">Cadillac<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Cadillac%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%Infiniti%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Infiniti" name="searchmakecars1">Infiniti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Infiniti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mercedes-Benz%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mercedes-Benz" name="searchmakecars1">Mercedes-Benz<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mercedes-Benz%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Chevrolet%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chevrolet" name="searchmakecars1">Chevrolet<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chevrolet%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>

                                                <?php if(empty(countItemscars1('make', 'products', '%Isuzu%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Isuzu" name="searchmakecars1">Isuzu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Isuzu%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                    <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mitsubishi%'))){}
                                                    else{?> 
                                                            <div class="col-lg-4">
                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mitsubishi" name="searchmakecars1">Mitsubishi<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mitsubishi%'); ?>)</span> </button></a>
                                                                </form>
                                                            </div>
                                                <?php } ?>
                                                            <div class="container">
                                                                <center>
                                                                        <span class="toggle-infoo" style="cursor:pointer;">
                                                                            Show All
                                                                        </span>    
                                                                </center>
                                                                <div class="row panel-bodyy pplll">
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Brilliance%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Brilliance" name="searchmakecars1">Brilliance<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Brilliance%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Acura%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Acura" name="searchmakecars1">Acura<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Acura%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Alfa Romeo%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Alfa Romeo" name="searchmakecars1">Alfa Romeo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Alfa Romeo%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Aston Martin%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Aston Martin" name="searchmakecars1">Aston Martin<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Aston Martin%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chrysler%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chrysler" name="searchmakecars1">Chrysler<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chrysler%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jaguar%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jaguar" name="searchmakecars1">Jaguar<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jaguar%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Nissan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Nissan" name="searchmakecars1">Nissan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Nissan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Daihatsu%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daihatsu" name="searchmakecars1">Daihatsu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daihatsu%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jeep%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jeep" name="searchmakecars1">Jeep<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jeep%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Peugeot%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Peugeot" name="searchmakecars1">Peugeot<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Peugeot%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Dogge%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Dogge" name="searchmakecars1">Dogge<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Dogge%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%kia%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Kia" name="searchmakecars1">Kia<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%kia%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Ford%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Ford" name="searchmakecars1">Ford<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Ford%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Prosche%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Prosche" name="searchmakecars1">Prosche<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Prosche%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Land Rover%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Land Rover" name="searchmakecars1">Land Rover<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Land Rover%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Renault%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Renault" name="searchmakecars1">Renault<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Renault%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%GMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="GMC" name="searchmakecars1">GMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%GMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Lexus%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Lexus" name="searchmakecars1">Lexus<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Lexus%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Toyota%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Toyota" name="searchmakecars1">Toyota<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Toyota%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Genesis%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Genesis" name="searchmakecars1">Genesis<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Genesis%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Mini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="MINI" name="searchmakecars1">MINI<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Volkswagen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Volkswagen" name="searchmakecars1">Volkswagen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Volkswagen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Honda%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Honda" name="searchmakecars1">Honda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Honda%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAC" name="searchmakecars1">BAC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAIC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAIC" name="searchmakecars1">BAIC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAIC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BYD%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BYD" name="searchmakecars1">BYD<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BYD%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bentley%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bentley" name="searchmakecars1">Bentley<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bentley%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bizzarrini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bizzarrini" name="searchmakecars1">Bizzarrini<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bizzarrini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Borgward%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Borgward" name="searchmakecars1">Borgward<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Borgward%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bugatti%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bugatti" name="searchmakecars1">Bugatti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bugatti%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Buick%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Buick" name="searchmakecars1">Buick<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Buick%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%CMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="CMC" name="searchmakecars1">CMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%CMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Caterham%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Caterham" name="searchmakecars1">Caterham<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Caterham%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Changan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Changan" name="searchmakecars1">Changan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Changan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chery%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chery" name="searchmakecars1">Chery<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chery%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Citroen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Citroen" name="searchmakecars1">Citroen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Citroen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%DFSK%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="DFSK" name="searchmakecars1">DFSK<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%DFSK%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Daewoo%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daewoo" name="searchmakecars1">Daewoo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daewoo%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                </div>   
                                                            </div>
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
                        
                            
                            <div class="row">
                                <div class="container">    
                                    <?php
                                                    if($do == 'one'){
                                                        $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result1 = $con->prepare("SELECT count(Id) AS Id FROM products
                                                        where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' ");
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

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typecars = 'For Rent' ", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', " Price DESC", "LIMIT 20");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                        echo '<div class="col-lg-10">';
                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="col-lg-2" style="margin-top:10px;">
                                                                            <span class="featured_span">Featured</span>
                                                                                 </div>';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                                echo '<hr>';
                                                            echo '</div></a>';
                                                        }   
                                                    } 
                                                    if($do == 'orderprice2'){

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', " Price ASC", "LIMIT 20");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="row">';
                                                                        echo '<div class="col-lg-10">';
                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $item['Location'] . '</div>';
                                                                        echo '</div>';
                                                                            echo '<div class="col-lg-2" style="margin-top:10px;">
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
                                                            $make = $_POST['make'];
                                                            $neighboarhood = $_POST['neighborhood'];
                                                            $bodytypecars = $_POST['bodytypecars'];
                                                            $doors = $_POST['doors'];
                                                            $cylinders = $_POST['cylinders'];
                                                            $extras = $_POST['extrascars'];
                                                            $horsepowercars = $_POST['horsepowercars'];
                                                            $Exteriorcolor = $_POST['Exteriorcolor'];
                                                            $transmissiontype = $_POST['transmissiontype'];
                                                            $warrantycars = $_POST['warrantycars'];
                                                            $fueltypecars = $_POST['fueltypecars'];
                                                            $regionalspec = $_POST['regionalspec'];
                                                            $side = $_POST['side'];
                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND locatecars = '$locatecars' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (make like '%$make%') OR (Location like '%$neighboarhood%') OR (bodytypecars like '%$bodytypecars%') OR (doors like '%$doors%') OR (cylinders like '%$cylinders%') OR (extrascars like '%$extras%') OR (horsepowercars like '%$horsepowercars%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$transmissiontype%') OR (warrantycars like '%$warrantycars%') OR (fueltypecars like '%$fueltypecars%') OR (regionalspec like '%$regionalspec%') OR (side like '%$side%'))");
                                                                    $stmt->execute();
                                                                    $rows = $stmt->fetchAll(); 
                                                                    if(!empty($rows)){
                                                                        foreach($rows as $row){
                                                                                echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                                    echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                    echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                                }                                                         
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-8">';
                                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                                echo '<div class="row">';
                                                                                                    echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-10">';
                                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div></a>';
                                                                                    echo '<hr>';
                                                                                // echo '</div>'; 
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
                                                            $make = $_POST['make'];
                                                            $Exteriorcolor = $_POST['Exteriorcolor'];
                                                            $all = $_POST['all'];
                                                            $yeargte = $_POST['yeargte'];
                                                            $yearlte = $_POST['yearlte'];
                                                            $kilometersgte = $_POST['kilometersgte'];
                                                            $kilometerslte = $_POST['kilometerslte'];
                                                            $pricegte = $_POST['pricegte'];
                                                            $pricelte = $_POST['pricelte'];
                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND (locatecars = '$locatecars') AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (make like '%$make%') OR (Location like '%$all%') OR (bodytypecars like '%$all%') OR (doors like '%$all%') OR (cylinders like '%$all%') OR (extrascars like '%$all%') OR (horsepowercars like '%$all%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$all%') OR (warrantycars like '%$all%') OR (fueltypecars like '%$all%') OR (regionalspec like '%$all%') OR (side like '%$all%'))");
                                                                    $stmt->execute();
                                                                    $rows = $stmt->fetchAll(); 
                                                                    if(!empty($rows)){
                                                                        foreach($rows as $row){
                                                                                echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                                    echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                    echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                                }                                                         
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-8">';
                                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                                echo '<div class="row">';
                                                                                                    echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-10">';
                                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div></a>';
                                                                                    echo '<hr>';
                                                                                // echo '</div>'; 
                                                                        }
                                                                    }    
                                                                    else{
                                                                        echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                                    }
                                                        }
                                                    } 
                                                    elseif($do == 'clear'){
                                                        header('Location:used-carsrent.php');
                                                        exit();                                                
                                                    }     
                                                    // location
                                                    elseif($do == 'searchlocationcars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars1'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars2'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars2'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars3'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars3'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars4'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars4'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars5'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars5'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars6'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars6'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars7'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars7'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                    elseif($do == 'searchlocationcars8'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars8'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                            echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                                echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                            }                                                         
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-8">';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                            echo '<div class="row">';
                                                                                                echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-10">';
                                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-2" style="margin-top:10px;"> 
                                                                                                <span class="featured_span">Featured</span> 
                                                                                            </div>';
                                                                                    echo '</div>';
                                                                                echo '</div></a>';
                                                                            echo '</div>';
                                                                            echo '<hr>';
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
                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   make like '%$make%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
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
                                                                        Cars in Ajman</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                        Cars in Dubai</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                        Cars in Abu Dhabi</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                        Cars in Ras al Khaimah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                        Cars in Sharjah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                        Cars in Fujairah</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                        Cars in Umm al Quwain</button>
                                                    </form>
                                                    <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                        <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                        Cars in Al Ain</button>
                                                    </form>
                                </div>  
                            </div>  
                    </div>
                    </div>        
                </div>
            </div>

            <div class="d-block d-sm-none">
                <div class="container-fluid">
                    <div class="row" style="padding-left:15px;">
                            <center>
                                <h1 class="h1-pagecat"> Buy & sell any Used Cars For Rent </h1>
                                <h2 class="div-pagecat"> Used Cars For Rent on Oh Yamal </h2>                    
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

                                                                                                            <!-- <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                                <div class="search-dropdown">
                                                                                                                    <select id="site:swfield" name="make">
                                                                                                                            <option value="Audi" selected>All Makes</option>
                                                                                                                            <php
                                                                                                                                $allUsers = getAllFrom("*", "make", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div> -->

                                                                                                            <!-- <div id="search-loading-icon"><span>&nbsp;</span></div> -->
                                                                                                            <div class="fields">
                                                                                                                    <div class="range-fields">
                                                                                                                        <label class="heading">
                                                                                                                                Price ( AED )
                                                                                                                            </label>
                                                                                                                            <div class="range-fields-inputs" style="padding-right: 15px;">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input class="text-field-small" id="price_gte:swfield" name="pricegte" placeholder="Price from" title="Price from" type="text">
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
                                                                                                                                    <option value="">Year from</option>
                                                                                                                                    <?php
                                                                                                                                        $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                                        foreach($allUsers as $user){
                                                                                                                                            echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                        }
                                                                                                                                    ?>
                                                                                                                                </select>
                                                                                                                                <select id="yeargte:swfield" name="yearlte">
                                                                                                                                    <option value="">Year to</option>
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
                                                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input class="text-field-small" id="price_gte:swfield" name="kilometersgte" placeholder="KM from" title="KM from" type="text">
                                                                                                                                    <input class="text-field-small alt" id="price_gte:swfield" name="kilometerslte" placeholder="KM to" title="KM to" type="text"></div>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                        
                                                                                                                            <!-- <div class="group " id="div_seller_type">
                                                                                                                                <label class="heading" id="seller-type:refine-expand">
                                                                                                                                    Seller type 
                                                                                                                                </label>
                                                                                                                                <select id="site:swfield" name="sellertype">
                                                                                                                                    <option value="" selected="selected">All Types</option>
                                                                                                                                    <option value="OW">Owner</option>
                                                                                                                                    <option value="DL">Dealer</option>
                                                                                                                                    <option value="DS">Dealership/Certified Pre-Owned</option>
                                                                                                                                </select>
                                                                                                                            </div> -->
                                                                                                            </div>
                                                                                        
                                                                                                    <!-- <div id="keywords">
                                                                                                        <label class="heading">
                                                                                                            Keywords
                                                                                                                <a href="/motors/used-cars/?added__gte=0&amp;is_search=1&amp;site=14&amp;s=MT&amp;rc=140&amp;is_basic_search_widget=0&amp;c1=--" class="clear-link" id="keywords-clear">
                                                                                                                    clear
                                                                                                                </a>
                                                                                                        </label>
                                                                                                        <input id="id_keywords" type="text" name="keywords" class="text-field">
                                                                                                        <input id="is-basic-search-widget" value="0" name="is_basic_search_widget" type="hidden">
                                                                                                    </div> -->

                                                                                                        <input type="hidden" name="is_search" value="1">
                                                                                                        <!-- <input type="submit" value="Update Search" id="search-button" class="flame-button flame-button--primary flame-button--medium"> -->
                                                                                                        
                                                                                                            <!-- <div class="search-action-link" id="clear-search-link">
                                                                                                                <a href="#">
                                                                                                                    clear search
                                                                                                                </a>
                                                                                                            </div> -->
                                                                                                            <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>  
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
                                                                                                        <!-- <span class="opened" id="advanced-search-header-icon:advanced-search-header">
                                                                                                            <strong id="advanced-option-symbol:advanced-search-header">
                                                                                                                    -
                                                                                                            </strong>
                                                                                                        </span> -->
                                                                                                        <span class="toggle-info pull-right">
                                                                                                            <ion-icon name="add-outline"></ion-icon>
                                                                                                        </span>          
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
                                                                                                                            <select id="site:swfield" name="bodytypecars">
                                                                                                                            <option  value="Coupe" selected>Body Type</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "bodytypecars", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>   
                                                                                                                    
                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="doors">
                                                                                                                            <option  value="4 door" selected>Doors</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "doors", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>   
                                                                                                                
                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="cylinders">
                                                                                                                            <option  value="4" selected>No. of Cylinders</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "cylinders", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>   

                                                                                                                    <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="extrascars">
                                                                                                                                <option value="," selected="selected"> Extras</option>
                                                                                                                                <option value="Climate Control">Climate Control</option>
                                                                                                                                <option value="Cooled Seats">Cooled Seatso</option>
                                                                                                                                <option value="DVD Player">DVD Player</option>
                                                                                                                                <option value="Front Wheel Drive">Front Wheel Drive</option>
                                                                                                                                <option value="Keyless Entry">Keyless Entry</option>
                                                                                                                                <option value="Navigation System">Navigation System</option>
                                                                                                                                <option value="Parking Sensors">Parking Sensors</option>
                                                                                                                                <option value="Premium Sound System">Premium Sound System</option>
                                                                                                                                <option value="Rear View Camera">Rear View Camera</option>
                                                                                                                                <option value="4 Wheel Drive">4 Wheel Drive</option>
                                                                                                                                <option value="Air Conditioning">Air Conditioning</option>
                                                                                                                                <option value="Alarm/Anti-Theft System">Alarm/Anti-Theft System</option>
                                                                                                                                <option value="All Wheel Drive">All Wheel Drive</option>
                                                                                                                                <option value="All Wheel Steering">All Wheel Steering</option>
                                                                                                                                <option value="AM/FM Radio">AM/FM Radio</option>
                                                                                                                                <option value="Anti-Lock Brakes/ABS">Anti-Lock Brakes/ABS</option>
                                                                                                                                <option value="Aux Audio In">Aux Audio In</option>
                                                                                                                                <option value="Bluetooth System">Bluetooth System</option>
                                                                                                                                <option value="Body Kit">Body Kit</option>
                                                                                                                                <option value="Brush Guard">Brush Guard</option>
                                                                                                                                <option value="Cassette Player">Cassette Player</option>
                                                                                                                                <option value="CD Player">CD Player</option>
                                                                                                                                <option value="Cruise Control">Cruise Control</option>
                                                                                                                                <option value="Dual Exhaust">Dual Exhaust</option>
                                                                                                                                <option value="Fog Lights">Fog Lights</option>
                                                                                                                                <option value="Front Airbags">Front Airbags</option>
                                                                                                                                <option value="Heat">Heat</option>
                                                                                                                                <option value="Heated Seats">Heated Seats</option>
                                                                                                                                <option value="Keyless Start">Keyless Start</option>
                                                                                                                                <option value="Moonroof">Moonroof</option>
                                                                                                                                <option value="N2O System">N2O System</option>
                                                                                                                                <option value="Off-Road Kit">Off-Road Kit</option>
                                                                                                                                <option value="Power Mirrors">Power Mirrors</option>
                                                                                                                                <option value="Power Seats">Power Seats</option>
                                                                                                                                <option value="Power Steering">Power Steering</option>
                                                                                                                                <option value="Power Sunroof">Power Sunroof</option>
                                                                                                                                <option value="Power Windows">Power Windows</option>
                                                                                                                                <option value="Premium Lights">Premium Lights</option>
                                                                                                                                <option value="Premium Paint">Premium Paint</option>
                                                                                                                                <option value="Premium Wheels/Rims">Premium Wheels/Rims</option>
                                                                                                                                <option value="Racing Seats">Racing Seats</option>
                                                                                                                                <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                                                                                                                                <option value="Roof Rack">Roof Rack</option>
                                                                                                                                <option value="Satellite Radio">Satellite Radio</option>
                                                                                                                                <option value="Side Airbags">Side Airbags</option>
                                                                                                                                <option value="Spoiler">Spoiler</option>
                                                                                                                                <option value="Sunroof">Sunroof</option>
                                                                                                                                <option value="Tiptronic">Tiptronic</option>
                                                                                                                                <option value="Gears">Gears</option>
                                                                                                                                <option value="VHS">VHS</option>
                                                                                                                                <option value="Player">Player</option>
                                                                                                                                <option value="Winch">Winch</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="horsepowercars">
                                                                                                                            <option selected value="150 - 200 HP">Horsepower</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "horsepowercars", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>   

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="transmissiontype">
                                                                                                                            <option selected value="Manual Transmission">Transmission Type</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "transmissiontype", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>   
                                                                                                                
                                                                                                                    <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="Exteriorcolor">
                                                                                                                                <option value="Black" selected="selected"> Color </option>
                                                                                                                                <option value="black">Black</option>
                                                                                                                                <option value="blue">Blue</option>
                                                                                                                                <option value="Brown">Brown</option>
                                                                                                                                <option value="Burgundy">Burgundy</option>
                                                                                                                                <option value="Gold">Gold</option>
                                                                                                                                <option value="Grey">Grey</option>
                                                                                                                                <option value="Orange">Orange</option>
                                                                                                                                <option value="Green">Green</option>
                                                                                                                                <option value="Purple">Purple</option>
                                                                                                                                <option value="Red">Red</option>
                                                                                                                                <option value="Silver">Silver</option>
                                                                                                                                <option value="Beige">Beige</option>
                                                                                                                                <option value="Tan">Tan</option>
                                                                                                                                <option value="Teal">Teal</option>
                                                                                                                                <option value="White">White</option>
                                                                                                                                <option value="Yellow">Yellow</option>
                                                                                                                                <option value="Other Color">Other Color</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="warrantycars">
                                                                                                                            <option selected value="Yes">Warranty</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "warrantycars", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>  

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="fueltypecars">
                                                                                                                            <option selected value="Gasoline">Fuel Type</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "fueltypecars", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>  

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="regionalspec">
                                                                                                                            <option selected value="GCC Specs">Regional Specs</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
                                                                                                                                foreach($allUsers as $user){
                                                                                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>  

                                                                                                                    <div class="widget-dropdown" id="search-content-site">
                                                                                                                        <div class="search-dropdown">
                                                                                                                            <select id="site:swfield" name="side">
                                                                                                                            <option selected value="Left Hand Side">Steering Side</option>
                                                                                                                            <?php
                                                                                                                                $allUsers = getAllFrom("*", "side", "", "", "Id");
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
                                                                                        
                                                                                                                    <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>      
                                                                                                                    
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
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Cars </strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                        <?php if(empty(countItemscars1('make', 'products', '%Audi%'))){
                                                        }
                                                        else{?>
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars1" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Audi" name="searchmakecars1">Audi <span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Audi%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                            <?php } ?>                                            

                                                <?php if(empty(countItemscars1('make', 'products', '%Hummer%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hummer" name="searchmakecars1">Hummer<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hummer%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>                                                     
                                                <?php if(empty(countItemscars1('make', 'products', 'Maserati'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Maserati" name="searchmakecars1">Maserati<span style="color: black;">(<?php echo countItemscars1('make', 'products', 'Maserati'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%BMW%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BMW" name="searchmakecars1">BMW<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BMW%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Hyunai%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hyunai" name="searchmakecars1">Hyunai<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hyunai%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>   
                                                <?php if(empty(countItemscars1('make', 'products', '%Mazda%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mazda" name="searchmakecars1">Mazda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mazda%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Cadillac%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Cadillac" name="searchmakecars1">Cadillac<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Cadillac%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%Infiniti%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Infiniti" name="searchmakecars1">Infiniti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Infiniti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mercedes-Benz%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mercedes-Benz" name="searchmakecars1">Mercedes-Benz<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mercedes-Benz%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Chevrolet%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chevrolet" name="searchmakecars1">Chevrolet<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chevrolet%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>

                                                <?php if(empty(countItemscars1('make', 'products', '%Isuzu%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Isuzu" name="searchmakecars1">Isuzu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Isuzu%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                    <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mitsubishi%'))){}
                                                    else{?> 
                                                            <div class="col-lg-4">
                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mitsubishi" name="searchmakecars1">Mitsubishi<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mitsubishi%'); ?>)</span> </button></a>
                                                                </form>
                                                            </div>
                                                <?php } ?>
                                                            <div class="container">
                                                                <center>
                                                                        <span class="toggle-infoo" style="cursor:pointer;">
                                                                            Show All
                                                                        </span>    
                                                                </center>
                                                                <div class="row panel-bodyy pplll">
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Brilliance%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Brilliance" name="searchmakecars1">Brilliance<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Brilliance%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Acura%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Acura" name="searchmakecars1">Acura<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Acura%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Alfa Romeo%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Alfa Romeo" name="searchmakecars1">Alfa Romeo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Alfa Romeo%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Aston Martin%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Aston Martin" name="searchmakecars1">Aston Martin<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Aston Martin%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chrysler%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chrysler" name="searchmakecars1">Chrysler<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chrysler%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jaguar%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jaguar" name="searchmakecars1">Jaguar<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jaguar%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Nissan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Nissan" name="searchmakecars1">Nissan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Nissan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Daihatsu%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daihatsu" name="searchmakecars1">Daihatsu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daihatsu%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jeep%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jeep" name="searchmakecars1">Jeep<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jeep%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Peugeot%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Peugeot" name="searchmakecars1">Peugeot<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Peugeot%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Dogge%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Dogge" name="searchmakecars1">Dogge<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Dogge%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%kia%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Kia" name="searchmakecars1">Kia<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%kia%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Ford%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Ford" name="searchmakecars1">Ford<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Ford%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Prosche%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Prosche" name="searchmakecars1">Prosche<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Prosche%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Land Rover%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Land Rover" name="searchmakecars1">Land Rover<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Land Rover%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Renault%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Renault" name="searchmakecars1">Renault<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Renault%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%GMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="GMC" name="searchmakecars1">GMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%GMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Lexus%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Lexus" name="searchmakecars1">Lexus<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Lexus%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Toyota%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Toyota" name="searchmakecars1">Toyota<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Toyota%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Genesis%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Genesis" name="searchmakecars1">Genesis<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Genesis%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Mini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="MINI" name="searchmakecars1">MINI<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Volkswagen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Volkswagen" name="searchmakecars1">Volkswagen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Volkswagen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Honda%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Honda" name="searchmakecars1">Honda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Honda%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAC" name="searchmakecars1">BAC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAIC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAIC" name="searchmakecars1">BAIC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAIC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BYD%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BYD" name="searchmakecars1">BYD<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BYD%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bentley%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bentley" name="searchmakecars1">Bentley<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bentley%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bizzarrini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bizzarrini" name="searchmakecars1">Bizzarrini<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bizzarrini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Borgward%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Borgward" name="searchmakecars1">Borgward<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Borgward%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bugatti%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bugatti" name="searchmakecars1">Bugatti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bugatti%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Buick%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Buick" name="searchmakecars1">Buick<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Buick%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%CMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="CMC" name="searchmakecars1">CMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%CMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Caterham%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Caterham" name="searchmakecars1">Caterham<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Caterham%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Changan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Changan" name="searchmakecars1">Changan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Changan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chery%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chery" name="searchmakecars1">Chery<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chery%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Citroen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Citroen" name="searchmakecars1">Citroen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Citroen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%DFSK%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="DFSK" name="searchmakecars1">DFSK<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%DFSK%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Daewoo%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daewoo" name="searchmakecars1">Daewoo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daewoo%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                </div>   
                                                            </div>
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
                                
                                <div class="row">
                                    <div class="container">    
                                        <?php
                                                        if($do == 'one'){
                                                            $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $start = ($page - 1) * $limit;
                                                            $result1 = $con->prepare("SELECT count(Id) AS Id FROM products
                                                            where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'");
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

                                                            $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' ", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                            foreach($allItems as $item)
                                                            {                               
                                                                echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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
                                                            </div> 
                                                        
                                                            <?php
                                                        }            
                                                        elseif($do == 'orderprice1'){

                                                            $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'  ", '', " Price DESC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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
                                                        elseif($do == 'orderprice2'){

                                                            $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', " Price ASC", "LIMIT 20");
                                                            foreach($allItems as $item)
                                                            {                                           
                                                                echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                    echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                    echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                                }                                                         
                                                                            echo '</div>';
                                                                            echo '<div class="col-lg-8">';
                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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
                                                                // $make = $_POST['make'];
                                                                $neighboarhood = $_POST['neighborhood'];
                                                                $bodytypecars = $_POST['bodytypecars'];
                                                                $doors = $_POST['doors'];
                                                                $cylinders = $_POST['cylinders'];
                                                                $extras = $_POST['extrascars'];
                                                                $horsepowercars = $_POST['horsepowercars'];
                                                                $Exteriorcolor = $_POST['Exteriorcolor'];
                                                                $transmissiontype = $_POST['transmissiontype'];
                                                                $warrantycars = $_POST['warrantycars'];
                                                                $fueltypecars = $_POST['fueltypecars'];
                                                                $regionalspec = $_POST['regionalspec'];
                                                                $side = $_POST['side'];
                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND locatecars = '$locatecars' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (Location like '%$neighboarhood%') OR (bodytypecars like '%$bodytypecars%') OR (doors like '%$doors%') OR (cylinders like '%$cylinders%') OR (extrascars like '%$extras%') OR (horsepowercars like '%$horsepowercars%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$transmissiontype%') OR (warrantycars like '%$warrantycars%') OR (fueltypecars like '%$fueltypecars%') OR (regionalspec like '%$regionalspec%') OR (side like '%$side%'))");
                                                                        $stmt->execute();
                                                                        $rows = $stmt->fetchAll(); 
                                                                        if(!empty($rows)){
                                                                            foreach($rows as $row){
                                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                                    }                                                         
                                                                                                echo '</div>';
                                                                                                echo '<div class="col-lg-8">';
                                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                                    echo '<div class="row">';
                                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                                    echo '</div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                            echo '<div class="row">';
                                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                                echo '</div>';
                                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div></a>';
                                                                                        echo '<hr>';
                                                                                    // echo '</div>'; 
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
                                                                $make = $_POST['make'];
                                                                $Exteriorcolor = $_POST['Exteriorcolor'];
                                                                $all = $_POST['all'];
                                                                $yeargte = $_POST['yeargte'];
                                                                $yearlte = $_POST['yearlte'];
                                                                $kilometersgte = $_POST['kilometersgte'];
                                                                $kilometerslte = $_POST['kilometerslte'];
                                                                $pricegte = $_POST['pricegte'];
                                                                $pricelte = $_POST['pricelte'];
                                                                $stmt = $con->prepare("SELECT * FROM products where ( Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)) AND ((locatecars = '$locatecars') OR (Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (make like '%$make%') OR (Location like '%$all%') OR (bodytypecars like '%$all%') OR (doors like '%$all%') OR (cylinders like '%$all%') OR (extrascars like '%$all%') OR (horsepowercars like '%$all%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$all%') OR (warrantycars like '%$all%') OR (fueltypecars like '%$all%') OR (regionalspec like '%$all%') OR (side like '%$all%'))");
                                                                        $stmt->execute();
                                                                        $rows = $stmt->fetchAll(); 
                                                                        if(!empty($rows)){
                                                                            foreach($rows as $row){
                                                                                echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                                    echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                    echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                                }                                                         
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-8">';
                                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                                echo '<div class="row">';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div></a>';
                                                                                    echo '<hr>';
                                                                                // echo '</div>'; 
                                                                        }
                                                                        }    
                                                                        else{
                                                                            echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                                        }
                                                            }
                                                        } 
                                                        elseif($do == 'clear'){
                                                            header('Location:used-carsrent.php');
                                                            exit();                                                
                                                        }     
                                                        // location
                                                        elseif($do == 'searchlocationcars1'){
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                            {
                                                                echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                                $locatecars = $_POST['locationcars1'];

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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

                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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
                                                                $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   make like '%$make%'"); 
                                                                $stmt->execute();
                                                                $rows = $stmt->fetchAll(); 
                                                                if(!empty($rows)){
                                                                    foreach($rows as $row){
                                                                        echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                            echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                            echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                        }                                                         
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-8">';
                                                                                    echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="row">';
                                                                                    echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                        echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div></a>';
                                                                            echo '<hr>';
                                                                        // echo '</div>'; 
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
                                                                                Cars in Ajman</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                                Cars in Dubai</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                                Cars in Abu Dhabi</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                                Cars in Ras al Khaimah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                                Cars in Sharjah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                                Cars in Fujairah</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                                Cars in Umm al Quwain</button>
                                                            </form>
                                                            <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                                <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                                Cars in Al Ain</button>
                                                            </form>
                                    </div>  
                                </div>  
                        </div>
                    </div>        
                </div>
            </div>                                                                

            <div class="d-none d-md-block d-lg-none">
                <div class="container-fluid">
                    <div class="row" style="padding-left:15px;">
                            <center>
                                <h1 class="h1-pagecat"> Buy & sell any Used Cars For Rent </h1>
                                <h2 class="div-pagecat"> Used Cars For Rent on Oh Yamal </h2>                    
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

                                                                                                        <!-- <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                            <div class="search-dropdown">
                                                                                                                <select id="site:swfield" name="make">
                                                                                                                        <option value="Audi" selected>All Makes</option>
                                                                                                                        <php
                                                                                                                            $allUsers = getAllFrom("*", "make", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div> -->
                                                                                                
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
                                                                                                                                <option value="">Year from</option>
                                                                                                                                <?php
                                                                                                                                    $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                                                                                    foreach($allUsers as $user){
                                                                                                                                        echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                                    }
                                                                                                                                ?>
                                                                                                                            </select>
                                                                                                                            <select id="yeargte:swfield" name="yearlte">
                                                                                                                                <option value="">Year to</option>
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
                                                                                                                    
                                                                                                                        <!-- <div class="group " id="div_seller_type">
                                                                                                                            <label class="heading" id="seller-type:refine-expand">
                                                                                                                                Seller type 
                                                                                                                            </label>
                                                                                                                            <select id="site:swfield" name="sellertype">
                                                                                                                                <option value="" selected="selected">All Types</option>
                                                                                                                                <option value="OW">Owner</option>
                                                                                                                                <option value="DL">Dealer</option>
                                                                                                                                <option value="DS">Dealership/Certified Pre-Owned</option>
                                                                                                                            </select>
                                                                                                                        </div> -->
                                                                                                        </div>
                                                                                    
                                                                                                <!-- <div id="keywords">
                                                                                                    <label class="heading">
                                                                                                        Keywords
                                                                                                            <a href="/motors/used-cars/?added__gte=0&amp;is_search=1&amp;site=14&amp;s=MT&amp;rc=140&amp;is_basic_search_widget=0&amp;c1=--" class="clear-link" id="keywords-clear">
                                                                                                                clear
                                                                                                            </a>
                                                                                                    </label>
                                                                                                    <input id="id_keywords" type="text" name="keywords" class="text-field">
                                                                                                    <input id="is-basic-search-widget" value="0" name="is_basic_search_widget" type="hidden">
                                                                                                </div> -->

                                                                                                    <input type="hidden" name="is_search" value="1">
                                                                                                    <!-- <input type="submit" value="Update Search" id="search-button" class="flame-button flame-button--primary flame-button--medium"> -->
                                                                                                    
                                                                                                        <!-- <div class="search-action-link" id="clear-search-link">
                                                                                                            <a href="#">
                                                                                                                clear search
                                                                                                            </a>
                                                                                                        </div> -->
                                                                                                        <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>  
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
                                                                                                    <!-- <span class="opened" id="advanced-search-header-icon:advanced-search-header">
                                                                                                        <strong id="advanced-option-symbol:advanced-search-header">
                                                                                                                -
                                                                                                        </strong>
                                                                                                    </span> -->
                                                                                                    <span class="toggle-info pull-right">
                                                                                                        <ion-icon name="add-outline"></ion-icon>
                                                                                                    </span>          
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
                                                                                                                        <select id="site:swfield" name="bodytypecars">
                                                                                                                        <option  value="Coupe" selected>Body Type</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "bodytypecars", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>   
                                                                                                                
                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="doors">
                                                                                                                        <option  value="4 door" selected>Doors</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "doors", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>   
                                                                                                            
                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="cylinders">
                                                                                                                        <option  value="4" selected>No. of Cylinders</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "cylinders", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>   

                                                                                                                <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="extrascars">
                                                                                                                            <option value="," selected="selected"> Extras</option>
                                                                                                                            <option value="Climate Control">Climate Control</option>
                                                                                                                            <option value="Cooled Seats">Cooled Seatso</option>
                                                                                                                            <option value="DVD Player">DVD Player</option>
                                                                                                                            <option value="Front Wheel Drive">Front Wheel Drive</option>
                                                                                                                            <option value="Keyless Entry">Keyless Entry</option>
                                                                                                                            <option value="Navigation System">Navigation System</option>
                                                                                                                            <option value="Parking Sensors">Parking Sensors</option>
                                                                                                                            <option value="Premium Sound System">Premium Sound System</option>
                                                                                                                            <option value="Rear View Camera">Rear View Camera</option>
                                                                                                                            <option value="4 Wheel Drive">4 Wheel Drive</option>
                                                                                                                            <option value="Air Conditioning">Air Conditioning</option>
                                                                                                                            <option value="Alarm/Anti-Theft System">Alarm/Anti-Theft System</option>
                                                                                                                            <option value="All Wheel Drive">All Wheel Drive</option>
                                                                                                                            <option value="All Wheel Steering">All Wheel Steering</option>
                                                                                                                            <option value="AM/FM Radio">AM/FM Radio</option>
                                                                                                                            <option value="Anti-Lock Brakes/ABS">Anti-Lock Brakes/ABS</option>
                                                                                                                            <option value="Aux Audio In">Aux Audio In</option>
                                                                                                                            <option value="Bluetooth System">Bluetooth System</option>
                                                                                                                            <option value="Body Kit">Body Kit</option>
                                                                                                                            <option value="Brush Guard">Brush Guard</option>
                                                                                                                            <option value="Cassette Player">Cassette Player</option>
                                                                                                                            <option value="CD Player">CD Player</option>
                                                                                                                            <option value="Cruise Control">Cruise Control</option>
                                                                                                                            <option value="Dual Exhaust">Dual Exhaust</option>
                                                                                                                            <option value="Fog Lights">Fog Lights</option>
                                                                                                                            <option value="Front Airbags">Front Airbags</option>
                                                                                                                            <option value="Heat">Heat</option>
                                                                                                                            <option value="Heated Seats">Heated Seats</option>
                                                                                                                            <option value="Keyless Start">Keyless Start</option>
                                                                                                                            <option value="Moonroof">Moonroof</option>
                                                                                                                            <option value="N2O System">N2O System</option>
                                                                                                                            <option value="Off-Road Kit">Off-Road Kit</option>
                                                                                                                            <option value="Power Mirrors">Power Mirrors</option>
                                                                                                                            <option value="Power Seats">Power Seats</option>
                                                                                                                            <option value="Power Steering">Power Steering</option>
                                                                                                                            <option value="Power Sunroof">Power Sunroof</option>
                                                                                                                            <option value="Power Windows">Power Windows</option>
                                                                                                                            <option value="Premium Lights">Premium Lights</option>
                                                                                                                            <option value="Premium Paint">Premium Paint</option>
                                                                                                                            <option value="Premium Wheels/Rims">Premium Wheels/Rims</option>
                                                                                                                            <option value="Racing Seats">Racing Seats</option>
                                                                                                                            <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                                                                                                                            <option value="Roof Rack">Roof Rack</option>
                                                                                                                            <option value="Satellite Radio">Satellite Radio</option>
                                                                                                                            <option value="Side Airbags">Side Airbags</option>
                                                                                                                            <option value="Spoiler">Spoiler</option>
                                                                                                                            <option value="Sunroof">Sunroof</option>
                                                                                                                            <option value="Tiptronic">Tiptronic</option>
                                                                                                                            <option value="Gears">Gears</option>
                                                                                                                            <option value="VHS">VHS</option>
                                                                                                                            <option value="Player">Player</option>
                                                                                                                            <option value="Winch">Winch</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="horsepowercars">
                                                                                                                        <option selected value="150 - 200 HP">Horsepower</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "horsepowercars", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>   

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="transmissiontype">
                                                                                                                        <option selected value="Manual Transmission">Transmission Type</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "transmissiontype", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>   
                                                                                                            
                                                                                                                <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="Exteriorcolor">
                                                                                                                            <option value="Black" selected="selected"> Color </option>
                                                                                                                            <option value="black">Black</option>
                                                                                                                            <option value="blue">Blue</option>
                                                                                                                            <option value="Brown">Brown</option>
                                                                                                                            <option value="Burgundy">Burgundy</option>
                                                                                                                            <option value="Gold">Gold</option>
                                                                                                                            <option value="Grey">Grey</option>
                                                                                                                            <option value="Orange">Orange</option>
                                                                                                                            <option value="Green">Green</option>
                                                                                                                            <option value="Purple">Purple</option>
                                                                                                                            <option value="Red">Red</option>
                                                                                                                            <option value="Silver">Silver</option>
                                                                                                                            <option value="Beige">Beige</option>
                                                                                                                            <option value="Tan">Tan</option>
                                                                                                                            <option value="Teal">Teal</option>
                                                                                                                            <option value="White">White</option>
                                                                                                                            <option value="Yellow">Yellow</option>
                                                                                                                            <option value="Other Color">Other Color</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="warrantycars">
                                                                                                                        <option selected value="Yes">Warranty</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "warrantycars", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>  

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="fueltypecars">
                                                                                                                        <option selected value="Gasoline">Fuel Type</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "fueltypecars", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>  

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="regionalspec">
                                                                                                                        <option selected value="GCC Specs">Regional Specs</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
                                                                                                                            foreach($allUsers as $user){
                                                                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>  

                                                                                                                <div class="widget-dropdown" id="search-content-site">
                                                                                                                    <div class="search-dropdown">
                                                                                                                        <select id="site:swfield" name="side">
                                                                                                                        <option selected value="Left Hand Side">Steering Side</option>
                                                                                                                        <?php
                                                                                                                            $allUsers = getAllFrom("*", "side", "", "", "Id");
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
                                                                                    
                                                                                                                <center><a href='used-carsrent.php?do=clear'>Clear Input</a></center>      
                                                                                                                
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
                                            Browse results in: <a href="allmotors.php">.. > Motors > </a> <strong style="color: #626465;">Cars </strong>            
                                        </div>
                                        <div class="col-lg-2">
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                        </div>
                                        <div class="panel-body">
                                            <div class="container"><hr></div>
                                            <div class="row">
                                                        <?php if(empty(countItemscars1('make', 'products', '%Audi%'))){
                                                        }
                                                        else{?>
                                                                <div class="col-lg-4">
                                                                    <form action="?do=searchmakecars1" method="POST">
                                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Audi" name="searchmakecars1">Audi <span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Audi%'); ?>)</span> </button></a>
                                                                    </form>
                                                                </div>
                                                            <?php } ?>                                            

                                                <?php if(empty(countItemscars1('make', 'products', '%Hummer%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hummer" name="searchmakecars1">Hummer<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hummer%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>                                                     
                                                <?php if(empty(countItemscars1('make', 'products', 'Maserati'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Maserati" name="searchmakecars1">Maserati<span style="color: black;">(<?php echo countItemscars1('make', 'products', 'Maserati'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%BMW%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BMW" name="searchmakecars1">BMW<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BMW%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Hyunai%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Hyunai" name="searchmakecars1">Hyunai<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Hyunai%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>   
                                                <?php if(empty(countItemscars1('make', 'products', '%Mazda%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mazda" name="searchmakecars1">Mazda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mazda%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Cadillac%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Cadillac" name="searchmakecars1">Cadillac<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Cadillac%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>  
                                                <?php if(empty(countItemscars1('make', 'products', '%Infiniti%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Infiniti" name="searchmakecars1">Infiniti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Infiniti%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mercedes-Benz%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mercedes-Benz" name="searchmakecars1">Mercedes-Benz<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mercedes-Benz%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?> 
                                                <?php if(empty(countItemscars1('make', 'products', '%Chevrolet%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chevrolet" name="searchmakecars1">Chevrolet<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chevrolet%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                        <?php } ?>

                                                <?php if(empty(countItemscars1('make', 'products', '%Isuzu%'))){}
                                                    else{?>
                                                <div class="col-lg-4">
                                                    <form action="?do=searchmakecars1" method="POST">
                                                                        <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Isuzu" name="searchmakecars1">Isuzu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Isuzu%'); ?>)</span> </button></a>
                                                    </form>
                                                </div>
                                                    <?php } ?>
                                                <?php if(empty(countItemscars1('make', 'products', '%Mitsubishi%'))){}
                                                    else{?> 
                                                            <div class="col-lg-4">
                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Mitsubishi" name="searchmakecars1">Mitsubishi<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mitsubishi%'); ?>)</span> </button></a>
                                                                </form>
                                                            </div>
                                                <?php } ?>
                                                            <div class="container">
                                                                <center>
                                                                        <span class="toggle-infoo" style="cursor:pointer;">
                                                                            Show All
                                                                        </span>    
                                                                </center>
                                                                <div class="row panel-bodyy pplll">
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Brilliance%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Brilliance" name="searchmakecars1">Brilliance<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Brilliance%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Acura%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Acura" name="searchmakecars1">Acura<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Acura%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Alfa Romeo%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Alfa Romeo" name="searchmakecars1">Alfa Romeo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Alfa Romeo%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Aston Martin%'))){}
                                                                            else{?> 
                                                                                    <div class="col-lg-4">
                                                                                        <form action="?do=searchmakecars1" method="POST">
                                                                                                            <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Aston Martin" name="searchmakecars1">Aston Martin<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Aston Martin%'); ?>)</span> </button></a>
                                                                                        </form>
                                                                                    </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chrysler%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chrysler" name="searchmakecars1">Chrysler<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chrysler%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jaguar%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jaguar" name="searchmakecars1">Jaguar<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jaguar%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Nissan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Nissan" name="searchmakecars1">Nissan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Nissan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Daihatsu%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daihatsu" name="searchmakecars1">Daihatsu<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daihatsu%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Jeep%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Jeep" name="searchmakecars1">Jeep<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Jeep%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Peugeot%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Peugeot" name="searchmakecars1">Peugeot<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Peugeot%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Dogge%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Dogge" name="searchmakecars1">Dogge<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Dogge%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%kia%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Kia" name="searchmakecars1">Kia<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%kia%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Ford%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Ford" name="searchmakecars1">Ford<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Ford%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Prosche%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Prosche" name="searchmakecars1">Prosche<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Prosche%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Land Rover%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Land Rover" name="searchmakecars1">Land Rover<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Land Rover%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Renault%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Renault" name="searchmakecars1">Renault<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Renault%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%GMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="GMC" name="searchmakecars1">GMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%GMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Lexus%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Lexus" name="searchmakecars1">Lexus<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Lexus%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Toyota%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Toyota" name="searchmakecars1">Toyota<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Toyota%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Genesis%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Genesis" name="searchmakecars1">Genesis<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Genesis%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Mini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="MINI" name="searchmakecars1">MINI<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Mini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Volkswagen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Volkswagen" name="searchmakecars1">Volkswagen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Volkswagen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                            <?php if(empty(countItemscars1('make', 'products', '%Honda%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Honda" name="searchmakecars1">Honda<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Honda%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAC" name="searchmakecars1">BAC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BAIC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BAIC" name="searchmakecars1">BAIC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BAIC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%BYD%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="BYD" name="searchmakecars1">BYD<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%BYD%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bentley%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bentley" name="searchmakecars1">Bentley<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bentley%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bizzarrini%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bizzarrini" name="searchmakecars1">Bizzarrini<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bizzarrini%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Borgward%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Borgward" name="searchmakecars1">Borgward<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Borgward%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Bugatti%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Bugatti" name="searchmakecars1">Bugatti<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Bugatti%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Buick%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Buick" name="searchmakecars1">Buick<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Buick%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%CMC%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="CMC" name="searchmakecars1">CMC<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%CMC%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Caterham%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Caterham" name="searchmakecars1">Caterham<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Caterham%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Changan%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Changan" name="searchmakecars1">Changan<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Changan%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Chery%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Chery" name="searchmakecars1">Chery<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Chery%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Citroen%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Citroen" name="searchmakecars1">Citroen<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Citroen%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%DFSK%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="DFSK" name="searchmakecars1">DFSK<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%DFSK%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if(empty(countItemscars1('make', 'products', '%Daewoo%'))){}
                                                                        else{?> 
                                                                                <div class="col-lg-4">
                                                                                <form action="?do=searchmakecars1" method="POST">
                                                                                                    <a href="" class="ashwhide"><button class="footer-widgets-links-url" type="submit"><input type="hidden" value="Daewoo" name="searchmakecars1">Daewoo<span style="color: black;">(<?php echo countItemscars1('make', 'products', '%Daewoo%'); ?>)</span> </button></a>
                                                                                </form>
                                                                            </div>
                                                                        <?php } ?>
                                                                </div>   
                                                            </div>
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
                        
                            
                            <div class="row">
                                <div class="container">    
                                    <?php
                                                    if($do == 'one'){
                                                        $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 18;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result1 = $con->prepare("SELECT count(Id) AS Id FROM products
                                                        where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'");
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

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', " Price DESC", "LIMIT 20");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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

                                                        $allItems = getAllFrom('*', 'products', "where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   ", '', " Price ASC", "LIMIT 20");
                                                        foreach($allItems as $item)
                                                        {                                           
                                                            echo '<a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myList">';
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
                                                                                echo  "<img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                                echo '<span class="countimgs">' . $countimages . ' images</span>';
                                                                            }                                                         
                                                                        echo '</div>';
                                                                        echo '<div class="col-lg-8">';
                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Year:' . '<strong>' . $item["Year"] . '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Doors:' . '<strong>' . $item['doors']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Kilometers:' . '<strong>' . $item['k_mi']. '</strong>' . '</div>';
                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Color:' . '<strong>' . $item['Exteriorcolor']. '</strong>' . '</div>';
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
                                                            // $make = $_POST['make'];
                                                            $neighboarhood = $_POST['neighborhood'];
                                                            $bodytypecars = $_POST['bodytypecars'];
                                                            $doors = $_POST['doors'];
                                                            $cylinders = $_POST['cylinders'];
                                                            $extras = $_POST['extrascars'];
                                                            $horsepowercars = $_POST['horsepowercars'];
                                                            $Exteriorcolor = $_POST['Exteriorcolor'];
                                                            $transmissiontype = $_POST['transmissiontype'];
                                                            $warrantycars = $_POST['warrantycars'];
                                                            $fueltypecars = $_POST['fueltypecars'];
                                                            $regionalspec = $_POST['regionalspec'];
                                                            $side = $_POST['side'];
                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND locatecars = '$locatecars' AND ((Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (Location like '%$neighboarhood%') OR (bodytypecars like '%$bodytypecars%') OR (doors like '%$doors%') OR (cylinders like '%$cylinders%') OR (extrascars like '%$extras%') OR (horsepowercars like '%$horsepowercars%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$transmissiontype%') OR (warrantycars like '%$warrantycars%') OR (fueltypecars like '%$fueltypecars%') OR (regionalspec like '%$regionalspec%') OR (side like '%$side%'))");
                                                                    $stmt->execute();
                                                                    $rows = $stmt->fetchAll(); 
                                                                    if(!empty($rows)){
                                                                        foreach($rows as $row){
                                                                                echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                                    echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                    echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                                }                                                         
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-8">';
                                                                                            echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                                echo '<div class="row">';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                                echo '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="row">';
                                                                                            echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                                echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                            echo '</div>';
                                                                                            echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div></a>';
                                                                                    echo '<hr>';
                                                                                // echo '</div>'; 
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
                                                            $make = $_POST['make'];
                                                            $Exteriorcolor = $_POST['Exteriorcolor'];
                                                            $all = $_POST['all'];
                                                            $yeargte = $_POST['yeargte'];
                                                            $yearlte = $_POST['yearlte'];
                                                            $kilometersgte = $_POST['kilometersgte'];
                                                            $kilometerslte = $_POST['kilometerslte'];
                                                            $pricegte = $_POST['pricegte'];
                                                            $pricelte = $_POST['pricelte'];
                                                            $stmt = $con->prepare("SELECT * FROM products where ( Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)) AND ((locatecars = '$locatecars') OR (Price BETWEEN '$pricegte' AND '$pricelte') OR (k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte') OR (Year BETWEEN '$yeargte' AND '$yearlte') OR (make like '%$make%') OR (Location like '%$all%') OR (bodytypecars like '%$all%') OR (doors like '%$all%') OR (cylinders like '%$all%') OR (extrascars like '%$all%') OR (horsepowercars like '%$all%') OR (Exteriorcolor like '%$Exteriorcolor%') AND (transmissiontype like '%$all%') OR (warrantycars like '%$all%') OR (fueltypecars like '%$all%') OR (regionalspec like '%$all%') OR (side like '%$all%'))");
                                                                    $stmt->execute();
                                                                    $rows = $stmt->fetchAll(); 
                                                                    if(!empty($rows)){
                                                                        foreach($rows as $row){
                                                                            echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                                echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                                echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                            }                                                         
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-8">';
                                                                                        echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                            echo '<div class="row">';
                                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                                echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                            echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                        echo '</div>';
                                                                                        echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                        echo '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div></a>';
                                                                                echo '<hr>';
                                                                            // echo '</div>'; 
                                                                    }
                                                                    }    
                                                                    else{
                                                                        echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                                    }
                                                        }
                                                    } 
                                                    elseif($do == 'clear'){
                                                        header('Location:used-carsrent.php');
                                                        exit();                                                
                                                    }     
                                                    // location
                                                    elseif($do == 'searchlocationcars1'){
                                                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                        {
                                                            echo "<h1 class='text-center h1-member'>Result search</h1>";

                                                            $locatecars = $_POST['locationcars1'];

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent' AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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

                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   locatecars like '%$locatecars%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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
                                                            $stmt = $con->prepare("SELECT * FROM products where  Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)  AND typecars = 'For Rent'   AND   make like '%$make%'"); 
                                                            $stmt->execute();
                                                            $rows = $stmt->fetchAll(); 
                                                            if(!empty($rows)){
                                                                foreach($rows as $row){
                                                                    echo '<a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >';
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
                                                                                        echo  "<a href='info.php?pageid=" . $row["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                                        echo '<span class="countimgs">' . $countimagess . ' images</span>';

                                                                                    }                                                         
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-8">';
                                                                                echo '<div class="col-lg-12"><p class="dateitli">Posted on ' . TimeAgo($row["Add_date"], date("Y-m-d H:i:s")) .'</p></div>';
                                                                                    echo '<div class="row">';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Year:' . '<strong>' . $row["Year"] . '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Doors:' . '<strong>' . $row['doors']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Kilometers:' . '<strong>' . $row['k_mi']. '</strong>' . '</div>';
                                                                                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Color:' . '<strong>' . $row['Exteriorcolor']. '</strong>' . '</div>';
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                            echo '<div class="row">';
                                                                                echo '<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">';
                                                                                    echo '<div class="locationitli"><ion-icon name="location-sharp"></ion-icon>' . $row['Location'] . '</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="margin-top:10px;"> <span class="featured_span">Featured</span> </div>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div></a>';
                                                                        echo '<hr>';
                                                                    // echo '</div>'; 
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
                                                                            Cars in Ajman</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars2" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Dubai" name="locationcars2">
                                                                            Cars in Dubai</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars3" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Abu Dhabi" name="locationcars3">
                                                                            Cars in Abu Dhabi</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars4" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Ras al Khaimah" name="locationcars4">
                                                                            Cars in Ras al Khaimah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars5" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Sharjah" name="locationcars5">
                                                                            Cars in Sharjah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars6" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Fujairah" name="locationcars6">
                                                                            Cars in Fujairah</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars7" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Umm al Quwain" name="locationcars7">
                                                                            Cars in Umm al Quwain</button>
                                                        </form>
                                                        <form id="search-widget-form" action="?do=searchlocationcars8" method="POST">
                                                                            <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="Al Ain" name="locationcars8">
                                                                            Cars in Al Ain</button>
                                                        </form>
                                </div>  
                            </div>  
                    </div>
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