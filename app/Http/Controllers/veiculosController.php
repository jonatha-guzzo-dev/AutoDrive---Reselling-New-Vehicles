<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;


class veiculosController extends Controller
{
    
    public function show($id=2){
        return "Valor da categoria {$id}";
    }

    public function __construct(){
        $this->middleware('auth')->only(['cadastra', 'edita', 'apaga']);
        }

    public function exibe(){
       return view('insere_veiculo');
    }
    public function insere(Request $request){
        $dados = $request->except('_token', 'submit');
        //dd($dados);
        $veiculo = new Veiculo();
        $this->validate($request, $veiculo->rules, $veiculo->messages); // aplica regras de validação da model
       
        $insert = Veiculo::create($dados);
        if($insert)
        // Passa uma session flash success (sessão temporária)
        return redirect()->route('profile') ->with('success', 'Veiculo inserido com sucesso!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
        return redirect()->route('veiculos.exibe')->with(['error'=> 'Falha ao inserir produto']);
    }


    public function lista()
 {
 $veiculos = Veiculo::paginate(5);
 return view('lista_veiculo', compact('veiculo'));
 }


 public function edita($id){

    $veiculo = Veiculo::find($id);
    return view('edita_veiculo', compact('veiculo'));
 }

 public function atualiza(Request $request, $id){
    $dados = $request->except('_token', 'submit');
    $veiculo = Veiculo::find($id);
    $this->validate($request, $veiculo->rules, $veiculo->messages); 
     
    $update = $veiculo->update($dados);
    if($update)
    return redirect()->route('veiculos.insere')->with('success', 'Produto atualizado com sucesso!');
    else
    return redirect()->route('veiculos.edita', $id)->with(['erros'=> 'Falha ao editar']);
    }
   


}
