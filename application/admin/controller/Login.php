<?php

namespace app\admin\controller;

use app\common\model\Admin;
use think\Controller;

class Login extends Controller
{
    public function login()
    {
//        $data = db('admin')->find(1);
//        dump($data);
        if (request()->isPost()){
//            halt($_POST);
            $res = (new Admin())->login($_POST);
            dump('here is $res');
            halt($res);
        }
        return $this->fetch('index');
    }
}
