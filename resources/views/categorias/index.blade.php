@extends('template.template')


@section('titulo', $categoria['nome'])
@section('titulo_dercricao', $categoria['nome'] .', ache os melhores negócios de '. $categoria['nome'].' em todo o brasil.')
@section('keywords', $categoria['nome'].' telefones, qual as melhores lojas de '.$categoria['nome'].', lojas de '.$categoria['nome'])

@section('content')

<center><h1>{{$categoria['nome']}}</h1></center>

<div class="row row-cols-1 row-cols-md-2 g-4 empresas">
  	@foreach($empresas as $key)
  	<a href="{{url('categoria')}}/{{$categoria['url']}}/{{$key['url']}}">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">{{$key['nome']}}</h5>
		    <p class="card-text"><?php echo $key['endereco'] ?></p>
		  </div>
		</div>
	</div>
	</a>
	@endforeach
	
</div>
{{ $empresas->links("pagination::bootstrap-4") }}





@endsection