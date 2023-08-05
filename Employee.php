
<?php
include 'config.php';
if (isset($_REQUEST["submit"])) {
    $e_id= $_REQUEST["e_id"];
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $gender = $_REQUEST["gender"];
$age = $_REQUEST["age"];
$ad = $_REQUEST["ad"];
$e_email = $_REQUEST["e_email"];
$e_pass = $_REQUEST["e_pass"];

    $ins = "INSERT INTO Employee (employee_id,fname, lname,gender,age,contact_add,emp_email,emp_pass) VALUES ('$e_id','$fname','$lname','$gender','$age','$ad','$e_email','$e_pass')";
    $query1 = mysqli_query($connection, $ins);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
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
 
    
    
    <div class="form-group  ">
      <label for="inputEmail4">Employee ID</label>
      <input type="text" name="e_id" class="form-control" id="inputPassword3" placeholder="Emp ID">
    </div>
    <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">First Name</label>
      <input type="text" name="fname" class="form-control" id="inputPassword4" placeholder="First name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Last Name</label>
      <input type="text" name="lname" class="form-control" id="id" placeholder="Last name">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress ">Gender</label>
    <input type="text" name="gender" class="form-control" id="inputAddress7" >
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Age</label>
    <input type="text" name="age" class="form-control" id="inputAddress6" >
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Contact address</label>
    <input type="text" name="ad" class="form-control" id="inputAddress5" >
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress ">Employee Email</label>
    <input type="text" name="e_email" class="form-control" id="inputAddress1" >
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Employee Password</label>
    <input type="text" name="e_pass" class="form-control" id="inputAddress3" >
  </div>
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