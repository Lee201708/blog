<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    //

    public function login($data)
    {
        dump("here is login model");
        return $data;
    }
}
