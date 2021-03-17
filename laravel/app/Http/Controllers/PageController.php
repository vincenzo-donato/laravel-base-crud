<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // METODO PER HOME PAGE
    public function home(){
        $data= [
            'NomeShop' => 'Work_shop_on-line',
            'marche' => ['Nike','Asos','Diadora','Adidas'],
            'prodotti' => ['T-shirt','Jeans','Cappotti','Tute','Bermuda','Felpe']
        ];
        return view('home',$data);
    }
    //END METODO PER HOME PAGE

    // METODO PER CONTATTI PAGE 
    public function contatti(){
        $data = [
            'email' => 'Email@.cgmail.com',
            'tel' => '372382738',
            'sede' => 'Milano'
        ];
        return view('contatti',$data);
    }
    //END METODO PER CONTATTI PAGE 
}
