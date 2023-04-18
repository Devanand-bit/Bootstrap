 <?php 
session_start();
if(!$_SESSION['email'])
{
  header("Location:Login3.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
       

      
                <div class="container-fluid bg-primary">
                 <img src="head.png" height="140px" width="1259px">
                 <ul class="nav nav-tabs bg-success">
                  <li class="active"><a href="http://127.0.0.1:5500/newsite.html">Home</a></li>
                 
                
                
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/physics.html">Physics</a></li>
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/CHIMI.html">Chemistry</a></li>
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/max.html">Mathematics</a></li>
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/english.html">English</a></li>
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/kannada.html">Kannada</a></li>
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/hindi.html">Hindi</a></li>
                    </ul>
                </li>
                
                
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/admine.html">Admission</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/couser.html">Course</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/couseroutcome.html">Course Outcome</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/collegecommitti.html">College Committee</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/conferences.html">Conferences/Seminars</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/workshop.html">Workshop/Webinar</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/result.html   ">Result</a></li>
                                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/othereprogram.html">Other Programs</a></li>
          
                                    </ul>
                                </li>
                
                
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Facilities<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/libarey.html">Library</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Infrastructure.pdf">Infrastructure</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Auditorium-Seminar-Hall%20(1).pdf">Auditorium</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/HOSTEL%20NEW.pdf">Hostel</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Health%20Care%20Center.pdf">Health Center</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Yoga%20for%20website.pdf">Yoga Center</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Parking.pdf">Parking</a></li>
                        <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Security.pdf">Security</a></li>
                    </ul>
                </li>
                
                
                 <li class="nav-item">
                    <a class="nav-link text-light" href="http://localhost/web/insert.php">Insert Record</a>
                </li>
          
                
                 <li class="nav-item">
                    <a class="nav-link text-light" href="http://localhost/web/search.php">Search Records</a>
                </li>
          

               
                 <li class="nav-item">
                    <a class="nav-link text-light" href="http://localhost/web/view.php">View Record</a>
                </li>
                  

                 <li class="nav-item">
                    <a class="nav-link text-light" href="http://localhost/web/update2.php">Update Record</a>
                </li>

                
                 <li class="nav-item">
                    <a class="nav-link text-light" href="http://127.0.0.1:5500/concant.html">Contact Us</a>
                </li>
          
                  
             
            <div class="container-fluid">
                <div class="navbar-collapse  navbar-right"  style="height: 0px"> 
                  <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/web/login3.php"><span class="glyphicon glyphicon-log-in"> <b>Login</span></a></li>
                    
                     <span class="glyphicon glyphicon-" style="height: 100px;" ></span>
                   </a></li>
        
                  </ul> </div></div></div>
          
              </ul>
            </div>
          </nav>
          <div class="container">
           
          </div>
          
          </body>
          </html>







<html>
 <head>	
 </head>

<style>	
#tab{border-radius: 10px; background-color:slateblue; color: blacks; font-size: 14pt;}
#tx1{border-radius: 15px; background-color: lightblue; color: black; font-size: 15px;}
#tx2{border-radius: 15px; background-color: lightblue; color: black; font-size: 15px;}
#tx3{border-radius: 15px; background-color: lightblue; color: black; font-size: 15px;}	

#hd{color:; font-family: tahoma; text-shadow: 2px 2px black; border-radius: 20px;}
#bt1{background-color:green; color:whitesmoke; border-radius: 40px; font-size: 17;}
#bt2{background-color:brown; color:white; border-radius: 30px; font-size: 17;}

</style>

 <body><center>
 
<h1> Find and Update Record </h1>
 
<form name="f1" action="update2.php" method="POST">
		<table border="0" id="tab">

<b><tr><td>Enter Student Rollno : </td><td><input type="text" name="t1" placeholder="Enter Rollno" ><br></td><br>

	<td><input type="submit" name="b1" value="Find" id="bt1"></td></tr>




<?php 
if(isset($_POST['b1']))
 {
 $rl=$_POST['t1'];
 
 $con=mysqli_connect("localhost","root","","colloge");

 if(mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL:".mysqli_connect_errno();
}
$result=mysqli_query($con,"SELECT * FROM std_info WHERE rollon='$rl'");

echo "<table id='tab'><br><br><br><br>";

while($row=mysqli_fetch_array($result))
{

	echo "<tr><from name=f3 method='POST'>";
	echo "<table border='0' id='tab'>
	<tr>
	<td> <b>Enter Rollno :</td><td> <input type=text id=tx1 name=rl value=".$row['rollon']."></td></table><br>";

	echo "<table border='0' id='tab'>
	<tr>
	<td> <b>Student Name:</td><td> <input type=text id=tx2 name=sn value=".$row['sname']."></td></table><br>";
	
	echo " <table border='0' id='tab'>
	<tr>
	<td> <b>Enter Class :</td><td> <input type=text id=tx3 name=cl value=".$row['class']."></td></table><br>";
}
}
echo "</table>";
echo "<br><left>";
 
if(isset($_POST['b2']))
{
$rl=$_POST['rl'];
$sn=$_POST['sn'];
$cl=$_POST['cl'];

$con=mysqli_connect("localhost","root","","colloge");

if (mysqli_connect_errno())

{
echo "Failed to connect to MySQL:". mysqli_connect_errno();
}

$sql="UPDATE std_info SET sname='$sn',rollon='$rl',class='$cl' WHERE rollon='$rl'";

if (!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
echo "<br><p id='tab'>Record UPdated Successfully!</p>";
mysqli_close($con);
}
?>
<input type="submit" name="b2" value="Update" id="bt2">
</form>	</form></body></html>




 <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="container-fluid">

    <footer class="text-lg-start text-white" style="background-color: lightblue; font-size:16px ;">
        <!-- Grid container -->
        <div class="container-fluid p-2">
            <!--Grid row-->
            <div class="row mt-2">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 pe-3 ps-3">
                  <align="left"><h5 class="text-uppercase"><b>Contact Details</b></h5></align>

                    <ul class="list-unstyled mb-0">
                        <li>
                           <li class="fa-solid fa-location-dot text-warning"></li> <a href="#" class="text-white" style="text-decoration:none">&nbsp; <span class="glyphicon">&#xe062;    Sharanabasaveshwar College of Science Vidya Nagar, Kalaburagi – 585103. Karnataka (India) </a></span> <br>
                        </li>
                      </li><br>
                      <div align="Left"><li class="fa-solid fa-phone text-warning"></li><a href="#" class="text-white" style="text-decoration:none" ><span class="glyphicon glyphicon-earphone">  08472-221941<br></a></span> 
                        </li></align></div>
                      </li><br>
                      <div align="left"><li class="fa-solid fa-envelope text-warning"></li><a href="mailto:sbcscg@gmail.com" class="text-white" style="text-decoration:none" >&nbsp;  <span class="glyphicon glyphicon-envelope">    E-mail Id : sbcscg@gmail.com<br></a></span> 
                        </li><br></div>
                      
                    </ul>
                </div>
                
                <!--Grid column-->
                <!--Grid column-->
                <table border="0" align="left
                ">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0  pe-3 ps-3">
                   <tr><td> <h5 class="text-uppercase text-center"><b>Quick Links</h5></td>
                    
                    <ul class="list-unstyled">

                      
                           <tr><td> <i class="fa-solid fa-angle-right text-warning"></i>
                          <br> <a href="http://127.0.0.1:5500/newsite.html" class="text-white  text-left" style="text-decoration: none">&nbsp;  <span class="glyphicon glyphicon-menu-right">  Home</a>
                            </td></span>
                      
                          <tr><td>  <i class="fa-solid fa-angle-right text-warning"></i>
                            <br><a href="../Pages/VisionMission.aspx" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right">  Academics</a></span>
                        </td>
                        
                          <tr><td>  <i class="fa-solid fa-angle-right text-warning"></i>
                            <br><a href="../Pages/Admission.aspx" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right">  DEPARTMENT </a></span>
                        </td>
                        
                            <tr><td><i class="fa-solid fa-angle-right text-warning"></i>
                              <br><a href="../Pages/Library.aspx" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right">  Facilities</a></span>
                        </td>
                          
                        
                           <tr><td> <i class="fa-solid fa-angle-right text-warning"></i>
                           <br> <a href="http://127.0.0.1:5500/concant.html" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right">  Contact Us<br></a></span
                        </td></tr>
                         
                    </ul>
                </div>
                <!--Grid column-->
                <table border="0" align="center">
                 <div class="col-lg-6 col-md-12 mb-md-0 pe-3 ps-3">
                     <tr><td><iframe  class="Googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15234.976902804401!2d76.8233766!3d17.3278857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfba38b632d8471bd!2sSharnbasveshwar%20College%20of%20Science%2C%20Gulbarga!5e0!3m2!1sen!2sin!4v1672378438976!5m2!1sen!2sin" width="600px" height="280" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </td></tr>    
                  </div>
                 </table></table></div></div> </tr>
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
       
        <!-- Copyright -->
        <div class="row p-0">
            <center class="p-0">
                <div class="col-sm-12 center-block text-center text-black p-0 pb-1 pt-1" style="background-color: rgba(0, 0, 0, 0.2)">
                    <big style="color: Black"><a href="https://aargees.com/" target="_blank" style="text-decoration: none;">
                        <span style="letter-spacing: 2px;" class="logo">
                            <big>

                               
                            </big>
                        </span></a>
                        </big> 
                </div>
            </center>
        </div>

    </footer>

</div>


</body>
</html>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>


</body>
</html>

 
            
 </center></body></html> 

