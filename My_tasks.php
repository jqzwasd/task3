<?php
require_once __DIR__.'/boot.php';
$title = 'Мои задания';
$page_title = "Мои задания";
$content = "";
$content2="";
$id = $_SESSION['id'];
$stmt = pdo() ->query('SELECT * FROM tasks WHERE id ='.$id); 
while ($row = $stmt -> fetch()){
    $content =  $content . $row['id'] . " | ". $row['task'] . " | " ."<br>";
}
require("content/layout.php");
?>