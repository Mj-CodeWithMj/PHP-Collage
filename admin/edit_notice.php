<?php
    

    $id=$_GET['notice'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_notice where id=$id");


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
                                    <h1>Edit Notice</h1>
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
                                    <li class="breadcrumb-item active">Edit Notice</li>
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
                                        Add Notice for All:<input type="text" name="add_not_all" 
                                        id="add_not_all" placeholder="Add Notice"
                                        class="form-control input-flat" 
                                        value="<?php echo $row->add_not_all;       ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Add Notice for Student:<input type="text" 
                                        name="add_not_student" id="add_not" placeholder="Add Notice for Student" class="form-control input-flat"
                                        value="<?php echo $row->add_not_student;   ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Add Notice for Staff:<input type="text" name="add_not_staff" 
                                        id="add_not_staff" placeholder="Add Notice for Staff"
                                        class="form-control input-flat"
                                        value="<?php echo $row->add_not_staff;     ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Add Notice for Public:<input type="text" name="add_not_public"
                                        id="add_not_public" placeholder="Add Notice for Public"
                                        class="form-control input-flat" 
                                        value="<?php echo $row->add_not_public;    ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Notice" class="btn btn-default">Edit Notice</button>
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
            
            $add_not_all=$_POST['add_not_all'];
            $add_not_student=$_POST['add_not_student'];
            $add_not_staff=$_POST['add_not_staff'];
            $add_not_public=$_POST['add_not_public'];




            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("update add_notice set add_not_all='$add_not_all', add_not_student='$add_not_student',add_not_staff='$add_not_staff', add_not_public='$add_not_public' where id=$id");

            echo "<script>window.location.href='manage_notice.php';</script>";




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



  