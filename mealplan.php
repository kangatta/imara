
<?php
  session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registration page</title>
    <style>
              body{
    background-image: url(slim.jpg);
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    font-color: white;
}
    </style>
  </head>
    <body style="background-image: url(slim.jpg); background-image: cover; background:no repeat;">
        <?php 
        include ('sesh.php');
        include ('head.php');
        ?>
        <!--left half-->
    	<div class="row">
    		<div class="col-md-3" style="border:.0px solid; border-radius:5px;  margin-left: 100px; margin-top:50px;height:100%; width: 100%; box-shadow: 10px 10px 8px #888888; background-color: white;">
                    <form action="reg1.php" method="POST">
            <center><h3>Workout days</h3></center>
         <div class="row">
           <div class="col-md-4" style="margin-left: 20px;">
           <div class="form-group" >
           <label for="name" width="50px">Monday</label><br>
           <input  name="full_name" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="email" width="50px">Tuesday</label><br>
           <input  name="email" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="username" width="50px">Wednesday</label><br>
           <input style="zoom: 1.5;"  name="username"  type="checkbox">
         </div>
           </div>
           <div class="col-md-4" style="margin-left: 20px;">
          <div class="form-group">
           <label for="password">Thursday</label><br>
           <input  name="password" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="password">Friday</label><br>
           <input  name="password2" style="zoom: 1.5;" type="checkbox">
         </div>
          <div class="form-group">
           <label for="phone">Saturday</label><br>
           <input  name="phone" style="zoom: 1.5;" type="checkbox">
         </div>
           </div>
         </div>

         <div class="form-group">
           <label for="usertype">Workout interval</label>
           <select class="form-control "id="usertype" name="usertype" type="text">
             <option value="weekdays">Weekdays</option>
             <option value="weekends">Weekends</option>
             <option value="custom1">Monday-Wednesday</option>
             <option value="custom2">Wednesday-Saturday</option>
           </select>
         </div>
         <div>
           <center><button class="btn btn-primary" name="register">Save</button></center><br>
         </div>
    </form>      
            </div>

             <!--right half-->
            
    		<div class="col-md-3" style="border:.0px solid; border-radius:5px; margin-top: 10px; height:100%; margin-left:100px; box-shadow: 10px 10px 8px #888888; background-color: white;">
                    <form action="reg1.php" method="POST">
            <center><h3>BMI Counter</h3></center>
          <div class="form-group">
           <label for="name">Age</label>
           <input class="form-control" name="full_name" id="name" type="text">
         </div>
         <div class="form-group">
           <label for="email">Height</label>
           <input class="form-control" name="email" id="email" type="text">
         </div>
         <div class="form-group">
           <label for="username">Mass</label>
           <input class="form-control" name="username"  type="text">
         </div>
         <div class="form-group">
           <label for="password">BMI status</label>
           <input class="form-control" name="password" id="password" type="password">
         </div>
         <div class="form-group">
           <label for="password">Recommended package</label>
           <input class="form-control" name="password2" id="password" type="password">
         </div>
         <div>
           <center><button class="btn btn-primary" name="save">SAVE</button></center><br>
         </div>
    </form>      
            </div>
                    <div class="col-md-3" style="border:.0px solid; border-radius:5px;  margin-left: 100px; margin-top:50px;height:100%; width: 100%; box-shadow: 10px 10px 8px #888888; background-color: white;">
                    <form action="reg1.php" method="POST">
            <center><h3>Workout days</h3></center>
         <div class="row">
           <div class="col-md-4" style="margin-left: 20px;">
           <div class="form-group" >
           <label for="name" width="50px">Monday</label><br>
           <input  name="full_name" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="email" width="50px">Tuesday</label><br>
           <input  name="email" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="username" width="50px">Wednesday</label><br>
           <input style="zoom: 1.5;"  name="username"  type="checkbox">
         </div>
           </div>
           <div class="col-md-4" style="margin-left: 20px;">
          <div class="form-group">
           <label for="password">Thursday</label><br>
           <input  name="password" style="zoom: 1.5;" type="checkbox">
         </div>
         <div class="form-group">
           <label for="password">Friday</label><br>
           <input  name="password2" style="zoom: 1.5;" type="checkbox">
         </div>
          <div class="form-group">
           <label for="phone">Saturday</label><br>
           <input  name="phone" style="zoom: 1.5;" type="checkbox">
         </div>
           </div>
         </div>

         <div class="form-group">
           <label for="usertype">Workout interval</label>
           <select class="form-control "id="usertype" name="usertype" type="text">
             <option value="weekdays">Weekdays</option>
             <option value="weekends">Weekends</option>
             <option value="custom1">Monday-Wednesday</option>
             <option value="custom2">Wednesday-Saturday</option>
           </select>
         </div>
         <div>
           <center><button class="btn btn-primary" name="register">Save</button></center><br>
         </div>
    </form>      
            </div>

    	</div><br>
    </body>
</html>