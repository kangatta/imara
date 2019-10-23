
<?php
  session_start(); 
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


<button type="button" class="collapsible" style="width:850px; margin-left: 250px;">VIEW RECOMMENDED MEALPLAN</button>
<div class="content" class="col-md-4" style="width:850px; margin-left: 250px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">
           	
            <?php 
             $query="SELECT name FROM protein ORDER BY RAND() LIMIT 1";
              $res=mysqli_query($conn, $query);
            ?>
                <div class="col-md-4">
    		<div class="form-group">
          
                <h2>Breakfast</h2>
                <label for="name">Proteins</label>
                <input class="form-control" name="age"  type="text" value="<?php echo ($res);?>">
                </div>
               </div>
               <div class="col-md-4">
    			<div class="form-group">
    				<br><br>
                <label for="name">Carbohydrates</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
               <div class="col-md-4">
    			<div class="form-group">
    				<br><br>
                <label for="name">Vitamins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
    		 

    		<!---->
    		<div class="col-md-3">
    			<div class="form-group">
    				<h2>Lunch</h2>
                <label for="name">Proteins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
                 <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Proteins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
               <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Carbohydrates</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
               <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Vitamins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
    		
    		<!---->

    		 <div class="col-md-3">
    			<div class="form-group">
    				<h2>Supper</h2>
                <label for="name">Proteins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
                 <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Proteins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
               <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Carbohydrates</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
               <div class="col-md-3">
    			<div class="form-group">
    				<br><br>
                <label for="name">Vitamins</label>
                <input class="form-control" name="age"  type="text">
                </div>
               </div>
    		</div><br>
</div><br>
<button type="button" class="collapsible" style="width:850px; margin-left: 250px;">CUSTOMIZE YOUR MEALPLAN</button>
<div class="content" class="col-md-4" style="width:850px; margin-left: 250px; ">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">
           	
            <?php
            require('connection.php');
            $query="SELECT * FROM `protein` WHERE food_id <= 7";
            $res=mysqli_query($conn, $query);
             ?>
                <div class="col-md-4">
    		<div class="form-group">
                <h2>Breakfast</h2>
                <label for="name">Proteins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

               <?php
            $query="SELECT * FROM `breakfast_carbs` WHERE food_id <= 7";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
    			<div class="form-group">
    				<br><br>
                <label for="name">Carbohydrates</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

                 <?php
            $query="SELECT * FROM `vitamins` WHERE food_id >= 0";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
    			<div class="form-group">
    				<br><br>
                <label for="name">Vitamins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
          
    		 

    		<!---->
    		<?php
            $query="SELECT * FROM `protein` WHERE food_id >= 7";
            $res=mysqli_query($conn, $query);
             ?>
                <div class="col-md-4">
        <div class="form-group">
                <h2>Lunch</h2>
                <label for="name">Proteins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
                 
                 <?php
            $query="SELECT * FROM `breakfast_carbs` WHERE food_id >= 7";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Carbohydrates</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

               <?php
            $query="SELECT * FROM `vitamins` WHERE food_id >= 0";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Vitamins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
    		
    		<!---->

    		 <?php
            $query="SELECT * FROM `protein` WHERE food_id >= 7";
            $res=mysqli_query($conn, $query);
             ?>
                <div class="col-md-4">
        <div class="form-group">
                <h2>Supper</h2>
                <label for="name">Proteins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
                 
                 <?php
            $query="SELECT * FROM `breakfast_carbs` WHERE food_id >= 7";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Carbohydrates</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

               <?php
            $query="SELECT * FROM `vitamins` WHERE food_id >= 0";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Vitamins</label>
                <select class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
        
        <!---->

    		</div><br>
</div>
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
