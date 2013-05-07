@extends('template')

@section('conteudo')
<h1>Index</h1>

<?php //var_dump($artistas[0]->id)  ?>

		<table class = "table" >
			<thead>
       <th>Id</th>
       <th>Nome</th>
       <th>Ações</th>
      </thead>
@foreach ($artistas as $a)
			<tr>
		    <td>{{ $a->id }}</td>
		    <td>{{ $a->nome }}</td>
				<td><a class = "btn btn-mini" href="{{ URL::action('artista\ArtistaController@edit',$a->id) }}"><i class = "icon-edit" ></i> Editar</a></td>
			</tr>
@endforeach
		</table>

@stop
