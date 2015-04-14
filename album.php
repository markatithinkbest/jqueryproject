
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php require_once('Connections/htc.php'); ?>
<?php
$sql="SELECT alttext FROM wp_ngg_pictures";
$rows=mysql_query($sql);
$nums=mysql_num_rows($rows);
for($i=0;$i<$nums;$i++){
	$img=mysql_result($rows,$i,"alttext");
	echo "<img src="."http://linux.tcnr628.com/project/wp-content/gallery/htc/".$img.">";
	}
?>

</body>
</html>