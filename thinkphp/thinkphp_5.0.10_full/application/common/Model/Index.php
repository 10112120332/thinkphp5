<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 17:15
 */
namespace app\common\model;

use think\Db;
use think\Model;

class Index extends Model{
    public function news()
    {
        $result = Db::table('mq_sys_provinces')->select();

        return $result;
    }
    public function index($id)
    {
        $result = Db::table('mq_sys_cities')->where('provinceid',$id)->select();

        return $result;
    }
    public function login($id)
    {
        $result = Db::table('mq_sys_areas')->where('cityid',$id)->select();

        return $result;
    }
}
