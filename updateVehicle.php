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
    <li><a href="PaymentManage.php">Transaction</a></li>
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


      

       if(isset($_POST['vehiUpdate'])){

      $id=$_POST['id'];  
      $name=$_POST['vehicle_name'];
      $number=$_POST['vehi_number'];
      $model=$_POST['model'];
      $transmission=$_POST['transmission'];
      $ftype=$_POST['fuel_type'];
     // $image=$_FILES['image'];
      $amount=$_POST['amount'];





      // $query="UPDATE `vehicle` SET vehicle_name='$name',vehi_number='$number',model='$model',transmission=$'transmission',fuel_type=$'ftype',amount='$amount' where id=$id";
        $query="UPDATE `vehicle` SET vehicle_name='$name',vehi_number='$number',model='$model',transmission='$transmission',fuel_type='$ftype',amount='$amount'  where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully vehicle Updated!!!');
    window.location.href='ManageVehicle.php';
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
            <h1><b><i><center>Update a Vehicle...</center></i></b></h1>


                           <!------------------------------------------vehi update form------------------------------------------------------>

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

                        <input type="text" name="vehicle_name"class="input-field" placeholder="Enter vehicle name" required>
                        <input type="text" name="vehi_number"class="input-field" placeholder="Enter driver telephone" >
                        <input type="text" name="model"class="input-field" placeholder="Enter model name" >
                        <input type="text" name="transmission"class="input-field" placeholder="transmission" >
                        <input type="text" name="fuel_type"class="input-field" placeholder="fuel type" >
                      <!--  <input type="file" name="image"class="input-field" >-->
                        <input type="text" name="amount"class="input-field" placeholder="amount" >
                        
                        <button type="submit" name="vehiUpdate" class="submit-btn">Update Vehicle Now</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>





</div>

</body>
</html>