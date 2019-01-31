<?php

namespace App\Helpers;

use App\Model\DmtBank;
use App\Model\DmtBeneficiary;

class CommonDmt
{
   
    protected static function ApiRequest($data) {
        $additional_headers = array(                                      
           'Accept: application/json',
           'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImYxYTgzYTQyMGRhZThmZDlmODUyZGI3ODFjYmY3ZDg0N2Q1ZDFhOTRjYzQ2OWNmYjY5N2Q4Mjg5NjEzYzk4NDkzYzkxYmFiNWM5MjgyYzA1In0.eyJhdWQiOiI1IiwianRpIjoiZjFhODNhNDIwZGFlOGZkOWY4NTJkYjc4MWNiZjdkODQ3ZDVkMWE5NGNjNDY5Y2ZiNjk3ZDgyODk2MTNjOTg0OTNjOTFiYWI1YzkyODJjMDUiLCJpYXQiOjE1MzE0NzcwNTUsIm5iZiI6MTUzMTQ3NzA1NSwiZXhwIjoxNTYzMDEzMDU1LCJzdWIiOiIxMzQ1MCIsInNjb3BlcyI6W119.RuyFmd5k8f5-tY05KYHzStS5tdeFAlp-vXId4SYtR5hN0wlPhyXg1G7mHvk-PJwkjiIE0OlRyj6_aLL7ITVbKfcPfBxgglvjtE_qjUIyz7TMLoRh1y86jnkm7lEPSwK2feP2ChMxwy2-G9Yi3hrGbft42724Q2GTLEzwzQSw92vJtnFKJAOPxZ0Taho-90UML0dk2BaVU5Pc8ObrOG3oqzZJHvUHG8FowHjHeJs9FD9zzoloYc-7VLLYRZySi2GpX6uWvLStd2oLzfAJEE9adFV910IIhNYaIyDmdDQio64aWY7j3dRgLzEsVQvrp258xe6jVs2BLH6wsLmDYUes3vm9nvNK-2lq2ZSph-nYhrpMbQCuWXb9Bh3NKUL_-DN8O8Fmj3m0zE4uuhnXoAsFx57-BCl3LuqIoROnymUfNO3nAPHl0elKUzxzk1peP-wA_P4YPgempvOuzRiqHEtsrQGKV2sUFTjVM5-eXHcRAfWad3Jzxvh2hcUvDhmljwUCAsa5ZwugMOzGeNq-lUU6E5fmq3hQF8Zhd-IthHoXH4Xse9xTJNrhwbAhFQjLVRqrEzpqHpiURe797kd66VDnNjrU9YLV_NKqI3noBYUQEGWPCVhAnk1WomqBrg4GEj5QrPwDBpftqaWmkpiRqwMxUq3Dijk9NHIAUB9Z62VVIa8',
        );
        $ch = curl_init($data['url']);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data['data']);                       
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                         
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 
        return  json_decode(curl_exec ($ch));
    }

    public static function getBalance($data){

        $data = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/balance',
            'data'  => array(

            ),
        );

        return self::ApiRequest($data);
        // return $data->user();
    }

    public static function bankList($data) {
        
        $data = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/bank_list',
            'data'  => array(

            ),
        );

        // $data = DmtBank::select('bank_name','bank_code','ifsc')->get();

        // return (Object)$data = array('banks'=>$data);

        return self::ApiRequest($data);
    }

    public static function AddBenificty($data) {

        $verify = self::verify(['mobile_number'=>$data->user()->mobile]);
        
        if ($verify->status == 0) {
            $senderid = $verify->senderid;
        }else{
            $name = explode(' ', $data->user()->name);

            $firstName = $name[0];
            $lastName = ((isset($name[1]))?$name[1]:$name[0]);

            $add_sender = self::AddSender([
                'mobile_number' => $data->user()->mobile,
                'first_name' => $firstName,
                'last_name' => $lastName
            ]);

            if ($add_sender->status == '0') {
                $senderid = $add_sender->senderid;
            }
        }

        $data = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/add_beneficiary',
            'data' => array(
                'mobile_number' => $data->user()->mobile,
                'account' => $data->account,
                'ifsc' => $data->ifsc,
                'bankcode' => $data->bankcode,
                'senderid' => $senderid,
                'name' => $data->name,
            ),
        );

        // return $data;
        $response = self::ApiRequest($data);




        return $response;
        
    }

    public static function addBeneficiaryConfirm($data) {

        return $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/add_beneficiary_confirm',
            'data' => array(
                'mobile_number' => $data->mobile_number,
                'otp' => $data->otp,
                'senderid' => $data->senderid,
                'beneficiaryid' => $data->beneficiaryid,
            ),
        );
    }

    protected static function verify($data) {

        $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/verification',
            'data' => $data,
        );

        return $data = self::ApiRequest($sendData);

        // return response()->json($data); 
    }

    protected static function AddSender($data) {

        $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/add_sender',
            'data' => $data,
        );

        return $data = self::ApiRequest($sendData);
    }

    public static function VerifySender($data) {

        $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/add_sender_confirm',
            'data' => array(
                'senderid' => $data->senderid,
                'mobile_number' => $data->mobile_number,
                'otp' => $data->otp,
            ),
        );

        return $data = self::ApiRequest($sendData);
    }

    public static function dmtTransfer($data) {
        // return $data;
        $ben = collect(self::getAllBeneficary($data)->data);

        $ben = $ben->where('beneficiaryid',$data->beneficiaryid)->first();

        if (!$ben) {
            return (Object)['message'=>'Benefecery not valid','data'=>array()];
        }

        $sender = self::verify(['mobile_number'=>$data->user()->mobile]);

        if (!$ben) {

            return (Object)['message'=>'Benefecery not valid','data'=>array()];
        }

        $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/transfer',
            'data' => array(
                'mobile_number' => $data->user()->mobile,
                'beneficiaryid' => $data->beneficiaryid,
                'senderid' => $sender->senderid,
                'account' => $ben->account,
                'amount' => $data->amount,
                'channel' => $data->channel,
                'client_id' => rand(10000,999999),
            ),
        );



        return $data = self::ApiRequest($sendData);

        // if ($data->status == ) {
        //     # code...
        // }
    }

    public static function getAllBeneficary($data) {

        if ($data->user()) {
            $mobile = $data->user()->mobile;

            // (($data->user()?$data->user()->mobile:'9162896530')
        }else{
            $mobile = '9162896530';
        }

        $sendData = array(
            'url' => 'https://www.pay2all.in/api/dmr/v2/get_all_beneficiary',
            'data' => array(
                'mobile_number' => $mobile,
            ),
        );

        return $data = self::ApiRequest($sendData);
    }


    // --------------------Old Code Start here-------------------------------------------------------------------

    // public function dmtTransfer($data){

    //     if (!$rechWall) {
    //         return array('status'=>400,'message'=>'You have not main wallet wallet amoutn to transfer!');
    //     } elseif($rechWall->amount < $inpt['amount']) {

    //         return array('status'=>400,'message'=>'You have not suficient amoutn to transfer!');
            
    //     }else{

    //         $url = 'https://www.pay2all.in/api/dmr/v2/transfer';

    //         $ben = Beneficiary::find($inpt['benificery']);

    //         $data = array('mobile_number'=>Auth::guard('user')->user()->mobile,'beneficiaryid'=>$ben->beneficiaryid,'senderid'=>$ben->sender_id,'account'=>$ben->account,'amount'=>$inpt['amount'],'channel'=>$inpt['chinal'],'client_id'=>rand(10000,99999));

    //         $send = $this->ApiRequest($url,$data);

    //         if ($send->status == 0) {

    //             $dmt = new DmtRecord;
    //             $dmt->user_id = Auth::guard('user')->user()->id;
    //             $dmt->payid = $send->payid;
    //             $dmt->message = $send->message;
    //             $dmt->orderid = $send->orderid;
    //             $dmt->txnid = $send->txnid;
    //             $dmt->utr = $send->utr;
    //             $dmt->amount = $send->amount;
    //             $dmt->transaction_date = $send->transaction_date;

    //             $dmt->save();

    //             $rechWall->amount = $rechWall->amount-$inpt['amount'];
    //             $rechWall->save();



    //             return array('status'=>200,'message'=>'Transferd successfully!');

    //         }else{
    //             return array('status'=>400,'message'=>$send->message);
    //         }
    //     }
        

        


    //     // print_r($send);
    // }

    public function benificryVerify(Request $request){
        $inpt = \Request::all();

        $url = 'https://www.pay2all.in/api/dmr/v2/add_beneficiary_confirm';

        $ben = Beneficiary::find($inpt['ben_id']);

        $data = array('mobile_number'=>Auth::guard('user')->user()->mobile,'otp'=>$inpt['otp'],'senderid'=>$ben->sender_id,'beneficiaryid'=>$ben->beneficiaryid);

        $otp_very = $this->ApiRequest($url,$data);

        // print_r($otp_very);
        if ($otp_very->status == '0') {
            $ben->status = '1';
            $ben->save();
            return array('status'=>200,'message'=>'Successfull verified!');
        }else{
            return array('status'=>400,'message'=>$otp_very->message);
        }
    }

    public function addBenificry(Request $request){
        // return 'ok';
        $inpt = \Request::all();
        $user = User::find(Auth::guard('user')->user()->id);

        $benificry = array('mobile'=>$user->mobile);

        $verify = $this->verify($benificry);
        // print_r($verify);
        // exit();
        if ($verify->status == '274') {
            $sender = array('mobile'=>$user->mobile,'fname'=>$request->user()->name,'lname'=>$request->user()->name);

            $add_sender = $this->addSender($sender);

            if ($add_sender->status == '0') {
                $sender_id = $add_sender->senderid;
            }

        }elseif($verify->status == '0'){
            $sender_id = $verify->senderid;
        }else{
            return array('status'=>400,'message'=>'Sender not found');
        }

        // return $sender_id;
        $bank = BankList::where('bank_code',$inpt['bank_code'])->first();
        $url = 'https://www.pay2all.in/api/dmr/v2/add_beneficiary';
        $data = ['mobile_number'=>$user->mobile,'account'=>$inpt['account'],'ifsc'=>$inpt['ifse'],'bankcode'=>$bank->bank_code,'senderid'=>$sender_id,'name'=>$inpt['name'],'vendor_id'=>3];     
        $response =  $this->ApiRequest($url,$data);
        // print_r($response);
        // exit();

        if ($response->status == 0) {

            if (Beneficiary::where(['sender_id'=>$sender_id,'beneficiaryid'=>$response->beneficiaryid])->first()) {
               return array('status'=>400,'message'=>'Benificry already exist!');
            }
            $ben = Beneficiary::firstOrNew(['sender_id'=>$sender_id,'beneficiaryid'=>$response->beneficiaryid]);


            $ben->user_id = $user->id;
            $ben->name = $inpt['name'];
            $ben->bank_name = $bank->bank_name;
            $ben->bank_code = $bank->bank_code;
            $ben->status = '0';
            $ben->ifsc = $inpt['ifse'];
            $ben->account = $inpt['account'];
            $ben->save();

            // $ben = Beneficiary::create([
            //     'user_id'=>$user->id,
            //     'sender_id'=>$sender_id,
            //     'name'=>$inpt['name'],
            //     'bank_name'=>$bank->bank_name,
            //     'bank_code'=>$bank->bank_code,
            //     'status'=>0,
            //     'ifsc'=>$inpt['ifse'],
            //     'beneficiaryid'=>$response->beneficiaryid,
            //     'account'=>$inpt['account']
            // ]);
            
            return array('status'=>200,'message'=>$response->message,'ben_id'=>$ben->id);
        }
        return array('status'=>400,'message'=>$response->message);
    }


    // protected function verify(array $request){
    //     // return $data['mobile'];
    //     $url = 'https://www.pay2all.in/api/dmr/v2/verification';
    //     $data = array('mobile_number'=>$request['mobile']);
    //     return  response()->json($this->ApiRequest($url,$data));
    // }

    // protected function addSender(array $request){
    //     $url = 'https://www.pay2all.in/api/dmr/v2/add_sender';
    //     $data = array('mobile_number'=>$request['mobile'],'first_name'=>$request['fname'],'last_name'=>$request['lname']);
    //     return response()->json($this->ApiRequest($url,$data));
    // }
   
}