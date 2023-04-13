<?PHP
$title = "задание веб";
$page_title = "Регистрация";
$content = file_get_contents("content/form_reg.php");
require("content/layout.php");
require("boot.php");
if (isset($_POST["Login"]) and isset($_POST["Password"])){
    $login = $_POST["Login"];
    $pas = $_POST["Password"];
    $users_exist = pdo()->query("select * from `users` where Login = '$login' and Password = '$pas'")->fetch(PDO::FETCH_ASSOC);
    echo $login ." ".$pas;
    if (!$users_exist){
        $stmt = pdo()->query("INSERT INTO users(Login, Password) VALUES ('$login','$pas')");
    }
    else{
        echo "Такой пользователь уже существует";
    }
    header("Location: ".$_SERVER['REQUEST_URI']);
}

?>
