<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kids()
    {
        return $this->belongsToMany('App\Kid')->withPivot('admin_id','kid_id','gr');
    }

    public function homeworks()
    {
        return $this->hasMany('App\Homework');
    }

    public function fhomework()
    {
        $this->hasMany('App\FormHomework');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
    public function schools()
    {
        return $this->hasMany('App\School');
    }
}
