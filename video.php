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
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="video.php">Video Gallery</a>
							</p>
						</div>	
					</div>
				</div>
			</section>
	<!-- End banner Area -->
        <section class="popular-course-area section-gap">
                <div class="container">                   
                    <div class="row">
                        <div class="single-popular">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
<?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select * from add_video");

        while($row=$data->fetch_object())
        {

    ?>                                       
                                    <video width="380px" height="240px" 
                                    style="border: 10px solid; margin-right: 20px;
                                    margin-bottom: 20px;" controls>
                                        <source src="admin/add_img/<?php echo $row->add_video;  ?>" type="video/mp4">
                                    </video>
<?php                                        


        }

    ?>                                    
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>      
        </section>
	
						
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