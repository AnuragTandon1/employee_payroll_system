<?php
include 'config.php';
if (isset($_REQUEST["submit"])) {
    $salary_id= $_REQUEST["salary_id"];
    $job_id= $_REQUEST["job_id"];
    $amount = $_REQUEST["amount"];

    $bonus = $_REQUEST["bonus"];
    $annual= $_REQUEST["annual"];

    $ins = "INSERT INTO Bonus (salary_ID, job_ID,amount, bonus,annual) VALUES ('$salary_id','$job_id','$amount','$bonus','$annual')";
    $query1 = mysqli_query($connection, $ins);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  

   <!-- we have used the bootstrap navbar here -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.html"><img src="https://www.shutterstock.com/image-photo/payroll-concept-260nw-510859972.jpg" width="100px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Employee Payroll<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Employee.php">Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="job_department.php">Job Departmet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Leave.php">Leave</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payroll.php">Payroll</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Salary_bonous.php">Salary Bonous</a>
      </li>
    </ul>
  </div>
</nav>
    <!-- we have end the bootstrap navbar here -->
    <form class="jan" >
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">Salary ID</label>
      <input type="text" name="salary_id" class="form-control" id="inputPassword4" placeholder="Salary ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Job ID</label>
      <input type="text" name="job_id" class="form-control" id="id" placeholder="Job ID">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Amount</label>
    <input type="text" name="amount" class="form-control" id="inputAddress" placeholder="Amount">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Bonus</label>
    <input type="text" name="bonus" class="form-control" id="inputAddress2" placeholder="Bonus">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Annual</label>
    <input type="text" name="annual" class="form-control" id="inputAddress2" placeholder="Annual">
  </div>
  
  
  
  <div class="form-group">
    
    <input type="submit"  value="submit" name="submit" class="form-control" id="inputAddress2" placeholder="Submit">
  </div>
</form>  
<!-- Bootstrap form ends here -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>