<?PHP
$title = "задание веб";
$page_title = "Вход";
$content = file_get_contents("content/form_auth.php");
require("boot.php");
if(isset($_POST["Login"])and isset($_POST["Password"])){
    $login = $_POST["Login"];
    $pas = $_POST["Password"];
    $users = pdo()->query("select * from `users` where '$login' = Login and '$pas' = Password ")->fetch(PDO::FETCH_ASSOC);
    if($users){
        $_SESSION['ID'] = $users['ID'];
        $_SESSION['Login'] = $users['Login'];
        $_SESSION['Password'] = $users['Password'];
    }
    print_r(array_keys($users));
    print_r(array_values($users));
}

require("content/layout.php");
?>
?>