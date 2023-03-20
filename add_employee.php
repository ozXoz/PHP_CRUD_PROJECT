<?php

require __DIR__ . "/database.php";
$msg="";
if($_SERVER["REQUEST_METHOD"]=== "POST"){

$f_name=$_POST["firstname"];
$l_name=$_POST["lastname"];
$_age=$_POST["age"];
$_email=$_POST["email"];
$_duty=$_POST["duty"];


if(!empty($_POST["firstname"])){
  $fname=$_POST["firstname"];
  $msg="<span class='success'>Success</span";

  
  

// FOR  "$_POST[]" inserting database . ALL POST name is from form name // 




$sql="INSERT INTO employee (fname, lname, age, email,duty,salary,phone) VALUES('$f_name','$l_name','$_age','$_email','$_duty','?','?')";
$result= mysqli_query($conn,$sql);

    if($result){
        header("Location: main.php");
    }
    
}else{
  $msg="<span class='fail'>Fail</span";

}

}









?>


<!DOCTYPE html>
<html>
<head>
<title>Add Information</title>
<style>

.btn{
  max-width: 60px;

}
 


.d-flex-col{
display:flex;
flex-direction:column;
gap:2px;
}
  .success{
    color:green;
  }
  .fail{
    color: red;
    
  }
.d-flex{
    width:100%;
    max-width:500;
    display:flex;
    flex-direction: row;
    align-items:center;
    justify-items:left;
    gap:3px;
}
.d-flex > input, .d-flex > span{
    width:100%;
    max-width:200px;
}
    </style>
</head>
<body>



<h1>Add Employee </h1>

<form method="POST">
    
<div class="d-flex-col">
<div class="d-flex">
<label for="firstname">First Name</label>

  <input type="text" name="firstname" id="firstname"/><?='<span>'.$msg.'</span>';?>
</div>


<div class="d-flex-col">
<div class="d-flex">
<label for="firstname">Last Name</label>

  <input type="text" name="lastname"  id="lastname">
</div>

<div>
<label for="age">Age</label>
<input type="text" name="age" id="age">
</div>

<div>
<label for="email">Email</label>
<input type="text" name="email" id="email">
</div>

<div>
<label for="duty">duty</label>
<input type="text" name="duty" id="duty">
</div>


<button type="submit" name="submit" class="btn btn-primary">Submit</button>

</div>

</form>
</body>
</html> 
