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
                                <h1>Apply Student List</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Apply Student List</li>
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
                                                            <th>Full Name</th>
                                                            <th>First Name</th>
                                                            <th>Surname</th>
                                                            <th>Email</th>
                                                            <th>Country</th>
                                                            <th class="text-left">Gender</th>
                                                        </tr>
                                                    </thead>
    <!-- php connection =================================================================== -->  
    <?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select * from apply_now");

        while($row=$data->fetch_object())
        {

    ?>        



                                  
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row->id;              ?></td>
                                                    <td><?php echo $row->full_name;       ?></td>
                                                    <td><?php echo $row->first_name;      ?></td>
                                                    <td><?php echo $row->surname;         ?></td>
                                                    <td><?php echo $row->email;           ?></td>
                                                    <td><?php echo $row->Country;         ?></td>
                                  <td class="text-left"><?php echo $row->gender;          ?></td>
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



 