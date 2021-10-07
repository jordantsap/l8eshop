<?php

namespace App\Observers;

use App\Models\SubType;

class SubTypeObserver
{
    /**
     * Handle the SubType "created" event.
     *
     * @param  \App\Models\SubType  $subType
     * @return void
     */
    public function created(SubType $subType)
    {
        //
    }

    /**
     * Handle the SubType "updated" event.
     *
     * @param  \App\Models\SubType  $subType
     * @return void
     */
    public function updated(SubType $subType)
    {
        //
    }

    /**
     * Handle the SubType "deleted" event.
     *
     * @param  \App\Models\SubType  $subType
     * @return void
     */
    public function deleted(SubType $subType)
    {
        //
    }

    /**
     * Handle the SubType "restored" event.
     *
     * @param  \App\Models\SubType  $subType
     * @return void
     */
    public function restored(SubType $subType)
    {
        //
    }

    /**
     * Handle the SubType "force deleted" event.
     *
     * @param  \App\Models\SubType  $subType
     * @return void
     */
    public function forceDeleted(SubType $subType)
    {
        //
    }
}
