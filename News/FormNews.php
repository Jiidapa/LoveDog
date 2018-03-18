<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>ชุมชนคนรักสุนัข</title>
	<link rel="shortcut icon" href="../assets/img/logo/logo5.png" />
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="../assets/js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<script language="JavaScript">
		
	</script>
</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-4 header-logo">
					<br>
					<a href="../index.html"><img src="../assets/img/logo/logo6.png" alt="" class="img-responsive logo" style="height:80px;margin-bottom: -10px;"></a>
				</div>	
				<div class="col-xs-8">
                        <nav class="navbar navbar-default">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="menu" href="#" style="margin-top:20px;">สวัสดี Admin</a></li> <br>
                                <li><a class="menu active" href="register.html">Sign out</a></li>
                            </ul>
                        </nav>
                    </div>		
			</div>
			<div class="row">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav class="navbar navbar-default">
					      <ul class="nav navbar-nav navbar-left">
							<!--<li><a class="menu" href="../index.html" >Home</a></li> -->
							<li><a data-toggle="dropdown" href="#" class="dropdown-toggle">Manage News/Annoucement</a>
								<ul class="dropdown-menu">
									<li class=""><a href="FormNews.php">Add News</a></li>
								  </ul>							
							</li>
							<!--<li><a class="menu" href="#" >Sign Up</a></li> -->
							<!-- <li><a class="menu" href="#" >Login</a></li> -->
					        <!--<li><a class="menu" href="#about">about us</a></li>
					        <li><a class="menu" href="#service">our services </a></li>
					        <li><a class="menu" href="#team">our team</a></li>
					        <li><a class="menu" href="#contact"> contact us</a></li> -->
						  </ul>
					</nav>
				</div><!-- /navbar-collapse -->				
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2></h2>
				<div class="col-sm-6 col-md-3"><!--left --></div>
                <div class="col-sm-6 col-md-6">
                    <!--middle -->
                            <div class="form-area">  
                                <form role="form" action="addNewsToDB.php" method="post" enctype="multipart/form-data">
                                <br style="clear:both">
											<h3 style="margin-bottom: 25px; text-align: center;">เพิ่มข่าวหรือประกาศ</h3>	
											<div class="form-group">
												<p><?php 
												
													if (!empty($_GET)) {
														$message = $_GET["message"];
												
														if($message == 1 ){
															echo "<p style='color:green'>เพิ่มข่าวเรียบร้อย</p>";
														}else{
															echo "<p style='color:red'>กรุณาใส่หัวข้อข่าว</p>";
														}
												}												
												?></p>
                                            </div>																				
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Topic" name="Topic" placeholder="หัวข้อ" >
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" type="textarea" id="Content" placeholder="รายละเอียด" maxlength="500" rows="7" name="Content"></textarea>                                                         
                                            </div>
                                            <div class="form-group">
                                                <input type="Date" class="form-control" id="Date" name="Date">
                                                <script>
                                                document.getElementById('Date').value = new Date().toISOString().substring(0, 10);
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" id="ImageName" name="ImageName[]" multiple>
                                            </div>
                                            <div class="form-group">                                       
                                				<input type="submit" id="submit" value="เพิ่มข่าว" name="submit" class="btn btn-primary pull-right" onclick="check()">
											</div>
								</form>
                            </div>                     
                </div>
                <div class="col-sm-6 col-md-3"><!--right --></div>
	</section><!-- end of about section -->

	<!-- footer starts here -->
	<footer class="footer clearfix" style="margin-top:50px; border-top: 1px solid rgb(255, 255, 255)">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4"><!--left --></div>
				<div class="col-sm-6 col-md-4"><!--middle -->
					<p align="center">&copy;BananaSoft <br>
					Contact US : BananaSoft@kku.ac.th</p>
				</div>
				<div class="col-sm-6 col-md-4"><!--right --></div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="../assets/js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="../assets/js/gmaps.js"></script>
	<script src="../assets/js/smoothscroll.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>

	
</body>
</html>


