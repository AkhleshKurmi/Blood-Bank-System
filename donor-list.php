  
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

          <h1>Donor List</h1>

          <center><div id ="form">

             <table>
                <tr>
                    <td><center><font color="blue"><b>Name</b></font></center></td>
                    <td><center><font color="blue"><b>Father's Name</b></font></center></td>
                    <td><center><font color="blue"><b>Address</b></font></center></td>
                    <td><center><font color="blue"><b>City</b></font></center></td>
                    <td><center><font color="blue"><b>Age</b></font></center></td>
                    <td><center><font color="blue"><b>Blood Group</b></font></center></td>
                    <td><center><font color="blue"><b>Mobile Number</b></font></center></td>
                    <td><center><font color="blue"><b>E-mail</b></font></center></td>
                    <td><center><font color="blue"><b>Gender</b></font></center></td>
                
                </tr>

                <?php
                    $q= $db -> query('SELECT * FROM donor_registration');
                    while($r1=$q->fetch(PDO::FETCH_OBJ))
                    {
                        ?>
                <tr>
                    <td><center><?=$r1->mname;?></center></td>
                    <td><center><?=$r1->fname;?></center></td>
                    <td><center><?=$r1->address;?></center></td>
                    <td><center><?=$r1->city;?></center></td>
                    <td><center><?=$r1->age;?></center></td>
                    <td><center><?=$r1->bgroup;?></center></td>
                    <td><center><?=$r1->mob;?></center></td>
                    <td><center><?=$r1->email;?></center></td>
                    <td><center><?=$r1->gender;?></center></td>
                </tr>

                        <?php

                    }
                 
                
                ?>


               
             </table>
                  
          </div></center>

         
       </div>
       <div id = 'footer'><br><h4 align="center">Copyright@MyprojectAkhlesh</h4>

       </div>
        </div>
</div>
   

</body>
</html>