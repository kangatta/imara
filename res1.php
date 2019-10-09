
<?php
  session_start(); 
?>
<?php
         $bmi=" ";
         $h=" ";
         $m=" ";
      
      if(isset($_POST['submit']))
        {
          $h=$_POST['height'];
          $m=$_POST['mass'];
         
            //calculator
            if($h!='')
            {
              $bmi1=($m/($h*$h))*10000;
              $bmi=(round($bmi1, 2));
              echo "$bmi";
            }
          }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>
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
        //include ('sesh.php');
       include ('head.php');
        ?>
        <!--left half-->
    	<div class="row">

    		<div class="col-md-4" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:100%; margin-left:100px; box-shadow: 10px 10px 8px #888888; background-color: white;">
          <form action="" method="POST"> 
            <center><h3>BMI Counter</h3></center>
          <div class="form-group">
           <label for="name">Age</label>
           <input class="form-control" name="age"  type="text">
         </div>
         <div class="form-group">
           <label for="email">Height(cm)</label>
           <input class="form-control" name="height" type="text" value="<?php echo ($h);?>">
         </div>
         <div class="form-group">
           <label for="username">Mass(kg)</label>
           <input class="form-control" name="mass"  type="text" value="<?php echo ($m);?>">
         </div>
         <div class="form-group">
          <center><h2>BMI Results</h2></center>
           <div class="form-group">
           <label for="name">BMI Score</label>
           <input class="form-control" name="age"  value='$bmi'>
         </div>
         <div class="form-group">
           <label for="email">Bmi status</label>
           <input class="form-control" name="height" type="text">
         </div>
         <div class="form-group">
           <label for="username">Recommended package</label>
           <input class="form-control" name="mass"  type="text">
         </div>
         <div class="form-group">
           <label for="username">Calories needed</label>
           <input class="form-control" name="mass"  type="text">
         </div>
         <?php
         $bmi="";
         $h="";
         $m="";

        if(isset($_POST['submit']))
        {
          $h=$_POST['height'];
          $m=$_POST['mass'];
         
            //calculator
            if($h!='')
            {
              $bmi1=($m/($h*$h))*10000;
              $bmi=(round($bmi1, 2));
            }
            if ($bmi<2)
            {
              
              echo "Status:<br>
              <input class='form-control' type='text' value=' '/> <br>";
              echo "Recommended package:<br>
              <input class='form-control' type='text' value=' '/>";

            }
            elseif($bmi<18)
            {
              echo "BMI score:<br>
              <input class='form-control' type='text' value='$bmi'/> <br>";
              echo "Status:<br>
              <input class='form-control' type='text' value='You are underweight'/><br><br>";
              echo "Recommended package:<br>
              <input class='form-control' type='text' value='*Currently not available*'/><br><br>";
              echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='You are underweight'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='*Currently not available*'/>";

            }
          elseif($bmi>=18.5 && $bmi<=25.5)
          {
            echo "BMI score:<br>
            <input type='text' class='form-control' value='$bmi'/> <br>";
            echo "Status:<br>
            <input type='text' value='You are healthy'/> <br><br>";
            echo "Recommended package:<br>
            <input type='text' value='Fitness Package'/><br><br>";
            echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='6 Weeks'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='2500 Calories'/>";
          }
          else
          {
            echo "BMI score:<br>
            <input type='text' value='$bmi'/> <br>";
            echo "Status:<br>
            <input type='text' value='You are overweight'/> <br><br>";
            echo "Recommended package:<br>
            <input type='text' value='Weight-loss Package'/><br><br>";
            echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='6 Weeks'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='2000 Calories'/>";

          }
        }
        ?>
         </div> <br>
        <div>
          <br>
           <center><button class="btn btn-primary"  type="submit" name="submit" >View Package</button></center><br>
         </div>
        </form>
        </div>  
            
    	</div><br>
    </body>
</html>