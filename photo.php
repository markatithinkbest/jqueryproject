<!DOCTYPE html>
<html>
<head>
	<title>PhotoSwipe</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link href="./photo/styles.css" type="text/css" rel="stylesheet" />
	<link href="./photo/photoswipe.css" type="text/css" rel="stylesheet" />
	<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./photo/klass.min.js"></script>
	<script type="text/javascript" src="./photo/code.photoswipe-3.0.5.min.js"></script>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">

		(function(window, PhotoSwipe){
		
			document.addEventListener('DOMContentLoaded', function(){
			
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			
			}, false);
			
			
		}(window, window.Code.PhotoSwipe));
		
	</script>
	</head>
	<body>

<div data-role="header">
  <h1>
  <a data-role="button" data-icon="home" href="index" data-iconpos="notext" rel="external" class="ui-btn-left">Home</a>
  </h1>
</div>
  
    
<div class="page-content">
      <h1>PhotoSwipe</h1>
    </div>
<ul id="Gallery" class="gallery">

<?php
mysql_connect("192.168.60.64","pro1","123456");
mysql_select_db("pro");
$sql="SELECT alttext FROM wp_ngg_pictures";
$rows=mysql_query($sql);
$nums=mysql_num_rows($rows);
for($i=0;$i<$nums;$i++){
	$img=mysql_result($rows,$i,"alttext");
	echo "<li><a href="."http://linux.tcnr628.com/project/wp-content/gallery/htc/".$img."><img src="."http://linux.tcnr628.com/project/wp-content/gallery/htc/".$img." alt=".$img."></a></li>";
	}
?>
    </ul>
</div>
</body>
</html>
