<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $dates=['schedule_start','schedule_end','created_at','updated_at'];
    protected $fillable = ['schedule_start','schedule_end','event','special_day','admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Admin');
    }

    public function setScheduleStartAttribute($value)
    {
        if($value)
        {
            $this->attributes['schedule_start'] = Carbon::createFromFormat('d/m/Y' ,$value);
        }
    }

    public function setScheduleEndAttribute($value)
    {
        if($value)
        {
            $this->attributes['schedule_end'] = Carbon::createFromFormat('d/m/Y' ,$value);
        }
    }
}
