<?php
function router($page, $action = "") {

$params = [];

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
            $id = (int)$_GET['id'];
            $product = getSingleProduct(14);
            $comments = getComments(14);
            if ($product) {
                $params['title'] = $product['name'];
                $params['product'] = $product;
                $params['comments'] = $comments;
            } else {
                header("Location: /?page=error");
                die();
            }
        break;

    // case 'gallery':
    //     $params['title'] = 'Галерея';
    //     $params['message'] = 'ok';
    //     $params['images'] = getImagesList();
    //     break;
    
    // case 'view_image':
    //     $id = (int)$_GET['id'];
    //     $image = getSingleImage($id);
    //     if ($image) {
    //         $params['title'] = $image['name'];
    //         $params['image'] = $image;
    //         $params['action'] = 'none';
    //     } else {
    //         header("Location: /?page=error");
    //         die();
    //     }
    //     break;

    // case 'apicatalog':
    //     echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    //     die();
        
    default: 
        $page = 'error';
        
}

return $params;

}