<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <?php 
     include("headerlink.php");	 

     $fac_id=$_GET['id'];                   
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
								Faculties				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a> 
                            <span class="lnr lnr-arrow-right"></span>  

<?php 
 $con=mysqli_connect("localhost","root","","mju_collage");
  $data=$con->query("select * from fac_name where id='$fac_id'");

  while($row=$data->fetch_object())
  {
?>                            
                            <a href="fac.php"><?php echo $row->fac_name; ?></a>

<?php 

  }  

?>


							</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<br>
			<br>		
           <!-- Start popular-course Area -->
        <section class="popular-course-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
<?php 
 $con=mysqli_connect("localhost","root","","mju_collage");
  $data=$con->query("select * from fac_name where id='$fac_id'");

  if($row=$data->fetch_object())
  {
?>                                
                                <h1 class="mb-10"><?php echo $row->fac_name; ?></h1>

<?php 

  }  

?>


                                <p>There is a moment in the life of any aspiring.</p>
                            </div>
                        </div>
                    </div>                      
                    <div class="row">                        
                        <div class="active-popular-carusel">
<?php
    
        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select * from add_course as ac join fac_name as fc ON ac.reg_id=fc.id and reg_id='$fac_id'");
        
        while($row=$data->fetch_object())
        {
?>                            
                            <div class="single-popular" style="margin: 10px;">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" width="350px" height="240px" src="admin/course_img/<?php echo $row->cour_img;          ?>" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                    </div>                                  
                                </div>
                                <div class="details"><br>
                                        <h2>
                                           <?php echo $row->cour_name; ?>    
                                        </h2>
                                       
                                        <h4>
                                            Learn Designing
                                        </h4>
                                    <p>
                                        <?php echo $row->cour_detail; ?>                                       
                                    </p>
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