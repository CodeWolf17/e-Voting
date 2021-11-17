<?php include ('../admin/head.php');?>
<body>

    <div id="wrapper">

        <!-- Navigation -->


        <!-- Page Content -->





				<hr/>

                    <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class = "alert alert-success">Live Results</h4>
                        </div>

					<br/>

                        <div class="panel-body">


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>



			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for Internal</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
			require '../admin/dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for Internal Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for External</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for External Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>

			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Auditor</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Auditor'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>

			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Treasurer</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Treasurer'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>



			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for PIO</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'PIO'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Business Manager</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Business Manager'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Sergeant at Arms </td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Sgt. @ Arms'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Muse</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Muse'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>





			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Escort</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require '../admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Escort'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>









							</div>






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

    <?php include ('../admin/script.php');?>

</body>

</html>
