<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Kid extends Model
{
    protected $fillable = ['firstname','lastname','birthday','code','role','admin_id'];

    protected $dates =['created_at','updated_at','birthday'];

    public function admins()
    {
        return $this->belongsToMany('App\Admin')->withPivot('admin_id','kid_id','gr');
    }

    public function profil()
    {
        return $this->hasOne('App\Profil');
    }
    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday']=Carbon::createFromFormat('d/m/Y',$birthday);

    }

    public function getAgeAttribute()
    {
        return $this->birthday->diffInYears();
    }

    public function getFullnameAttribute()
    {
        return $this->firstname. ' '.$this->lastname;
    }

    public function behavior()
    {
        return $this->hasMany('App\Behavior');
    }

    public function setAgeAttribute($value)
    {
        if($value)
        {
            $this->attributes['birthday'] = Date::createFromFormat('d/m/Y' ,$value);
        }
    }


    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('kid_id','user_id');
    }

    public function observations()
    {
        return $this->hasMany('App\Observation');
    }
}
