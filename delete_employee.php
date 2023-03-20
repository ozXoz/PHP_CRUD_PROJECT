<?php


require __DIR__. "/database.php";

if(isset($_GET['employee_id'])){
    $emloyee_id=$_GET['employee_id'];
    $sql="DELETE FROM employee where employee_id='$emloyee_id' ";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location: main.php");
    }

}