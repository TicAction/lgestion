<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Behavior extends Model
{
    protected $dates= ['behave_date','created_at','updated_at'];
    protected $fillable = ['kid_id','behave_date','behavior','publish'];

    public function kids()
    {
       return $this->belongsTo('App\Kid','kid_id');
    }
    public function setBehaveDateAttribute($value)
    {
        if ($value) {
            $this->attributes['behave_date'] = Date::createFromFormat('d/m/Y', $value);
        }
    }

}
