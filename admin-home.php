 
<?php
 include('connection.php');
  session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/admin.css">
    <title>Welcome Admin</title>
</head>

<body>
 <div id='full'>
        <div if = 'inner_full'>
        <div class = 'header' ><marquee><h2><a href ='admin-home.php' style= 'text-decoration: none; color:white;'>Blood Bank Management System</a></h2></marquee></div> 
        <div id ='body'>
           <Br>
           <?php
           $uname= $_SESSION['uname'];
           if(!$uname){
            header("Location:index.php");
           }
           ?>
           

          <h1>Welcome Admin</h1>
          <br><br><br>
          <ul>
            <li><a href="donor-registration.php">Donor Registration</a></li>
            <li><a href="donor-list.php">Donor List</a></li>
            <li><a href="stock-blood-list.php">Stock Blood List</a></li>
          </ul>
          <br><br>
          <br><br><br><br>
          <ul>
            <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
            <li><a href="exchange-blood-reg.php">Exchange Blood Registration</a></li>
            <li><a href="exchange-blood-list.php">Excange Blood List</a></li>
          </ul>
       </div>
       <div>
        <p id="logout"><a href = "logout.php"><font color='white'> Logout</font> </a></p>
       </div>
       <div id = 'footer'><br><h4 align="center">Copyright@MyprojectAkhlesh</h4>

       </div>
        </div>
</div>
   

</body>
</html>