<?php


require __DIR__ . "/database.php";
$sql="SELECT * FROM employee";

$result=$mysqli->query($sql);




?>



<!DOCTYPE html>
<html>
<head>
<title>Employee Information</title>
<style>

.header {
  padding: 5px;
  text-align: center;
  background: aqua;
  color: white;
  font-size: 20px;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>

<div class="header">
  <h1> Employee Information</h1>
 
</div>

<table class="table table-dark">

<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Email</th>
<th>Duty</th>
<th>Add</th>
<th>Edit</th>
<th>Delete</th>
<th>Details</th>
</tr>

<tr>
<?php
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "
                <tr>
             <td>".$row['employee_id']."</td>
             <td>".$row['fname']."</td>
             <td>".$row['lname']."</td>
             <td>".$row['age']."</td>
             <td>".$row['email']."</td>
             <td>".$row['duty']."</td>
             
             <td><a href='add_employee.php' class='btn btn-success'>Add</a> </td>
             <td>
             <a href='edit-employee.php?employee_id=".$row['employee_id']."' class='btn btn-info'>Edit</a>
             </td>
             <td>
             <a href='delete_employee.php?employee_id=".$row['employee_id']."' class='btn btn-danger'>Delete</a>
             </td>
             <td>
             <a href='details_employee.php?employee_id=".$row['employee_id']."' class='btn btn-warning'>Details</a>
             </td>
            
                  ";

        }
    }

?>

</tr>


</table>

</body>
</html> 