
<?php
     include('connection.php');
    session_start(); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/s1.css">
</head>
<body>

   <div class = 'header'><marquee><h1>Blood Bank Management System</h1></marquee></div>
     <div class="loginbox">
     <a href ="user/index.php"> <img src="./images/logo.jpg" class="avatar"></a>
     <h1 id="loginHere">Login Here</h1>
    
  
      <form action="" method="post">
        
      <p class=" p1">Username</p>
         <input type="text" name="uname" placeholder="Enter Username">
         <p>Password</p>
         <input type="password" name="psw" placeholder="Enter Password">
         <input type="submit" name="sub" value="Login">
         <!-- <a href="forgot-psw">Forget your Password?</a> <br> -->
         <p>Don't have an account
         <a href="register.php"> Register Here</a></p>
      </form>

      <?php
           
           if(isset($_POST['sub'])){
         
           $uname= $_POST['uname'];
           $psw= $_POST["psw"];
           $q= $db->prepare("SELECT * FROM admin WHERE uname='$uname' AND psw='$psw'");
           $q-> execute();
           $res=$q->fetchAll(PDO::FETCH_OBJ);
        //    print_r($res);
           if($res){
            $_SESSION['uname']= $uname;
            header("location:admin-home.php");
           }
        //   else if(!$res){
        //     // $_SESSION['uname']= $uname;
        //     header("location:index.php");
        //    }
           else {
            echo "<script>alert('Wrong User')</script>";
           }
         }
      ?>
  </div>
</body>
</html>