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



<div class="sidebar2">


		<h1 class="adminTopic">Management of Vehicle</h1>



<?php

    
    $sqlget="SELECT * FROM vehicle";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>vehicle_name</th>
    <th>vehicle_number</th>
    <th>model</th>
    <th>transmission</th>
    <th>fuel_type</th>
    <th>amount</th>
    <th>image</th>
    <th>Update</th>
    <th>Delete</th>
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['vehicle_name'];
        echo "</td><td>";
        echo $row['vehi_number'];
        echo "</td><td>";
        echo $row['model'];
        echo "</td><td>";
        echo $row['transmission'];
        echo "</td><td>";
        echo $row['fuel_type'];
        echo "</td><td>";
        echo $row['amount'];
         echo "</td>";
      
        
          
        ?>
       <td><img src="<?php echo $row['image'];?>" width="200" height="200"></td>
        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="updateVehicle.php?id=<?php echo $row['id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td><td>

        <button style = "border:2px solid yellow; border-radius:7px; background-color:red;color:white;" >
          <a href="deleteVehicle.php?id=<?php echo $row['id'];?>">

            Delete

        </a>
       </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>

<br>


                       <a href="AddVehicle.php">     <button class="btnPolicy">Add Vehicle</button></a>



</div>

</body>
</html>