<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 16:41
 */
namespace app\admin\controller;
use think\Controller;

class Index extends Controller{
    public function index(){

        return $this->fetch();
    }

    public function admin(){
        $admin=model('Index')->news();

       echo json_encode($admin);
    }
    public function shi(){
        $id=input('post.id');
        $admin=model('Index')->index($id);

       echo json_encode($admin);
    }
    public function login(){
        $id=input('post.id');
        $admin=model('Index')->login($id);

       echo json_encode($admin);
    }


}