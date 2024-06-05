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

	<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Staff				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="teacher.php">Staff</a>
							</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<br>
			<br>		
           <!-- Start popular-course Area -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                    	<h2 class="section-title">Our Teachers</h2>
<?php

    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_staff");

    while($row=$data->fetch_object())
    {

?>  				                    		                    	
                        
                        
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="admin/staff_img/<?php echo $row->staff_img;    ?>" alt="teacher" style="width:300px; height: 300px;">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row->full_name;    ?></h4>
                                <p><?php echo $row->post;         ?></p>
                             
                            </div>
                        </div>
<?php 
    }  
  
?>                        
                    </div>
                </div>
            </div>
        </section>            
        
           <!-- End popular-course Area -->

						
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