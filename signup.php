<?php

require __DIR__. "/database.php";

if(empty($_POST['firstname'])){
    echo " invalid";
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>

<body>

    <h1>Sign Up </h1>
    

    <form action="processing.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>


        <div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>

</body>

</html>