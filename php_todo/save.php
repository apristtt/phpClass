<?php
include 'config.php';

$todo = $_POST["todocontent"];
    
//    $sql1 = 'INSERT INTO todo_list (todo_id, todo_name, todo_done) VALUES ($id, $todo, "0")';
//   // mysql_select_db('todo');
//   mysql_db_query('todo', $sql1);
//    $check = mysql_query($sql1);
//    if (! $check) {
//        die (mysql_error());
//    }

//function generateTodoID() {
   // include 'config.php';
    // check id 
//    $sql = 'SELECT MAX(todo_id) FROM todo_list';
//    $result = mysql_db_query('todo', $sql);
//    $num = mysql_num_rows($result);
//    if ($num == 0) {
//        $id = $id++;
//    }
//}

if ($todo == "") {
    echo "No data";
echo<<<EOT
<a href="javascript: history.go(-1)"></br>Back</a>
EOT;
} else {
//    insertNewTodo();
    // count num first!!
//     $sql = 'SELECT MAX(todo_id) FROM todo_list';
//    $result = mysql_db_query('todo', $sql);
//    $num = mysql_num_rows($result);
//    if ($num == 0) {
//        $id = $id++;
//    }
    
    $sql = "SELECT MAX(todo_id) FROM todo_list";
    $max = mysql_query($sql);
    echo $total_max = mysql_result($max, 0);
    $total_max++;
    
    echo "$total_max";
    
    // then insert new todo
    
      $sql1 = "INSERT INTO todo_list (todo_id, todo_name, todo_done) VALUES ('$total_max', '$_POST[todocontent]', '0')";
   // mysql_select_db('todo');
   mysql_db_query('todo', $sql1);
    $check = mysql_query($sql1);
    if (! $check) { 
        die (mysql_error());
    }
    
    echo "To-do added!";
    mysql_close($conn);
    header("Location:index.php");
}