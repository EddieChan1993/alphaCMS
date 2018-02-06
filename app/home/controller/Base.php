<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use think\Db;

class Base  extends BaseController
{
    function __construct()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $is_close = Db::name('options')->where('option_id', 6)->value('is_close');
        if (empty($is_close)) {
            $this->error("系统维护中...");
            die;
        }
    }

    /**
     * 正常消息输出
     * @param $msg
     */
    public  function output($msg)
    {
        $map = [
            'error'=>0,
            'msg'=>$msg
        ];

        echo json_encode($map);
        die;
    }

    /**
     * 提醒消息输出
     * @param $msg
     */
    public  function warning($msg)
    {
        $map = [
            'error'=>1,
            'msg'=>$msg
        ];

        echo json_encode($map);
        die;
    }
}