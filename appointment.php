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
<meta name="facebook-domain-verification" content="k8d5h5amo47lh7i8rrtqyp7ymjaglc" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="assets/img/favicon.png" rel="icon">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
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
  margin-top:30px !important;
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
  width:30%;
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
.picSection{
    margin-top:120px !important;
}
.masthead {
            height: 1vh !important;
            min-height: 100px !important;
            /*background-image: url('img/finalquotefile.jpg') !important;*/
            background-color:#9BCC4E;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            margin-top:70px !important;
        }
        .companiesImg{
            margin-top:70px !important;
        }
    @media screen and (max-width:425px){
        .mainHeadingTop{
            font-size:15px !important;
        }
        .companiesImg{
            display:none !important;
        }
        .masthead{
            height: 2vh !important;
            min-height: 150px !important;
            background-image: url('img/final2header.png') !important;
            
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            margin-top:80px !important;
        }
    }
</style>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCNM3T2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "base-file.php"; 

if (isset($_POST['submit'])) {

    $_SESSION['zip'] = $_POST['zip'];
    $zip_code = $_SESSION['zip'];
}

?>
<div class="completeSection">
    <!--Header-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="fw-bold mainHeadingTop d-none d-xs-block d-sm-block d-md-block d-lg-block d-xl-block" style="font-size:25px; font-family:'Open Sans', sans-serif;">Compare Medicare Supplement Plans Instantly from Over
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
<form id="regForm" action="step2.php" method="POST">
  <h2 style="color:#94c045;">Get Instant Quote</h2>
  <!-- One "tab" for each step in the form: -->
  <!-- <div class="tab"> -->
    <p>Zip Code:<input placeholder="Zip Code" value="<?php echo $zip_code; ?>" name="zip_code" required></p>
    <div class="row">
    <div class="col-md-6"><p>First Name:<input type="text" placeholder="First Name..." name="fname" maxlength="15" required onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" /></p></div>
    <div class="col-md-6"><p>Last Name:<input type="text" placeholder="Last Name..." name="lname" maxlength="15" required onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"/></p></div>
    </div>
    <p>E-mail Address:<input type="email" placeholder="E-mail..." name="email" required></p>
  <!-- </div> -->

  <div style="overflow:auto;">
    <div style="float:right;">
      <input class="btn btn-success" style="background-color:#94c045; border:none;" type="submit" value="Next" name="step1">
      <!-- <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> -->
    </div>
  </div>

</form>
</div>
</div>
</div>



<?php include "includes/new-footer.php"; ?>


<script src="https://kit.fontawesome.com/a38fde4003.js" crossorigin="anonymous"></script>

</body>
</html>
