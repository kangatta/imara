<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a style="margin-left: 5px;" href="#" class="navbar-brand">Imara Fitness</a>

         <ul class="navbar-nav">
           <li class="nav-item" style="margin-left: 10px;">
             <a href="landing.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="landing.php") {echo "active";} else {echo "";} ?>">Home</a>
           </li>
           <li class="nav-item" style="margin-left: 10px;">
             <a href="client_profile.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="client_profile.php") {echo "active";} else {echo "";} ?>">Profile</a>
           </li>
           </li>
           <li class="nav-item" style="margin-left: 10px;">
             <a href="packages.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="packages.php") {echo "active";} else {echo "";} ?>">Recommended package</a>
           </li>
           </li>
           <li class="nav-item" style="margin-left: 10px;">
             <a href="meals.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="meals.php") {echo "active";} else {echo "";} ?>">Mealplans</a>
           </li>
           </li>
           <li class="active" style="margin-left: 600px;">
             <a href="logout.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="logout.php") {echo "active";} else {echo "";} ?>"></a>
           </li>
            <li class="nav-item" style="margin-left: 10px;">
             <a href="logout.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="logout.php") {echo "active";} else {echo "";} ?>">Logout</a>
           </li>  
         </ul>
       </nav>
    </body>
    </html>
    <!--Welcome <?php echo("{$_SESSION['username']}"."<br />");?>-->