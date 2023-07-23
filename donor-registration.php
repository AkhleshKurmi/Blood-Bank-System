  
  <?php
     include('connection.php');
    session_start(); 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/admin.css">
    <title>Donor Registration</title>
</head>

<body>
 <div id='full'>
        <div if = 'inner_full'>
        <div class = 'header' ><marquee><h2><a href ='admin-home.php' style= 'text-decoration: none; color:white;'>Blood Bank Management System</a></h2></marquee></div> 
        <div id ='body'>
           <Br>

          <h1>Donor Registration</h1>

          <center><div id ="form">
                   <form action="" method ="post">
                    <table>
                        <tr>
                            <td height = '50px' width = '200px'>Name</td>
                            <td height = '50px' width = '200px'><input type="text" name="mname" placeholder = "Enter Name"></td>
                            <td height = '50px' width = '200px'>Father's Name</td>
                            <td height = '50px' width = '200px'><input type="text" name="fname" placeholder = "Enter Father's Name"></td>
                        </tr>
                        <tr>
                            <td height = '50px' width = '200px'>Address</td>
                            <td height = '50px' width = '200px'><textarea type="address" name="address" placeholder = "Enter Address"></textarea></td>
                            <td height = '50px' width = '200px'>City</td>
                            <td height = '50px' width = '200px'><input type="text" name="city" placeholder = " Enter City"></td>
                        </tr>
                        <tr>
                            <td height = '50px' width = '200px'>Age</td>
                            <td height = '50px' width = '200px'><input type="text" name="age" placeholder = "Enter Age"></td>
                            <td height = '50px' width = '200px'>Select Blood Group</td>
                            <td height = '50px' width = '200px'>
                                <select name="bgroup">
                                    <option value="null">Select</option>
                                    <option value="O+">O+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>

                                </select>
                            </td>
                        </tr>
                       
                        
                        <tr>
                            <td height = '50px' width = '200px'>Mobile No.</td>
                            <td height = '50px' width = '200px'><input type="text" name="mob" placeholder = "Enter Mobile No."></td>
                            <td height = '50px' width = '200px'>E-mail</td>
                            <td height = '50px' width = '200px'><input type="email" name="email" placeholder = "Enter E-mail"></td>
                            
                        </tr>
                        <tr>
                        <td height = '50px' width = '200px'>Select Gender</td>
                            <td height = '50px' width = '200px'>
                                <select name="gender">
                                    <option value="gender">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                            
                            <td height = '50px' width = '200px'><input type="submit" name="sub" value = "Save"></td>
                           
                        </tr>
                    </table>
               </form>
               <?php
                    if(isset($_POST['sub']))
                    {

                        $name = $_POST['mname'];
                        $fname = $_POST['fname'];
                        $address = $_POST['address'];
                        $city = $_POST['city'];
                        $age = $_POST['age'];
                        $bgroup = $_POST['bgroup'];
                        $mob = $_POST['mob'];
                        $email = $_POST['email'];
                        $gender = $_POST['gender'];
                        // echo "<script>alert('Click')</script>";

                        $q= $db-> prepare("INSERT INTO donor_registration (mname,fname,address,city,age,bgroup,mob,email,gender) VALUES(:mname,:fname,:address,:city,:age,:bgroup,:mob,:email,:gender)");
                        $q-> bindValue('mname',$name);
                        $q-> bindValue('fname',$fname);
                        $q-> bindValue('address',$address);
                        $q-> bindValue('city',$city);
                        $q-> bindValue('age',$age);
                        $q-> bindValue('bgroup',$bgroup);
                        $q-> bindValue('mob',$mob);
                        $q-> bindValue('email',$email);
                        $q-> bindValue('gender',$gender);
                    
                        if($q->execute())
                        {
                            echo "<script>alert('Donor registration Successfull')</script>";
                        }
                        else{
                            echo "<script>alert('Donor registration Fail')</script>";

                        }

                    }

                
               ?>
          </div></center>

         
       </div>
       <div id = 'footer'><br><h4 align="center">Copyright@MyprojectAkhlesh</h4>

       </div>
        </div>
</div>
   

</body>
</html>