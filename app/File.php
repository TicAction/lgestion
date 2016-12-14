<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class File extends Model
{
    protected $fillable = ['matiere','title','fullname'];
    public $dates = ['created_at','updated_at'];


}
