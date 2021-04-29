<?php

namespace App;

use App\Service;
use Illuminate\Support\Facades\Auth;


class Cart
{

    public static function add(Service $service){
        $cart  = session('cart', [] ); // si ma variable de session "cart" n'existe pas, on lui affecte un tableau vide comme valeur par défaut
        $carte_changed = false ;

        // on passe le tableau en référence du coup $itemp_cart n'est pas une copie mais une référence "&"
        foreach( $cart as &$item_cart){ // On vérifie si l'article est présent dans le panier
            if( $item_cart['id'] === $service->id ){
                $item_cart['quantite']++;
                $item_cart['total']     = $item_cart['quantite'] * $item_cart['prix'] ;
                session()->put('cart', $cart) ; // Maj de la quantité et du produit
                $carte_changed = true ;
            }
        }

        // on vérifie l'inégalité, pour stocker un nouveau produit en session
        if( !$carte_changed ){
            self::store( $service ) ;
        }

    }// Fin function


    private static function store(Service $item){

        session()->push('cart',[
            'id'        => $item->id ,
            'nom'       => $item->title ,
            'prix'      => $item->prixttc ,
            'quantite'  => 1,
            'total'     => $item->prixttc,
            'user_id'   => "",
            'user_name' => "",
            'email'     => "",
            'description_projet'    =>''
        ]) ;

    }// Fin function

    public static function drop(Service $service){

        if( session()->has('cart') ){ // Si j'ai quelque chose en session
            $cart  = session('cart', []);

            foreach( $cart as $key => &$item_cart){ // On vérifie si l'article est présent dans le panier
                if( $item_cart['id'] === $service->id ){

                    if( $item_cart['quantite'] === 1 ){ // On vérifie si la quantité vaut 1 car sinon on aura des valeurs négative
                        session()->forget("cart.$key") ; // on enlève le produit du panier
                        return ; //pour sortir de la boucle
                    }

                    $item_cart['quantite']-- ; // on fait -1 sur la quantité
                    $item_cart['total'] = $item_cart['quantite'] * $item_cart['prix'] ;
                    session()->put('cart', $cart) ; // Maj de la quantité et du produit

                    return ; //pour sortir de la boucle
                }
            }
        }

    }// Fin function


    public static function clearPanier(){
        session()->forget('cart') ;
    }// Fin function


    public static function total(){
        $cart  = session('cart', [] ); // si ma variable de session "cart" n'existe pas, on lui affecte un tableau vide comme valeur par défaut
        $total = 0 ;

        foreach( $cart as $item){
            $total += $item['total'] ;
        }

        return $total ;
    }// Fin function


}// Fin class
