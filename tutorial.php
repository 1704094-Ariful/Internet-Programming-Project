<?php

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tutorial</title>
	<link rel="stylesheet" href="tutorial_style.css?v=<?php echo time(); ?>">
	<style><?php include "tutorial_style.css" ?></style>
	<link rel="stylesheet" href="file:///F:/Web%20Design/Project/fontawesome-free-5.12.1-web/css/all.css" />
	<!--For Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid bg"> 
	<div class="row text-center">
		<h2>Admjee Cantonment Public School and College</h2>
		<h3>Education | Discipline | Character</h3>
		<h4>Dhaka Cantonment, Dhaka-1206, Bangladesh.</h4>
	</div>
</div>
<nav class="navbar navbar-inverse"> 
	<div class="container text-center">
		<div class="navbar-header">
			<a href="#" class="navbar-brand" >ACPSC</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="home.html">Home</a></li>
			<li><a href="teacher.php">Teacher</a></li>
			<li class="active"><a href="tutorial.php">Tutorial</a></li>
			<li><a href="history.html">History</a></li>
			<li ><a href="achivement.html">Achivement</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
		</ul>
	</div>
</nav>
<!--Modal-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>
<!---/Modal--->
<!---Class material start--------->
<div class="container">
	<div class="row">
	<!--           Connection with Database             -->
	<?php 
		require 'database/connection.php';

		$class_query = 'SELECT * FROM CLASS';
		$class_query_run = mysqli_query($connection, $class_query);
		$check_class_table = mysqli_num_rows($class_query_run)>0;
		
		if($check_class_table){
			while($class_row = mysqli_fetch_assoc($class_query_run))
			{
			?>
			<div class="col-sm-3">
				<div class="card-container"> 
					<div class="circle">
						<h2><?php echo $class_row['Class_Name'];  ?> </h2>
						<ul id="dropdown" aria-label="submenu">
						<?php
						
						$subject_query = "SELECT * FROM subject WHERE Class_ID = 9";
						$subject_query_run = mysqli_query($connection, $subject_query);
						$check_subject_table = mysqli_num_rows($subject_query_run)>0;
						if($check_subject_table){
							while($subject_row = mysqli_fetch_assoc($subject_query_run)){
								?>
								<!---   Printing the subject list    --->
								<li><a href="Video.html"><?php  echo $subject_row['Subject_name']; ?> </a></li>
							<?php
							}
						}
						?>
						</ul>
						<!--script>
						$(document).ready(function(){
    					$("#dropdown").on("click", function(e){
        				var x = e.pageX;
        				var y = e.pageY;
        				$("#meh").css("left", x);
        				$("#meh").css("top", y);
    						});
						});
						</!--script-->
					</div> 
				</div>
			</div>
		<?php
		}
	}				
	?>	
	</div>
</div>	
</body>
</html>