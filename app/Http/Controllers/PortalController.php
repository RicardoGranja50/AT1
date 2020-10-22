<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public  $teams=[
                'A',
                'B',
                'C'
            ];
    
    //
    public function index (){
        return view('entrada');
    }
    
    public function listarEquipas(){
        return view('equipas', ['equipas'=>$this->teams]);
    }
    

    public function listarEquipa(Request $request){
        $ajudar = $request -> chave; 
        $fora=$request->fora;  
        
        if(isset ($ajudar)){
            
            if(count($this->teams)>$ajudar || $ajudar >= 0){
                return view('equipas', ['equipa' =>$ajudar]);   
            }
            elseif((count($this->teams)<$ajudar || $ajudar < 0) || ! is_numeric ($ajudar)){
                //dd($ajudar);
                return view('equipas', ['ajudar' =>$ajudar]);
            }
        }
        else{
            return view('equipas', ['equipas'=>$this->teams]);
        }
    }
        
        public function jogo(Request $request){
            $casa = $request -> casa; 
            $fora=$request->fora;  
            
            if(isset ($casa)&& isset($fora)){
                
                if(count($this->teams)>$casa || $casa >= 0 || count($this->teams)>$fora || $fora >= 0){
                    
                    return view('jogo', ['casa' =>$casa], ['fora' => $fora]);
                }
                elseif((count($this->teams)<$casa || $casa < 0 || count($this->teams)<$fora || $fora < 0 ) || ! is_numeric ($casa) || ! is_numeric ($fora)){
                    
                    return view('equipas', ['ajudar' =>$ajudar]);
                }
                else{
                    return view('equipas', ['equipas'=>$this->teams]);
                }
            }
        }
}

