<?php
    

    $id=$_GET['course'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_course where id=$id");


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
                                    <h1>Edit Course</h1>
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
                                    <li class="breadcrumb-item active">Edit Course</li>
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
                                        Course Image:<input type="file" name="cour_img" 
                                        id="cour_img"class="form-control input-flat" 
                                        value="<?php echo $row->cour_img;          ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <label>Select Faculty</label>
                                            <select class="form-control" name=" reg_id"
                                             id="reg_id">
                                             <option>Select Faculty</option>
<?php 
   }
?> 


<?php 
 $con=mysqli_connect("localhost","root","","mju_collage");
  $data=$con->query("select * from fac_name");

  while($row=$data->fetch_object())
  {
?>               

                                            <option value="<?php echo $row->id; ?>"><?php echo $row->fac_name; ?></option>

<?php 

  }

?>
<?php

    $id=$_GET['course'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_course where id=$id");

    if($row=$data->fetch_object())
    {


?> 

                                            </select>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Course Name:<input type="text" name="cour_name" 
                                        id="cour_name"placeholder="Course Name" class="form-control input-flat" value="<?php echo $row->cour_name;         ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Course Details:<input type="text" name="cour_detail"
                                        id="cour_detail"placeholder="Course Details" 
                                        class="form-control input-flat" 
                                        value="<?php echo $row->cour_detail;       ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Staff" class="btn btn-dark" onclick="return f1();">Edit Course</button>

                                        <button class="btn btn-success" onclick="history.back()">Back</button>
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
            $ext = strtolower(pathinfo($_FILES["cour_img"]["name"],PATHINFO_EXTENSION));
            $name=uniqid();
            $name=$name.".".$ext;
            move_uploaded_file($_FILES["cour_img"]["tmp_name"], "course_img/$name");

            $reg_id=$_POST['reg_id'];
            $cour_name=$_POST['cour_name'];
            $cour_detail=$_POST['cour_detail'];


            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("update add_course set cour_img='$name', reg_id='$reg_id', 
                cour_name='$cour_name', cour_detail='$cour_detail' where id=$id");

            
              echo "<script>window.location.href='manage_course.php';</script>";
            




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



  