<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\SalaRequest;
use App\Http\Requests\UserRequest;
use App\Models\Models\ModelSala;

class LoginController extends Controller

    {

   private $objUser;

   public function __construct() {

   $this->objUser=new User();

   }

        public function index()
        {
            return view('login');
        }


        public function criarusuario()
        {
            return view('createuser');
        }

    
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
          ], [
            'email.required' => 'Esse campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ter um email válido',
            'senha.required' => 'Esse campo password é obrigatório',
          ]);

          $user = User::select('id','email','senha')->where('autorizado','=','S')->where('email',$request->input('email'))->first();
          $senha = User::select('senha')->where('email', $request->input('email'))->first();
        //  var_dump($autorizado);
        // die();

          if (!$user) {
            return redirect()->route('login.index')->withErrors(['error' => 'Email invalido ou sem autorização.']);
          }
    
          if ($user && $request->input('senha') == $senha->senha)  {
                  
          Auth::loginUsingId($user->id);
      
          return redirect()->route('login.index')->with('success', 'Logged in');
            
          } else {
            return redirect()->route('login.index')->withErrors(['error' => 'Senha invalida.']);
          }
        }
       
      
        public function destroy()
        {
          Auth::logout();
      
          return redirect()->route('login.index');
        } 


        public function storeusuario(Request $request)
        {
 
     $user = User::select('id','email','password')->where('email',$request->input('email'))->first();
      if ($user) {
        return redirect()->route('login.criarusuario')->withErrors(['error' => 'Email já existente na base.']);
      }

      $cad=$this->objUser->create([
        'name' => $request->name,
        'email'=> $request->email,
        'senha' => $request->senha,
        'tipo' => '2',
        'autorizado' => 'N',
    ]);
    if($cad){
        return redirect ('/login')
        ->with('mensagem', 'Solicitação de acesso realizada, aguarde o contato do ADM.'); 


    }

            }


            
    }
  

