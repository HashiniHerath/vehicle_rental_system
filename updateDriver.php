<?php 

    session_start();


?>
<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
    
     <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
<!--
   <?php //echo "welcome:".  $_SESSION['username']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>-->

</body>
</html>




<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <!--cdn icon library -->
  
    <style type="text/css">

            body{

          background-image: url("image/background 2.jpg");
          background-position: center;
          background-size: cover;
          height: 700px;
          background-repeat: no-repeat;
      background-attachment: fixed;

        }
        .adminTopic{
            text-align: center;
            color: #fff;
            

        }


button 
{
    padding: 5px 5px 5px 5x;
}
.btnPolicy{

    padding: 5px 5px 5px 5px;
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

    background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}


    </style>
     <link rel="stylesheet" href="css/signin.css">
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/pic-4.png">
<p><?php echo $_SESSION['username']; ?></p>
</header>
<ul>


    <li><a href="adminDash.php">Manage Driver</a></li>
    <li><a href="ManageVehicle.php">Manage Vehicle</a></li>
    <li><a href=""></a></li>
  <li><a href="PayManage.php">Transaction</a></li>
    <li><a href="adminLogout.php">logout</a></li>
    
  <!--  <li><a href="#">Event</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Contact</a></li>-->
    </ul>
 <!--  <li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
        
      </div>
    </li>-->
   

</div>



       


   <?php 


      

       if(isset($_POST['driverUpdate'])){

      $id=$_POST['id'];  
      $name=$_POST['name'];
      $tel=$_POST['tel'];
      $address=$_POST['address'];
      $amount=$_POST['amount'];

       $query="UPDATE `driver` SET driver_name='$name',telephone='$tel',address='$address',anticipate_amount='$amount' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Driver Updated!!!');
    window.location.href='adminDash.php';
    </script>");


        //   echo '<script type="text/javascript">alert("Booking udated sucessfully!!!")</script>';


          }

          else{

               echo '<script type="text/javascript">alert("Driver not updated!!!")</script>';
           }

           

     }

?>







<div class="sidebar2">


       

         <div class="form-box"> 
            <h1><b><i><center>Update a Driver...</center></i></b></h1>


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


                        <input type="number" name="id"class="input-field" value="<?php echo $_GET['id'];?>" readonly>

                        <input type="text" name="name"class="input-field" placeholder="Enter driver name" required>
                        <input type="text" name="tel"class="input-field" placeholder="Enter driver telephone" required>
                        <input type="text" name="address"class="input-field" placeholder="Enter driver address" required>
                        <input type="text" name="amount"class="input-field" placeholder="need amount od driver" required>
                        
                        <button type="submit" name="driverUpdate" class="submit-btn">Update Driver Now</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>





</div>

</body>
</html>