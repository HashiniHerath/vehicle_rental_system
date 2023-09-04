<!--- This is the Sign Up Page --->

<!--- IT 21334306      W.H.Dilmith Wathsala  --->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/homepage.css">


</head>
<body>

<?php include("nav.php")?>

<?php

session_start();

  include("connection.php");
  include("function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $con_pass=$_POST['cpassword'];
  //  $check=$_POST['check'];


   // echo $user_name;


    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        

       if($password==$con_pass){

        
        //   $password=md5($password);//

            //save to database
            $user_id = random_num(20);
            $query = "insert into users(user_id,user_name,email,phone,password) values ('$user_id','$user_name','$email','$phone','$password')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your Sign Up!!!');
    window.location.href='loging.php';
    </script>");

        }
        else{

             echo "Please enter confirm password as previous one!!";

          }
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>


<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>Create an Account</center></i></b></h1>


                           <!------------------------------------------sign up box------------------------------------------------------>

                <div class="button-box"> 
                    <div id="btn"></div>
                                        
                        <br>
                    </div>
                    <div class="Social-Icons">
                        <img src="image/fb.png">
                        <img src="image/gp.png">
                        <img src="image/tw.png">
                    </div>
                    <br><br><br>

                    <form id="Register" class="input-group"  method="post">

                        <input type="text" name="user_name"class="input-field" placeholder="Enter a user name" required>

                        <input type="text" name="email"class="input-field" placeholder="Enter Your Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter email as correct order">

                        <input type="text" name="phone"class="input-field" placeholder="Enter your phone number" required>

                        <input type="password" name="password"class="input-field" placeholder="Enter a Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                        <input type="password" name="cpassword"class="input-field" placeholder="Confirm Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="not same as previous password!!!">

                        <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>

                        <button type="submit" name="SignUp" class="submit-btn">Register</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>
   

    </body>

<br><br><br><br><br>


<!----------------Footer starts------------------------------------------------------------------------------->

<?php include("footer.php");?>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/signin.js"></script>

</body>
</html>