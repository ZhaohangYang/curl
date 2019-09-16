<?php
namespace huoban\models;
use huoban\helpers\CurlHttp;

class HuobanOrder {

    public static function create($attributes = array()) {
        return CurlHttp::post("/pay_order", $attributes);
    }
    
    public static function order($order_no) {
        return CurlHttp::get("/pay_order/$order_no");
    }
    
}