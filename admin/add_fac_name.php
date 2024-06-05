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
  if(fac_name=="")
  {
    alert("Enter Faculty Name");
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
                                    <h1>Add Faculty</h1>
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
                                    <li class="breadcrumb-item active">Add Faculty</li>
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
                                        Faculty Name:<input type="text" name="fac_name" 
                                        id="fac_name"placeholder="Faculty Name" class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Faculty Name" class="btn btn-default" onclick="return f1();">Add Faculty Name</button>
                                    </div>
                                </div>
                           </form> 
    <!-- php connection start =================================================================== -->
    <?php

      if ($_POST)
      {
            

            $fac_name=$_POST['fac_name'];
            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("INSERT INTO `fac_name`(`fac_name`) VALUES ('$fac_name')");

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



  