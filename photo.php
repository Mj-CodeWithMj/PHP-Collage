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
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="photo.php">Photo Gallery</a>
							</p>
						</div>	
					</div>
				</div>
			</section>
	<!-- End banner Area -->
	<!-- img start -->
            <section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
<?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select * from add_img");

        while($row=$data->fetch_object())
        {

    ?> 						
						<div class="col-lg-3">
							<a href="admin/add_img/<?php echo $row->add_img;           ?>" 
								class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="admin/add_img/<?php echo $row->add_img;           ?>" alt="image">		
									</div>
								</div>
							</a>
						</div>
<?php                                        


        }

    ?>						
					</div>
				</div>
			</section>			
        <!-- img end -->					
	
						
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