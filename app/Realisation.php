<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    public function path()
    {
    	return route('realisations.show',$this);
    }

}
