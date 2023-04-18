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
<center>


 
		<h1 align="top"  style="background-color:lightsteelblue;color: black" id="tx"><b>Welcome:



		<?php echo $_SESSION['email'];?>
		</h1>

				
	<html>
<head>
	<style>

			#tab1{border-radius: 50px; width: 100px; height: 50; background-image:liner-gradient(to right,sky,lightgreen,whitesmoke); text-align: center; text-shadow: 0px 0px black;}
		
		#tab2{border-radius: 10px; width: 50; height: 50; background-image:liner-gradient(to right,white,green,skyblue); text-align: center; text-shadow: 0px 0px black}

#tab3{border-radius: 10px; width: 50; height: 50; background-image:liner-gradient(to right,white,browen,yellow); text-align: center; text-shadow: 0px 0px black}

#tab4{border-radius: 10px; width: 50; height: 50; background-image:liner-gradient(to right,white,orange, red); text-align: center; text-shadow: 0px 0px black;}
		

		body{border-radius: 10px; background-color:white ; font-family: tahoma; color: red;
		}
		#tx{border-radius: 10px; background-color:khaki; font-family: tahoma; color: white;}
		
		#tab{border-radius: 10px; background-color:orange;font-family: tahoma; font-size: 16; color: red;}

        #hd{border-radius: 10px; background-color: khaki;  font-family: tahoma; color: blue;}
        
        #bt{border-radius: 10px; background-color:blue;font-family: tahoma; font-size: 16; color: skyblue;}
        </style>  
         </head>

         <body>
         <center>
           
           	<form name="f1">
           		
 


    </table></form></center> 

</body>
</html>
</b></b></marquee></p></font></font></b></a></td></font></b></a></td></font>
			
		  <div class="container-fluid">
              <h2></h2>  
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="a.jpg"  style="height: 50%; width: 100%";>
                  </div>
            
                  <div class="item">
                    <img src="c.jpg"  style="width:150%; height: 100%;">
                  </div>
                
                  <div class="item">
                    <img src="fir.jpg"  style="width:100%; height: 100%;">
                  </div>
                </div>
            
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
   




		 
 
		<font-size='2'>
		<h3 align="center">
		<a href="logout3.php">Logout here</a></h3>
		</body></center></html>	

<font color="lightgreen" size="5" face="tahoma">
        <h1 style="background:lightblue; color:blue;"><p><marquee><b>Thank you for 
        visiting our website<b></marquee></p>
 




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

