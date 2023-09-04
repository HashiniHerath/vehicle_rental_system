
<!DOCTYPE html>
<html>
<head>
  <title>transaction update</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/signUp.css">
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
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    #decription{
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }




	</style>
</head>
<body>
 
<!-------------------------------------------------->
   

   <?php 

       include("connection.php");
      

       if(isset($_POST['updateFeedback'])){

       $id=$_POST['id'];  
     
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];
     

       $query="UPDATE `feedback` SET name='$name',email='$email',message='$message' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully  Updated!!!');
    window.location.href='feedbackManage.php';
    </script>");


        //   echo '<script type="text/javascript">alert("Booking udated sucessfully!!!")</script>';


          }

          else{

               echo '<script type="text/javascript">alert("not updated!!!")</script>';
           }

           

     }

?>



<div class="sidebar2">




   
          

          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
  update transaction details
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">


        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>" readonly>
        </div>

       
        
        <div class="input_wrap">
          <label for="title">Name:</label>
          <input type="text" id="title" name="name" placeholder="name" required>
        </div>


        <div class="input_wrap">
          <label for="title">E-mail:</label>
          <input type="text" id="title" name="email" placeholder="E-mail" required>
        </div>


        <div class="input_wrap">
          <label for="title">Message:</label>
          <input type="text" id="title" name="message" placeholder="message" >
        </div>

      

        <div class="input_wrap">
          <input type="submit" value="Update Now" class="submit_btn" name="updateFeedback">

        </div>



      </div>
    </form>
  </div>
</div>





</div>

</body>
</html>