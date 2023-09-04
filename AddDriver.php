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


  if(isset($_POST['driverAdd'])){

     
       //$id=$_POST['id'];
       $name=$_POST['name'];
       $tel=$_POST['tel'];
       $address=$_POST['address'];
       $amount=$_POST['amount'];
       
    

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO driver(driver_name,telephone,address,anticipate_amount) VALUES(?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssss", $name,$tel,$address,$amount);

              $stmt->execute();
              
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully Driver Added!!!');
                      window.location.href='adminDash.php';
                      </script>");
               


              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>



<!--

<div class="sidebar2">-->


       

         <div class="form-box"> 
            <h1><b><i><center>Add a Driver...</center></i></b></h1>


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

                        <input type="text" name="name"class="input-field" placeholder="Enter driver name" required>

                        <input type="tel" name="tel" class="input-field" placeholder="076-1235689" required pattern="[0-9]{3}-[0-9]{7}" title="input as mention way!!!">
                        <input type="text" name="address"class="input-field" placeholder="Enter driver address" required>
                        <input type="text" name="amount"class="input-field" placeholder="need amount of driver" required >
                        
                        <button type="submit" name="driverAdd" class="submit-btn">Add Driver Now</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>



<!--
</div>-->

</body>
</html>