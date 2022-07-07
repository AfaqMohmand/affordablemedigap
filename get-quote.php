<!DOCTYPE html>
<html>
    <head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCNM3T2');</script>
<!-- End Google Tag Manager -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <link href="assets/img/favicon.png" rel="icon">
 <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #f1f1f1;
        margin: 100px auto;
        margin-top: 30px !important;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    #gender {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    .dateInput {
        padding: 10px;
        /*width: 100%;*/
        width: 30%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }



    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #94c045;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

    .picSection {
        margin-top: 120px !important;
    }

    .masthead {
        height: 1vh !important;
        min-height: 100px !important;
        /*background-image: url('img/finalquotefile.jpg') !important;*/
        background-color: #9BCC4E;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        margin-top: 70px !important;
    }

    .companiesImg {
        margin-top: 70px !important;
    }

    @media screen and (max-width:425px) {
        .mainHeadingTop {
            font-size: 15px !important;
        }

        .companiesImg {
            display: none !important;
        }

        .masthead {
            height: 2vh !important;
            min-height: 150px !important;
            background-image: url('img/final2header.png') !important;

            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            margin-top: 80px !important;
        }
    }
    @media screen and (max-width:768px){
        .disclaimerCheck{
            padding:20px !important;
             width: 400px;
            
        }
        .disclaimerDescription{
            margin-left:10px !important;
        }
        
        
    }

</style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCNM3T2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include "base-file.php"; 

    if (isset($_POST['step2'])) {
        $zip_code = $_POST['zip_code'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
    }
    ?>
    <div class="completeSection">
        <!--Header-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center text-white">
                        <h1 class="fw-bold mainHeadingTop d-none d-xs-block d-sm-block d-md-block d-lg-block d-xl-block"
                            style="font-size:25px; font-family:'Open Sans', sans-serif;">Compare Medicare Supplement
                            Plans Instantly from Over
                            20+ Top Rated Companies!</h1>
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 companiesImg">
                <img src="img/company_chart.jpg" alt="" class="img-fluid">
                <h3 class="text-center">You Can Call <a style="text-decoration:none; color:#94c045;"
                        href="tel:+17864607667">(786) 460 7667</a> for FREE Expert Help and Compare Plans</h3>
            </div>
            <div class="col-md-7">
                <form id="regForm" action="quote-requested.php" method="POST">
                    <input type="hidden" name="zip_code" value="<?php echo $zip_code; ?>">
                    <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                    <input type="hidden" name="lname" value="<?php echo $lname; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                    <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                    <input type="hidden" name="day" value="<?php echo $day; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="year" value="<?php echo $year; ?>">
                    <h2 style="color:#94c045;">Get Instant Quote</h2>
                    <div class="d-flex justify-content-start align-items-start">
                        <input style="margin-top:05px;" class="disclaimerCheck" type="checkbox" id="leadid_tcpa_disclosure" required/><label for="leadid_tcpa_disclosure" class="disclaimerDescription"> By checking this box and submitting this form, I agree to the Terms and Conditions and Privacy Policy of affordablemedigap.com, their agents and <a href="https://affordablemedigap.com/marketing-partners.html">MarketingPartners</a> to contact me about Medicare insurance as per health insurance, including but not limited to Medicare Advantage, Medicare Supplement, and Prescription Drug plans. In addition, other non-insurance offers can also contact me by telephone calls and text messages to the number I provided above. I agree to receive telemarketing calls and pre-recorded messages via an auto dialed phone system, even if my telephone number is a mobile number that is currently listed on any state, federal or corporate Do Not Call list. I understand that my consent is not a condition of purchase of any goods or services and that I may revoke my consent at any time. I understand that standard message and data rates may apply.</label>
                    </div>
                    <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <input type="submit" class="btn btn-success" style="background-color:#94c045; border:none;" value="Get Instant Quote" name="submit">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script id="LeadiDscript" type="text/javascript">
        (function () {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/788e358e-2255-935c-d464-480e4e93a5eb.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img
            src='//create.leadid.com/noscript.gif?lac=c5c08682-5142-b211-d44b-3a67d7f058bd&lck=788e358e-2255-935c-d464-480e4e93a5eb&snippet_version=2' /></noscript>

    <?php include "includes/new-footer.php"; ?>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>