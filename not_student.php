<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <?php 
     include("headerlink.php");	
    ?>		
</head>
<body>	
    <!-- header start -->
    <?php 
       include("header.php");
    ?>
    <!-- header  end  -->

	<!-- start code Area -->
	
	<!-- End code Area -->
					
	<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Notice				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="not_student.php">Notice for Student</a>
							</p>
						</div>	
					</div>
				</div>
			</section>
	<!-- End banner Area -->
     <div class="whole-wrap">
		<div class="container">
            <div class="section-top-border">
						<h3 class="mb-30">Table</h3>
						<div class="progress-table-wrap" >
							<div class="progress-table">
								<div class="table-head">
									<div class="country"style="font-size:20px;">Notice</div>
								</div>
<?php

    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_notice");

    while($row=$data->fetch_object())
    {

?>
								<div class="table-row">
									<div class="country" style="font-size:19px;"><?php echo $row->add_not_student;   ?>
								    </div>
								</div>
<?php                                        


        }

?>								
							</div>
						</div>
					</div>                                     
               </div>
           </div>      
        
	
						
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