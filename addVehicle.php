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
  <title>Admin Panel of Bus Services</title>
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

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

    /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/

    padding: 5px 5px 5px 5px;
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
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


  if(isset($_POST['vehiAdd'])){

     
        //$id=$_POST['id'];  
      $name=$_POST['vehicle_name'];
      $number=$_POST['vehi_number'];
      $model=$_POST['model'];
      $transmission=$_POST['transmission'];
      $ftype=$_POST['fuel_type'];
      $image=$_FILES['image'];
      $amount=$_POST['amount'];
       
      //print_r($_FILES['image']);

      $filename=$image['name'];
      $fileerror=$file['error'];
      $desti='image/'.$filename;
      echo $desti;  
      move_uploaded_file($filename,$desti);

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO vehicle(vehicle_name,vehi_number,model,transmission,fuel_type,image,amount) VALUES(?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssssssi", $name,$number,$model,$transmission,$ftype,$desti,$amount);

              $stmt->execute();
              
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully Driver Added!!!');
                      window.location.href='ManageVehicle.php';
                      </script>");
               


              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>



<!--

<div class="sidebar2">-->


       <div class="form-box"> 
            <h1><b><i><center>Add a Vehicle...</center></i></b></h1>


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

                    <form id="Register" class="input-group"  method="post" enctype="multipart/form-data">


                        

                        <input type="text" name="vehicle_name"class="input-field" placeholder="Enter vehicle name" required>
                        
                        <input type="text" name="vehi_number"class="input-field" placeholder="Enter driver telephone" required pattern="[0-9]{3}-[0-9]{7}" title="input as mention way!!!">

                        <input type="text" name="model"class="input-field" placeholder="Enter model name" required>
                        <input type="text" name="transmission"class="input-field" placeholder="transmission" required>
                        <input type="text" name="fuel_type"class="input-field" placeholder="fuel type" required>
                        <input type="file" name="image" class="input-field">
                        <input type="text" name="amount"class="input-field" placeholder="amount" required>
                        
                        <button type="submit" name="vehiAdd" class="submit-btn">Add Vehicle Now</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>




<!--
</div>-->

</body>
</html>