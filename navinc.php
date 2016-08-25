<?php

  session_start();
  include_once("config/config.php");

?>
<!DOCTYPE html>
<html>
  <head>
    
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
      <link rel="stylesheet" href="css/mystyle.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8" />
     <title> Lease builder </title>
        

  </head>
    <body>


  

  <div class="container-fluid nomargin nopadding">
  
       
    <nav class="nav-main">

       <ul> 
          <li class="nav-item"> <a href="createlease.php">create lease</a>
             </li>
         
           
          <li class="nav-item"> <a href="mylease.php>">my lease </a> </li>
         
           <li class="nav-item"> <a href="mytenants.php">my tenants</a></li>
        
           <li class="nav-item"> <a href="myproperties.php"> My Properties</a> </li> 
         
          <li class="nav-item"> <a href="totalincome.php"> Total income</a> </li> 
         
          <li class="nav-item"> <a href="logout.php"> Log out</a>
           </li> 


         
         
    
           </ul> 
    
                
  
          </nav>
       
      

    </div>
           


    





<div class="footer"> 

<ul>
  <li class="footer-item" >
   <a href="about.php">about us</a>
   <a href="contactus.php"> contact us</a>
   <a href="termsofuse.php"> terms of use</a>
    
  </li>
</ul>



</div>



<img src="images/lbuilder2.png" id="mg">
  
</body>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>