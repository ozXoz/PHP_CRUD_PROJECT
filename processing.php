<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/database.php";

//Username //

if(isset($_POST['username']) && empty(trim($_POST['username']))){
    die("Please Enter Valid username");
}


// filtering of email . ///
if(! filter_var($_POST["email"],FILTER_SANITIZE_EMAIL)){
    die("invalid");
}



// For password // 

$password_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);


// Prepare statement //

$sql="INSERT INTO user (username, email, password_hash) VALUES (?, ?, ?)"; 
// we created a new prepared statement  object  by calling the statement init method //

$stmt = $mysqli->stmt_init();   

// Passing object as string //

$stmt->prepare($sql);
if(!$stmt){
    die("SQL Error :" . $msqli-> error);
}

// we call the bind param method on the statement . object //

$stmt->bind_param("sss",$_POST["username"],$_POST["email"], $password_hash);

// Execute //


$stmt->execute();
    header("Location: signup-succes.php");

//// Check if the user name already exists in database ???



