<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['school_id','group_number','group_grade','admin_id'];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
