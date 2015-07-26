<?php 

require_once '../functions/sql.php';
require_once '../functions/users.php';

$_POST['name_auto'] =  $_POST['name_auto']; 


$userlogin = substr(htmlspecialchars(trim($_POST['user_login'])), 0, 100);
$userpass = substr(htmlspecialchars(trim($_POST['user_pass'])), 0, 100);
$username = substr(htmlspecialchars(trim($_POST['user_name'])), 0, 100);
$useremail = substr(htmlspecialchars(trim($_POST['user_email'])), 0, 100);
$userphone = substr(htmlspecialchars(trim($_POST['user_phone'])), 0, 100);
$userdate = substr(htmlspecialchars(trim($_POST['user_birthday'])), 0, 100);
$usersex = substr(htmlspecialchars(trim($_POST['user_sex'])), 0, 100);
$userjob = substr(htmlspecialchars(trim($_POST['user_job'])), 0, 100);


sql_connect();

if (user_add ($userlogin, $userpass, $username, $useremail, $userphone, $userdate, $usersex, $userjob)) {

echo "Registration perfomed	successfully";

};

?>