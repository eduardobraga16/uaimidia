<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriasModel;
use App\Models\EmpresasModel;
use App\Models\CidadesModel;
use App\Models\EstadosModel;

class HomeController extends Controller
{
    private $empresas;
    private $categorias;
    private $cidades;
    private $estados;

    public function __construct(CategoriasModel $categorias, EmpresasModel $empresas, CidadesModel $cidades, EstadosModel $estados){
        $this->empresas = $empresas;
        $this->categorias = $categorias;
        $this->cidades = $cidades;
        $this->estados = $estados;
    }


    public function index()
    {
        $categorias = $this->categorias->orderBy('acessos','desc')->limit(40)->get();

        return view('index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(){
        if(isset($_GET['nome']) && isset($_GET['local'])){
            $nome = $_GET['nome'];
            $local = $_GET['local'];


            if(empty($_GET['nome']) ||empty($_GET['local'])){
                redirect('/')->send();
            }
                    

            
            

            try{
                $cidade = $this->cidades->where('nome_cidade',$local)->get();

                if($cidade->isEmpty()){
                    $empresas = $this->empresas
                    ->select('empresas.id','empresas.nome AS empresaNomeJoin','empresas.endereco','empresas.url AS empresaaUrlJoin',
                        'categorias.id','categorias.nome','categorias.url AS categoriaUrlJoin')
                    ->join('categorias', 'empresas.categoria', '=', 'categorias.id')
                    ->where('empresas.nome','like', '%'.$nome.'%')
                    ->paginate(20);

                    //$empresas = $this->empresas->where('nome', 'like','%'.$nome.'%')->paginate(20);
                }else{
                    $empresas = $this->empresas
                    ->select('empresas.id','empresas.nome AS empresaNomeJoin','empresas.endereco','empresas.url AS empresaaUrlJoin',
                        'categorias.id','categorias.nome','categorias.url AS categoriaUrlJoin')
                    ->join('categorias', 'empresas.categoria', '=', 'categorias.id')
                    ->where('id_cidade', $cidade[0]['id_cidade'])
                    ->where('empresas.nome','like', '%'.$nome.'%')
                    ->paginate(20);
                    //$empresas = $this->empresas->where('id_cidade', $cidade[0]['id_cidade'])->where('nome', 'like','%'.$nome.'%')->paginate(20);
                }

            }catch(Exception $e){

            }

            

            return view('search', compact('empresas'));

            
        }else{
            redirect('/')->send();
        }


    }

    public function searchcidade(){
        if(isset($_GET['nome'])){
            $nome = $_GET['nome'];

            try{
                $cidades = $this->cidades->where('nome_cidade','like', '%'.$nome.'%')->limit(25)->get();
            }catch(Exception $e){}

            return response()->json($cidades);
        }else{
            //redirect('/')->send();
        }
    }
}
