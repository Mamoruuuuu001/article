<?php
require_once "NewsRest.php";
$NewsRest = new NewsRest();

// 過濾外來變數
$p = isset($_REQUEST['p']) ? (int) $_REQUEST['p'] : 1;
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'index';
$cate_id = isset($_REQUEST['cate_id']) ? (int) $_REQUEST['cate_id'] : 0;
$keyword = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword'], FILTER_SANITIZE_STRING) : '';

switch ($op) {
    case 'index':
        echo $NewsRest->index($p, $cate_id, $keyword, $year);
        break;

    case 'show':
        echo $NewsRest->show($id);
        break;

    case 'count':
        echo $NewsRest->count();
        break;
}
