<?
$action = $_POST['action'];
switch ($action) {
    case 'reg': // регистрация
        echo 'регистрация!';
    break;
    case 'atuh': // авторизация
        echo 'авторизация!';
    break;
    case 'rec': // восстановление пароля
        echo 'востановление праоля!';
    break;
   
}
?>