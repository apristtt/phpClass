<?php 
	$queryStr = "data.php?firstname=aaa&lastname=kkk&pwd=&education=1";
	
	echo urlencode($queryStr)."<br>";
	echo base64_encode($queryStr);

 ?>