<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
//use Carbon\Carbon;
use Jenssegers\Date\Date;

class Homework extends Model
{

    protected $dates = ['start', 'end', 'created_at', 'updated_at'];

    protected $fillable = ['start', 'end', 'content','admin_id'];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function setStartAttribute($value)
    {
        if ($value)
        {
            $this->attributes['start'] = Carbon::createFromFormat('d/m/Y',$value);
        }

    }
    public function setEndAttribute($value)
    {
        if($value)
        {
            $this->attributes['end'] = Carbon::createFromFormat('d/m/Y' ,$value);
        }

    }
//    public function setLastAttribute($last)
//    {
//        if($last){
//            $this->attributes['last']=Carbon::createFromFormat('d/m/Y',$last);
//        }
//    }
//    public function setEvalDateAttribute($eval_date)
//    {
//        if ($eval_date){
//            $this->attributes['eval_date']= Carbon::createFromFormat('d/m/Y',$eval_date);
//        }
//    }

}
