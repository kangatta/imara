    <?php
    // BMI calculator
    // Coded on 1/14/18, Updated on 1/15/18 to include Metric options/conversions
    // Used the following educational resources to determine the BMI formula:
    // http://extoxnet.orst.edu/faqs/dietcancer/web2/twohowto.html
    // http://www.medcalc.com/body.html
     
         // process data submitted in form
         if(isset($_POST['givems']) && ($_POST['givems'])== "Submit"){
         // extract the data and assign automatically to variables
         extract($_POST);
          
         // now, using these variables, process the user's BMI and report it
           //first, determine the unit of measurement the user chose -- if Standard...
           if($unit == 'Standard') {
              // convert from lbs to kg
              $adjusted_weight = $weight * 0.45359237;
              // convert from inches to m
              $adjusted_height = $height * 0.0254;
              // square the height variable
              $adjusted_height_final = $adjusted_height * $adjusted_height;
              // divide the weight by the squared height to get the BMI value
              $prep_bmi = $adjusted_weight/$adjusted_height_final;
              $bmi = number_format($prep_bmi, 1);
              // and finally announce the result
              // center the result
              echo "<center>";
              echo "Your BMI is $bmi. ";
              if($bmi > '18.5' && $bmi < '25') {  echo "You are considered within normal BMI range.<br /><br />"; 
              } elseif($bmi < '18.5') { echo "You are considered underweight.<br /><br />";
              } elseif($bmi >= '25' && $bmi < '30') { echo "You are considered overweight.<br /><br />";
              } elseif($bmi >= '30' && $bmi < '40') { echo "You are considered obese.<br /><br />";
              } elseif($bmi >= '40') { echo "You are considered extremely obese.<br /><br />";
              }
           
              // close the centering
              echo "</center>";
          
           // elseif unit chosen is Metric, continue accordingly
           } elseif($unit=='Metric') {
              //convert from cm to meters to match formula
              $adjusted_height = $height/100;
              // square the height variable
              $adjusted_height_final = $adjusted_height * $adjusted_height;
              // divide the weight by the squared height to get the BMI value
              $prep_bmi = $weight/$adjusted_height_final;
              $bmi = number_format($prep_bmi, 1);
              // and finally announce the result
              // center the result
              echo "<center>";
              echo "Your BMI is $bmi. ";
              if($bmi > '18.5' && $bmi < '25') {  echo "You are considered within normal BMI range.<br /><br />"; 
              } elseif($bmi < '18.5') { echo "You are considered underweight.<br /><br />";
              } elseif($bmi >= '25' && $bmi < '30') { echo "You are considered overweight.<br /><br />";
              } elseif($bmi >= '30' && $bmi < '40') { echo "You are considered obese.<br /><br />";
              } elseif($bmi >= '40') { echo "You are considered extremely obese.<br /><br />";
              }
           
              // close the centering
              echo "</center>";
           } // close metric
         } // close extract post
    ?>
    <!doctype=html>
    <html>
    <head>
    <title>Kimenders.com > Simple BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href = "bmicalc.css" />
    </head>
    <body>
    <center><h2> Simple BMI Calculator </h2></center>
    <div id="bmiform">
    <b>Please enter your measurements below. </b> <br /><br />
    <form id="bmicalc" name="bmicalc" method="post">
    Weight (in lbs): <input type="text" name="weight"> <br /><br />  
    Height (in inches): <input type="text" name="height"><br /><br />  
    <input type="submit" name="givems" id="givems" class="btn" value="Submit"/>
    </form>
    </div>
    </body>
    </html>