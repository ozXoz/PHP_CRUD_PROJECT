<?php
require __DIR__. "/database.php";

$_employee_id=$_GET['employee_id'];
$result=mysqli_query($conn,"SELECT * FROM employee WHERE employee_id=$_employee_id");
while($res=mysqli_fetch_array($result)){
// resin icindekiler gelenler dabaseden gelenler.
    $_fname=$res['fname'];
    $_lname=$res['lname'];
    $_age=$res['age'];
    $_email=$res['email'];
    $_duty=$res['duty'];
    $_salary=$res['salary'];
    $_phone=$res['phone'];

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>



div.a {
  text-align: center;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 150%;
}



</style>
</head>
<body>




<div class="a">

<p>First Name : <?php echo $_fname;?></p>
<p>Last Name : <?php echo $_lname;?></p>
<p> Age : <?php echo $_age;?></p>
<p>Email : <?php echo $_email;?></p>
<p>Duty : <?php echo $_duty;?></p>
<p>Salary: <?php echo $_salary;?></p>
<p>Phone: <?php echo $_phone;?></p>

</div>






</body>
</html> 