<?php
function router($page, $action = "") {

$params = [];

$params['user'] = get_user();
$params['auth'] = is_auth();

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        $params['products'] = getData('products', 4);
        $params['winners'] = getData('winners', 4);
        break;

    case 'catalog':
        $params['title'] = 'Каталог';
        $params['products'] = getData('products', 8);
        break;

    case 'about':
        $params['title'] = 'О нас';
        $params['phone'] = 444333;
        break;

    case 'card':
            $product = getSingleProduct($action);
            $comments = getComments($action);
            if ($product) {
                $params['title'] = $product['name'];
                $params['product'] = $product;
                $params['comments'] = $comments;
            } else {
                header("Location: /?page=error");
                die();
            }
        break;

    case 'feedback':
        doCommentAction($action);

    case 'basket':
        $params['title'] = 'Корзина';
        break;

    case 'login':
        $login = $_POST['login'];
        $pass = $_POST['pass'];
          
        if (auth($login, $pass)) {
            if (isset($_POST['save'])) {
                $hash = uniqid(rand(), true);
                $db = getDb();
                $id = mysqli_real_escape_string($db, strip_tags(stripslashes($_SESSION['id'])));
                $sql = "UPDATE `users` SET `hash` = '{$hash}' WHERE `users`.`id` = {$id}";
                $result = mysqli_query($db, $sql);
                setcookie("hash", $hash, time() + 3600);
                
            }
            header("Location: /");
            die();
        } else {
            die('Неверный логин или пароль');
        }
        break;

    case 'calculate': 
        $params['title'] = 'Калькулятор';
        if ($_POST) {
            $num1 = (int)$_POST['num1'];
            $num2 = (int)$_POST['num2'];
            $math = $_POST['math'];
            $params['message'] = math($num1, $num2, $math);
            $params['num1'] = $_POST['num1'];
            $params['num2'] = $_POST['num2'];
            $params['math'] = $_POST['math'];
        }
        
    default: 
        $page = 'error';
        
}

return $params;

}