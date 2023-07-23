  
  <?php
     include('connection.php');
    session_start(); 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/admin.css">
    <title>Welcome Admin</title>
    <style type="text/css">
 td{
    width: 200px;
    height: 40px;
 }

    </style>
</head>

<body>
 <div id='full'>
        <div if = 'inner_full'>
        <div class = 'header' ><marquee><h2><a href ='admin-home.php' style= 'text-decoration: none; color:white;'>Blood Bank Management System</a></h2></marquee></div> 
        <div id ='body'>
           <Br>

          <h1>Stock Blood List</h1>

          <center><div id ="form">

             <table>
                <tr>
                    <td><center><font color="yellow"><b>Name</b></font></center></td>
                    <td><center><font color="blue"><b>O+</b></font></center></td>
                    <td><center><font color="blue"><b>AB+</b></font></center></td>
                    <td><center><font color="blue"><b>A+</b></font></center></td>
                    <td><center><font color="blue"><b>B+</b></font></center></td>
                    <td><center><font color="blue"><b>O-</b></font></center></td>
                    <td><center><font color="blue"><b>AB-</b></font></center></td>
                    <td><center><font color="blue"><b>A-</b></font></center></td>
                    <td><center><font color="blue"><b>B-</b></font></center></td>
                    <!-- <td><center><font color="blue"><b></b></font></center></td> -->
                
                </tr>

                
                <tr>
                    <td><center><font color ="yellow"><b>Qty</b></font></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                    <td><center><?php
                           $q= $db -> query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                           echo $row =$q->rowcount();
                   
                        ?></center></td>
                </tr>

             </table>
                  
          </div></center>

         
       </div>
       <div id = 'footer'><br><h4 align="center">Copyright@MyprojectAkhlesh</h4>

       </div>
        </div>
</div>
   

</body>
</html>