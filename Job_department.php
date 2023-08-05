<?php
include 'config.php';
if (isset($_REQUEST["submit"])) {
    $job_id= $_REQUEST["job_id"];
    $job_dept= $_REQUEST["job_dept"];
    $name = $_REQUEST["name"];

    $desc = $_REQUEST["desc"];
    $salary_range= $_REQUEST["salary_range"];

    $ins = "INSERT INTO Job_department (job_ID, job_dept, name, description, salary_range) VALUES ('$job_id','$job_dept','$name','$desc','$salary_range')";
    $query1 = mysqli_query($connection, $ins);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Department</title>
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
    <!-- Bootstrap form start here -->
<form class="jan" >
 
    
    
    <div class="form-group ">
      <label for="inputEmail4">Job ID</label>
      <input type="text" name="job_id" class="form-control" id="id" placeholder="Job ID">
    </div>
    <div class="form-group ">
      <label for="inputEmail4">Job Department</label>
      <input type="text" name="job_dept" class="form-control" id="dept" placeholder="department" >
    </div>
 
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Description</label>
    <input type="text" name="desc" class="form-control" id="inputAddress2" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Salary Range</label>
    <input type="text" name="salary_range" class="form-control" id="inputAddress2" placeholder="Salary Range">
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