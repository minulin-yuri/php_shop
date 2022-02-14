<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('PRODUCTS_IMG_DIR', 'product_img/');
define('IMG_DIR', 'img/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'gb');
define('PASS', '123456');
define('DB', 'basic_php');

require "../engine/db.php";
require "../engine/render.php";
// require "../models/upload.php";
require "../models/catalog.php";
require "../models/auth.php";
require "../models/feedback.php";
require "../models/links.php";
// require "../models/files.php";
//require "../engine/log.php";
include '../engine/controller.php';