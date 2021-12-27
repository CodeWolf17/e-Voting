<?php include ('head.php');?>
<body>

<div class="jumbotron">
<div class="row">

<div class="col-md-2">
<center><img src="./images/nitlogo.png" style="width:100%"></center> 
</div>

<div class="col-md-8">
<center><h1>NATIONAL INSTITUTE OF TRANSPORT <br> VOTING SYSTEM </h1></center>
</div>

<div class="col-md-2">
<center><img src="./images/nitlogo.png" style="width:100%"></center> 
</div>

</div>
    </div>
<!--
<div class="banner">
<center><img src="./images/vote.png" style="width:100%"></center>   
    </div>
-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In To Vote

                        </h3></center>
                    </div>
                    <div class="panel-body">

                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >Registration.No</label>
										<input class="form-control" placeholder="eg.NIT/BIT/2020/0001" name="idno" type="text" required = "required" autofocus>
                                </div>

                                <div class="form-group">
                  <label for = "username" >Form 4 Index.No</label>
                    <input class="form-control" placeholder="S.4827.0001.2017" name="firstname" type="text" required = "required">
                               </div>

                                <div class="form-group">
                  <label for = "username" >Birthdate</label>
                    <input class="form-control" placeholder="27-04-2001" name="password" type="password" required = "required">
                                </div>



                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>

                            </fieldset>
<a class="btn-livestream" href="adminr/livestream.php">Live Results</a>
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> One voter can only vote One time!!! </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
