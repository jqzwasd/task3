<?PHP
$title = "Авторизация";
$page_title = "Вход";
$content = file_get_contents("content/form_auth.php");
require("boot.php");
if(isset($_POST["login"])and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    $users = pdo()->query("select * from `users` where '$login' = login and '$pas' = password ")->fetch(PDO::FETCH_ASSOC);
    if($users){
        $_SESSION['id'] = $users['id'];
        $_SESSION['login'] = $users['login'];
        $_SESSION['password'] = $users['password'];
        $_SESSION['role'] = $users['role'];
        print_r(array_keys($users));
        print_r(array_values($users));
    }
    
    $admin = pdo()->query("select * from `users` where '$login' = login and '$pas' = password and role = 'admin' ")->fetch(PDO::FETCH_ASSOC);
    if($admin){
        header('Location: hidden_page.php');
    }
    $user = pdo()->query("select * from `users` where '$login' = login and '$pas' = password and role = 'user' and log='1' ")->fetch(PDO::FETCH_ASSOC);
    if($user){
        header('Location: addTask.php');
    }
    else{
        header('Location: index.php');
    }
}

require("content/layout.php");
?>


