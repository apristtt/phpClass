<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PHP To-do list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
         <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript">
//      function checkEmpty(){
//          // with(todo) {
//               if(todocontent.value==="")
//               {
//                   alert('type!!');
//                   todo.focus();
//                  // return true;
//               } else {
//                   window.location("save.php");
//               }
//          // }
//        }
//           // $(".alert").alert()
        </script>
    </head>
    <body>
        <!--<form action="save.php" method="post" onsubmit="return checkEmpty();">-->
        <form action="save.php" method="post">
        <div class="container" style="background-color: #ecf0f1;">
        <!--<form class="form-inline" role="form">-->
        
            <h4>To-do list</h4>
        <div class="form-group">
            <?php
            include 'config.php';
            
            $todoid ="";
            $todoname = "";
            $tododone = "";

            $sql = "SELECT * FROM todo_list";
            $result = mysql_db_query('todo', $sql);
            while ($record=  mysql_fetch_array($result)) {
                $todoid = $record['todo_id'];
                $todoname = $record['todo_name'];
                $tododone = $record['todo_done'];
            }
            //<span class="label label-primary">$todoid</span>
//<h5>$todoname</h5>
echo<<<EOT
<dl class="dl-horizontal">
<dt>$todoid</dt>
<dd>$todoname</dd>
</dl>
<table class="table table-hover">
<thead>        
<tr>
<th>ID</th>
<th>Name</th>
</tr>
</thead>
<tbody>
<tr>
<td>$todoid</td>
<td>$todoname</td>
</tr>
</tbody>
</table>
EOT;
            ?>
           <!-- <input type="checkbox" class="form-control" checked="false"> -->
            <form name="todo" id="todo">
            <input type="text" class="form-control" name="todocontent" id="todocontent" placeholder="type to-do list here..." data-dismiss="alert">
            
            <br><button type="submit" class="btn btn-primary" onclick="return checkEmpty();">Add</button>
                </form>
            </div>
            
<!--</form>-->
            </div>
            </form>
            <!--</form>-->
    </body>
</html>
