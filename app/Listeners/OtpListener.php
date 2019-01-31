<?php

namespace App\Listeners;


use App\Events\OtpEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\UserOtp;

class OtpListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OtpEvent  $event
     * @return void
     */
    public function handle(OtpEvent $event)
    {
        $userOtp = UserOtp::firstOrNew(['mobile'=>$event->mobile]);
        $userOtp->otp = rand(100000,999999);
        $userOtp->save();

        $message = ($event->message)??'Your OTP code is : ';
        
        file_get_contents('https://control.msg91.com/api/sendotp.php?authkey=193803AbcO0I6R55a607033&mobile='.$event->mobile.'&message='.urlencode($message.$userOtp->otp).'&sender=GRAHAK&otp='.$userOtp->otp);
        
        // $url = 'https://control.msg91.com/api/sendotp.php?authkey=193803AbcO0I6R55a607033&mobile='.$event->mobile.'&message='.urlencode($message.$userOtp->otp).'&sender=HPINFO&otp='.$userOtp->otp;
        // $client = new \GuzzleHttp\Client();
        // $res = $client->request('GET', $url);
    }
}
