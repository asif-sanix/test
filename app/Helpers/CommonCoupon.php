<?php

namespace App\Helpers;
use App\Model\Coupon;
use App\Http\Resources\Api\CouponResource;
use Illuminate\Support\Facades\Cache;

class CommonCoupon
{
   
    public static function CoupenList($data){

    	$data = Coupon::all(); 

        // $data = new CouponResource($data);

        $data = CouponResource::collection($data);

    	if ($data) {
            return response()->json(array('error'=>false,'msg'=>['Coupon list'],'data'=>$data));
        }

        return response()->json(['error'=>true, 'msg'=>['Data not found !']]);

    }   

    public static function CouponVerify($data){

    	$key = $data->fingerprint();
    	// \Log::info($key);
    	$coupon = Coupon::where('code',$data->coupon)->first();

    	if ($coupon) {

    		Cache::add('COUPON'.$data->user()->id, $coupon->toJson(), now()->addDays(1));

    		if (Cache::has('COUPON'.$data->user()->id)) {
                
    			$data = Cache::get($key, 'default');

                $data = json_decode($data,true);

                              

    			return response()->json(array('error'=>false,'msg'=>['Coupon Data'],'data'=>$data));
    		}
    		return response()->json(['error'=>true, 'msg'=>['Data not found !']]);
    	}

        return response()->json(['error'=>true, 'msg'=>['Coupon Not found !']]);
    }

    public static function RemoveCoupen($data){

        return $data->fingerprint();
    }
}