@extends('template')

@section('conteudo')
<h1>Editar Categoria: {{$categoria->nome}}!</h1>
{{ Form::open( [ 
									'route'  => ['categoria.update' , $categoria->id], 
									'method' => 'put' , 
								]) }}

{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome',  $categoria->nome  ) }}
{{ Form::submit('salvar',array('class'=>'btn')) }}
{{ Form::close() }}


@stop
