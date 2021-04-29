<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'user_id','title', 'prixht', 'prixttc', 'body', 'tag','url_fontawesome', 'service_slug', 'subtitle', 'image','tag_id','statut',
    ];

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }

    public function path()
    {
    	return route('admin.services.show',$this);
    }

    public function priceFrench(){
        $newprix = $this->prixttc * 100 ;
        $prix = $newprix / 100;

        return number_format($prix, 2, ',', ' ').' €';
    }

}
