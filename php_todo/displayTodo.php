<?php

include 'config.php';

$sql = "SELECT * FROM todo_list";
// $result = mysql_db_query('todo', $sql);
// while ($record = mysql_fetch_array($result)){
//     $name = $record['todo_name'];
// }

// echo $name;
$q = mysql_query($sql);
while($fetch = mysql_fetch_array($q)) {
	echo "TodoID : $fetch[todo_id]".
	"Todo Name : $fetch[todo_name]".
	"Todo Done? : $fetch[todo_done]";
}