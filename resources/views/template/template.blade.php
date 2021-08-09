<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css?nocache=12')}}">
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>@yield('titulo')</title>



        <meta property="og:title" content="@yield('titulo')">
        <meta property="og:description" content="@yield('titulo_dercricao')">
        <meta property="og:image" content="{{url('assets/img/logo.png')}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{url('/')}}">
        <meta property="og:locale" content="pt_BR">
        <meta property="article:publisher" content="https://www.facebook.com/uaimidia">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@yield('titulo') @https://twitter.com/guiagranderecifeofc">
        <meta property="twitter:title" content="@yield('titulo')">
        <meta property="twitter:description" content="@yield('titulo_dercricao')">
        <meta property="twitter:image" content="{{url('assets/img/logo.png')}}">
        <meta property="twitter:url" content="https://twitter.com/uaimidia"/>
        <meta itemprop="name" content="@yield('titulo') em @yield('cidade'), telefone e endereço">
        <meta itemprop="url" content="{{ url()->current() }}">
        <meta itemprop="image" content="{{url('assets/img/logo.png')}}">
        <meta itemprop="description" content="@yield('titulo_dercricao')">
        <meta name="application-name" content="uaimidia.com.br"/>
        <meta name="googlebot" content="noodp" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="@yield('titulo_dercricao')">
        <meta name="keywords"  content="@yield('keywords')">
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="author" content="@yield('titulo')">



        <script>
			var base_url ="<?php echo $base_url = url('/'); ?>";
		</script>

    </head>

    <body>


<div class="loud">
<div class="loadinging">
</div>
<div class="loadingingimg">
	<div class="loadingingimgimg">

		<div class='c-loader'></div>
	</div>
</div>
</div>

<div class="row topo">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <center><a class="navbar-brand" href="{{url('/')}}"><img class="img-logo" src="{{url('assets/img/logo.png')}}" width="200px"></a></center>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Página Inicial</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="col-12 subs-topo bg-light">
  <div class="container justify-content-md-center">
    <h1>UAI Mídia</h1>
    <h2>Faça uma busca e encontre locais e empresas perto de você!</h2>
  </div>
</div>

<div class="col-12">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">


	  <div class="container justify-content-md-center">
      
      
      
			<form class="d-flex" action="{{url('search')}}">
            <div class="input-busca-empresa input-busca">
        		  <input class="form-control me-2" type="search" value="<?php if(isset($_GET['nome'])){echo $_GET['nome'];} ?>" name="nome" placeholder="Ex: Restaurantes, lojas, etc" required="true" aria-label="Ex: Restaurantes, lojas, etc">
            </div>
        		<div class="input-busca-cidade input-busca">
              <input class="form-control me-2" type="search" value="<?php if(isset($_GET['local'])){echo $_GET['local'];} ?>" name="local" id="local" placeholder="Local" required="true" aria-label="Local" autocomplete="off">
              <div class="resultado">
                <div class="load-one"><div class='c-loader'></div></div>
                <ul class="list-group"></ul>
              </div>
            </div>
        		<button class="btn btn-success" type="submit">Buscar</button>
      		</form>
		</div>
	</nav>
</div>
</div>


		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-12 body-full">
		    		@yield('content')
		    	</div>

	    	</div>
    	</div>

    	<script src="{{url('assets/js/functions.js')}}"></script>




      <footer class="text-center text-lg-start footer bg-light text-muted">
        <div class="container">
          <center><p>Copyright ©2021 UAI Mídia</p></center>
        </div>
      </footer>



      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57117919-38"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57117919-38');
</script>


    </body>
</html>
