<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <?php 
     include("headerlink.php");	
    ?>
    
<script type="text/javascript">
function f2()
{
  var name=$("#name").val()
  if(name= "")
  {
    alert("Enter Name");
    return false;
  }
  var email=$("#email").val()
  if(email= "")
  {
    alert("Enter Email");
    return false;
  }
  var subject=$("#subject").val()
  if(subject= "")
  {
    alert("Enter Subject");
    return false;
  }
  var message=$("#message").val()
  if(message= "")
  {
    alert("Enter Message");
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
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Mumbai Mharastra India</h5>
									<p>
										4343 high street novel
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+918484664648</h5>
									<p>Mon to Sat 7 am to 3 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>mju23support@gmail.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form  method="post" class="form-area contact-form text-right" >
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input type="text" name="name" id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" >
									
										<input type="email" name="email" id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" >

										<input type="text" name="subject" id="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" >
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message"
										id="message" placeholder="Enter Messege" onfocus="this.
										placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<button type="submit" name="submit" id="submit" 
										value="Send Messege" onclick="return f2();">Send Messege</button>						
									</div>
								</div>
							</form>
						</div>		
<!-- =================================	php connection start ===================================== -->
<?php 
  
  if($_POST)
  {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $con=mysqli_connect("localhost","root","","mju_collage");
   $con->query("INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('$name',
   	'$email','$subject','$message')");
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
<!-- =================================	php connection  end ===================================== -->
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
	
						
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