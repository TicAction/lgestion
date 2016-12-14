<?php

namespace App;

use Carbon\Carbon;
use Jenssegers\Date;
use Illuminate\Database\Eloquent\Model;

class FormHomework extends Model
{
    protected $dates =['created_at','updated_at','end','start'];

    protected $fillable = [
        'lecture','grammaire','vocabulaire','mathematique_concept','mathematique_resolution',
        'univers_social','arts','science','ecr','devoir_mathematique','devoir_francais','devoir_autres',
        'anglais','musique','edu','signature','remettre','admin_id','start','end','conjugaison'
    ];

    public function admin()
    {
        $this->belongsTo('App\Admin');
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
}
