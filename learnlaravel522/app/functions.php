<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/15
 * Time: 14:09
 */
// json_encode 返回  因learnlaravel 查询出是 对象数组 所以通过ajax 转换为 普通数组
     function ajaxJsonencode($data)
     {

         $data = json_encode($data);
         return json_decode($data,true);
     }
//print_r 打印
    function p($data)
    {
         echo "<pre>";
         print_r($data);
    }
 //计算两个时间相差多少天  $day1 为第一个时间 $day2 为第二个时间
    function diffBetweenTwoDays ($day1, $day2)
    {
        $second1 = strtotime($day1);
        $second2 = strtotime($day2);

        if ($second1 < $second2) {
            $tmp = $second2;
            $second2 = $second1;
            $second1 = $tmp;
         }
        return ($second1 - $second2) / 86400;
   }
//年息  $money 为 金额  $reta 利率
    function nianXi($money,$reta)
    {
            $re = $reta/100;
            $mo = $money*$re;
            return $mo;
    }
//日息   $money 为 金额  $reta 利率
    function riXi($money,$reta)
    {
        $re = $reta/100;
        $mo = $money*$re;
        $rixi = $mo/12/30;
        return $rixi;
    }
//结束时间 $qixian 为月份 $sj 为 从哪个日期开始后的结束时间
    function endTime($qixian,$sj)
    {
        return date("Y-m-d",strtotime("+".$qixian." month",strtotime($sj)));
    }
//返回整形金额  $money金额
    function MoneyInt($money)
    {
        $z = str_replace(',','',$money);
        $x = intval($z);
        return $x;
    }
//状态返回值  $status 状态码 $msg 信息 $callback jsono 回调参数
    function error($status,$msg,$callback)
    {
        $arr  = array('status' =>$status , 'msg'=>$msg);
        $data = json_encode($arr, JSON_UNESCAPED_UNICODE);
        $info = $callback.'('.$data.')';
        return $info;
    }
//数组返回 $data 数组 $callback jsono 回调参数
    function success($data,$callback)
    {
        $data = json_encode($data);
        $info = $callback.'('.$data.')';
        return $info;
    }




