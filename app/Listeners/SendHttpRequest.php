<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SendHttpRequest implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        dd($event->category);
        // $tr = new GoogleTranslate();
        // $titletranslation = $tr->translate($event->title);
        // ddd("SendHttpRequest dump. $titletranslation.\n");
        // \Log::info($titletranslation);
    }
}
