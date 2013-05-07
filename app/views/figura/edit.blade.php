@extends('template')

@section('conteudo')
<h1>Edit: {{$figura->nome}}!</h1>
{{ Form::open( [ 
									'route'  => ['figura.update' , $figura->id], 
									'method' => 'put' , 
									'files'  => 'true'  
								]) }}

{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome',  $figura->nome  ) }}
{{ Form::file('image') }}
{{ Form::submit('salvar',array('class'=>'btn')) }}
{{ Form::close() }}


@stop
