<!DOCTYPE html> 
<html> 
<head> 
	<title>Familee</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.flatui.css" />
	<link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
	<link href="css/main.css" rel="stylesheet" media="screen">
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<script type="text/javascript" src="//api.filepicker.io/v1/filepicker.js"></script>

</head> 
<body>
<div class="upload">
        <div class="row-fluid">
          <div class="span12">
            <div class="row-fluid">
              <div class="span10 offset1">
              <img id='image' src='http://extrametrics.com/facedetect/index.php?image=<?php echo $_GET['imgurl'];?>' width="300" height="300" style="border-radius:0px"/>
              </center>
               </div>
              </div>
            </div>
          </div>
        </div><!--end row fluid!-->
</div>



</body>
</html>