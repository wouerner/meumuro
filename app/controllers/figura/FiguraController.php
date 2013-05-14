<?php namespace figura;
use Figura;
use View;
use Input;
use Redirect;
use Confide;
use CategoriaFigura;

class FiguraController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
  	$figura = new Figura();
		$figuras = $figura::all();

		return View::make('figura.index')->with('figuras',$figuras);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categoria = new CategoriaFigura();
		$categorias = $categoria::all();

		foreach($categorias as $c){
		   $data[ $c->id ] = $c->nome ;
		}
		return View::make('figura.create')->with('categorias',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$figura = new Figura();
		var_dump($data);

		$figura->nome = $data['nome'];
		$figura->categoria_id = $data['categoriaId'];
		$figura->artista_id =Confide::user()->artista()->first()->id ;
		$figura->save();

		if (Input::hasFile('image'))
       {
           $mime = explode('/', Input::file('image')->getMimeType() );
					 $filename = $figura->id . '.' . $mime[1] ;
           $path = '/upload/' .$filename;
					 $figura->image = $path;
					 Input::file('image')->move(base_path().'/public/upload/', $filename) ;
		       $figura->save();
       }

		return Redirect::to('/figura');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$figura = new Figura();
		$figura = $figura::find($id);
		return View::make('figura.show')->with('figura', $figura);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$categoria = new CategoriaFigura();
		$categorias = $categoria::all();

		foreach($categorias as $c){
		   $cats[ $c->id ] = $c->nome ;
		}

		$figura = new Figura();
		$figura = $figura::find($id);

		var_dump($figura->categoria_id);

		return View::make('figura.edit')->with('data', array('figura'=>$figura,
						                                              'categorias'=>$cats));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$figura = new Figura();
		$figura = $figura::find($id);
		$figura->nome = Input::get('nome');
		$figura->categoria_id = Input::get('categoriaId');
		$figura->save();

		if (Input::hasFile('image'))
       {
           $mime = explode('/', Input::file('image')->getMimeType() );
					 $filename = $figura->id . '.' . $mime[1] ;
           $path = '/upload/' .$filename;
					 $figura->image = $path;
					 Input::file('image')->move(base_path().'/public/upload/', $filename) ;
		       $figura->save();
       }
		return Redirect::to('/figura');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
