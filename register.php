  
  <?php
     include('connection.php');
    session_start(); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>register</title>
    <link rel="stylesheet" href="css/reg.css">
    
</head>
<body>
<div class = 'header'><marquee><h1>Blood Bank Management System</h1></marquee></div>
<div class="loginbox">
        <img src="./images/logo.jpg" class="avatar">
    <form action="" method ='post'>
          <p class=" p1">Username</p>
         <input type="text" name="uname" placeholder="Enter Username">
         <p>Password</p>
        
         <input type="text" name="psw" placeholder="Enter Password">
        
         
         <input type="submit" name="sub" value="signup">

         <p>Already have an Account <a href =index.php> Login Here</a></p>

    
         <?php
                    if(isset($_POST['sub']))
                    {

                        $uname = $_POST['uname'];
                        $psw = $_POST['psw'];
                    
                    $q= $db-> prepare("INSERT INTO admin (uname,psw) VALUES(:uname,:psw)");
                    $q-> bindValue('uname',$uname);
                    $q-> bindValue('psw',$psw);
                    
                    if($q->execute())
                    {
                        echo "<script>alert('Donor registration Successfull')</script>";
                    }
                    else{
                        echo "<script>alert('Donor registration Fail')</script>";

                    }
                  }
                    ?>
    </form>
   
               </div>
</body>
</html>