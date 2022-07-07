<?php 
    session_start();
    if ($_SESSION['loggedIn'] === 'true'){
        $uname = $_SESSION['name'];?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Affordable Medigap</title>
  <style>
    .table {
      overflow-x: scroll;
    }
  </style>
</head>

<body>


  <!-- Bootstrap Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Affordable Medigap</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="filter-results.php">Filter Leads</a>
          </li>
          <!-- <li class="nav-item">
            <h3>Welcome, [
              <?php echo $user_name;?>]
            </h3>
          </li> -->
          
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <!-- Leads -->
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-10">
        
        <table class="table shadow bg-white mt-2">
          <thead>
            <tr>
              <!-- <th>Firstname</th>
                                    <th>Lastname</th> -->
              <th>Date</th>
              <th>Time</th>
              <th>Zip Code</th>
              <th>Email</th>
              <th>Number</th>
              

              <th>Gender</th>

              <th>DOB</th>
              
              <th>Lead iD</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <?php 
    include "db.php";
    $sql = "SELECT * FROM get_quote";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
    ?>
            <tr>
                <td>
                <?php
                    $original_date = $row['dateAdded'];
                    $timestamp = strtotime($original_date);
                    $new_date = date("d-m-Y", $timestamp);
                    echo $new_date; 
                
                ?>
              </td>
              <td>
                <?php echo $row['timeAdded']; ?>
              </td>

              <td>
                <?php echo $row['zip_code']; ?>
              </td>
              <td>
                <?php echo $row['email_address']; ?>
              </td>
              <td>
                <?php echo $row['phone_number']; ?>
              </td>

              <td>
                <?php echo $row['gender']; ?>
              </td>

              <td>
                <?php echo $row['dob']; ?>
              </td>
              <td>
                <?php echo $row['leadiD']; ?>
              </td>
              
              <td class="text-danger">
                Delete
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-1"></div>

      <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
          <!-- <button class="btn btn-primary">Export</button> -->
          <a class="btn btn-primary" href="export-data.php"> Export </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Leads -->
  <?php 
    }
    else {
        header("location:login.php");
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>