@extends('template')
@section('conteudo')
<header>

<script>
$(function() {
      $('#slides').slidesjs({
							width: 700,
        height: 200,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
</script>

 <div class="container-fluid">
    <div id="slides">
      <img class="img-polaroid" width = "700" src="img/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
      <img class="img-polaroid" src="img/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
    </div>
  </div>
</header>
<section>
<article>

<div class = "row-fluid" >

   <div class = "span4" >
     <h3><i class = "icon-user" ></i> Registrar</h3>
		 <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las
    </p>
		  <a class = "btn btn-large btn-success" href="{{ URL::action('UserController@create') }}"> <i class = "icon-plus" ></i> Novo</a>
    </div>

   <div class = "span4" >
     <h3><i class = " icon-question-sign"> </i> Porque?</h3>
		 <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos
    </p>
    </div>

   <div class = "span4" >
     <h3><i class = "icon-thumbs-up" ></i> Regras</h3>
		 <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos
    </p>
    </div>
</div>

<div class = "row-fluid" >
   <div class = "span4" >
     <h3>Patrocinio:</h3>
    </div>

   <div class = "span4" >
    </div>

   <div class = "span4" >
    </div>
</div>
</article>
</section>
@stop
