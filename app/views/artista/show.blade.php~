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
			<tr>
		    <td>{{ $artista->id }}</td>
		    <td>{{ $artista->nome }}</td>
				<td><a class = "btn btn-mini" href="{{ route('artista.edit', ['artista'=>$artista->id]) }}"><i class = "icon-edit" ></i> Editar</a></td>
			</tr>
		</table>

@stop
