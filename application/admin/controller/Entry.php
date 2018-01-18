<?php

namespace app\admin\controller;

class Entry extends Common
{
    public function index()
    {
        return "LEE";
        //加载模板文件
        //fetch 不传参数时，默认加载与当前控制器同名的模板文件
//        return $this->fetch('index');
    }
}
