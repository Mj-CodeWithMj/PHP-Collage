        	<header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			  				</ul>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><h1 style="color:#adad7a;">M.J-University</h1></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          <li class="menu-has-children"><a href="#">About</a>
			            <ul>
			              <li><a href="misson.php">Misson</a></li>
			              <li class="menu-has-children"><a href="#">Campus</a>
			                <ul>
			                    <li><a href="main_camp.php">Main Campus</a></li>
			                    <li><a href="rech_camp.php">Research Centre</a></li>
			                    <li><a href="admin_camp.php">Administrative Centres</a></li>
			                </ul>
			             </li>
			              <li><a href="reward.php">Reward of University</a></li>
			            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Admission</a>
			            <ul>
			              <li><a href="how_apply.php">How to Apply</a></li>
			              <li><a href="apply.php">Apply Now</a></li>
			              <li><a href="fees.php">Pay fees</a></li>
			              <li><a href="scholarship.php">Scholarship</a></li>
			              <li><a href="hostel.php">Hostel Facility</a></li>
			            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Faculties</a>
			            <ul>

			            	<?php
			            		 $con=mysqli_connect("localhost","root","","mju_collage");

			            		$data = $con->query("select * from fac_name");

			            		while ($row=$data->fetch_object()) {
			            			
			            		
			            	?>


			              <li><a href="fac.php?id=<?php echo $row->id;?>"><?php echo $row->fac_name; ?></a></li>
			              <?php

			             }

			             ?>
			            </ul>
			          </li>
			          <li><a href="teacher.php">Teacher</a></li>
			          <li class="menu-has-children"><a href="#">Gallery</a>
			            <ul>
			              <li><a href="photo.php">Photo Gallery</a></li>
			              <li><a href="video.php">Video Gallery</a></li>
			            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Notice</a>
			            <ul>
			              <li><a href="not_all.php">All</a></li>
			              <li><a href="not_student.php">Student</a></li>
			              <li><a href="not_staff.php">Staff</a></li>
			              <li><a href="not_public.php">Public</a></li>
			            </ul>
			          </li>					          					          		          
			          <li><a href="contact.php">Contact</a></li>
			        </ul>
			      </nav>		    		
		    	</div>
		    </div>
        </header>