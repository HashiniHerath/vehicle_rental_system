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
    <link rel="stylesheet" href="css/reg_driver.css">

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

   <fieldset class="fieldset" >

        <form action="php/reg_driver.php"  method="POST"> 

        <center>

            <h3>Register As Driver</h3>
    
        <table>

            <tr>

                <td> <input type ="text" placeholder="First Name" name="fname" required id="inp"></td>
                <td><input type ="text" placeholder="Last Name" name="pname" required id="inp1"><br/></td>
            </tr>
            <tr>
                
                <td><input type = "text" placeholder="Email"  width="500px" name= "mail"  required id="inpu12"></td>
                
              Gender
              <input type="radio"  name="gender" value="female">
              <label >female </label>
              <input type="radio" name="gender" value="male">
              <label >male</label>
              
                </form></td>
            </tr>

            <tr>
                
                <td><input type = "password" placeholder="password" name = "password" required id="Driver Password"></td><br/> </td>
            </tr>

            <tr>
                
                <td><input type = "password" placeholder="Re-Enter password" name = "re_enter_password" required><br/> </td>
            </tr>

            <tr>
                
                <td> <input type = "phone" placeholder="Mobile Number" name = "CNO" required></td>
            </tr>

            <tr>
                
                <td>Date of Birthday <br><input type = "date" name="dob" placeholder="Date Of Birth" ></td>
            </tr>

            <tr>
                
                <td><input type = "text" placeholder="NIC Number" name = "nic" required><br/> </td>
            </tr>

            <tr>
                
                <td><input type = "text" placeholder="Driver Licence Number" name = "dln" required><br/> </td>
            </tr>

            <tr>
                
                <td><input type = "text" placeholder="Street Address 1" name="address1" ><br/> </td>
            </tr>

            <tr>
                
                <td><input type = "text" placeholder="Street Address 2" rows ="7" cols = "30"required name="address2"><br/> </td>
            </tr>

            <tr>
                <td><input type ="text" placeholder="city" name="city" required id="inp" name="city"></td>
                <td><input type ="text" placeholder="state" name="state" required id="inp1" name="state"><br/></td>
            </tr>
            
            <tr>
                
                <td><textarea type="text" placeholder="Experience" rows ="7" cols = "30" required name="experience"></textarea> </td>
                
            </tr>
            



            <tr>
                <td><input type = "checkbox" id="checkbox1"> I'm not a robot</td>
                <td></td>
            </table>
                
                <tr>
                    <td>
                        
                        <input class="but1" type="submit" name="driverSubmit" value="Register">
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

<script src="js/reg_driver.js"></script>

</body>
</html>