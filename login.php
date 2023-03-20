<?php

/// If the form submitted // request database file .. //

if($_SERVER["REQUEST_METHOD"]=== "POST"){

    $mysqli = require __DIR__ . "/database.php";
    // make sure  we avoid  an  sql injection  attack we need to escape the value 
    
    
    // we are using real escape_string for specialcrahacters

    $sql= sprintf("SELECT * FROM user WHERE username='%s'", $conn->real_escape_string($_POST["username"]));

    $result=$conn->query($sql);
    $user=$result->fetch_assoc();
    /// Check password and username // 
    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            header("Location: main.php");
        }else{
            die("Invalid username or password");
        }
    }


}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>

<body>

    <h1>Login Page </h1>

    <form method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>


        <div>
            <button type="submit" class="btn btn-primary">Login</button>

        </div>
    </form>

</body>

</html>