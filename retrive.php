
<?php
include_once('conn.php');  
$query="select * from reservation"; 
$result=mysqli_query($connection,$query);
?>

<!DOCTYPE html> 
<html> 
	<head> 
    <title>CK_HOUSE Admin</title>
    <link rel="shortcut icon"
    href="images/fav.png">
    <link rel="stylesheet"href="style.css">
    <link rel="stylesheet" href="user.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css"/>
    
    
	</head> 
	<body>
        
        
        
    
    
    
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="index.html"><h2 class="logo">CK_HOUSE</h2></a>
                </div>

             
                <div class="menu">  
                <ul>
                    <li><a href="index.html"><strong>EXIT</strong></a></li>
                    
                </ul>
             </div>

           
              
            <div class= "clear-fix">
            <br>
            
            <div class= "clear-fix">
            <br>
            <div class= "clear-fix">
            
            
            <div id="head" class="content"><h3 class="text-center">
            <strong>ADMINISTRATION</strong></h3></div>
            </div>
</div>
        <br>
       
        

           

   <div class="container mt-3">
    <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">NIC No</th>
              <th scope="col">Room Type</th>
              <th scope="col">Arrival Date</th>
              <th scope="col">Departure Date</th>
              
            </tr>
          </thead>
          <tbody>
            
          <?php
            //create connection
            $SELECT="SELECT * FROM reservation";

            //prepare statement
            $result=mysqli_query($connection,$SELECT);
            
            if($result){            
            while($row=mysqli_fetch_assoc($result)){
            
                $name=$row['name'];
                $nic=$row['nic'];
                $rooms = $row['rooms'];
                $arr=$row['arr'];
                $dep=$row['dep'];
               
                
                
                echo ('<tr>
                              <th scope="row">'.$name.'</th>
                              <td>'.$nic.'</td>
                              <td>'.$rooms.'</td>
                              <td>'. $arr.'</td>
                              <td>'. $dep.'</td>
                              
                        </tr>'); 
            }
            
            }
        
          ?>
          </tbody>     
    </table>
</div>

</div>

</body>
</html>