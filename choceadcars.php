<?php 
    ob_start();
    session_start();
    $pageTitle = 'motors';
    include 'init.php';

    if(isset($_SESSION['uid'])){
    ?>
<style>
    .row2 {
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
}
</style>
        <div class="container">
                <div class="row2">
                        <div id="business-package-container" class="onedivchocepage">
                            <div class="business-package-left-header">
                                Selling more than one car?
                            </div><br>
                            <div class="business-package-right-header">
                                <a href="#" class="close-btn-business-packages" onclick="document.getElementById('business-package-container').style.display = 'none'">
                                    <svg viewBox="0 0 329.26933 329" width="16" height="16" style="margin-top: -12%;margin-left: 95%;">
                                        <g fill="#BFBFC0">
                                            <path d="m21.339844 329.398438c-5.460938 0-10.925782-2.089844-15.082032-6.25-8.34375-8.339844-8.34375-21.824219 0-30.164063l286.589844-286.59375c8.339844-8.339844 21.824219-8.339844 30.164063 0 8.34375 8.339844 8.34375 21.824219 0 30.164063l-286.589844 286.59375c-4.183594 4.179687-9.621094 6.25-15.082031 6.25zm0 0"></path><path d="m307.929688 329.398438c-5.460938 0-10.921876-2.089844-15.082032-6.25l-286.589844-286.59375c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339844-8.339844 21.820313-8.339844 30.164063 0l286.589844 286.59375c8.34375 8.339844 8.34375 21.824219 0 30.164063-4.160157 4.179687-9.621094 6.25-15.082031 6.25zm0 0"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="business-package-left-content">
                                Save with our business packages!
                                <a href="#" class="business-package-link">
                                    Learn More
                                </a>
                            </div>
                        </div>            
                

                    

                    <h1 class="flame-text flame-text--title4" data-is-nomer="1">
                        <div>Auto-fill your car details by</div>
                        <div>entering your VIN / Chassis number</div>
                    </h1>
                    <div class="flame-text flame-text--medium vin-help" onclick="showVinInfo()">
                        <span>What is a VIN / Chassis number? </span>
                        <!-- <img src="https://dbzstatic-a.akamaihd.net/dist_2508bae7b4/images/paa/info-circle.svg" class="vin-help-icon"> -->
                                <!-- Button trigger modal -->
                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none;background: none;">
                        <img src="layout/images/info-circle.svg" class="vin-help-icon">
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-body">
                                            <h1 class="flame-text flame-text--title4 text-space-12 honepopup">
                                            What is a VIN / Chassis number?
                                            </h1>
                                            <div class="flame-text flame-text--medium text-space-24 border-bottom">
                                            Your VIN / Chassis number is a unique character code used to identify individual motor vehicles.
                                            </div>
                                            <div class="flame-text flame-text--title4 text-space-24">
                                            Where can I find it?
                                            </div>
                                            <div class="flame-text flame-text--medium text-space-12">
                                            On your vehicle registration card (Mulkiya)
                                            </div>
                                            <img style="width: 315px;background-color: #FBC900;" src="layout/images/vin.png" class="vin-info-graphics">
                                            <div class="flame-text flame-text--medium text-space-12">
                                            On your vehicle's windshield.
                                            </div>
                                            <!-- <img style="width: 400px;" src="https://dbzstatic-a.akamaihd.net/dist_2508bae7b4/images/paa/vin-info-wind-shield.png" class="vin-info-graphics"> -->
                                        </div>

                                        <!-- end -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">                        
                                            close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img src="layout/images/vin.png" alt="" class="mulkiya-img-big imgchoce" style="background-color: #FBC900;">

                    <div class="linkflame">
                    <div class="row2"> 
                        <div class="flame-text--medium--strong" style="margin-bottom: 8px;">
                        <img src="layout/images/checkmark.svg" height="16px" width="16px" class="vin-benefit-icon">Place your ad faster with auto-fill
                        </div>
                        <div class="flame-text--medium--strong">
                        <img src="layout/images/checkmark.svg" height="16px" width="16px" class="vin-benefit-icon">Attract more buyers with a free CarReport badge
                        </div>
                    </div>
                    </div>
                    
                        <div class="paa-field__wrapper js-input-wrapper linkinputdiv" data-type="TextInput" data-required="True">
                        <div class="row2"> 
                            <input autocomplete="off" data-correct-vin="This number will not show on your ad" data-helper-text="Enter VIN / Chassis number" data-incorrect-vin="Incorrect VIN/Chassis number" data-nomer-jsrequired="True" id="id_chassis_vin" name="chassis_vin" placeholder="Enter VIN / Chassis number" type="text" class="forminput inputlinkchoce">
                        <div class="vin-status vin-status-message flame-text--small"><span class="msg" style="font-size: 15px;">This number will not show on your ad</span></div></div>    

                    </div>

                    <div class="btnchosediv">
                        <div class="row2">
                        <button id="enter-vehicle-details-submit" type="submit" class="forminput btnlinkchoce">
                            Auto-fill my car details
                        </button>                    
                        </div>
                    </div>

                    <div class="row1">
                        <p id="vin-skip" class="vin-skip-wrapper text-center" style="margin-top: 24px;">
                            <a class="flame-link color-denim skip-nomer" href="adcars.php">
                            No thanks, I'll do it manually
                            </a>
                        </p>
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