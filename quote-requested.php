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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
  background-color: #04AA6D;
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
    margin-top:80px !important;
}
.companyImg{
    height:400px !important;
    width:100% !important;
}
@media screen and (max-width:768px){
    .picSection{
        display:none !important;
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
    include "db.php";
    if ($_POST['zip_code']){
        $zip_code = $_POST['zip_code'];
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $email_address = $_POST['email'];
        $phone_number = $_POST['phone'];
        $gender = $_POST['gender'];
        $dobDay = $_POST['day'];
        $dobmonth = $_POST['month'];
        $dobyear = $_POST['year'];
        $dob = $dobmonth."/".$dobDay."/".$dobyear;
        $leadiD = $_POST['universal_leadid'];
        // echo "'$zip_code', '$dobyear'";
        $sql = "INSERT INTO get_quote(zip_code, f_name, l_name, email_address, phone_number, gender, dob, leadiD) VALUES('$zip_code', '$f_name', '$l_name', '$email_address', '$phone_number', '$gender', '$dob', '$leadiD')";
        if (mysqli_query($conn, $sql)){
            echo "";
        }
        else {
            echo "<script>alert('Data Not Submitted!!!!');</script>";
        }
    }


?>
<div class="completeSection">
<div class="row">
    <div class="col-md-2 picSection">
    </div>
    <div class="col-md-8">
<form id="regForm" action="/quote-requested.php" method="POST">
    <h1><i style="color:#94c045;" class="fa-solid fa-2x fa-circle-check"></i></h1>
  <h1>Thanks For Your Submission</h1>
  <p class="text-center">Our Licensed Agent Will Get Back To You As Soon As Possible</p>
  <p class="text-center">Go Back To <a href="index.php" style="text-decoration:none;">Homepage</a></p>
  <!-- <p class="text-center">You Can Also Direct Call To Licensed Agent <a href="tel:+17864607667">(786) 460 7667</a></p> -->

  
 
  
  <!-- Circles which indicates the steps of the form: -->
  <!-- <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div> -->
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>

</script>
<script src="https://kit.fontawesome.com/a38fde4003.js" crossorigin="anonymous"></script>
</body>
</html>
