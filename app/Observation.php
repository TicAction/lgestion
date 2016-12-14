<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
class Observation extends Model
{
    protected $fillable = ['kid_id','observation','ob_date'];
    protected $dates =['created_at', 'updated_at','ob_date'];

    public function kid()
    {
        return $this->belongsTo('App\Kid');
    }

    public function setObDateAttribute($value)
    {
        if ($value) {
            $this->attributes['ob_date'] = Date::createFromFormat('d/m/Y',$value);
        }

    }

}
