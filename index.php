<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Verification Page</title>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <style>
            .output{
                margin: auto;
                width: 50%;
                border: 3px solid green;
                padding: 10px;
               }
               
       
        </style>
        <meta charset="UTF-8">
       
    </head>
    <body>
        
       <br>
        <br>
        <br>
        
  <div class="output">             
  <table class="table table-bordered">
  <thead align="center">
    <tr>
     
  <h4><bold>Please verify you submission</bold></h4>
      
    </tr>
  </thead>
  <tbody>
      <tr>
          <td>First Name</td> <td><?php echo $_POST["first_name"];?></td> 
     </tr>
     <tr>
         <td>Last Name</td> <td> <?php echo $_POST["last_name"];?> </td>
     </tr>
      <tr>
          <td>Gender</td>
          <td>
              <?php
                if (isset($_POST['value'])) {
                    
                      echo 'Male';
                    }else{
                        echo "Female";
                    }
               
                ?>
          </td> 
     </tr>
    <tr>
        <td>Education</td> <td><?php echo $_POST["education"];?></td> 
     </tr>
     
     
     <tr>
         <td>Phone</td> <td><?php echo $_POST["phone"];?></td> 
     </tr>
     
     <tr>
         <td>Email</td> <td><?php echo $_POST["email"];?></td> 
     </tr>
     
      <tr>
          <td>Date</td> <td><?php echo $_POST["date"];?></td> 
     </tr>
     
     <tr>
         <td>Address</td><td><?php echo $_POST["address"]." ".$_POST["city"]." ".$_POST["state"].", ".$_POST["zip"];?></td> 
     </tr>
     <tr>
         <td>Comment</td><td><?php echo $_POST["comment"];?></td> 
     </tr>
     
     <tr>
         <td>File Name</td><td><?php echo $_POST["file"];?></td> 
     </tr>
    
  </tbody>
</table>
</div>          
         <nav aria-label="...">
           <ul class="pager">
             <li><a href="javascript:history.back(1)">Back</a> </li>
             <li><a href="thankyou.php">Confirm</a></li>
            </ul>
     </nav>
       
        <hr>
        
      <iframe
          accesskey=""width="600"
          class=""height="450"
          contenteditable=""frameborder="0" style="border:0"
          contextmenu=""src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4mX-6XlcWKDeoIipMAsWSnPqQvBymq9M
         &q=<?php echo $_POST["address"]."+".$_POST["city"]."+".$_POST["state"]."+".$_POST["zip"];?>" allowfullscreen>
    </iframe>
        
   
    </body>
</html>
