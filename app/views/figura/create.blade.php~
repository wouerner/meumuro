@extends('template')

@section('conteudo')
<h1>Nova Figura!</h1>
{{ Form::open(['url' => 'figura' , 'class' => 'form-inline' ,'files'=>true]) }}
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome') }}
{{ Form::file('image') }}
{{ Form::submit('Criar',['class'=>'btn']) }}
{{ Form::close() }}


@stop
