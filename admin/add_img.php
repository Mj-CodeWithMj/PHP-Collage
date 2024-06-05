<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include("headerlink.php"); 
    ?>
</head>

<body>
    <!--  sidebar start =============================================================== -->
    <?php 
        include("sidebar.php");
    ?>
    <!--  sidebar end ================================================================= -->

    <!-- header start ================================================================= -->
    <?php 
        include("header.php"); 
    ?>
    <!-- header end =================================================================== -->


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>Add Photo</h1>
                                </div>
                             </div>
                        </div>
                    </div>         
                        <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Photo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->    
                <div class="row">        
                    <div class="col-lg-12">    
                       <div class="card">
                            <form method="post"  enctype="multipart/form-data" 
                                    class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Add Image:<input type="file" name="add_img" 
                                        id="add_img"class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Image" class="btn btn-default" onclick="return f1();">Add Image</button>
                                    </div>
                                </div>
                           </form> 
    <!-- php connection start =================================================================== -->
    <?php

      if ($_POST)
      {
            $ext = strtolower(pathinfo($_FILES["add_img"]["name"],PATHINFO_EXTENSION));
            $name=uniqid();
            $name=$name.".".$ext;
            move_uploaded_file($_FILES["add_img"]["tmp_name"], "add_img/$name");



            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("INSERT INTO `add_img`(`add_img`) VALUES ('$name')");

            if($con)
            {
              echo "<script> alert ('Image Upload Succesfully') </script>";
            }




      }

     ?>
    <!-- php connection  end  =================================================================== -->
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer start =================================================================== -->
    <?php
        include("footerlink.php");
    ?>
    <!-- Footer  end  =================================================================== -->
 
    
</body>
</html>



  