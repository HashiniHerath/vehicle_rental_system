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
    <link rel="stylesheet" href="css/aboutus.css">

</head>
<body>
    
<?php include("nav.php");?>

<!------------------------- copy your code here [payment] ------------------------->

<section class="body">

   <div class="au">
        <p>About Us</p>
    </div>

    <div class="company">
        <div class="imgs" >
            <img src="image/company.png">
        </div>
        <div class="para">
            <h3>OUR COMPANY</h3><br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat rhoncus turpis, in vestibulum nunc dapibus a. Nulla eget hendrerit odio. Suspendisse non elementum neque. Sed et purus tortor. Integer ac bibendum tortor. Fusce sit amet ante odio. In lacus urna, iaculis sit amet mattis faucibus, malesuada nec tellus. Quisque ultricies <span id="dots"> ... </span><span id="more">metus id tellus tempor ultrices.Phasellus viverra est tincidunt augue gravida imperdiet sit amet eget dui. Integer sit amet ultrices neque. Donec in ex vel leo accumsan imperdiet. Suspendisse ut rutrum tellus. Suspendisse vel turpis sit amet sapien fringilla accumsan. Pellentesque et justo sit amet est sodales tempor. Proin tempor nisi vel justo tincidunt, a commodo mauris molestie.</span>
            </p><br>
            <button onclick="company()" id="myBtn">Read more</button>
        </div>
    </div>


    <div class="mission">
        <div class="imgs">
            <img src="image/mission.png">
        </div>
        <div class="para">
            <h3>OUR MISSION</h3><br><br>
            <p>
                Vestibulum mattis sodales risus aliquam dapibus. In quis laoreet orci. Phasellus nisi elit, efficitur porta dictum quis, varius nec libero. Cras egestas justo ac pretium rutrum. Vivamus vel justo nec elit laoreet molestie ut at sem. Morbi venenatis augue sed lacinia pulvinar. Quisque congue massa eros, ut facilisis mauris <span id="dots2"> ... </span><span id="more2">interdum nec. Nam ut porta diam, eu mollis erat. Vivamus id tellus sed elit cursus interdum eu vel mauris.Duis porta volutpat leo, et varius ex consectetur vitae. Pellentesque luctus arcu ut lorem faucibus, sit amet scelerisque tellus commodo. Mauris placerat fringilla risus, at molestie diam pulvinar ut. Quisque molestie turpis et nibh varius suscipit. Curabitur quis libero sed nibh congue sollicitudin. Nunc volutpat eu mi ut luctus. Nunc sed mi ante. Sed fermentum aliquam sem vitae condimentum. Vestibulum rutrum commodo tellus, a tincidunt quam laoreet ut. Quisque augue massa, pulvinar non molestie ac, efficitur ut arcu. Fusce malesuada egestas sollicitudin. Curabitur eu tristique arcu, sit amet placerat eros. Nulla quis sem consectetur, congue libero vitae, euismod risus. Duis a turpis erat.</span>
            </p><br>
            <button onclick="mission()" id="myBtn2">Read more</button>
        </div>
    </div>


    <div class="clients">
        <div class="imgs">
            <img src="image/clients.png">
        </div>
        <div class="para">
            <h3>OUR CLIENTS</h3><br><br>
            <p>
                Etiam scelerisque placerat ullamcorper. Fusce cursus dui iaculis scelerisque lobortis. Nam id auctor risus, sit amet mollis tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas eget tempus velit. Nunc id urna nec nulla placerat pulvinar non sed massa. Morbi tincidunt pellentesque consectetur. Vivamus cursus bibendum mi ut condimentum.Nam sit amet tincidunt nulla. Pellentesque congue nulla a erat pellentesque iaculis. <span id="dots3"> ... </span><span id="more3">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec condimentum velit eu convallis finibus. Aliquam placerat mollis tristique. Curabitur vehicula maximus erat sed convallis. Phasellus eu est eleifend, congue enim a, bibendum nisi. Duis risus quam, volutpat non justo in, lacinia fringilla lectus. Donec suscipit diam ut ante gravida, eu facilisis eros imperdiet. Duis ut sem viverra odio hendrerit blandit blandit et risus. Ut dictum tempor eros, vitae aliquet eros. Vestibulum semper tempus lorem eget cursus. Morbi nunc enim, mattis nec finibus et, semper ac ligula.</span>
            </p><br>
            <button onclick="clients()" id="myBtn3">Read more</button>
        </div>
    </div>

    </div>

</section>

<!------------------------- copy your code here [payment] ------------------------->

<?php include("footer.php");?>






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/aboutus.js"></script>

</body>
</html>