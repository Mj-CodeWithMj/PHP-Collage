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
                                <h1>Manage Fees</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Manage Fees</li>
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
                                                            <th>Name Student</th>
                                                             <th>Email</th>
                                                            <th>Fees Student</th>
                                                            <th class="text-left">Date</th>
                                                        </tr>
                                                    </thead>
    <!-- php connection =================================================================== -->  
    <?php

        $con=mysqli_connect("localhost","root","","mju_collage");
        $data=$con->query("select af.id,ap.full_name,ap.email,af.add_fees,af.add_date from add_fees as af join apply_now as ap ON af.reg_id=ap.id");

        while($row=$data->fetch_object())
        {

    ?>        



                                  
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row->id;                ?></td>
                                                    <td><?php echo $row->full_name;       
                                                    ?></td> 
                                                     <td><?php echo $row->email;       
                                                    ?></td> 
                                                    <td><?php echo $row->add_fees;   
                                                    ?></td>
                                                    <td class="text-left"><?php echo $row->add_date;     ?></td>
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



 