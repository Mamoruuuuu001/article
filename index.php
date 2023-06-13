<?php
require_once 'header.php';

$p = isset($_REQUEST['p']) ? (int) $_REQUEST['p'] : 1;
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'index';
$cate_id = isset($_REQUEST['cate_id']) ? (int) $_REQUEST['cate_id'] : 0;
$keyword = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword'], FILTER_SANITIZE_STRING) : '';



switch ($op) {
    // 觀看單一文章
    case 'show':
        $news = show($id);
        add_count($id);
        $smarty->assign('news', $news);
        break;

    // 預設為文章列表
    default:
        $all_news = index($p,$cate_id,$keyword,$year);
        $smarty->assign('all_news', $all_news);
        break;
}

$smarty->assign('op', $op);
$smarty->assign('cate_id', $cate_id);
$smarty->display('index.tpl');

function add_count($id)
{
    global $db;
    $sql = "UPDATE `articles` SET `counter` = `counter` + 1
    WHERE `id` = ?";
    $sth = $db->prepare($sql);
    $values = [$id];
    $sth->execute($values);
}

$all_news=index($p);

$smarty->assign('all_news', $all_news);
// $smarty->assign('page_tool', $page_tool);

