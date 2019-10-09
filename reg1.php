<! doctype html>
 <html> 
   <head>
   	
   	  <title>Registration page</title>
   </head>
   <body>
       <div class="col-lg-5 col-lg-offset-2">
       	<form action="reg1.php" method="POST">
            <h1>Register here!</h1>
          <div class="form-group">
           <label for="name">full name</label>
           <input class="form-control" name="full_name" id="name" type="text">
         </div>
         <div class="form-group">
           <label for="email">Email</label>
           <input class="form-control" name="email" id="email" type="text">
         </div>
         <div class="form-group">
           <label for="username">Username</label>
           <input class="form-control" name="username"  type="text">
         </div>
         <div class="form-group">
           <label for="password">Password</label>
           <input class="form-control" name="password" id="password" type="password">
         </div>
         <div class="form-group">
           <label for="password">Confirm password</label>
           <input class="form-control" name="password2" id="password" type="password">
         </div>
         <div class="form-group">
           <label for="usertype">Usertype</label>
           <select class="form-control "id="usertype" name="usertype" type="text">
             <option value="admin">Admin</option>
             <option value="trainer">Trainer</option>
             <option value="client">Client</option>
           </select>
         </div>
         <div class="form-group">
           <label for="phone">Phone</label>
           <input class="form-control" name="phone" id="phone" type="text">
         </div>
         <div>
           <button class="btn btn-primary" name="register">Register</button>
         </div>
   	</form>
   </div>
   </body>
 </html>

 <?php 
   require_once('connection.php');
   $fullname = $email = $username = $password = $usertype = $phone = '';

   $fullname=$_POST['fullname'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   //$password= MD5($pwd);
   $usertype=$_POST['usertype'];
   $phone=$_POST['phone'];

   $query="INSERT INTO `credentials`(`fullname`, `email`, `username`, `password`, `usertype`, `phone`)
                  VALUES('$fullname', '$email', '$username', '$password', '$usertype', '$phone')";
    if (!$query)
    {
      echo "success";
    }
?>
