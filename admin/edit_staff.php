<?php
    

    $id=$_GET['staff'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("select * from add_staff where id=$id");


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
                                    <h1>Edit Staff</h1>
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
                                    <li class="breadcrumb-item active">Edit Staff</li>
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
                                        Upload Image:<input type="file" name="staff_img"
                                        id="staff_img"class="form-control input-flat"
                                        value="<?php echo $row->staff_img;    ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Full Name:<input type="text" name="full_name" id="full_name"
                                        placeholder="Full Name" class="form-control input-flat" 
                                        value="<?php echo $row->full_name;    ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Staff Post:<input type="text" name="post" id="post" 
                                        placeholder="staff Post" class="form-control input-flat"
                                        value="<?php echo $row->post;         ?>">
                                    </div>    
                                    <div class="col-sm-8 col-sm-offset-3"> 
                                        Gender: <br><br>
                                        Male <input type="radio" placeholder="Gender" name="gender"
                                         id="gender" value="<?php echo $row->gender;       ?>" class="form-control input-sm" checked> 
                                        Female <input type="radio" placeholder="Gender" name="gender"
                                        id="gender" value="<?php echo $row->gender;       ?>" class="form-control input-sm">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Birthdate:<input type="date" name="bdate" id="bdate" 
                                        class="form-control input-flat"
                                        value="<?php echo $row->bdate;        ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Date of Join:<input type="Date" name="jdate" id="jdate" 
                                        placeholder="Date of Join" class="form-control input-flat"
                                        value="<?php echo $row->jdate;        ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        Salary:<input type="text" name="salary" id="salary" 
                                        placeholder="staff Salary" class="form-control input-flat"
                                        value="<?php echo $row->salary;       ?>">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button type="submit" name="submit" id="submit" value="Add Staff" class="btn btn-default" onclick="return f1();">Add Staff</button>
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
            $ext = strtolower(pathinfo($_FILES["staff_img"]["name"],PATHINFO_EXTENSION));
            $name=uniqid();
            $name=$name.".".$ext;
            move_uploaded_file($_FILES["staff_img"]["tmp_name"], "staff_img/$name");

            $full_name=$_POST['full_name'];
            $post=$_POST['post'];
            $gender=$_POST['gender'];
            $bdate=$_POST['bdate'];
            $jdate=$_POST['jdate'];
            $salary=$_POST['salary'];

            $con=mysqli_connect("localhost","root","","mju_collage");
            $con->query("update add_staff set staff_img='$name',full_name='$full_name',post='$post',
                gender='$gender',bdate='$bdate',jdate='$jdate',salary='$salary' where id=$id");

            
              echo "<script>window.location.href='manage_staff.php';</script>";
    




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



  