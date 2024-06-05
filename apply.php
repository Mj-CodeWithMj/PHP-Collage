<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <?php 
     include("headerlink.php");	
    ?>	
 <script type="text/javascript">
 function f1()
 {
 
   var full_name=$("#full_name").val()
   if(full_name== "")
   {
   	 alert("Enter Full Name");
   	 return false;
   }
   var first_name=$("#first_name").val()
   if(first_name== "")
   {
   	 alert("Enter First Name");
   	 return false;
   }
   var surname=$("#surname").val()
   if(surname== "")
   {
   	 alert("Enter Surname");
   	 return false;
   }
   var email=$("#email").val()
   if(email== "")
   {
   	 alert("Enter Email");
   	 return false;
   }
   var Country=$("#Country").val()
   if(Country== "Country")
   {
   	 alert("Select Country");
   	 return false;
   }

 }
 </script>   	
</head>
<body>	
    <!-- header start -->
    <?php 
       include("header.php");
    ?>
    <!-- header  end  -->

	<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							   Admission				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="apply.php"> Apply Now</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<br>
			<br>		
           <!-- Start code Area -->
                <div class="whole-wrap">
             	   <div class="container">
             		    <div class="row">
             			    <div class="col-lg-8 col-md-8">
             				<h3 class="mb-30">Apply Now</h3>
             				    <form method="post">
									<div class="mt-10">
								    Full Name:<input type="text" name="full_name" id="full_name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input">
									</div>
									<div class="mt-10">
									First Name:<input type="text" name="first_name" id="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
									</div>
									<div class="mt-10">
								    Surname:<input type="text" name="surname" id="surname" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" required class="single-input">
									</div>
									<div class="mt-10">
									Email:<input type="email" name="email" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div><br>
									<div class="input-group-icon mt-10">
									  <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i>
									  </div>
										<div class="form-select" id="default-select2">
											<select name="Country" id="Country">
												<option>Country</option>
												<option>Bangladesh</option>
												<option>India</option>
												<option>England</option>
												<option>Srilanka</option>
											</select>
										</div>
									</div>
									<br>
									Gender: <br>   
									<label for="confirm-radio">Male:</label>
									<input type="radio" name="gender" id="gender" value="Male" checked>
                                    <label for="confirm-radio">Female:</label>
							        <input type="radio" name="gender" id="gender" value="Female">
							        <br><br>
								    <div class="input-group-btn">
									    <button class="btn btn-default"><input type="submit" name="submit" id="submit" value="Apply Now" style="color: red; border : darkred ; border-radius: 15px;" onclick="return f1();">
									    </button>    
									</div> 
							    </form>
							    <br>
<!-- =================================	php connection start ===================================== -->
<?php
    
    if($_POST)
    {
     $full_name=$_POST['full_name'];
     $first_name=$_POST['first_name'];
     $surname=$_POST['surname'];
     $email=$_POST['email'];
     $Country=$_POST['Country'];
     $gender=$_POST['gender'];

     $con=mysqli_connect("localhost","root","","mju_collage");
     $con->query("INSERT INTO `apply_now`(`full_name`, `first_name`, `surname`, `email`, `Country`, `gender`) VALUES ('$full_name','$first_name','$surname','$email','$Country','$gender')");
     if($con)
     {
       echo "<script> alert ('Data insert succesfully')</script>";
     }
     else
     {
       echo "<script> alert ('Failed')</script>";
     }
    }
?>
<!-- =================================	php connection  end  ===================================== -->

             			   </div>
             		   </div>
             	    </div>
                </div>
		   <!-- End code Area -->

						
	<!-- start footer Area -->		
	    <?php 
	      include("footer.php"); 
	    ?>	
	<!-- End footer Area -->	

    <!-- footer link start -->
		<?php 
		   include("footerlink.php"); 
		?>	
	<!-- footer link  end -->		
</body>
</html>