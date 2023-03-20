<?php

$fname="";
$lname="";
$msg="";

if($_SERVER["REQUEST_METHOD"]=== "POST"){
if(!empty($_POST["firstname"])){
  $fname=$_POST["firstname"];
  $msg="<span class='success'>Success</span";
}
else{
  if(!empty($_POST["lastname"])){
    $lname=$_POST["lastname"];
    $msg="<span class='success'>Success</span";
}else{
  $msg="<span class='fail'>Fail</span";

}
}

$msg="<span class='fail'>Fail</span";


?>


<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
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
    
<div>


<div class="d-flex-col">
<div class="d-flex">
<label for="firstname">First Name</label>

  <input type="text" name="firstname" id="firstname"/><?='<span>'.$msg.'</span>';?>
</div>




<div class="d-flex-col">
<div class="d-flex">
<label for="firstname">Last Name</label>

  <input type="text" name="lastname " id="lastname"/><?='<span>'.$msg.'</span>';?>
</div>

</div>


<div><button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>


</form>
</body>
</html> 
