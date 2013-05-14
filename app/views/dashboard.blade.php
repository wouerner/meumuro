@extends('template')
@section('conteudo')
<section>

<div class = "row-fluid" >
				<div class = "span12" ><h2><i class = "icon-thumbs-up" ></i> Eu gosto:</h2></div>
         @foreach ($gostei->opinioes as $a)
					 <div class = "span4" >
						 <a href="{{ URL::action('figura\FiguraController@show',$a->id) }}" ><img width = "100" class = "img-circle" src="{{ $a->image }}" > </a>
					</div>
        @endforeach

</div>

<div class = "row-fluid" >
						 
				<div class = "span12" ><h2><i class = "icon-camera" ></i> Meus trabalhos:</h2></div>
</div>

<div class = "row-fluid" >
         @foreach ($figuras as $a)
					 <div class = "span4" >
						 <a href="{{ URL::action('figura\FiguraController@show',$a->id) }}" ><img width = "100" class = "img-circle" src="{{ $a->image }}" > </a>
					</div>
        @endforeach

</div>

</section>
@stop
