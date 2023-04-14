<?php
$title = "задание веб";
$page_title = "Это секретная страница";

require_once __DIR__.'/boot.php';
$stmt = pdo() ->query("SELECT * FROM users");
$content = "";
while ($row = $stmt -> fetch()){
    $content =  $content . $row['id'] . " / ". $row['login'] . " / " . $row['password'] . " / " .$row['role']. file_get_contents("content/form_admin.php"). "<br>" ;
}
include("content/layout.php");
?>
