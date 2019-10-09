<?php 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registration page</title>
  </head>
  <body>
  	
       <div class="col-lg-5 col-lg-offset-2">
            <h1>Login</h1>
               <p>Feed your credentials..</p>
        <form action="log.php" method="POST">
         <div class="form-group">
           <label for="username">Username</label>
           <input class="form-control" name="username"  type="text">
         </div>
         <div class="form-group">
           <label for="password">Password</label>
           <input class="form-control" name="password" id="password" type="password">
         </div>
         <div>
           <button class="btn btn-primary" name="login">Login</button>
         </div>
        </form>
       </div>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url(); ?> assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!--logic begins here-->
<?php 
  //start session
  session_start();
  //call the connection
   require_once('connection.php');
   //$fullname=$email=$username=$pwd=$password=$usertype=$phone='';
 if (isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from credentials where username='$username'";

$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
if($row['usertype']=='admin')
{
$_SESSION["username"]=$username;
header("Location:admin.php");
}
elseif($row['usertype']=='trainer'){
$_SESSION["username"]=$username;
header("Location:pics.php");
}
    elseif($row['usertype']=='client'){
$_SESSION["username"]=$username;
header("Location:client_profile.php");
}
}
}
?>
