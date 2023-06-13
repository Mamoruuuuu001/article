<?php
require_once "SimpleRest.php";
require_once "header.php";

class NewsRest extends SimpleRest
{
    public function __construct()
    {
    }

    // 取得所有文章的 json
    public function index($p = 1, $cate_id = 0, $keyword = '', $year = '')
    {
        $data = index($p, $cate_id, $keyword, $year);
        return $this->encodeJson($data);
    }

    // 取得單一文章的 json
    public function show($id)
    {
        $data = show($id);
        return $this->encodeJson($data);
    }

    // 取得年度文章數
    public function count()
    {
        $data = article_count();
        return $this->encodeJson($data);
    }

    public function encodeJson($responseData)
    {
        if (empty($responseData)) {
            $statusCode = 404;
            $responseData = array('error' => '無資料');
        } else {
            $statusCode = 200;
        }
        $this->setHttpHeaders($statusCode);

        $jsonResponse = json_encode($responseData, 256);
        return $jsonResponse;
    }

}
