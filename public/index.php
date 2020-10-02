<?php
/**
 * Chạy tất cả file thông qua index
 */
require_once '../config/auto_load.php'; // File auto_load chạy những file cấu hình cho website

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bege || Home 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">

        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/css-plugins-call.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/bundle.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/main.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/responsive.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>main/css/colors.css">
    </head>
    <body>
        <div class="wrapper home-one home-three">
            <?php require '../resources/views/layouts/header.layout.php' ?>

            <?php render($controller, $method) ?>

            <?php require '../resources/views/layouts/brandlogo.layout.php' ?>
            <?php require '../resources/views/layouts/footer.layout.php' ?>
            <?php require '../resources/views/layouts/quickview.layout.php' ?>
        </div>
        <!-- Body main wrapper end -->

        <script src="<?= BASE_URL ?>js/app.js"></script>

		<!-- nivo slider pack js  -->
        <script src="<?= BASE_URL ?>main/js/jquery.nivo.slider.pack.js"></script>
        <!-- All plugins here -->
        <script src="<?= BASE_URL ?>main/js/plugins.js"></script>
        <!-- Main js  -->
        <script src="<?= BASE_URL ?>main/js/main.js"></script>
    </body>
</html>
