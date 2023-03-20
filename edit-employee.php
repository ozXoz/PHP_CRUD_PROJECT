<?php
require __DIR__. "/database.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Takes information from main.php array inside comes from database. //
$_employee_id=$_GET['employee_id'];
$result=mysqli_query($conn,"SELECT * FROM employee WHERE employee_id=$_employee_id");
while($res=mysqli_fetch_array($result)){
// resin icindekiler gelenler dabaseden gelenler.
    $_fname=$res['fname'];
    $_lname=$res['lname'];
    $_age=$res['age'];
    $_email=$res['email'];
    $_duty=$res['duty'];

}


?>

<?php
// POSTUN ICINDEN GELENLER FROM forum name attribus //
if(isset($_POST['edit'])){
    $_fname=$_POST['firstname'];
    $_lname=$_POST['lastname'];
    $_age=$_POST['age'];
    $_email=$_POST['email'];
    $_duty=$_POST['duty'];

    $result=mysqli_query($conn,"UPDATE employee SET fname='$_fname',lname='$_lname',age='$_age',duty='$_duty' WHERE employee_id='$_employee_id' ");

    if($result){
        header("Location: main.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

.header {
  padding: 5px;
  text-align: center;
  background: aqua;
  color: white;
  font-size: 20px;
}


</style>
</head>
<body>
<div class="header">
  <h1>Edit Employee Information</h1>
 
</div>

        

<form method="POST">

 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form">
                <h2>Edit Employee Information</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus value="<?php echo $_fname;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus value="<?php echo $_lname;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">Age </label>
                    <div class="col-sm-9">
                        <input type="text" id="age" placeholder="Age" class="form-control" name= "age" value="<?php echo $_age;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" value="<?php echo $_email;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="duty" class="col-sm-3 control-label">Duty</label>
                    <div class="col-sm-9">
                        <input type="text" id="duty" placeholder="Duty" class="form-control" value="<?php echo $_duty;?>">
                    </div>
                </div>
                
                
            
                 
                <button type="submit" name="edit"  class="btn btn-primary btn-block">Edit</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->










</form>


