<?php

function user_add ($userlogin, $userpass, $username, $useremail, $userphone, $userdate, $usersex, $userjob)
{


$userlogin = mysql_real_escape_string($userlogin);
$userpass =mysql_real_escape_string($userpass);

$sql = "INSERT INTO users (user_login, user_pass, user_name, user_email, user_tel, user_birthday, user_sex, user_job) VALUES 
        ('$userlogin', '$userpass', '$username', '$useremail', '$userphone', '$userdate', '$usersex', '$userjob')";

$result = mysql_query($sql);

return $result;

};

?>