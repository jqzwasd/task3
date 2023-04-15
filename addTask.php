<?PHP
require("boot.php");
$title = "веб - технологии";
$page_title = "Вход";
$content = "
<form action = '' method = 'post'>
    <textarea name = 'task'></textarea>
    <input type='submit'>
</form>
";
require("content/layout.php");

if (isset($_SESSION['login']) and isset($_SESSION['password']) and isset($_POST['task'])) {
    
    $id = $_SESSION['id'];
    $pas = $_SESSION['password'];
    $task = $_POST['task'];
    $stmt = pdo()->query("INSERT INTO `tasks`(`id`, `Task`) VALUES ('$id','$task')");
    // $stmt = pdo() -> query("select* from `tasks` ");

}

?>