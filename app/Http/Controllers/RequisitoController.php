<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequisitoRequest;
use App\Models\Models\ModelRequisito;
use App\Http\Requests\ElicitacaoRequest;
use App\Models\Models\ModelElicitacao;
use App\Http\Requests\HistoriaRequest;
use App\Models\Models\ModelHistoria;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App;
use Illuminate\Http\Request;

 
    class RequisitoController extends Controller
    {

   /* private $objUser; */
    private $objRequisito;
    private $objElicitacao;
    private $objHistoria;
    private $objUser;

    public function __construct() {

   /* $this->objUser=new User(); */
    $this->objRequisito=new ModelRequisito();
    $this->objElicitacao=new ModelElicitacao();
    $this->objHistoria=new ModelHistoria();
    $this->objUser=new User();

    }

    public function index()
    {
        $requisitos=$this->objRequisito->all();
        return view('indexrequisito', compact('requisitos'));
    }

    public function indexgestaousuario()
    {
        $user=$this->objUser->all();
        return view('indexgestaousuario', compact('user'));
    }

    public function indexgestaorequisito()
    {
        $requisitos=$this->objRequisito->all();
        return view('indexgestaorequisito', compact('requisitos'));
    }

    public function indexelicitacao()
    {
        $elicitacao=$this->objElicitacao->all();
        return view('indexelicitacao', compact('elicitacao'));
    }

    public function indexgestaohistoria(string $id)
    {
      
        $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id_requisito', $id)->get();
        return view('indexgestaohistoria', compact('historias'));
    }


    public function indexgestaoversao(string $id)
    {
      
        $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id_requisito', $id)->orderBy('data_homologacao', 'desc')->get();
        return view('indexgestaoversao', compact('historias'));
    }

    public function indexinicio()
    {
        return view('indexinicio');
    }

    public function relatorios()
    {
        $requisitos=$this->objRequisito->all();
        return view('relatorios', compact('requisitos'));
    }


   public function create()
    {
        return view('createrequisito');
    } 

    public function createelicitacao()
    {
        return view('createelicitacao');
    } 

    public function createhistoria(string $id)
    {
        $requisitos=$this->objRequisito->find($id);
        $elicitacao=$this->objElicitacao->all();
        return view('createhistoria',compact('requisitos','elicitacao'));
    }


    public function store(RequisitoRequest $request)
    {
        $cad=$this->objRequisito->create([
            'programa' => $request->programa,
            'ativo' => 'S',
        ]);
        if($cad){
            return redirect ('requisitos/inicio');
        }
    }


    public function storeelicitacao(ElicitacaoRequest $request)
    {
        $cad=$this->objElicitacao->create([
            'titulo' => $request->titulo,
            'tipo' => $request->tipo,
            'setor_envolvido' => $request->setor_envolvido,
            'data_reuniao' => $request->data_reuniao,
            'conteudo' => $request->conteudo,
            'id_user' => $request->id_user,
        ]);
        if($cad){
            return redirect ('elicitacao/inicio');
        }
    } 

    public function storeHistoria(HistoriaRequest $request)
    {
        $cad=$this->objHistoria->create([
            'id_requisito' => $request->id_requisito,
            'id_elicitacao' => $request->id_elicitacao,
            'id_user' => $request->id_user,
            'status' => $request->status,
            'necessidade' => $request->necessidade,
            'solucao' => $request->solucao,
            'cenario_teste' => $request->cenario_teste,
            'especificacao' => $request->especificacao,
        ]);
        if($cad){
            return redirect ('requisitos/inicio');
        }
    } 

   public function showelicitacao(string $id)
    {
        $elicitacao = $this->objElicitacao->find($id);
         return view('showelicitacao', compact('elicitacao'));
    } 

    public function showhistoria(string $id)
    {
        $historias = $this->objHistoria->find($id);
         return view('showhistoria', compact('historias'));
    } 


    public function editelicitacao(string $id)
    {
        $elicitacao = $this->objElicitacao->find($id);
        return view('editelicitacao', compact('elicitacao'));
    }

    public function edithistoria(string $id)
    {
        $historias = $this->objHistoria->find($id);
        return view('edithistoria', compact('historias'));
    }


    public function updateelicitacao(ElicitacaoRequest $request, string $id)
    {
        
        $cad=$this->objElicitacao->where(['id'=>$id])->update([
            'titulo' => $request->titulo,
            'tipo' => $request->tipo,
            'setor_envolvido' => $request->setor_envolvido,
            'data_reuniao' => $request->data_reuniao,
            'conteudo' => $request->conteudo,
            'id_user' => $request->id_user,

        ]);
        if($cad){
            return redirect ('elicitacao/inicio');
        }
    }

    public function updatehistoria(HistoriaRequest $request, string $id)
    {
        
        $cad=$this->objHistoria->where(['id'=>$id])->update([
            'id_requisito' => $request->id_requisito,
            'id_elicitacao' => $request->id_elicitacao,
            'id_user' => $request->id_user,
            'status' => $request->status,
            'necessidade' => $request->necessidade,
            'solucao' => $request->solucao,
            'cenario_teste' => $request->cenario_teste,
            'especificacao' => $request->especificacao,


        ]);
        if($cad){
            return redirect ('requisitos/inicio');
        }
    }

    public function homologarhistoria(string $id)
    {
        $todayDate = Carbon::now();
        $cad=$this->objHistoria->where(['id'=>$id])->update([
            'status' => 'Concluida',
            'data_homologacao' => $todayDate,

        ]);
        if($cad){
            return redirect ('requisitos/inicio');
        }
    }

    public function cancelarhistoria(string $id)
    {
        $todayDate = Carbon::now();
        $cad=$this->objHistoria->where(['id'=>$id])->update([
            'status' => 'Cancelada',
            'data_cancelamento' => $todayDate,

        ]);
        if($cad){
            return redirect ('requisitos/inicio');
        }
    }


    public function excluirelicitacao(string $id)
    {
        $del= $this->objElicitacao->destroy($id);
        if($del == true){
       return redirect ('elicitacao/inicio');

    }
}


public function autorizarusuario(string $id)
{
    $cad=$this->objUser->where(['id'=>$id])->update([
        'autorizado' => 'S',
    ]);
    if($cad){
        return redirect ('gestaousuario');
    }
}

public function cancelarusuario(string $id)
{
    $cad=$this->objUser->where(['id'=>$id])->update([
        'autorizado' => 'N',
    ]);
    if($cad){
        return redirect ('gestaousuario');
    }
}



public function ativarrequisito(string $id)
{
    $cad=$this->objRequisito->where(['id'=>$id])->update([
        'ativo' => 'S',
    ]);
    if($cad){
        return redirect ('gestaorequisito');
    }
}

public function inativarusuario(string $id)
{
    $cad=$this->objRequisito->where(['id'=>$id])->update([
        'ativo' => 'N',
    ]);
    if($cad){
        return redirect ('gestaorequisito');
    }
}

public function geraPdf(string $id){

    $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id', $id)->get();
    $pdf = Pdf::loadView('pdfVersao',compact('historias'));
    return $pdf->stream('versaohistoria.pdf');

} 

public function tipogeracao(Request $request){
    if($request->filtro == '1'){
        $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id_requisito', $request->id_requisito)->where('status', 'Concluida')->whereBetween('data_homologacao', [$request->data_inicial, $request->data_final])->get();
        $pdf = Pdf::loadView('pdfVersao',compact('historias'));
        return $pdf->stream('versaohistoria.pdf');
    }else if ($request->filtro == '2'){
        $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id_requisito', $request->id_requisito)->where('status', 'Cancelada')->whereBetween('data_cancelamento', [$request->data_inicial, $request->data_final])->get();
        $pdf = Pdf::loadView('pdfVersao',compact('historias'));
        return $pdf->stream('versaohistoria.pdf');
    } else if ($request->filtro == '3'){
        $historias = ModelHistoria::select('id', 'id_user', 'id_requisito', 'id_elicitacao', 'necessidade', 'solucao', 'cenario_teste', 'especificacao', 'status')->where('id_requisito', $request->id_requisito)->where('status', 'Aberto')->get();
        $pdf = Pdf::loadView('pdfVersao',compact('historias'));
        return $pdf->stream('versaohistoria.pdf');
    }
    
   

}


    }