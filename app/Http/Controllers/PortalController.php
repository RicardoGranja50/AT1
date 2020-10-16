<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index (){
        return view('entrada');
    }
    public function listarEquipas(){
        $equipas=[
            'A',
            'B',
            'C'
        ];
        return view('equipas', ['equipas'=>$equipas]);
    }

    public function listarEquipa(Request $request){
        $teams=[
                'A',
                'B',
                'C'
            ];
        $ajudar = $request -> chave; 
        if(count($teams)<=$ajudar || count($teams)<0 ){
            //dd($ajudar);
            return view('equipas', ['ajudar' =>$ajudar]);
        }
        else{
            $equipa = $teams[$request -> chave];
            return view('equipas', ['equipa' =>$equipa]);   
        }
    }
}

