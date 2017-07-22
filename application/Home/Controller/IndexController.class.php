<?php
/**
 * Created by PhpStorm.
 * User: LiuJiaJun
 * Date: 2017/7/22
 * Time: 22:50
 */

namespace Home\Controller;
use Common\Controller\HomebaseController;
class IndexController extends HomebaseController{

    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $this->display('index');
    }
}