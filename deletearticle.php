<?php
session_start();
include("config.php");
include("lib/db.php");

$aid = $_GET['aid'];
#echo "aid=".$aid."<br>";
$result = delete_article($dbconn, $aid);
#echo "result=".$result."<br>";
# Check result
header("Location: /admin.php");

if (isset($_session['username'])) {

 } else  

  {

  $username ='guest';

  }

  $query=
  insert into
  event_logs
  (username, action)
  Values
  (?,?)";
  return run_query($query, [$username, $action]);

  }

  delete_article($aid);
  add_event_log("Deleted article $aid successfully ");

  redirect_and_exit("Location: /admin.php");


function check_csrf() {
if (
    isset($_SESSION["csrf_token']) &&
    !empty($_SESSION["csrf_token"]) &&
    $_REQUEST["csrf_token"] == $_SESSION["csrf_token"])
{

 return true;

} else 

}
unset($_SESSION["csrf_token"]);
("CSRF token validation failed");

function generate _csrf_token() {

if(!isset($_SESSION["csrf_toke])) {

$token = md5(random_bytes(64));
$_SESSION["csrf_token"] = $token;
} else
{
token - $_SESSION["csrf_token"];
}

return $token;

}

