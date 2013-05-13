<?php namespace figura;
use View;
use Redirect;
use Input;
use CategoriaFigura;
use Figura;

class FiguraCategoriaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
  	$categoria = new CategoriaFigura();
		$categorias = $categoria::all();
		return View::make('categoria.index')->with('categorias' , $categorias);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('categoria.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = Input::all();
		$categoria = new CategoriaFigura();

		$categoria->nome = $data['nome'];
		//$artista = Confide::user()->artista()->first()->id ;
		$categoria->save();
		return Redirect::to('/categoria');
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
		$categoria = new CategoriaFigura();
		$categoria = CategoriaFigura::find($id) ;



		$figuras = Figura::where('categoria_id','=',$id)->get();
		//var_dump($figuras->first());
		return View::make('categoria.show')->with('data', 
						                              array('categoria'=>$categoria, 
																					      'figuras'   =>$figuras));
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
		$categoria = $categoria::find($id);

		return View::make('categoria.edit')->with('categoria', $categoria);
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
		$categoria = new CategoriaFigura();
		$categoria = $categoria::find($id);
		$categoria->nome = Input::get('nome');
		$categoria->save();
		return Redirect::to('/categoria');
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
