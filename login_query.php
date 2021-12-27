<?php
	require_once 'adminr/dbcon.php';

	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
		$firstname=$_POST['firstname'];
		$result = $conn->query("SELECT * FROM voters WHERE  id_number = '$idno' && password = '$password' && firstname = '$firstname' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE  id_number = '$idno' && password = '$password' && firstname = '$firstname' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;
    $uip=$_SERVER['REMOTE_ADDR'];
		$ip=$_SERVER['REMOTE_ADDR'];
		$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;


		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			$_SESSION['lastname'] = $row['lastname'];
      header("location:vote.php");
			$log="insert into userlog(userId,userEmail,userIp) values('$idno','$password','$ip')";
			$conn->query($log);
		}

		if($voted == 1){
			echo " <br><center><font color= 'red' size='3'>You Can Only Vote Once</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}

	}




?>
