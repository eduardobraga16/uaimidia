@extends('template.template')

@section('titulo', $_GET['nome'].' em '.$_GET['local'].' - UAI Mídia')
@section('titulo_dercricao', $_GET['nome'].' em '.$_GET['local'].', informações e endereço de '.$_GET['nome'].' de '.$_GET['local'])
@section('keywords', $_GET['nome'].' em '.$_GET['local'].', achar '.$_GET['nome'].', '.$_GET['nome'].' de '.$_GET['local'].', endereços de '.$_GET['nome'].' em '.$_GET['local'])

@section('content')

<center><h1>Resultados</h1></center>

<div class="row row-cols-1 row-cols-md-2 g-4 empresas">
  	@foreach($empresas as $key)
  	<a href="{{url('categoria')}}/{{$key['categoriaUrlJoin']}}/{{$key['empresaaUrlJoin']}}">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">{{$key['empresaNomeJoin']}}</h5>
		    <p class="card-text"><?php echo $key['endereco'] ?></p>
		  </div>
		</div>
	</div>
	</a>
	@endforeach

	<?php

	if($empresas->isEmpty()){echo "Nenhum resultado encontrado!";}
	?>
	
</div>
{{ $empresas->appends([
  'nome'  => Request::input('nome'),
  'local'  => Request::input('local'),
])->links("pagination::bootstrap-4") }}





@endsection