<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    protected $table = "devis" ;

    protected $fillable = ['name','email','type','notes'];
}
