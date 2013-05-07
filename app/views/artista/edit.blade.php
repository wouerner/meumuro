@extends('template')

@section('conteudo')
<h1>Edit: {{$artista->nome}}!</h1>
{{ Form::open( [ 
									'route' => ['artista.update' , $artista->id], 
									'method' => 'put'  
								]) }}

{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome',  $artista->nome  ) }}
{{ Form::submit('salvar',array('class'=>'btn')) }}
{{ Form::close() }}


@stop
