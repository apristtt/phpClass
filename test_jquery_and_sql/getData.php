<?php
//
//$connect = mysql_connect("localhost", "root") or die(mysql_error());
//mysql_select_db("Bookstore");
//$sqlCmd = mysql_query("SELECT * FROM Customer");
//$sqlProcess = mysql_query($sqlCmd) or die(mysql_error());
//$numField = mysql_num_fields($sqlProcess);
//$resultArray = array();
//while($obResult = mysql_fetch_array($numField))
//{
//    $arrCol = array();
//    for($i=0;$i<$numField;$i++)
//    {
//        $arrCol[mysql_field_name($sqlCmd, $i)] = $obResult[$i];
//    }
//    array_push($resultArray, $arrCol);
//}
//
//mysql_close($connect);
//
//echo json_encode($resultArray);

//$select = mysql_query("SELECT Name FROM Customer");
//
//while($data = mysql_fetch_array($select)) {
//    echo "{$data['Name']}<br>";
//}

//$json_output = array();
//while($row = mysql_fetch_assoc($select)){
//    $json_output[] = json_encode($row);
//}
//
//print_r($json_output);

	$objConnect = mysql_connect("127.0.0.1","root") or die(mysql_error());
	$objDB = mysql_select_db("bookstore");
	$strSQL = "SELECT * FROM Customers";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
