<?php
require_once 'urls.php';

$url = parse_url($_SERVER['REQUEST_URI']); // Lấy đường dẫn URL
$urls = explode('/',rawurldecode(trim($url["path"],'/'))); // Cắt chuỗi có ký tự "/"

$controller = isset($urls[2]) ? $urls[2] : 'index'; // Lấy controller từ phần tử thứ 3
$method = isset($urls[3]) ? $urls[3] : 'index'; // Lấy method từ phần tử thứ 4
$param = isset($urls[4]) ? $urls[4] : null; // Lấy param từ phần tử thứ 5

// Nếu là trang admin tương tự như trên nhưng phải dài thêm 1 phần tử
if (isset($urls[2]) && $urls[2] === 'admin') {
    $controller = isset($urls[3]) ? $urls[3] : 'index';
    $method = isset($urls[4]) ? $urls[4] :  'index';
    $param = isset($urls[5]) ? $urls[5] : null;
}

/**
 * Hiện thị trang
 */
function render($controller, $method, $param = null) {
    global $pages;
    global $param;
    
    if (isset($pages[$controller][$method])) {
        require_once '../src/'.$pages[$controller][$method]['handle']; // Chèn file xử lý dữ liệu
        require_once '../resources/views/pages/'.$pages[$controller][$method]['view']; // Chèn file view
        $title_page = $pages[$controller][$method]['title'];
    } else {
        require_once '../resources/views/errors/404.php';
        $title = '404 trang không tìm thấy';
    }
}
