<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method="POST">
	<h1>Insert Data</h1>
	Employee ID : <input type="text" name="id"><br>
	Employee Name : <input type="text" name="name"><br>
	Age : <input type="text" name="age"><br>
	<input type="submit" name="send" value="Submit">
	<input type="reset" name="cancel" value="Cancel">
	</form>
<?php 
	$link = mysql_connect("127.0.0.1","root");
	mysql_query("CREATE DATABASE IF NOT EXISTS adminDB");
	mysql_select_db("adminDB");
	$createTb = "CREATE TABLE Employee(
	            id INT PRIMARY KEY,
	            name VARCHAR(50),
	            age VARCHAR(5));";
	$q = mysql_query($createTb);
		//mysql_query("SET NAMES tis-620")
;	$sql = 'INSERT INTO Employee VALUES ($_POST["id"], $_POST["name"], $_POST["age"]);';
	$q1 = mysql_query($sql);
	        
	if($q1) {
	        echo "Insert Success";
	        mysql_close($link);
	} else {
	        echo "Insert not success";
	}
	            
	echo '<a href="week9-1_insert.php">Back to insert page</a><br>';
	echo '<a href="week9-1.php">Back to home page</a><br>';
 ?>

</body>
</html>

// <?php 

// if($send == null){


// echo<<<HTMLBLOCK
// <form action="week9-1_insert.php" method="POST">
// <h1>Insert Data</h1>
// Employee ID : <input type="text" name="id"><br>
// Employee Name : <input type="text" name="name"><br>
// Age : <input type="text" name="age"><br>
// <input type="submit" name="send" value="Submit">
// <input type="reset" name="cancel" value="Cancel">
// </form>
// HTMLBLOCK;
// }
// else {

// mysql_query("CREATE DATABASE IF NOT EXISTS adminDB");
// mysql_select_db("adminDB");
// $createTb = "CREATE TABLE Employee(
//             id INT PRIMARY KEY,
//             name VARCHAR(50),
//             age VARCHAR(5));";
// $q = mysql_query($createTb);
// 	//mysql_query("SET NAMES tis-620");
// $sql = "INSERT INTO Employee VALUES ('$id','$name', '$age');";
// $q1 = mysql_query($sql);
        
// if($q1) {
//         echo "Insert Success";
//         mysql_close($link);
// } else {
//         echo "Insert not success";
// }
            
// echo '<a href="week9-1_insert.php">Back to insert page</a><br>';
// echo '<a href="week9-1.php">Back to home page</a><br>';
// }
// ?>