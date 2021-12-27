<?php include ('head.php');?>

<body>

<div class="jumbotron">
<div class="row">

<div class="col-md-2">
<center><img src="../images/nitlogo.png" style="width:100%"></center> 
</div>

<div class="col-md-8">
<center><h1>NATIONAL INSTITUTE OF TRANSPORT <br> VOTING SYSTEM </h1></center>
</div>

<div class="col-md-2">
<center><img src="../images/nitlogo.png" style="width:100%"></center> 
</div>

</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Admin Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" type="text" autofocus>
                                </div>

                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>


                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
                                  

                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>

			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
