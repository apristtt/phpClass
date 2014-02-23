<?php 
// In htmlblock you must aligned in
// {$_SERVER['$PHP_SELF']} in calling itself
function form(){
echo<<<HTMLBLOCK
<form action = "{$_SERVER['PHP_SELF']}" method="POST">
<h1>Register</h1>
First Name : <input type="text" name="firstname"><p>
Last Name : <input type="text" name="lastname"><p>
Password: <input type="password" name="pwd"><p>
<input type="submit" name="send" value="Submit">
<input type="reset" name="reset" value="Cancel">
</form>
HTMLBLOCK;
}
function process(){
    $firstname = $_POST["firstname"];
    echo "Your name : $firstname<br>";
    $lastname = $_POST["lastname"];
    echo "Your lastname : $lastname<br>";
    $pwd = $_POST["pwd"];
    echo "Your password : $pwd<br>";
}
            
function valid(&$error){
    $request = array("pwd" => "password");
    // key value is easy to refer
    $error = "";
    foreach($request as $field => $label){
        if(trim($_POST[$field])==""){
            $error = "<br>You do not any key".$label."<br>";
        }
    }
    if ($error) { return false; }
    else { return true; }
}
    if(isset($_POST["send"])){
        if(valid($error)){ process();}
            else {echo "<font color = \"red\">You have some ERROR!".$error."</font>";
            form();
        }
    }
    else{form();}