
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
    <link rel="stylesheet" href="css/reg_vehicle.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>WaVe👋</span>– MoRE</a>

    <div class="navbar">
        <nav>
          <ul>
            <li><a href="#home">home</a></li>
            
            <li><a href="#about us">about us</a> 
                <ul>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Our Team</a></li>
                </ul>
            </li>
            <li><a href="#vehicle fleet">vehicle Fleet</a>
                <ul>
                    <li><a href="#">Luxury Cars</a></li>
                    <li><a href="#">Premium Cars</a></li>
                    <li><a href="#">General Cars</a></li>
                    <li><a href="#">Buses,Vans</a></li>
                    <li><a href="#">Lorries,Trucks</a></li>
                    <li><a href="#">Three Wheelers</a></li>
                    <li><a href="#">Motor Bicycles</a></li>
                </ul>
            </li>
            <li><a href="#services">services</a>
                <ul>
                    <li><a href="#">Self Drive</a></li>
                    <li><a href="#">Tours / Chauffeur Driven</a></li>
                    <li><a href="#">Weddings & Events</a></li>
                    <li><a href="#">Airport / City Transfers</a></li>
                    <li><a href="#">Oil Change</a></li>
                    <li><a href="#">24/7 Support</a></li>
                </ul>
            </li>
            <li><a href="#rates">rates</a>
                <ul>
                    <li><a href="#">Self Drive Rates</a></li>
                    <li><a href="#">With Driver Rates</a></li>
                </ul>
            </li>
            <li><a href="#reviwes">reviews</a>
                <ul>
                    <li><a href="#">Customer</a></li>
                    <li><a href="#">Driver</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li><a href="#contact us">contact Us</a></li>
        </ul>
     </nav>
    </div>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

    <div id="login-btn">
        <button class="btn">Sign Up</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="#">create one</a> </p>
    </form>

</div>

<!------------------------- copy your code here [payment] ------------------------->

<section class="body">

   <fieldset class="fieldset">
        
        <center><h3 id="h3fontcolor">Register As vehicle</h3>
    
        <table>
            <form action="php/reg_vehicle.php" method ="POST">
            <tr>
                
                <td><input type ="text" placeholder="Owner's Full Name" name="ofName" required id="inp1"><br/></td>
            </tr>
            <tr>
                
                <td> <input type = "phone" placeholder="Owner's Mobile Number" name ="CNO"  required id="inp1"></td>
            </tr>
            <tr>
                
                <td><input type = "NIC" placeholder="Owner's NIC Number" name = "nic" required><br/> </td>
            </tr>

            <tr>
                
            
        </select></td>
            </tr>

            <tr>
                
                <td> Vehicle Type</td><td><input type = "text" name="vtype"> </td>
            </tr>
            <tr>
                
                <td> Oil Type</td><td><input type = "text" name="otype"> </td>
            </tr>
            <tr>
                
                <td> Modle Type</td><td><input type = "text" name="mtype"> </td>
            </tr>
            <tr>
                
                <td> Number of seats</td><td><input type = "text" name="noOfSeats"> </td>
            </tr>

            Vehicle Condition
            <label><input type="checkbox" name="type" value="general" /> General</label>
            <label><input type="checkbox" name="type" value="semi-luxury" /> Semi luxury</label>
            <label><input type="checkbox" name="type" value="luxury" /> luxury</label>

            <tr>
                
                <td>upload photos of vehicle </td>
                <td>
            
              <input type="file" id="myFile" name="file">
              
            
                 </td>
                
            </tr>

            
            <tr>
                <td><input type = "checkbox" id="checkbox1" > I'm not a robot</td>
                
            </table>
                
                <tr>
                    <td>
                    <input class="but1" type="submit" name="vehicleSubmit" value="Register">
                
                    </td>
                </tr>
        
        </form></center>
        </fieldset>


</section>

<!------------------------- copy your code here [payment] ------------------------->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Colombo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Galle </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kandy </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Negombo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Trincomalee</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about us </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicle fleet </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> rates</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact us </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +940-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +940-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> wavemore@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> colombo, srilanka- 00600   </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by WaVe👋 – MoRE  | all copyrights reserved by WaVe👋 – MoRE - 2022 </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/reg_vehicle.js"></script>

</body>
</html>