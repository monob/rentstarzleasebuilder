 <?php

  session_start();
  include_once("config/config.php");

?>  



         <form id="userregistrationform" method="post">
      
      <div class="form-group">
         <label for="exampleInputFirstname1"></label>
          <input type="firstname" class="form-control" id="firstname" placeholder="First name">
       </div>
  
      

       <div class="form-group">
         <label for="examplelastname1"></label>
          <input type="lastname" class="form-control" id="lastname" placeholder="Last name">
       </div> 

       
       <div class="form-group">
         <label for="exampleusername"></label>
          <input type="username" class="form-control" id="user_name" placeholder="user name">
       </div> 


      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="Email" placeholder="Email">
      </div>
       
       


       <div class="form-group">
         <label for="exampleInputPassword1"></label>
          <input type="password" class="form-control" id="pass1" placeholder="Password" name="pass1">
       </div>
        
        

        <div class="form-group">
         <label for="exampleInputPassword1"></label>
          <input type="password" class="form-control" id="pass2" placeholder="re-enter password" name="pass2">
       </div>
        
     
    <div>
        <input type="button" id="userReg_btn" value="Sign up!">





