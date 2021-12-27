<?php

 include ('session.php');
 include ('head.php');
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">System User Logs</h3>

                </div>
</div>



                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading">
														User Logs
													</div>
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>UserID</th><!-- Username -->
                                            <th>UserName</th><!-- Password/optional -->
                                            <th>IP</th><!-- Firstname -->
                                            <th>Login Time</th><!-- Lastname -->


                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>UserID</th><!-- Username -->
                                            <th>UserName</th><!-- Password/optional -->
                                            <th>IP</th><!-- Firstname -->
                                            <th>Login Time</th><!-- Lastname -->



                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <tr>
										<?php
										require 'dbcon.php';
										$bool = false;
                    $cnt=1;
										$query = $conn->query("SELECT * FROM userlog ORDER BY userId DESC");
										while($row = $query->fetch_array()){
										$user_id=$row['userId'];
										?>

<td><?php echo $cnt;;?></td>
											<td><?php echo $row ['userId'];?></td>
                                            <td><?php echo $row ['userEmail'];?></td>
                                            <td><?php echo $row ['userIp'];?></td>
<td><?php echo $row ['loginTime'];?></td>



                                        </tr>

                                       <?php
                                       $cnt=$cnt+1;
                                     } ?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>
