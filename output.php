<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Confirm Page</title>
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
     
      <th>Confirm your information</th>
      
    </tr>
  </thead>
  <tbody>
      <tr>
          <td>First Name&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["first_name"];?></td> 
     </tr>
     <tr>
          <td>Last Name&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["last_name"];?></td> 
     </tr>
      <tr>
          <td>Gender   &nbsp;&nbsp;&nbsp;&nbsp;
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
          <td>Education&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["education"];?></td> 
     </tr>
     
     
     <tr>
          <td>Phone#   &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["phone"];?></td> 
     </tr>
     
     <tr>
          <td>Email    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["email"];?></td> 
     </tr>
     
      <tr>
          <td>Date     &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["date"];?></td> 
     </tr>
     
     <tr>
          <td>Address  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["address"]." ".$_POST["city"]." ".$_POST["state"].", ".$_POST["zip"];?></td> 
     </tr>
     <tr>
          <td>Comment  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["comment"];?></td> 
     </tr>
     
     <tr>
          <td>File Name&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST["file"];?></td> 
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
    </body>
</html>
