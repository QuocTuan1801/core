<?php

/**
 * Hàm trợ giúp
 */
function dd($value) {
    echo '<pre>';
    print_r($value);
    exit;
}

function currency($value) {
    return number_format($value, 0, '', ',').'₫';
}