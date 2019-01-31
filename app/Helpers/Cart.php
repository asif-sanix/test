<?php

namespace App\Helpers;
use Session;
class Cart
{
   
    public function add($inv,$qty){
        
        $this->put(['id'=>$inv,'qty'=>$qty]);
        return $this;
    }
    private function put($cart){
         config(['session.lifetime' => (string)time() + 60 * 60 * 24 * 150]);
        Session::put('carts',$this->merge($cart)->all());
    }
    public function merge($arr){
        $this->remove($arr['id']);
        return $this->all()->push($arr)->unique('id')->values();
    }
    public function get($id){
        return $this->all()->where('id',$id)->first();
    }
    public function remove($invt=null){
        if ($invt) {
             config(['session.lifetime' => (string)time() + 60 * 60 * 24 * 150]);
            Session::put('carts',$this->all()->filter(function($val,$key) use($invt){ return (boolean)($val['id'] !== $invt); })->all());
        }else{
            Session::forget('carts');
        }

    }
    public function all(){
        return (collect(Session::get('carts',[])));
    }
   
}