<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Profil extends Model
{
    protected $dates =['created_at','updated_at','eval_date','last'];
    protected $fillable = [
        'kid_id',
        'orthopedagogie','reason_ortho',
        'psy_ed','reason_psy_ed',
        'psy_eval','eval_date','conclusion',
        'medication','type',
        'social_worker','reason_sw',
        'pi','last',
        'allergie','type_allergie',
        'learning_problem','type_problem','solution_try',
        'french_level','math_level',
        'other'
    ];

    public function kid()
    {
        return $this->belongsTo('App\Kid');
    }
    public function setLastAttribute($last)
    {
        if($last){
            $this->attributes['last']=Carbon::createFromFormat('d/m/Y',$last);
        }


    }
    public function setEvalDateAttribute($eval_date)
    {
        if ($eval_date){
            $this->attributes['eval_date']= Carbon::createFromFormat('d/m/Y',$eval_date);
        }


    }

}
