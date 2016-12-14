<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['class_name', 'school_name', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

}

