@extends('template')

@section('conteudo')
<h1>categoria : {{$data['categoria']->nome}}</h1>
		<table class = "table" >
			<thead>
       <th>Id</th>
       <th>Nome</th>
       <th>Imagem</th>
      </thead>
      @foreach ( $data['figuras'] as $f )
			<tr>
		    <td>{{ $f->id }}</td>
		    <td>{{ $f->nome }}</td>
		    <td><img class = "span2" src="{{ $f->image }}"></td>
				<td><a class = "btn btn-mini" 
               href="{{URL::action('figura\FiguraController@edit',$f->id) }}">
                                  <i class = "icon-edit" ></i> Editar</a></td>
			</tr>
       @endforeach
		</table>
		{{ $data['figuras']->links() }}
@stop
