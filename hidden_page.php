<?php
$title = "задание веб";
$page_title = "Это секретная страница";

require_once __DIR__.'/boot.php';
$stmt = pdo() ->query("SELECT * FROM users");
$content = "";
while ($row = $stmt -> fetch()){
    echo $row["ID"];
    $content =  $content . $row['ID'] . " / ". $row['Login'] . " / " . $row['Password'] . "<br>";
}
include("content/layout.php");
?>
