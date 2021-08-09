


@extends('template.template')

@section('titulo', $empresa['nome'] . ' em '.$cidade['nome_cidade'].', telefone e endereço')
@section('titulo_dercricao', $empresa['nome'] .'telefones para contato, veja informações e localização do(a) '. $empresa['nome'].', endereço do(a) '.$empresa['nome']. ' e whatsapp.')
@section('keywords', $empresa['nome'].' telefone, '.$empresa['nome'].' endereços')


@section('content')

<div class="row row-cols-1 row-cols-md-2 g-4 empresas">

	<div class="col-sm-12">
		<div class="breadcrumb">
	        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
	          <li itemprop="itemListElement" itemscope
	              itemtype="https://schema.org/ListItem">
	            <a itemprop="item" href="{{url('/')}}">
	                <span itemprop="name">Página Inicial</span></a>
	            <meta itemprop="position" content="1" />
	          </li>
	          <div class="bread-arrow">›</div>
	          <li itemprop="itemListElement" itemscope
	              itemtype="https://schema.org/ListItem">
	            <a itemscope itemtype="https://schema.org/WebPage"
	               itemprop="item" itemid="https://example.com/books/sciencefiction"
	               href="{{url('/')}}">
	              <span itemprop="name">{{$estado['nome_estado']}}</span></a>
	            <meta itemprop="position" content="2" />
	          </li>
	          <div class="bread-arrow">›</div>
	          <li itemprop="itemListElement" itemscope
	              itemtype="https://schema.org/ListItem">
	            <a itemscope itemtype="https://schema.org/WebPage"
	               itemprop="item" itemid="https://example.com/books/sciencefiction"
	               href="{{url('/')}}">
	              <span itemprop="name">{{$cidade['nome_cidade']}}</span></a>
	            <meta itemprop="position" content="3" />
	          </li>
	          <div class="bread-arrow">›</div>
	          <li itemprop="itemListElement" itemscope
	              itemtype="https://schema.org/ListItem">
	            <a itemscope itemtype="https://schema.org/WebPage"
	               itemprop="item" itemid="https://example.com/books/sciencefiction"
	               href="{{url('categoria')}}/{{$categoria['url']}}">
	              <span itemprop="name">{{$categoria['nome']}}</span></a>
	            <meta itemprop="position" content="4" />
	          </li>
	          <div class="bread-arrow">›</div>
	          <li itemprop="itemListElement" itemscope
	              itemtype="https://schema.org/ListItem">
	            <span itemprop="name">{{$empresa['nome']}}</span>
	            <meta itemprop="position" content="5" />
	          </li>
	        </ol>
	    </div>
	</div>

	<div class="col-sm-12">
		<div class="card">
		  <div class="card-body">
		    <h1 class="card-title">{{$empresa['nome']}}</h1>
		    <p class="card-text">
		    	<h2>Endereço</h2>
		    	<?php echo $empresa['endereco'] ?>		
		    </p>
		    <p class="card-text">
		    <h2>Telefones</h2>
		    @foreach($telefones as $tel)
		    	<div>{{$tel['numero_telefone']}}</div>
		    @endforeach		
		    </p>
		  </div>
		</div>
	</div>
</div>


@endsection