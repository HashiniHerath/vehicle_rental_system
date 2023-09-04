<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wavemore";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function test_input($form_data){
    $form_data = stripslashes($form_data);
    $form_data = htmlspecialchars($form_data);
    return $form_data;

}


if(isset($_POST["driverSubmit"])){
    
    $fname =$pname =$gender = $mail = $password = $re_enter_password = $CNO = $dob = $nic = $dln = $address1 = $address2=$city= $state=$experience="";

        if (isset($_POST["fname"])) {
            $fname = test_input($_POST["fname"]);
        }
        if (isset($_POST["pname"])) {
            $pname = test_input($_POST["pname"]);
        }
        if (isset($_POST["gender"])) {
            $gender = test_input($_POST["gender"]);
        }

        if (isset($_POST["mail"])) {
            $mail = test_input($_POST["mail"]);
        }

        if (isset($_POST["password"])) {
            $password = test_input($_POST["password"]);
        }
        if (isset($_POST["re_enter_password"])) {
            $re_enter_password = test_input($_POST["re_enter_password"]);
        }
        if (isset($_POST["CNO"])) {
            $CNO = test_input($_POST["CNO"]);
        }
        if (isset($_POST["dob"])) {
            $dob = test_input($_POST["dob"]);
        }
        if (isset($_POST["nic"])) {
            $nic = test_input($_POST["nic"]);
        }
        if (isset($_POST["dln"])) {
            $dln = test_input($_POST["dln"]);
        }
        if (isset($_POST["address1"])) {
            $address1 = test_input($_POST["address1"]);
        }
        if (isset($_POST["address2"])) {
            $address2 = test_input($_POST["address2"]);
        }
        if (isset($_POST["city"])) {
            $city = test_input($_POST["city"]);
        }
        if (isset($_POST["status"])) {
            $state = test_input($_POST["state"]);
        }
        if (isset($_POST["experience"])) {
            $experience = test_input($_POST["experience"]);
        }

        if($password ==  $re_enter_password){
            if($fname&&$pname /*&& $mail&& $password && $CNO&&$dob&&$nic&& $dln&&$address1&& $address2&&$city&& $status&&$experience*/){
                
               
                $sql = "INSERT INTO vehicle VALUES (' ','$fname','$pname','$gender','$mail','$password','$CNO','$dob','$nic','$dln','$address1','$address2','$city','$state','$experience') ";
                

                if ($conn->query($sql) === TRUE) {
                    echo "Driver inserted Successfully" ;
                } else {
                    echo "Error occured" . $conn->error;
                }
                
            }else{
                echo "All field must be filled";
            }
        }else{
            echo "Password not matched";
        }
        
    }


?>