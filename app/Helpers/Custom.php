<?php 
if (!function_exists('adminRoute')) {
    function adminRoute($slug,$param=null){
        return route('admin.'.request()->segment(2).'.'.$slug,$param);
    }
}
if (!function_exists('can')) {
    function can($expression,$type='admin') {
        $expression = strpos($expression, '_')?$expression : $expression.'_'.request()->segment(2);
        return  auth($type)->user()->hasAccess($expression.'_'.request()->segment(2));
    }
}
if (!function_exists('adminLog')) {
    function adminLog($expression,$logMessage) {
        AdminLog::write($expression,'Admin',$logMessage);   
    }
}
