<?php
    

    $id=$_GET['faculty'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from fac_name where id=$id");


?>
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
                                    <h1>Edit Faculty</h1>
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
                                    <li class="breadcrumb-item active">Edit Faculty</li>
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
<?php 

    if($row=$data->fetch_object())
    {


?>                                    

                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Faculty Name:<input type="text" name="fac_name" 
                                        id="fac_name"placeholder="Faculty Name" class="form-control input-flat"
                                        value="<?php echo $row->fac_name;  ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Faculty Name" class="btn btn-default" onclick="return f1();">Add Faculty Name</button>
                                    </div>
                                </div>
<?php  

    }

?>                                  
                           </form> 
    <!-- php connection start =================================================================== -->
    <?php

      if ($_POST)
      {
            

            $fac_name=$_POST['fac_name'];
            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("update fac_name set fac_name='$fac_name' where id=$id");

            echo "<script>window.location.href='manage_fac_name.php';</script>";




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



  