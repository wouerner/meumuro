@extends('template')

@section('conteudo')
<h1>Index</h1>

<?php //var_dump($figuras[0]->id)  ?>

		<table class = "table" >
			<thead>
       <th>Id</th>
       <th>Nome</th>
       <th>imagem</th>
       <th>categoria</th>
       <th>Ações</th>
      </thead>
@foreach ($figuras as $a)
			<tr>
		    <td>{{ $a->id }}</td>
		    <td>{{ $a->nome }}</td>
		    <td><img class = "span2" src="{{ $a->image }}"></td>
		    <td>{{ $a->categoria->nome }}</td>
				<td><a class = "btn btn-mini" href="{{ URL::action('figura\FiguraController@edit',$a->id) }}"><i class = "icon-edit" ></i> Editar</a></td>
			</tr>
@endforeach
		</table>

@stop
