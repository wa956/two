<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Monolog\Handler\HandlerWrapperTest;
use App\Exceptions\Handler;

//首页
class IndexController extends Controller{
    public function index()
    {
        p(array('12'=>1));
    }
}