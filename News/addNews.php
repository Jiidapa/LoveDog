<!DOCTYPE html>
<!--
TEMPLATE
Name: Zoo Planet
Version: 1.0
Created: 23 January 2014

AUTHOR
Design and code by: http://www.bootshape.com
Free stock photos by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license.php

CREDITS
Background: http://subtlepatterns.com/ (extra_clean_paper)
Fonts: http://www.google.com/fonts (Actor, Duru_Sans)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact.php
-->
<html>
  <head>
    <title>Love Dog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="../assets/css/bootshape.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html"><img src="../assets/img/logo/logo6.png" style="height:110px"></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="../index.html">Home</a></li>
            <li class="active"><a href="addNews.php">เพิ่มข่าว</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Yachts <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li class="divider"></li>
                <li><a href="#">All Items</a></li>
              </ul>
            </li>
            <li><a href="#">Destinations</a></li>
            <li><a href="#">License</a></li>
            <li><a href="#">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->
      
    
    <!-- AddNews -->
    <div class="container ">
        <div class="col-sm-6 col-md-4">
            <!--left -->
        </div>
        <div class="col-sm-6 col-md-4">
             <!--middle -->
             <form>
                <p class="h4 text-center mb-4">เพิ่มข่าวสารของคุณ</p>

                <!-- Topic -->
                <label for="defaultFormContactNameEx" class="grey-text">หัวข้อข่าว</label>
                <input type="text" id="Topix" Name="Topic" class="form-control" require>
                
                <br>

                <!-- Detail -->
                <label for="defaultFormContactMessageEx" class="grey-text">รายละเอียด</label>
                <textarea type="text" id="Detail" Name="Detail" class="form-control" rows="5"></textarea>

                <br>

                <!-- Date -->
                <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                <input type="date" id="defaultFormContactSubjectEx" class="form-control">

                <br>
                
                <!-- Image -->
                <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                <input type="file" id="Images" Name="Images" class="form-control">

                <br>

                <div class="text-center mt-4">
                    <button class="btn btn-outline-warning" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>

        </div>  
        <div class="col-sm-6 col-md-4">
             <!--right -->      
        </div>  
    
      
    </div><!-- End AddNews -->

    
     <!-- Footer -->
     <div class="footer text-center  modal-footer">
          <div class="container ">
              <div class="col-sm-6 col-md-4">
                  <!--left -->
              </div>
              <div class="col-sm-6 col-md-4">
                   <!--middle -->
                   <p>&copy; 2017 ชุ่มชนคนรักสุนัก Love Dog <br> contact us : LoveDog@kkumail.com</p>
              </div>  
              <div class="col-sm-6 col-md-4">
                   <!--right -->      
              </div>  
          </div>   
      </div>
    <!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootshape.js"></script>
  </body>
</html>
