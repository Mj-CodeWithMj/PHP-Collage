<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include("headerlink.php"); 
    ?>
<script type="text/javascript">

function f1()
{
  var fac_name=$("#fac_name").val()
  if(fac_name=="Select Faculty")
  {
    alert("Select Faculty");
    return false;
  }  
  var cour_name=$("#cour_name").val()
  if(cour_name=="")
  {
    alert("Enter Course Name");
    return false;
  }
  var cour_detail=$("#cour_detail").val()
  if(cour_detail=="")
  {
    alert("Enter Course Detail");
    return false;
  }
  
}

</script>    
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
                                    <h1>Add Course</h1>
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
                                    <li class="breadcrumb-item active">Add Course</li>
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
                                        Course Image:<input type="file" name="cour_img" 
                                        id="cour_img"class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <label>Select Faculty</label>
                                            <select class="form-control" name=" reg_id"
                                             id="reg_id">
                                             <option>Select Faculty</option>
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

                                            </select>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Course Name:<input type="text" name="cour_name" 
                                        id="cour_name"placeholder="Course Name" class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Course Details:<input type="text" name="cour_detail"
                                        id="cour_detail"placeholder="Course Details" class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Course" class="btn btn-default" onclick="return f1();">Add Course</button>
                                    </div>
                                </div>
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
            $con->query("INSERT INTO `add_course`(`cour_img` ,`reg_id`,`cour_name`, `cour_detail`) VALUES ('$name' ,'$reg_id','$cour_name','$cour_detail')");

            if($con)
            {
              echo "<script> alert ('Data Insert Succesfully') </script>";
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



  