
<?php
  session_start(); 
  include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Meals</title>
    <style>
    body{
    background-image: url(slim.jpg);
    height: 1000px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    font-color: white;
}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
    </style>
  </head>
    <body>
        <?php 
        //include ('sesh.php');
       include ('head.php');
       
        ?>


<button type="button" class="collapsible" style="width:885px; margin-left: 250px;">VIEW RECOMMENDED MEALPLAN</button>
<div class="content" class="col-md-4" style="width:870px; margin-left: 250px;">
  
  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">VIEW RECOMMENDED MEALPLAN</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

     
        <?php
          
          include('connection.php');
          $query=mysqli_query($conn,"select * from protein order by rand() limit 1");
          while($row=mysqli_fetch_array($query)){
            ?> 
            <?php
          }
        ?>
    
                <div class="col-md-4">
        <div class="form-group"> 
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from breakfast_protein order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from breakfast_carbs order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';

            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from fruits order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';

            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
              </div>
            </div><br><br>

        <!--lunch-->
          <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">LUNCH</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

          <div class="col-md-4">
        <div class="form-group">
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from protein order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from carbs order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from vitamins order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
              </div>
            </div><br><br>

        <!--supper-->
  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">VIEW RECOMMENDED MEALPLAN</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

          <div class="col-md-4">
        <div class="form-group">
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from protein order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
           
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from carbs order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
          <div class="form-group">
           
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from fruits order by rand() limit 2");
          while($row=mysqli_fetch_array($query))
          {
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'OR <br><br>';
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-4">
               <form method="POST">
      <input type="submit" name="refresh" value="Refresh" class="btn btn-primary">
    </form>
                </div>
              </div>
            </div><br><br>
         
        


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


</body>

</html>
