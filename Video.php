<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Class Lecture</title>
	<!-- Linking CSS File -->
	<link rel="stylesheet" href="Video.css?v=<?php echo time(); ?> " />
</head>
<body>
<?php 
	require 'database/connection.php';
?>
	<div class="container play-container">
		<div class="row row1">
			<div class="play-video">
				<!--video controls="autoplay">
					<source src="SRK.mp4" type="video/mp4">
				</!--video-->
				<embed id="Main_Video" src="https://www.youtube.com/embed/e0BJtZbPoSg" width="100%" height="35%">
				</embed>

				<div class="tags">
					<h3>Real Numbers</h3>
					<div class="play-video-info">
						<p>Math</p>
						<p>Class 9</p>
						<div>
							<a href="">
								<img src="" alt=""/>
							</a>
						</div>
					</div>
					<hr />
					<h4>Published By:</h4>
					<div class="publisher">
						<img src="pic14.jpg" alt="Publisher Image" />
						<div>
							<p>Md. Abul Hossain</p>
							<span>abc123@gmail.com</span>
						</div>
					</div>
					<div class="vid-description">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to mak a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
						publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						
						<hr />
						<h4>134 Comments</h4>
						
						<div class="add-comment">
							<img src="pic14.jpg" alt="Commenter Image" />
							<input type="text" placeholder="Write comments..."/>
						</div>
						<div class="old-comment">
							<img src="pic14.jpg" alt="old-comment-img" />
							<div>
								<h3>Muntasir Hossen <span>2days ago</span></h3>
								<p>Sir, I don't understant how the last line came from previous line</p>
								<div class="comment-action">
									<p>Reply this comment</p>
									<a href="####">All replies</a>
								</div>
							</div>
						</div>
						<div class="old-comment">
							<img src="pic14.jpg" alt="old-comment-img" />
							<div>
								<h3>Muntasir Hossen <span>2days ago</span></h3>
								<p>Sir, I don't understant how the last line came from previous line</p>
								<div class="comment-action">
									<p>Reply this comment</p>
									<a href="####">All replies</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-sidebar">
				<!--           Connection with Database             -->
	                <?php 
		            $tutorial_query = 'SELECT * FROM tutorial';
		            $tutorial_query_run = mysqli_query($connection, $tutorial_query);
		            $check_tutorial_table = mysqli_num_rows($tutorial_query_run)>0;

		            if($check_tutorial_table){
		            	while($tutorial_row = mysqli_fetch_assoc($tutorial_query_run))
		            	{
		            	?>
				<div class="side-video-list">
                    <
					<a href="#" class="small-thumbnail">
						<img src="<?php echo $tutorial_row['Image'] ?>" alt="Lecture Image" />
					</a>
					<div class="vid-info">
						<a href=""><?php echo $tutorial_row['Title'] ?></a>
						<p><?php echo $tutorial_row['Sub_Title'] ?></p>
						<p><?php echo $tutorial_row['Description'] ?></p>
					</div>
				</div>
				<?php
					}
				}
			?>
		</div>
	</div>
    <script src="Video.js"></script>
</body>
</html>