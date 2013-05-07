@extends('template')

@section('conteudo')
<h1>Nova Figura!</h1>
{{ Form::open(['url' => 'figura' , 'class' => 'form-inline' ]) }}
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome') }}
{{ Form::file('image') }}
{{ Form::submit('Criar',['class'=>'btn']) }}
{{ Form::close() }}


@stop
