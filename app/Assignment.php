<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Assignment extends Model
{
    //
    public function complete()
    {
        $this->completed  =  Carbon::now()->toDateTimeString();
        $this->save();
    }
}
