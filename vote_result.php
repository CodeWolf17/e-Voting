<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vpinternal_id']))
					{
						$_SESSION['vpinternal_id'] = "";
					}
					else
					{
						$_SESSION['vpinternal_id'] = $_POST['vpinternal_id'];
					}
					if(!ISSET($_POST['vpexternal_id']))
					{
						$_SESSION['vpexternal_id'] = "";
					}
					else
					{
						$_SESSION['vpexternal_id'] = $_POST['vpexternal_id'];
					}
					if(!ISSET($_POST['secretary_id']))
					{
						$_SESSION['secretary_id'] = "";
					}
					else
					{
						$_SESSION['secretary_id'] = $_POST['secretary_id'];
					}
					if(!ISSET($_POST['auditor_id']))
					{
						$_SESSION['auditor_id'] = "";
					}
					else
					{
						$_SESSION['auditor_id'] = $_POST['auditor_id'];
					}
					if(!ISSET($_POST['treasurer_id']))
					{
						$_SESSION['treasurer_id'] = "";
					}
					else
					{
						$_SESSION['treasurer_id'] = $_POST['treasurer_id'];
					}
					if(!ISSET($_POST['pio_id']))
					{
						$_SESSION['pio_id'] = "";
					}
					else
					{
						$_SESSION['pio_id'] = $_POST['pio_id'];
					}
					if(!ISSET($_POST['busman_id']))
					{
						$_SESSION['busman_id'] = "";
					}
					else
					{
						$_SESSION['busman_id'] = $_POST['busman_id'];
					}
					if(!ISSET($_POST['sgtarm_id']))
					{
						$_SESSION['sgtarm_id'] = "";
					}
					else
					{
						$_SESSION['sgtarm_id'] = $_POST['sgtarm_id'];
					}
					if(!ISSET($_POST['muse_id']))
					{
						$_SESSION['muse_id'] = "";
					}
					else
					{
						$_SESSION['muse_id'] = $_POST['muse_id'];
					}

					if(!ISSET($_POST['sheria_id']))
					{
						$_SESSION['sheria_id'] = "";
					}
					else
					{
						$_SESSION['sheria_id'] = $_POST['sheria_id'];
					}

					if(!ISSET($_POST['burudani_id']))
					{
						$_SESSION['burudani_id'] = "";
					}
					else
					{
						$_SESSION['burudani_id'] = $_POST['burudani_id'];
					}

					if(!ISSET($_POST['mahusiano_id']))
					{
						$_SESSION['mahusiano_id'] = "";
					}
					else
					{
						$_SESSION['mahusiano_id'] = $_POST['mahusiano_id'];
					}


					if(!ISSET($_POST['itmbunge_id']))
					{
						$_SESSION['itmbunge_id'] = "";
					}
					else
					{
						$_SESSION['itmbunge_id'] = $_POST['itmbunge_id'];
					}
				
				    if(!ISSET($_POST['csmbunge_id']))
				    {
					$_SESSION['csmbunge_id'] = "";
				    }
			     	else
			    	{
					$_SESSION['csmbunge_id'] = $_POST['csmbunge_id'];
			    	}
		    	}
 

		?>
    </div>
			<center>
				<div class="container">
					
		  <div class="col-lg-12"  >
		  <div class = "alert alert-info">
			<label>PRESIDENT (RAIS) & VICE PRESIDENT (MAKAMU WA RAIS)</label>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>PRIME MINISTER (WAZIRI MKUU)</label>
			<br />
			<?php
				if(!$_SESSION['vpinternal_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpinternal_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			</div>
			<div class = "alert alert-info">
			<label>SECRETARY (KATIBU MKUU KIONGOZI)</label>
			<br/>
			<?php
				if(!$_SESSION['vpexternal_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpexternal_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>SRC (SPIKA WA BUNGE)</label>
			<br />
			<?php
				if(!$_SESSION['secretary_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[secretary_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>MINISTRY OF EDUCATIONAL AFFAIRS (WIZARA YA ELIMU)</label>
			<br />
			<?php
				if(!$_SESSION['auditor_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[auditor_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>MINISTRY OF INTERNAL AFFAIRS (WIZARA YA MAMBO YA NDANI)</label>
			<br />
			<?php
				if(!$_SESSION['treasurer_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[treasurer_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<label>MINISTRY OF SAFETY AND SECURITY (WIZARA YA ULINZI NA USALAMA)</label>
			<br />
			<?php
				if(!$_SESSION['pio_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pio_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			</div>
			<div class = "alert alert-success">
			<label>WIZARA YAMIKOPO & UFADHILI (BARA)</label>
			<br />
			<?php
				if(!$_SESSION['busman_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[busman_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<label>WIZARA YAMIKOPO & UFADHILI ZANZIBAR (ZANZ)</label>
			<br />
			<?php
				if(!$_SESSION['sgtarm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>MINISTRY OF FINANCE (WIZARA YA FEDHA & MIPANGO)</label>
			<br />
			<?php
				if(!$_SESSION['muse_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[muse_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<label>WIZARA YA KATIBA, SHERIA & UTAWALA BORA</label>
			<br />
			<?php
				if(!$_SESSION['sheria_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sheria_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>

</div>
		<div class = "alert alert-success">
			<label>MINISTRY OF SPORTS & ENTERTAINMENT (WIZARA YA MICHEZO & BURUDANI)</label>
			<br />
			<?php
				if(!$_SESSION['burudani_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[burudani_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
</div>
<div class = "alert alert-info">
			<label>WIZARA HABARI,UBUNIFU & MAHUSIANO YA JAMII</label>
			<br />
			<?php
				if(!$_SESSION['mahusiano_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[mahusiano_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>

		</div>


		<?php
 
 if ($_SESSION['lastname']=="IT")
 {
 ?>
 	<div class = "alert alert-success">
			<label>INFORMATION TECH MBUNGE</label>
			<br />
			<?php
				if(!$_SESSION['itmbunge_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[itmbunge_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
	 
 <?php
 }
 
 elseif ($_SESSION['lastname']=="CS")
 {
	 ?>
			<div class = "alert alert-success">
			<label>COMP SCIENCE MBUNGE</label>
			<br />
			<?php
				if(!$_SESSION['csmbunge_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[csmbunge_id]'")->fetch_array();
						echo "<img src = 'adminr/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"."<br>".$fetch['firstname']." ".$fetch['lastname'];
					}
			?>
			
			</div>
	 
	 <?php
	 }
 
 else
 {
	 echo "Wisdom & Life Are Free Things, But Freedom Is Expensive, Use It Well When You Still Have The Chance To";
	 session_start();
	 unset($_SESSION['id']);
	 session_destroy();
	 header('Location:../index.php');
 }
 ?>
 

			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>

