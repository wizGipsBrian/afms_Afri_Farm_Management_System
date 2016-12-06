<!DOCTYPE html>
<html>
 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>


    <body class="fixed-left">

        <!-- Loader -->
        <!--<div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include "includes/navbar.php";?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           <?php include "includes/leftsidemenu.php";?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Farm Staff Discontinued</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectatt="SELECT * FROM `attendant_discontinue`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Full Name</center></th>
                                                        <th><center>Date Discontinued</center></th>
                                                        <th><center>Time</center></th>
                                                        <th><center>Who Verified?</center></th>
                                                        <th><center></center></th>
                                                        <th><center></center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['Attendant_Name'],0,1);?></span>
                                                        </th>
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Attendant_Name']; ?></h5>
                                                            <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Reason_Discontinued']; ?></small></p></a>
                                                        </td>
                                                        <td><?php echo $rw_att['Date_Discontinued']; ?></td>
                                                        <td><?php echo $rw_att['Time_Discontinued']; ?></td>
                                                        <td><?php echo $rw_att['Verified_discontinued']; ?></td>
                                                        <!--<td><button class="btn btn-info">Edit</button></td>-->
                                                        <!--<td><button class="btn btn-danger">Discontinue</button></td>-->
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                        </div>





                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <script>
            var resizefunc = [];
        </script>

 
=======

>>>>>>> b921336280d3c3cdcb75c97d4be993b9d0e6a222
            <?php include "includes/footer.php";
 
 ?>
        </body>
    </html>