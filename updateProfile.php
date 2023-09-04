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



  <?php include("connection.php");?>


 <?php 


      

       if(isset($_POST['updateProfile'])){

       $id=$_POST['id'];
     $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
  
      
       

       $query="UPDATE `users` SET user_name='$user_name',email='$email',phone='$phone',password='$password' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
           
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully profile updated!!!');
                      window.location.href='profile.php';
                      </script>");
               


          }

          else{

               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
           }

           

     }

?>


          

     

    

<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>Create an Account</center></i></b></h1>


                           <!------------------------------------------Login box------------------------------------------------------>

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

                        <input type="number" name="id"class="input-field"  value="<?php echo $_GET['id'];?>" readonly>
                        <input type="text" name="user_name" class="input-field" placeholder="Enter a user name" required>
                        <input type="text" name="email" class="input-field" placeholder="Enter Your Email" required>
                        <input type="text" name="phone" class="input-field" placeholder="Enter your phone number" required>
                        <input type="text" name="password" class="input-field" placeholder="Enter a Password" required>
                        <button type="submit" name="updateProfile" class="submit-btn">Update</button>
                        
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