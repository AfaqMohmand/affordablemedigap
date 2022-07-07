<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MCNM3T2');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="assets/img/favicon.png" rel="icon">

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
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCNM3T2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <?php include "base-file.php"; 

if (isset($_POST['submit'])) {

    $_SESSION['zip'] = $_POST['zip'];
    $zip_code = $_SESSION['zip'];
}

?> -->

    <?php include "base-file.php"; 

if (isset($_POST['step1'])) {
    $zip_code = $_POST['zip_code'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
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
                <h3 class="text-center">You Can get Instant Quote & FREE Expert Help and Compare Plans</h3>
            </div>
            <div class="col-md-7">
                <form id="regForm" action="get-quote.php" method="POST" name="form1">
                    <h2 style="color:#94c045;">Get Instant Quote</h2>
                    <input type="hidden" name="zip_code" value="<?php echo $zip_code; ?>">
                    <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                    <input type="hidden" name="lname" value="<?php echo $lname; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <!-- One "tab" for each step in the form: -->
                    <!-- <div class="tab"> -->
                    <!--<input type="text" placeholder="Phone Number..." name="phone" minlength="5" maxlength="10" required />-->
                    <p>Phone Number * (Only Digits):<input type="tel" id="phone" name="phone" pattern="[0-9]{10}"
                            maxlength="10" required>
                    </p>
                    <p>Gender:
                        <select name="gender" id="gender" required>
                            <option value="">Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </p>
                    <!--<p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>-->
                    <label class="mt-2">Date Of Birth </label>
                    <p>
                        <select name="month" class="form-group" style="width:33%;" aria-label="Default select example" required>
                            <option value="" selected>Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">Octobar</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="day" class="form-group" style="" aria-label="Default select example" required>
                            <option value="" selected>Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="year" class="form-group" style="" aria-label="Default select example" required>
                            <option value="" selected>Year</option>
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

                        </select>
                    </p>


                    <!-- </div> -->

                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <input type="submit" class="btn btn-success" style="background-color:#94c045; border:none;"
                                name="step2" value="Next" />
                            <!-- <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> -->
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include "includes/new-footer.php"; ?>

    <script>
        $(function () {
            $("input[name='phone']").on('input', function (e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });

// 	function stringlength(inputtxt, minlength, maxlength)
//     { 
//         var field = inputtxt.value; 
//         var mnlen = minlength;
//         var mxlen = maxlength;

//         if(field.length<mnlen || field.length> mxlen)
//         { 
//             alert("Please input the Phone Number between " +mnlen+ " and " +mxlen+ " characters");
//             return false;
//         }
//         else
//         { 
//             alert('Your userid have accepted.');
//             return true;
//         }
//     }

    </script>

</body>

</html>