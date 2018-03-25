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
	<script src="../assets/js/checkFormat.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<style>
        .dropbtn1 {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }
    
    .dropdown1 {
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content1 {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .dropdown-content1 a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    
    .dropdown-content1 a:hover {background-color: #ddd}
    
    .dropdown1:hover .dropdown-content1 {
        display: block;
    }
    </style>
</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 header-logo">
					<br>
					<a href="../index.html"><img src="../assets/img/logo/logo6.png" alt="" class="img-responsive logo" style="height:70px;margin-bottom: -10px;"></a>
				</div>	
				<div class="col-xs-4">
                        <nav class="navbar navbar-default">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="menu active" href="#" style="margin-top:20px;">สวัสดีคุณ Admin</a></li> <br>
                                <li><a class="menu" href="../index.html">Sign out</a></li>
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
							<li><a class="menu" href="../index.html" style="margin-top:20px;">Home</a></li> <br>
							<li class="dropdown1"><a data-toggle="dropdown" href="#" class="dropbtn1">Manage News/Annoucement</a>
								<ul class="dropdown-content1">
									<li class=""><a href="FormNews.php">Add</a></li>
									<li class=""><a href="#">Edit</a></li>
									<li class=""><a href="#">Delete</a></li>
								</ul>							
							</li>
							<li class="dropdown1"><a data-toggle="dropdown" href="#" class="dropbtn1">Manage User</a>
								<ul class="dropdown-content1">
									
								</ul>							
                            </li>
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
                                <form role="form" action="addNewsToDB.php" method="post" enctype="multipart/form-data" onsubmit="return checkTopic()">
                                <br style="clear:both">
											<h3 style="margin-bottom: 25px; text-align: center;">เพิ่มข่าวหรือประกาศ</h3>	
											<div class="form-group">
												<p><?php 												
													if (!empty($_GET)) {
														$message = $_GET["message"];
												
														if($message == 1 ){
															echo "<p style='color:green'>เพิ่มข่าวเรียบร้อยแล้ว</p>";
														}														
												}												
												?></p> 
											</div>	
											<div class="form-group" id="alertTopic" style="color:red"></div>																			
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Topic" name="Topic" placeholder="หัวข้อ" onblur="checkTopic()" >
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
                                                <input type="file" class="form-control" id="ImageName" name="ImageName[]" multiple accept=".png, .jpg, .jpeg">
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
	<footer class="footer clearfix" style="margin-top:150px; border-top: 1px solid rgb(255, 255, 255)">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4"><!--left --></div>
				<div class="col-sm-6 col-md-4"><!--middle -->
					<p align="center">&copy; copyright BananaSoft <br>
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


