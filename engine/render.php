<?php

function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
            'title' => $params['title'],
            'top_menu' => renderTemplate('menu', $params, $color='black'),
            'content' => renderTemplate($page, $params),
            'bottom_menu' => renderTemplate('menu', $params, $color='white'),
        ]
    );
}

function renderTemplate($page, $params = [], $color='') {

    ob_start();

    extract($params);
    /*foreach ($params as $key => $value)  $$key = $value;*/

    include TEMPLATES_DIR . $page . ".php";

    return ob_get_clean();

}