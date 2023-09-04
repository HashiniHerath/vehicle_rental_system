<!--- This is the Login Page --->

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
    <link rel="stylesheet" href="css/loging.css">
    <link rel="stylesheet" href="css/homepage.css">


</head>
<body>

    <?php

    session_start();
    include("connection.php");


    ?>

<?php 

    if(isset($_POST['Adminlogin'])){

        $query="SELECT * FROM `admin` WHERE username='$_POST[Admin_username]'  AND  password='$_POST[Admin_password]'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){

        // session_start();//
         $_SESSION['username']=$_POST['Admin_username'];
         header("location:adminDash.php");

        }
        else{
          echo '<script type="text/javascript">alert("incorrect_pass!!!")</script>';
        }
        
        

    }

?>
<?php include("nav.php");?>

<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>admin login</center></i></b></h1>


                           <!------------------------------------------ admin Login box------------------------------------------------------>

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

                    <form id="login" class="input-group" method="POST">

                        <input type="text" class="input-field" placeholder="Adimin Username"  name="Admin_username" required>
                        <input type="password" class="input-field" placeholder="Admin Password"  name="Admin_password" required><br>
                        <br>
                       
                        <button type="submit" name="Adminlogin" class="submit-btn">Log in</button>

                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>
   

    </body>
<br>
<br>
<br>
<br>


<?php include("footer.php");?>






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/loging.js"></script>

</body>
</html>