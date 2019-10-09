    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="col-md-4">
          <form action="" method="POST">
            <center><h3>BMI Counter</h3></center>
         <div class="form-group">
           <label for="email">Height</label>
           <input class="form-control" name="height" type="number">
         </div>
         <div class="form-group">
           <label for="username">Mass</label>
           <input class="form-control" name="mass"  type="number">
         </div>
         <div>
           <center><button class="btn btn-success"  type="submit" name="submit">SAVE</button></center><br>
         </div>
        </form>
        </div>  
        <?php
        if(isset($_POST['submit']))
        {
          $h=$_POST['height'];
          $m=$_POST['mass'];
         
            
            if($h!='')
            {
              $bmi1=($m/($h*$h))*10000;
              $bmi=(round($bmi1, 2));
            }
            if($bmi<18)
            {
              echo "Result:<input type='text' value='$bmi'/>";
            }
          elseif($bmi>=18.5 && $bmi<=25.5)
          {
            echo "Result:<input type='text' value='$bmi'/>";
          }
          else
          {
            echo "Result:<input type='text' value='$bmi'/>";
          }

        }
        ?>    