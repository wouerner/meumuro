@extends('template')

@section('conteudo')
<h1>Categorias</h1>
<a class = "btn btn-success" href="{{ route('categoria.create') }}"> Nova</a>
		<table class = "table" >
			<thead>
       <th>Id</th>
       <th>Nome</th>
       <th>Ações</th>
      </thead>
@foreach ($categorias as $a)
			<tr>
		    <td>{{ $a->id }}</td>
		    <td><a href ="{{ URL::action('figura\FiguraCategoriaController@show',$a->id) }}"> {{ $a->nome }}</a></td>
				<td><a class = "btn btn-mini" href="{{ URL::action('figura\FiguraCategoriaController@edit',$a->id) }}"><i class = "icon-edit" ></i> Editar</a></td>
			</tr>
@endforeach
		</table>

@stop
