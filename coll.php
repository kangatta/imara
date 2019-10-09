
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
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
<p>RECOMMENDED MEALPLAN</p>
<button type="button" class="collapsible" >VIEW</button>
<div class="content" class="col-md-4" style="width:850px; margin-left: 250px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">
           	
                <div class="col-md-3">
    		<div class="form-group">
                <h2>Breakfast</h2>
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
</div>

<p>Collapsible Set:</p>
<button type="button" class="collapsible">Open Section 1</button>
<div class="content" class="col-md-4">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible" class="col-md-4">Open Section 2</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible"class="col-md-4">Open Section 3</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
