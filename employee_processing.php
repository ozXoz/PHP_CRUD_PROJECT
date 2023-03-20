<?php


require __DIR__ . "/database.php";




if($_SERVER["REQUEST_METHOD"]=== "POST"){

$f_name=$_POST["firstname"];
$l_name=$_POST["lastname"];
$_age=$_POST["age"];
$_email=$_POST['email'];
$_duty=$_POST["duty"];
$sql="INSERT INTO employee (fname, lname, age, email,duty) VALUES('$f_name','$l_name','$_age','$_email','$_duty')";
$result= mysqli_query($conn,$sql);

if($result){
    header("Location: main.php");
}

}