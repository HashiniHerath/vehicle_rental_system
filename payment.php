<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);
 
?>


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
    <link rel="stylesheet" href="css/payment.css">
    <style type="text/css">
        
            .selectoption{

                padding: 10px 10px 10px 10px;
                 border:1px solid #ccc;
            }



    </style>

</head>
<body>
    

<?php
/*


  if(isset($_POST['checkoutt'])){


     $name=$_POST['name'];
     $amount=$_POST['amount'];
     $email=$_POST['email'];
     $address=$_POST['address'];
      $vehi_num=$_POST['vehi_num'];
     $vehi_type=$_POST['vehi_type'];
     $date=$_POST['date_'];
     $cardName=$_POST['cname'];
     
     $cardNumber=$_POST['cnumber'];
     $expM=$_POST['expmonth'];
     $expY=$_POST['expyear'];
     $cvv=$_POST['cvv'];
    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO payment(name,amount,email,address) VALUES(?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("siss",$name,$amount,$email,$address);

              $stmt->execute();
                          
                           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully payment added!!!');
                window.location.href='paySucess.php';
                </script>");

              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  */

   ?>



<!------------------------- copy your code here [payment] ------------------------->



<

<section class="body">
<!--
   <div class="container">

    <form  method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>your name :</span>
                    <input type="text" placeholder="john deo" name="name">
                </div>
                <div class="inputBox">
                    <span>Amount of you pay :</span>
                    <input type="number" placeholder="amount Of You Pay.." name="amount">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" name="address">
                </div>
                <div class="inputBox">
                    <span>vehicle number:</span>
                    <input type="text" placeholder="PE01201 " name="vehi_num">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>vehicle type :</span>
                        <select class="selectoption" name="vehi_type">
                          
                            <option>BMW</option>
                            <option>AUDI</option>
                            <option>Toyota</option>
                            <option>Ferari</option>
                            <option>kdh</option>
                            <option>Benz</option>

                        </select>
                    </div>
                    
                    <div class="inputBox">
                        <span>date of you get :</span>
                        <input type="date" placeholder="date" name="date_">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" name="cname">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cnumber">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" name="expmonth">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="expyear">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="630" name="cvv">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" name="checkoutt">

    </form>

</div>-->


<?php



  if(isset($_POST['checkout'])){


     $name=$_POST['name'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $zip=$_POST['zip'];
     $cname=$_POST['cardName'];
     $cnumber=$_POST['cardNumber'];
     $expM=$_POST['expM'];
     $expY=$_POST['expYear'];
     $cvv=$_POST['cvv'];
     $amount=$_POST['amount'];
     $vehi_type=$_POST['vehi_type'];


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO payment(amount,name,email,address,city,vehicle_type,state,zip_code,card_name,card_number,exp_month,exp_year,cvv) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("issssssissssi",$amount,$name,$email,$address,$city,$vehi_type,$state,$zip,$cname,$cnumber, $expM,$expY,$cvv);

              $stmt->execute();
                          
                           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully added!!!');
                window.location.href='paySucess.php';
                </script>");

              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>


<div class="container">

    <form method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                 <div class="inputBox">
                    <span>Amount You Pay :</span>
                    <input type="number" value="200.00" name="amount">
                </div>

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" value="<?php echo $user_data['user_name'];?>" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" value="<?php echo $user_data['email'];?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter email as correct order">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" name="city">
                </div>

                <div class="inputBox">
                        <span>vehicle type :</span>
                        <select class="selectoption" name="vehi_type">
                          
                            <option>BMW</option>
                            <option>AUDI</option>
                            <option>Toyota</option>
                            <option>Ferari</option>
                            <option>kdh</option>
                            <option>Benz</option>

                        </select>
                    </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india" name="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" name="zip">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" name="cardName" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cardNumber" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" name="expM" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="expYear" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" name="cvv" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" name="checkout">

    </form>








</section>

<!------------------------- copy your code here [payment] ------------------------->

























<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/payment.js"></script>

</body>
</html>