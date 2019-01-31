<?php

namespace App\Listeners;

use App\Events\SendSmsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSmsListener
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
     * @param  SendSms  $event
     * @return void
     */
    public function handle(SendSmsEvent $event)
    {
        // return $event;

        file_get_contents('https://control.msg91.com/api/sendhttp.php?authkey=193803AbcO0I6R55a607033&mobiles='.$event->mobile.'&message='.urlencode($event->message).'&sender=GRAHAK&route=4&country=91&response=json');
        // $url = 'https://control.msg91.com/api/sendhttp.php?authkey=193803AbcO0I6R55a607033&mobiles='.$event->mobile.'&message='.urlencode($event->message).'&sender=HPINFO&route=4&country=91&response=json';

        // $client = new \GuzzleHttp\Client();
        // $res = $client->request('GET', $url);
    }
}
