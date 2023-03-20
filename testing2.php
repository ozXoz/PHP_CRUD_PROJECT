<?php





?>

<style>





</style>
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
                
                <div>

                <button type="submit" name="edit" id="edit" class="btn btn-primary">Edit</button>
                </div>
            
                 
               
                <button type="submit"  class="btn btn-primary btn-block">Edit</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->