<?php
require_once '../header.php';
use Intervention\Image\ImageManagerStatic as Image;
$_SESSION['is_admin'] = true;

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'create';
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$file = isset($_REQUEST['file']) ? filter_var($_REQUEST['file'], FILTER_SANITIZE_STRING) : '';
$thumb = isset($_REQUEST['thumb']) ? filter_var($_REQUEST['thumb'], FILTER_SANITIZE_STRING) : '';

switch ($op) {
    case 'store':
    $id = store();
    header("location: ../index.php?op=show&id=$id");
    exit;

    case 'edit':
        $news = edit($id);
        $smarty->assign('news', $news);
        break;

    case 'update':
        update($id);
        header("location: ../index.php?op=show&id=$id");
        exit;

    case 'destroy_file':
        destroy_file($id, $file, $thumb);
        header("location: index.php?op=edit&id=$id");
        exit;

    case 'destroy':
        destroy($id);
        header("location: ../index.php");
        exit;

    default:
    $op = 'create';
    $news = create();
    $smarty->assign('news', $news);
    break;
}

function edit($id)
{
    return show($id);
}

$smarty->assign('op', $op);
$smarty->assign('cate_id', 0);
$smarty->display('index.tpl');

function store()
{
global $db;
$sql = "INSERT INTO `articles` (`title`, `info`, `date`, `content`, `cate_id`) VALUES (?, ?, ?, ?, ?)";
$sth = $db->prepare($sql);
$values = [
        $_POST['title'],
        $_POST['info'],
        $_POST['date'],
        $_POST['content'],
        $_POST['cate_id'],
    ];

$sth->execute($values);
$id = $db->lastInsertId();

uploads($id);
return $id;
}

function uploads($id)
{
if(empty($id)){
    return;
}

foreach ($_FILES['files']['name'] as $i => $filename) 
{
    // 若沒檔案就中斷
    if (!$filename) {
        break;
    }

    // 檢查檔案是否上傳成功
    if ($_FILES['files']['error'][$i] === UPLOAD_ERR_OK) {

        // 讓檔案放在文章編號的目錄下，比較方便管理，檢查有無該目錄
        if (!is_dir(_PATH . "/uploads/{$id}")) {
            // 若無建立原檔目錄
            mkdir(_PATH . "/uploads/{$id}");
            // 順便建立縮圖目錄
            mkdir(_PATH . "/uploads/{$id}/thumbs");
        }

        // 暫存檔來源
        $file = $_FILES['files']['tmp_name'][$i];
        // 欲放置到哪裡
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // 圖片的前置字串
        $prefix = date('YmdHis');
        // 原圖欲放置到哪裡
        $dest = _PATH . "/uploads/{$id}/{$prefix}_{$i}.{$ext}";

        if ($ext == 'mp4') {
            // 縮圖欲放置到哪裡
            $thumb_dest = _PATH . "/uploads/{$id}/thumbs/{$prefix}_{$i}.jpg";

            // 將檔案移至指定位置
            if (move_uploaded_file($file, $dest)) {
                // 物件設定
                $ffmpeg = FFMpeg\FFMpeg::create(array(
                    'ffmpeg.binaries' => _PATH . '/ffmpeg/bin/ffmpeg.exe',
                    'ffprobe.binaries' => _PATH . '/ffmpeg/bin/ffprobe.exe',
                    'timeout' => 3600, // The timeout for the underlying process
                    'ffmpeg.threads' => 12, // The number of threads that FFMpeg should use
                ));
                // 開啟影片
                $video = $ffmpeg->open($dest);
                // 擷取畫面
                $video
                    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
                    ->save($thumb_dest);
                // 製作縮圖 
                $image = Image::make($thumb_dest)->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($thumb_dest);
            } 
            
            else {
                die("無法將檔案{$file}上傳至指定位置{$dest}");
            }
        }

        else{
        $thumb_dest = _PATH . "/uploads/{$id}/thumbs/{$prefix}_{$i}.{$ext}";

        $image = Image::make($file)->resize(1600, 1600, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($dest);

        // 再將大圖縮成480小圖
        $image = Image::make($dest)->resize(480, 480, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($thumb_dest);
    }

    }  
    
    else {
        die("上傳錯誤：{$_FILES['files']['error'][$i]}");
    }
}
}

function create()
{
    $news = [
        'id' => '',
        'title' => '',
        'info' => '',
        'date' => date('Y-m-d'),
        'content' => '',
        'cate_id' => 3,
    ];
    return $news;
}

function update($id)
{
    global $db;
    $sql = "UPDATE `articles` SET
    `title` = ?, `info` = ?, `date` = ?, `content` = ?, `cate_id` = ?
    WHERE `id` = ?";
    $sth = $db->prepare($sql);
    $values = [
        $_POST['title'],
        $_POST['info'],
        $_POST['date'],
        $_POST['content'],
        $_POST['cate_id'],
        $id,
    ];
    $sth->execute($values);

    // 檔案上傳
    uploads($id);
    return $id;
}

function destroy_file($id, $file, $thumb)
{
    // 刪除原圖檔或影片
    if (file_exists(_PATH . "/uploads/$id/$file")) {
        unlink(_PATH . "/uploads/$id/$file");
    }
    // 刪除縮圖
    if (file_exists(_PATH . "/uploads/$id/thumbs/$thumb")) {
        unlink(_PATH . "/uploads/$id/thumbs/$thumb");
    }
}

function destroy($id)
{
    global $db;
    // 取出所有檔案後依序刪除
    $files = get_thumbs($id);
    foreach ($files as $file => $thumb) {
        destroy_file($id, $file, $thumb);
    }
    // 刪除縮圖目錄
    rmdir(_PATH . "/uploads/$id/thumbs");
    // 刪除原圖目錄
    rmdir(_PATH . "/uploads/$id");
    // 刪除資料庫資料
    $sql = "DELETE FROM `articles` WHERE `id` = ?";
    $sth = $db->prepare($sql);
    $sth->execute([$id]);
}

?>
