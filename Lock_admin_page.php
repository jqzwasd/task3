<?php
$title = "задание веб";
$page_title = "Страница блокировки пользователя";
$content = file_get_contents("content/form_admin.php");
require("content/layout.php");
require("boot.php");
if(isset($_POST['lock'])){
    $id = $_POST['id'];
    $stmt = pdo() ->query("UPDATE users SET log=0 WHERE id='$id'");

    
}
if(isset($_POST['unlock'])){
    $id = $_POST['id'];
    $stmt = pdo() ->query("UPDATE users SET log=1 WHERE id='$id'");

    
}
?>