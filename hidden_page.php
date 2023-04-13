
<?PHP
$title = "задание веб";
$page_title = "Это секретная страница";

require_once __DIR__.'/boot.php';
$stmt = pdo() ->query("SELECT * FROM users");
$content = "";
while ($row = $stmt -> fetch()){
    echo $row["id"];
    $content =  $content . $row['id'] . " | ". $row['login'] . " | " . $row['password'] . "<br>";
}
include("content/layout.php");
?>
