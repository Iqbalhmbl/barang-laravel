<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ActivityLog extends Model
{
    

    protected $table = 'activity_log';

    public function user()
    {
        return $this->belongsTo(User::class,'causer_id');
    }
}
