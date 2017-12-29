<!DOCTYPE html>
<html>
<head>
<title>Slideshow in bootstrap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style type="text/css">
.carousel-inner>.img>img,
.carousel-inner>.item>a>img{
	width:100%;
	margin:auto;
}
		<div class="container">
				<div class="col-sm-9">
						<div class="mycarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-idicators">
							<?php
							include("connection.php");
							$a=0;
							$query='SELECT * FROM samples';
							$sql=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($sql))
							{
								?>
								<li data-target="#mycarousel" data-slide-to="<?php echo $a++;?>">
								 
								</li>
								<?php
								
							}
							
							?>
							</ol>
							
							
							<div class="carousel-inner" role="listbox">
							<?php
								$query="SELECT * FROM samples";
								$sqli=mysqli_query($con,$queryy);
								while($img=mysqli_fetch_array($sqli))
								{
									?>
									<div class="item">
									<img src="proimages/<?php echo $img['title'];?>"
									class="img resposive" alt="<?php $img['title'];?>">
									
									</div>
									<?php
								}
							?>
						</div>
						<a href="left carousel-control" href="#mycarousel" role="button" data-slide="next">
						</a>
						<a href="right carousel-control" href="#mycarousel" role="button" data-slide="next">
						</a>
					</div>

		</div>	

		<script type="text/javascript">
		$(document).ready(function(e)
		{
			$('.carousel-indicators li:nt-child(1)').addClass('active');
			$('.item:nth-child(1)').addClass()
			});
		</script>
		
</body>
</html>