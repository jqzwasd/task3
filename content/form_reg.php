<form action="reg.php" method="post">
    <div>
        <label for="login">Логин</label>
        <input type ="text" name="login" id="login">
    </div>
    <div>
    <label for="password">Пароль</label>
        <input type ="password" name="password" id="password">
    </div>
    <div>
        <label for="re_password">Повторите пароль</label>
        <input type ="password" name="re_password" id="re_password">
    </div>
    
    <div>
        <label for="role">Роль</label>
        <input type ="text" name="role" id="role">
    </div>
    
    <div>
        <input type="submit" value="зарегестрироваться">
    </div>
    <div><?= $message?></div>
</form>