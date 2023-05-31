<?php

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher</title>
	<link rel="stylesheet" href="teacher_style.css" />
	<!--For Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--For Fontawesome icon-->
	<script src="https://kit.fontawesome.com.b99e675b6e.js"></script>
	<!----------- For JQuery---------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
			<li class="active"><a href="teacher.php">Teacher</a></li>
			<li><a href="tutorial.php">Tutorial</a></li>
			<li><a href="history.html">History</a></li>
			<li><a href="achivement.html">Achivement</a></li>
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

<div class="container slider text-center">
	<div class="row">
		<div class="col-sm-7 text-center"> 
			<div class="row"> 
				<div class="carousel slide" id="myCarousel" data-ride="carousel"> 
					<ol class="carousel-indicators"> 
						<li data-target="myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="myCarousel" data-slide-to="1"></li>
						<li data-target="myCarousel" data-slide-to="2"></li>
						<li data-target="myCarousel" data-slide-to="3"></li>
						<li data-target="myCarousel" data-slide-to="4"></li>
						<li data-target="myCarousel" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner text-center"> 
						<div class="item active"> 
							<img src="Mot1.jpg" alt="Image1" />
						</div>
						<div class="item"> 
							<img src="Mot2.jpg" alt="Image2" />
						</div>
						<div class="item"> 
							<img src="Mot3.jpg" alt="Image3" />
						</div>
						<div class="item"> 
							<img src="Mot4.jpg" alt="Image4" />
						</div>
						<div class="item"> 
							<img src="Mot5.jpg" alt="Image3" />
						</div>
						<div class="item"> 
							<img src="Mot6.jpg" alt="Image4" />
						</div>
					</div>
				</div>
				<a href="#myCarousel" id="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" id="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row">
				<h2>Teachers</h2>

                <!--           Connection with Database             -->
                <?php 
                    require 'database/connection.php';

                    $query = 'SELECT * FROM TEACHER';
                    $query_run = mysqli_query($connection, $query);
                    $check_teacher_table = mysqli_num_rows($query_run)>0;

                    if($check_teacher_table){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                                <!--------       Printing Teacher Div multiple time         ------> 
                                <div class="row teach-info">
					                <div class="panel panel-inverse text-center">
						                <div class="panel-heading"> 
							                <h2><?php echo $row['Teacher_Name']  ?></h2>
						                </div>
						                <div class="panel-body">
							                <div class="img-circle"> 
								                <img src="pic2.jpg" class="img-circle" alt="" />
							                </div>
						                </div>
						                <div class="panel-footer"> 
							                <h4>ID: <?php echo $row['Teacher_ID'];  ?></h4>
                                            <h4>Dept: <?php echo $row['Department'];  ?> </h4>
							                <h4>Designation: <?php echo $row['Designation'];  ?> </h4>
                                            <h4>Subject: <?php echo $row['Subject_name'];  ?></h4>
						                </div>
					                </div>
				                </div>
                            <?php
                        }
                    }
                ?>
                <!---  Extra teacher info div  -->
				<!-- div-- class="row teach-info">
					<div class="panel panel-inverse text-center">
						<div class="panel-heading"> 
							<h2>Md. Saidullah Fakir</h2>
						</div>
						<div class="panel-body">
							<div class="img-circle"> 
								<img src="pic2.jpg" class="img-circle" alt="" />
							</div>
						</div>
						<div class="panel-footer"> 
							<h4>ID: </h4>
                            <h4>Dept: </h4>
							<h4>Designation: </h4>
                            <h4>Subject</h4>
						</div>
					</div>
				</!-->
				<div class="row"> 
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-4 deptname">
			<h3>Department</h3>
			<ul>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Bangla</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">English</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Mathmatics</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Social Science</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">(Religion) Islam</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Science</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Biology</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Physics</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Chemistry</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Computer Teacher</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">ICT</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Agricultural Studies</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Physical Education</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Business Studies</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Music</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Drawing</span></a></li>
				<li><a href="#"><span class="depticon"><i class="fas fa-arrow-right"></i></span><span class="depttitle">Deputation</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container-fluid">
	<footer> 
		<div class="row footer-line1"> 
			<div class="col-sm-6 text-center link"> 
				<li><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram-square fa-2x"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube-square fa-2x"></i></a></li>
			</div>
			<div class="col-sm-6" id="address"> 
				<span>Adamjee Cantonment Public School			<br></span>
				<span>Dhaka Cantonment, Dhaka-1206, Bangladesh. <br></span>  
				<span>Phone: Army Ex:8711111-8104 (Office),     <br></span>  
				<span>7702 (Principal) | 88-02-9834876          <br></span>  
				<span>Email: adamjeeschool@gmail.com            <br></span>  
			</div>
		</div>
		<hr /> 
		<div class="row"> 
			<div class="col-sm-12 text-center" id="copyright">
				<span>
					&copy;2016 - Adamjee Cantonment Public School All Rights Reserved.Developed by
					<img class="img-circle" src="img.jpg" alt="Img"/>
					<img class="img-circle" src="pic5.jpg" alt="Img"/>
					<img class="img-circle" src="pic14.jpg" alt="Img"/>
				</span>
			</div>
		</div>
	</footer>
</div>
	<!----------Firebase Configuration----->
	<script type="module">
		
	</script>
	<script type="text/javascript" src="jquery.js"></script>
</body>
</html>