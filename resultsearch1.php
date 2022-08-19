<?php 
    ob_start();
    session_start();
    $pageTitle = 'Buy & sell any cars online in UAE';
    include 'init.php';
?>
    <div class="container-fluid">
        <div class="row" style="padding-left:15px;">
            <div class="col-lg-2">
                <?php $do = isset($_GET['do']) ? $_GET['do'] : '';
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
                                                                <!-- <option value="">All Cities</option> -->
                                                                <option value="Abu Dhabi">Abu Dhabi</option>
                                                                <option value="Ajman" selected="selected">Ajman</option>
                                                                <option value="Al Ain">Al Ain</option>
                                                                <option value="Dubai">Dubai</option>
                                                                <option value="Fujairah">Fujairah</option>
                                                                <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                                <option value="Sharjah">Sharjah</option>
                                                                <option value="Umm al Quwain">Umm al Quwain</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                        <div class="search-dropdown">
                                                            <select id="site:swfield" name="make">
                                                                <option value="--" selected="selected"> All Makes</option>
                                                                <option value="Acura">Acura</option>
                                                                <option value="Alfa Romeo">Alfa Romeo</option>
                                                                <option value="Aston Martin">Aston Martin</option>
                                                                <option value="Audi">Audi</option>
                                                                <option value="BAC">BAC</option>
                                                                <option value="BAIC">BAIC</option>
                                                                <option value="BMW">BMW</option>
                                                                <option value="BYD">BYD</option>
                                                                <option value="Bentley">Bentley</option>
                                                                <option value="Bizzarrini">Bizzarrini</option>
                                                                <option value="Borgward">Borgward</option>
                                                                <option value="Brilliance">Brilliance</option>
                                                                <option value="Bufori">Bufori</option>
                                                                <option value="Bugatti">Bugatti</option>
                                                                <option value="Buick">Buick</option>
                                                                <option value="CMC">CMC</option>
                                                                <option value="Cadillac">Cadillac</option>
                                                                <option value="Caterham">Caterham</option>
                                                                <option value="Changan">Changan</option>
                                                                <option value="Chery">Chery</option>
                                                                <option value="Chevrolet">Chevrolet</option>
                                                                <option value="Chrysler">Chrysler</option>
                                                                <option value="Citroen">Citroen</option>
                                                                <option value="DFSK">DFSK</option>
                                                                <option value="Daewoo">Daewoo</option>
                                                                <option value="Daihatsu">Daihatsu</option>
                                                                <option value="Datsun">Datsun</option>
                                                                <option value="DeLorean">DeLorean</option>
                                                                <option value="Dodge">Dodge</option>
                                                                <option value="DongFeng">DongFeng</option>
                                                                <option value="Dorcen">Dorcen</option>
                                                                <option value="Equus">Equus</option>
                                                                <option value="Faw">Faw</option>
                                                                <option value="Fenyr">Fenyr</option>
                                                                <option value="Ferrari">Ferrari</option>
                                                                <option value="Fiat">Fiat</option>
                                                                <option value="Fisker">Fisker</option>
                                                                <option value="Force">Force</option>
                                                                <option value="Ford">Ford</option>
                                                                <option value="Foton">Foton</option>
                                                                <option value="GAC">GAC</option>
                                                                <option value="GAC Gonow">GAC Gonow</option>
                                                                <option value="GMC">GMC</option>
                                                                <option value="Geely">Geely</option>
                                                                <option value="Genesis">Genesis</option>
                                                                <option value="Grand Tiger">Grand Tiger</option>
                                                                <option value="Great Wall">Great Wall</option>
                                                                <option value="Gumpert">Gumpert</option>
                                                                <option value="Haval">Haval</option>
                                                                <option value="Honda">Honda</option>
                                                                <option value="Hongqi">Hongqi</option>
                                                                <option value="Hummer">Hummer</option>
                                                                <option value="Hyundai">Hyundai</option>
                                                                <option value="Infiniti">Infiniti</option>
                                                                <option value="Isuzu">Isuzu</option>
                                                                <option value="Iveco">Iveco</option>
                                                                <option value="JAC">JAC</option>
                                                                <option value="JMC">JMC</option>
                                                                <option value="Jaguar">Jaguar</option>
                                                                <option value="Jeep">Jeep</option>
                                                                <option value="Jetour">Jetour</option>
                                                                <option value="Jinbei">Jinbei</option>
                                                                <option value="KTM">KTM</option>
                                                                <option value="Kia">Kia</option>
                                                                <option value="King Long">King Long</option>
                                                                <option value="Koenigsegg">Koenigsegg</option>
                                                                <option value="Lada">Lada</option>
                                                                <option value="Lamborghini">Lamborghini</option>
                                                                <option value="Lancia">Lancia</option>
                                                                <option value="Land Rover">Land Rover</option>
                                                                <option value="Lexus">Lexus</option>
                                                                <option value="Lincoln">Lincoln</option>
                                                                <option value="Lotus">Lotus</option>
                                                                <option value="Luxgen">Luxgen</option>
                                                                <option value="MG">MG</option>
                                                                <option value="MINI">MINI</option>
                                                                <option value="Mahindra">Mahindra</option>
                                                                <option value="Maserati">Maserati</option>
                                                                <option value="Maxus">Maxus</option>
                                                                <option value="Maybach">Maybach</option>
                                                                <option value="Mazda">Mazda</option>
                                                                <option value="McLaren">McLaren</option>
                                                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                                <option value="Mercury">Mercury</option>
                                                                <option value="Milan">Milan</option>
                                                                <option value="Mitsubishi">Mitsubishi</option>
                                                                <option value="Morgan">Morgan</option>
                                                                <option value="Morris">Morris</option>
                                                                <option value="Nissan">Nissan</option>
                                                                <option value="Opel">Opel</option>
                                                                <option value="Oullim">Oullim</option>
                                                                <option value="PAL-V">PAL-V</option>
                                                                <option value="Pagani">Pagani</option>
                                                                <option value="Peugeot">Peugeot</option>
                                                                <option value="Polestar">Polestar</option>
                                                                <option value="Pontiac">Pontiac</option>
                                                                <option value="Porsche">Porsche</option>
                                                                <option value="Proton">Proton</option>
                                                                <option value="Renault">Renault</option>
                                                                <option value="Rolls Royce">Rolls Royce</option>
                                                                <option value="Rover">Rover</option>
                                                                <option value="Saab">Saab</option>
                                                                <option value="Seat">Seat</option>
                                                                <option value="Shenlong/Sunlong">Shenlong/Sunlong</option>
                                                                <option value="Skoda">Skoda</option>
                                                                <option value="Smart">Smart</option>
                                                                <option value="Soueast">Soueast</option>
                                                                <option value="Speranza">Speranza</option>
                                                                <option value="Ssang Yong">Ssang Yong</option>
                                                                <option value="Subaru">Subaru</option>
                                                                <option value="Suzuki">Suzuki</option>
                                                                <option value="TATA">TATA</option>
                                                                <option value="Tesla">Tesla</option>
                                                                <option value="Toyota">Toyota</option>
                                                                <option value="UAZ">UAZ</option>
                                                                <option value="Victory">Victory</option>
                                                                <option value="Volkswagen">Volkswagen</option>
                                                                <option value="Volvo">Volvo</option>
                                                                <option value="W Motors">W Motors</option>
                                                                <option value="Westfield Sportscars">Westfield Sportscars</option>
                                                                <option value="Wiesmann">Wiesmann</option>
                                                                <option value="Zotye">Zotye</option>
                                                                <option value="Other Make">Other Make</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-dropdown hidden-element no-arrow" id="search-content-c3">
                                                        <div class="search-dropdown">
                                                            <input class="text-field-small" id="price__gte:swfield" name="model" placeholder="Model" title="Model" type="text">
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
                                                                            <option value="" selected="selected">Year from</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1920">1920</option>
                                                                        </select>
                                                                        <select id="yeargte:swfield" name="yearlte">
                                                                            <option value="" selected="selected">Year to</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1920">1920</option>
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
                                                    <center><a href='used-cars.php?do=clear'>Clear Input</a></center>  
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
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>          
                                <!-- <div class="panel-body"> -->


                                            </div>
                                                <div id="" class="panel-body ppll">
                                                            <div class="search-dropdown">
                                                                <label class="heading">
                                                                    Neighborhoods
                                                                </label>
                                                                        <input type="text" name="neighborhood" id="price__gte:swfield" autocomplete="off" class="as-input" placeholder="Select neighborhood">
                                                                        <!-- <input type="hidden" class="as-values" name="places__id__in" id="as-values-id_places__id__in"></li></ul> -->
                                                            </div>

                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="bodytypecars">
                                                                    <option  value="">Body Type</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "bodytypecars", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                            
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="doors">
                                                                    <option  value="">Doors</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "doors", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                        
                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="cylinders">
                                                                    <option  value="">No. of Cylinders</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "cylinders", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   

                                                            <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="extras">
                                                                        <option value="--" selected="selected"> Extras</option>
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
                                                                    <option  value="">Horsepower</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "horsepowercars", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   

                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="transmissiontype">
                                                                    <option  value="">Transmission Type</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "transmissiontype", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                        
                                                            <div class="widget-dropdown no-arrow" id="search-content-c1">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="Exteriorcolor">
                                                                        <option value="--" selected="selected"> Color </option>
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
                                                                    <option  value="">Warranty</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "warrantycars", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>  

                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="fueltypecars">
                                                                    <option  value="">Fuel Type</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "fueltypecars", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>  

                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="regionalspec">
                                                                    <option  value="">Regional Specs</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>  

                                                            <div class="widget-dropdown" id="search-content-site">
                                                                <div class="search-dropdown">
                                                                    <select id="site:swfield" name="side">
                                                                    <option  value="">Steering Side</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "side", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
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
                                
                                                            <center><a href='used-cars.php?do=clear'>Clear Input</a></center>      
                                                             
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
                <h1 class="h1-pagecat">Buy & sell any cars online in UAE</h1>
                <h2 class="div-pagecat">Brand new & used cars for sale in UAE- Sell your 2nd hand car on rak4us</h2>
                <?php   $sort = 'DESC';
                // $sortt ='';
                        $sort_array = array('ASC', 'DESC');
                        if(isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)){$sort = $_GET['sort'];}?>
                        <div class="container ordering pull-right">
                            <div class="row">
                                <div class="col-lg-1">
                                    <label>Sort:</label>
                                </div>     
                                <div class="col-lg-11">
                                    <a class="<?php if($sort == 'DESC'){echo 'active';} ?>" href="?sort=DESC">[Newest to Oldest]</a> | 
                                    <a class="<?php if($sort == 'ASC'){echo 'active';} ?>"href="?sort=ASC">[Oldest to Newest]</a> |                                   
                                    <!-- <a class="<?php if($sortt == 'DESC'){echo 'active';} ?>"href="?sortt=DESC">[Price Highest to Lowest]</a> |                                    -->
                                    <!-- <a class="<?php if($sortt == 'ASC'){echo 'active';} ?>"href="?sortt=ASC">[Price Lowest to Highest]</a>                                     -->
                                    <!-- <select class="form-select forminputcat" aria-label="Default select example" name="locationcars" >
                                        <option><a class="<php if($sort == 'ASC'){echo 'active';} ?>" href="?sort=ASC">Default</a></option>
                                        <option><a class="?php if($sort == 'ASC'){echo 'active';} ?>" href="?sort=ASC">Newest to Oldest</a></option>
                                    </select>                                 -->
                                </div>     
                            </div>
                        </div>
                <div class="card">
                    <div class="container" style="padding: 10px;">
                        <div class="row">
                            <div class="col-lg-10">
                                Browse results in: <a href="">.. > Motors > </a> <strong style="color: #626465;">Used Cars for Sale</strong>            
                            </div>
                            <div class="col-lg-2">
                                    <span class="toggle-info pull-right">
                                        <ion-icon name="remove-outline"></ion-icon>
                                    </span>          
                            </div>
                            <div class="panel-body">
                                <div class="container"><hr></div>
                                <div class="row">
                                    <div class="col-lg-4"><a class="ashwhide" href="#">Audi</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Hummer</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Maserati</a></div>   
                                    <div class="col-lg-4"><a  class="ashwhide" href="">BMW</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Hyunai</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Mazda</a></div>                                        
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Cadillac</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Infiniti</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Mercedes-Benz</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Chevrolet</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Isuzu</a></div>
                                    <div class="col-lg-4"><a  class="ashwhide" href="">Mitsubishi</a></div>
                                    <div class="container">
                                        <center>
                                                <span class="toggle-infoo" style="cursor:pointer;">
                                                    Show All
                                                </span>    
                                            <!-- <a style="cursor: pointer;color: black;" class="btn1">Hide</a> <b>/</b> <a style="color: black;cursor: pointer;" class="btn2">Show All</a> -->
                                        </center>
                                        <div class="row panel-bodyy pplll">
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Chrysler</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Jaguar</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Nissan</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Daihatsu</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Jeep</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Peugeot</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Dogge</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Kia</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Prosche</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Ford</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Land Rover</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Renault</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">GMC</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Lexus</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Toyota</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Genesis</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">MINI</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Volkswagen</a></div>
                                                <div class="col-lg-4"><a  class="ashwhide" href="">Honda</a></div>                                                
                                        </div>    
                                    </div>

                                        <!-- <center>
                                                <span class="toggle-info pull-right">
                                                    <ion-icon name="remove-outline"></ion-icon>
                                                </span>    
                                            <a style="cursor: pointer;color: black;" class="btn1">Hide</a> <b>/</b> <a style="color: black;cursor: pointer;" class="btn2">Show All</a>
                                        </center> -->
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
                        <div class="row">
                            <?php
                                            if($do == 'resultsearch'){
                                                if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                {
                                                    echo "<h1 class='text-center h1-member'>Result search</h1>";
                                                    $locatecars = $_POST['locationcars'];
                                                    $make = $_POST['make'];
                                                    $model = $_POST['model'];
                                                    $pricegte = $_POST['pricegte'];
                                                    $pricelte = $_POST['pricelte'];
                                                    $yeargte = $_POST['yeargte'];
                                                    $yearlte = $_POST['yearlte'];
                                                    $kilometersgte = $_POST['kilometersgte'];
                                                    $kilometerslte = $_POST['kilometerslte'];
                                                    $neighboarhood = $_POST['neighborhood'];
                                                    $bodytypecars = $_POST['bodytypecars'];
                                                    $doors = $_POST['doors'];
                                                    $cylinders = $_POST['cylinders'];
                                                    $extras = $_POST['extras'];
                                                    $horsepowercars = $_POST['horsepowercars'];
                                                    $Exteriorcolor = $_POST['Exteriorcolor'];
                                                    $transmissiontype = $_POST['transmissiontype'];
                                                    $warrantycars = $_POST['warrantycars'];
                                                    $fueltypecars = $_POST['fueltypecars'];
                                                    $regionalspec = $_POST['regionalspec'];
                                                    $side = $_POST['side'];

                                                    $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 2;
                                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                    $start = ($page - 1) * $limit;
                                                    $result1 = $con->prepare("SELECT count(Id) AS Id FROM products
                                                     where Approve = 1 ");
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

                                                    $stmt = $con->prepare("SELECT * FROM products where Approve = 1 AND status = 'Used' AND typecars = 'For Sale' OR locatecars like '%$locatecars%' OR make like '%$make%' OR model like '%$model%' OR Price BETWEEN '$pricegte' AND '$pricelte' OR Year BETWEEN '$yeargte' AND '$yearlte' OR k_mi  BETWEEN '$kilometersgte' AND '$kilometerslte' OR Location like '%$neighboarhood%' OR bodytypecars like '%$bodytypecars%' OR doors like '%$doors%' OR cylinders like '%$cylinders%' OR 	extrascars like '%$extras%' OR horsepowercars like '%$horsepowercars%' OR Exteriorcolor like '%$Exteriorcolor%' OR transmissiontype like '%$transmissiontype%' OR warrantycars like '%$warrantycars%' OR fueltypecars like '%$fueltypecars%' OR regionalspec like '%$regionalspec%' OR side like '%$side%' ORDER BY Id DESC
                                                     LIMIT $start,$limit"); 
                                                    // $stmt = $con->prepare("SELECT * FROM products where locatecars like '%$locatecars%'AND Approve = 1 AND status = 'Used' AND typecars = 'For Sale'"); 
                                                    $stmt->execute();
                                                    $rows = $stmt->fetchAll(); 
                                                    if(!empty($rows)){
                                                        foreach($rows as $row){
                                                                echo '<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12" >';
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
                                                                                        ' . $row['Price'] . '</div></div>
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
                                                                                echo '<p class="dateitli">' . $row["Add_date"] .'</p>';
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
                                                                            echo '<div class="col-lg-2"> <a href="info.php?pageid=' . $row["Id"] .'" style="text-decoration: none; color:#2B2D2E;"><ion-icon name="chevron-forward-outline"></ion-icon></a> </div>';
                                                                            echo '</div>';
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
                                                                        echo "<li><a class='page-link' href='?page=$pages'>Last &rsaquo;&rsaquo;</a></li>";
                                                                        } ?>
                                                                </ul>
                                                            </nav>                                    
                                                        <!-- </div>
                                                        <div class="col-lg-2"></div>                                
                                                    </div>-->
                                                </div> 
                                                        <?php
                                                    }    
                                                    else{
                                                        echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                                    }      
                                                }
                                                ?>
                                               
                                                
                                                <?php
                                            }      
                                            elseif($do == 'clear'){
                                                header('Location:used-cars.php');
                                                exit();                                                
                                            }     
                                            elseif($do == 'one'){
                                                $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 2;
                                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                $start = ($page - 1) * $limit;
                                                $result1 = $con->prepare("SELECT count(Id) AS Id FROM products
                                                where Approve = 1 AND status = 'Used' AND typecars = 'For Sale'");
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

                                                $allItems = getAllFrom('*', 'products', "where Approve = 1 AND status = 'Used' AND typecars = 'For Sale'", '', "Id {$sort}", "LIMIT {$start},{$limit} ");
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
                                                                            ' . $item['Price'] . '</div></div>
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
                                                                    echo '<p class="dateitli">' . $item["Add_date"] .'</p>';
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
                                                                    echo '<div class="col-lg-2">
                                                                     <a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                                                                        <ion-icon name="flag-outline"></ion-icon></div>';
                                                                echo '</div>';
                                                            //     echo "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><div class=' fw-bold mb-1 pricecardindex'>AED " . $item["Price"] . "</div></a>";
                                                            //     echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 itemtwoindex" style="width: 28ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"> ' . $item['Name'] . ' . ' . $item['Make'] . ' . ' . $item['Model'] . '</div></a>';
                                                            //     echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><span class="itemtreeindex">' . $item['Year'] . ' . '. $item['k_mi'] . ' km</span></a>';
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
                                                                        echo "<li><a class='page-link' href='?page=$pages'>Last &rsaquo;&rsaquo;</a></li>";
                                                                        } ?>
                                                                </ul>
                                                            </nav>                                    
                                                        <!-- </div>
                                                        <div class="col-lg-2"></div>                                
                                                    </div>-->
                                                </div> 
                                                
                                                <form id="search-widget-form" action="?do=searchlocationcars1" method="POST">
                                                    <div>
                                                        <ul class="footer-widgets-links-unorder-list">
                                                                 <li class="footer-widgets-links-list"><a href="" title="Used Cars for Sale in UAE">
                                                                    <button class="footer-widgets-links-url" type="submit" ><input type="hidden" value="UAE" name="locationcars">
                                                                    Used Cars for Sale in UAE</button>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </form>

                                                <?php
                                            }
                                        ?> 
                                        <?php 
                                    ?>
                        </div>  
                    <!-- </div>   -->
            </div>
            <div class="col-lg-4"></div>
        </div>        
    </div>

<?php
    include 'includes/templates/footer.php';
    ob_end_flush();
?>