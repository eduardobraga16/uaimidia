<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriasModel;
use App\Models\EmpresasModel;
use App\Models\CidadesModel;
use App\Models\EstadosModel;
use App\Models\TelefonesModel;

class CategoriasController extends Controller
{
    private $empresas;
    private $categorias;
    private $cidades;
    private $estados;
    private $telefones;

    public function __construct(CategoriasModel $categorias, EmpresasModel $empresas, CidadesModel $cidades, EstadosModel $estados, TelefonesModel $telefones){
        $this->empresas = $empresas;
        $this->categorias = $categorias;
        $this->cidades = $cidades;
        $this->estados = $estados;
        $this->telefones = $telefones;
    }


    public function index(Request $request)
    {
        $categorias = $this->categorias->orderBy('id','desc')->get();

        return view('produtos.index', compact('categorias'));
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
        $categoria = $this->categorias->where('url',$id)->firstOrFail();

        $categoria_atualiza = $this->categorias->findOrFail($categoria->id);
        $categoria_atualiza->update(["acessos"=>$categoria->acessos+1]);
        $empresas = $this->empresas->where('categoria',$categoria['id'])->paginate(20);

        return view('categorias.index', compact('empresas', 'categoria'));
    }

    public function showsingle($id,$empresa)
    {
        $categoria = $this->categorias->where('url',$id)->firstOrFail();
        $empresa = $this->empresas->where('url',$empresa)->firstOrFail();
        $estado = $this->estados->where('id_estado',$empresa['id_estado'])->firstOrFail();
        $cidade = $this->cidades->where('id_cidade',$empresa['id_cidade'])->firstOrFail();
        $telefones = $this->telefones->where('empresa',$empresa['id'])->get();

        return view('categorias.empresa', compact('empresa', 'categoria', 'estado', 'cidade', 'telefones'));
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
}
