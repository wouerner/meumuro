@extends('template')

@section('conteudo')
<h1>Index</h1>

<?php //var_dump($artistas[0]->id)  ?>

		<table class = "table" >
			<thead>
       <th>Id</th>
       <th>Nome</th>
       <th>Imagem</th>
       <th>Ações</th>
      </thead>
			<tr>
		    <td>{{ $figura->id }}</td>
		    <td>{{ $figura->nome }}</td>
		    <td><img src="{{ $figura->image }}"></td>
				<td><a class = "btn btn-mini" 
               href="{{ route('figura.edit', ['figura'=>$figura->id]) }}">
							 <i class = "icon-edit" ></i> 
               Editar
            </a>

{{ Form::open(['url' => URL::action('artista\ArtistaController@avaliar',$figura->id) ,
							 'method'=>'POST']) }}

{{ Form::button('Gostei',['class'=>'btn', 'value'=>1 , 
								'type'=>'submit', 'name' =>'opiniao' ]) }}

{{ Form::button('Ruim',  ['class'=>'btn', 'value'=>0 , 
                'type'=>'submit', 'name'=> 'opiniao']) }}

{{ Form::close() }}


        </td>
			</tr>
		</table>

@stop
