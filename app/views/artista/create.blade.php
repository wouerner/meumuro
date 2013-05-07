@extends('template')

@section('conteudo')
<h1>Create!</h1>
{{ Form::open(array('url' => 'artista')) }}
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome') }}
{{ Form::submit('Criar') }}
{{ Form::close() }}


@stop
