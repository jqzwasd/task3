<?PHP
$title = "задание веб";
$page_title = "Регистрация";
$content = file_get_contents("content/form_reg.php");
$message = "";
require("content/layout.php");
require("boot.php");
if (isset($_POST["login"]) and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    $role = $_POST["role"];
    $users_exist = pdo()->query("select * from `users` where login = '$login' and password = '$pas' and role = '$role'")->fetch(PDO::FETCH_ASSOC);
    echo $login ." ".$pas;
    if (!$users_exist){
        $stmt = pdo()->query("INSERT INTO users(login, password,role) VALUES ('$login','$pas','$role')");
        $stmt = pdo() ->query("UPDATE users SET log=1 WHERE login = '$login' and password = '$pas' and role = '$role'");
    }
    else{
        $message = "Такой пользователь уже существует";
    }
    header("Location: ".$_SERVER['REQUEST_URI']);
}

?>
