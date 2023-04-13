<?PHP
$title = "веб - технологии";
$page_title = "Вход";
$content = "
<form action = '' metod = 'post'>
    <textarea name = 'task'></textarea>
    <input type='submit'>
</form>
";
require("content/layout.php");
require("boot.php");
if (isset($_SESSION['Login']) and isset($_SESSION['Password']) and isset($_POST['task'])) {
    
    $id = $_SESSION['ID'];
    $pas = $_SESSION['Password'];
    $task = $_POST['task'];
    
    // require_once __DIR__ . '/boot.php';
    $stmt = pdo()->query("INSERT INTO `tasks`(`User_id`, `Task`) VALUES ('$ID','$task')");
}
?>