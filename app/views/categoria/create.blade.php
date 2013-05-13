@extends('template')

@section('conteudo')
<h1>Nova Categoria!</h1>
{{ Form::open(['url' => 'categoria' , 'class' => 'form-inline']) }}
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome') }}
{{ Form::submit('Criar',['class'=>'btn']) }}
{{ Form::close() }}


@stop
