<?
 error_reporting (E_ALL);
 ini_set('display_errors', '1');
    if($send == null){
echo <<<HTMLBLOCK
<form action ="{$_SERVER['$PHP_SELF']}" method = "post">
<h1> Insert Data </h1>
Employee Id:<input type = "text" name = "id">
Employee Name:<input type = "text" name = "name">
Age:<input type = "text" name = "age"> <br>
<input type = "submit" name = "send" value = "submit">
<input type = "reset" name = "cancel" value = "cancel">
</form>
HTMLBLOCK;
    }
 else{
 $link = mysql_connect("127.0.0.1", "root");
 mysql_query("CREATE DATABASE IF NOT EXISTS adminDB;");
 mysql_select_db("adminDB");
 $create_Tb = "CREATE TABLE employee(
                              id INT PRIMARY KEY,
                              name VARCHAR(50),
                              age VARCHAR(5));";
 $q = mysql_query($create_Tb);
 mysql_query("SET NAME tis620)");
 // $sql = "INSERT INTO employee VALUES('$id','$name','$age');";
 $sql = 'INSERT INTO Employee VALUES ($_POST["id"], $_POST["name"], $_POST["age"]);';
 $q1 = mysql_query($sql);
 if($q1){
         echo "insert Sucess<br>";
         mysql_close($link);
 }
 else{
         echo "insert not sucess<br>";
 }
 echo "<a href = insert.php>Back to insert page</a><br>";
 echo "<a href = index.html>Back to Home page</a>";
 }
    ?>