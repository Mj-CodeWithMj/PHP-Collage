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
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Manage Course</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Manage Course</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->              
                 <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Course Image</th>
                                                            <th>Faculty Name</th>
                                                            <th>Course Name</th>
                                                            <th>Course Detail</th>
                                                            <th class="text-left">Action</th>
                                                        </tr>
                                                    </thead>
    <!-- php connection =================================================================== -->  
    <?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select ac.id,ac.cour_img,fc.fac_name,ac.cour_name,ac.cour_detail from add_course as ac join fac_name as fc ON ac.reg_id=fc.id");
        while($row=$data->fetch_object())
        {

    ?>        



                                  
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row->id;                ?></td>
                                                    <td><?php echo $row->cour_img;          ?></td>
                                                    <td><?php echo $row->fac_name;          ?></td>
                                                    <td><?php echo $row->cour_name;         ?></td>
                                                    <td><?php echo $row->cour_detail;       ?></td>
                                                    <td class="text-left"><a href="delete_course.php?course=<?php echo $row->id; ?>"><i class="fa fa-trash" aria-hidden="true" style="size: 20px;"></i></a>/
                                                    <a href="edit_course.php?course=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
    <?php                                        


        }

    ?>                                        
    <!-- php connection =================================================================== -->                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
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



 