<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
        if ( !isset( $_POST['send'] ) ) {
            // HTML code to display form
    <form action="<?php $_PHP_SELF ?>" method="POST">
	<h1>Insert Data</h1>
	Employee ID : <input type="text" name="id"><br>
	Employee Name : <input type="text" name="name"><br>
	Age : <input type="text" name="age"><br>
	<input type="submit" name="send" value="Submit">
	<input type="reset" name="cancel" value="Cancel">

        ?>
        <?
        } else {
            // send the submitted data
            $link = mysql_connect("127.0.0.1","root");
            mysql_select_db("adminDB");
            $sql = 'INSERT INTO Employee VALUES ($_POST["id"], $_POST["name"], $_POST["age"]);';
			$q1 = mysql_query($sql);
			if($q1) {
		        echo "Insert Success";
		        mysql_close($link);
			} else {
			    echo "Insert not success";
			}
	            
	echo '<a href="week9-1_insert.php">Back to insert page</a><br>';
	echo '<a href="week9-1.php">Back to home page</a><br>';
        }

?>
</body>
</html>

