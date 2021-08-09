


@extends('template.template')

@section('titulo', 'UAI Mídia - Informações de Empresas do Brasil')
@section('titulo_dercricao', 'Guia e informações de empresas, telefones para contato, endereço e como chegar, mapa, as melhores empresas que você procura estão aqui, milhares de negócios perto de você.')
@section('keywords', 'guia de empresas, endereço de empresas, guia mais empresas, guias de empresas, busca empresas, guia sao paulo, guia sp')

@section('content')

<h1>Categorias Mais Buscadas</h1>

<div class="row categorias">
  	@foreach($categorias as $key)

	     

  	






  <div class="col-sm-3">
    <a href="{{url('categoria')}}/{{$key['url']}}">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">{{$key['nome']}}</h2>
      </div>
    </div>
    </a>
  </div>




@endforeach

</div>

@endsection