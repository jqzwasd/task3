<?php
$title = "задание веб";
$page_title = "Это секретная страница";

require_once __DIR__.'/boot.php';
$stmt = pdo() ->query("SELECT * FROM users");
$content = "";
$content2="";
while ($row = $stmt -> fetch()){
    $content =  $content . $row['id'] . " / ". $row['login'] . " / " . $row['password'] . " / " .$row['role'].  "<br>" ;
}
$content = $content . "<form action = 'Lock_admin_page.php'>
<input type='submit' value='заблокировать или разблокировать пользователя'>
</form>";
include("content/layout.php");

?>
