
<?PHP
$title = "задание веб";
$page_title = "Это секретная страница";

require_once __DIR__.'/boot.php';
$stmt = pdo() ->("SELECT * FROM users");
$content = "";
while ($row = $stmt -> fetch()){
    echo $row["id"];
}
include("content/layout.php");
?>
