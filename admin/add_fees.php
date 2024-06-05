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
                                    <h1>Add Fees Details</h1>
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
                                    <li class="breadcrumb-item active">Add Fees Details</li>
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
                                       <select name="reg_id" id="reg_id"
                                        class="form-control">
                                           
                                         <?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select * from apply_now");

        while($row=$data->fetch_object())
        {

    ?>        


                                           <option value="<?php echo $row->id; ?>"><?php echo $row->full_name; ?></option>


<?php


}

?>                                       </select>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Add Fees:<input type="text" name="add_fees"
                                        id="add_fees" placeholder="Add Fees"
                                        class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Date:<input type="date" name="add_date"
                                        id="add_date" placeholder="Add Date"
                                        class="form-control input-flat">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Fees" class="btn btn-default">Add Fees</button>
                                    </div>
                                </div>
                           </form> 
    <!-- php connection start =================================================================== -->
    <?php

      if ($_POST)
      {
            
            $reg_id=$_POST['reg_id'];
            $add_fees=$_POST['add_fees'];
            $add_date=$_POST['add_date'];
            
            
            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("INSERT INTO `add_fees`(`reg_id`, `add_fees`, `add_date`) VALUES ('$reg_id','$add_fees','$add_date')");

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



  