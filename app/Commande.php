<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   protected $table = "commandes";

   protected $fillable = ['user_id','date_achat','reference','total', 'produits', 'charge_id', 'statut', ] ;
   
   public function user()
   {
       return $this->belongsTo('App\User');
   }


}
