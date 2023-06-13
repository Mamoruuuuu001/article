<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'function.php';

try {
    $db = new PDO("mysql:host={$dbhost};dbname={$dbname};charset={$dbcharacter}", $dbuser, $dbpasswd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) {
    die("無法連上資料庫：" . $e->getMessage());
}

$smarty = new \Smarty;
$smarty->setTemplateDir(_PATH . '/templates/');
$smarty->setCompileDir(_PATH . '/templates_c/');
$smarty->setConfigDir(_PATH . '/configs/');
$smarty->setCacheDir(_PATH . '/cache/');

// 將網址及實體路徑送到樣板
$smarty->assign('path', _PATH);
$smarty->assign('url', _URL);
$smarty->assign('categories', $categories);
$smarty->assign('article_count', article_count());
$year = isset($_GET['year']) ? (int) $_GET['year'] : 0;
$smarty->assign('year', $year);
$is_admin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;
$smarty->assign('is_admin', $is_admin);