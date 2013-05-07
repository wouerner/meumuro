<?php namespace artista;
use BaseController;
use View;
use Artista;
use Input;
use Redirect;

class ArtistaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artista = new Artista();
		$artistas = $artista::all();

		return View::make('artista.index')->with('artistas',$artistas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//$post = Input::all();
		return View::make('artista.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$artista = new Artista();
		$artista->nome = $data['nome'];
		$artista->save();
		return Redirect::to('/artista');
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
		$artista = new Artista();
		$artista = $artista::find($id);
		return View::make('artista.show')->with('artista', $artista);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artista = new Artista();
		$artista = $artista::find($id);

		return View::make('artista.edit')->with('artista', $artista);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artista = new Artista();
		$artista = $artista::find($id);
		$artista->nome = Input::get('nome');
		$artista->save();
		return Redirect::to('/artista');
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