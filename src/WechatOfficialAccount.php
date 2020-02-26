<?php


namespace XiaoHongYang\WechatOfficalAccount;


use Illuminate\Support\Facades\Facade;

class WechatOfficialAccount extends Facade
{

    protected static function getFacadeAccessor(){
      return "officialAccount";
    }


    public function say(){
        echo 'hii';
    }

}
