<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ini(){
        return view('usu');
        }
    
        public function in(){
            $usuario = App\Usuario::all();
            return view('usuarios',compact('usuario'));
        }
        
        public function crear(Request $request){
    
            if($request->hasFile('imagen')){
                $file = $request->file('imagen');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/imagenes/',$name);
              
            }
            $game = new App\Juego();
            $game ->nombre = $request ->nombre;
            $game ->descripcion = $request ->descripcion;
            $game ->precio = $request ->precio;
            $game->imagen=$request = $name;
            $game->save();
            return back();
        }
    
        public function admin(){
            return view('administrador');
        }
      
    
    public function game(){
        $games = App\Juego::paginate(4);
        return view('ver',compact('games'));
    }
}
