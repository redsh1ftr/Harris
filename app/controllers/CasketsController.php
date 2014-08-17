<?php

class CasketsController extends \BaseController {

	/**
	 * Display a listing of caskets
	 *
	 * @return Response
	 */
	public function index()
	{
		$caskets = Casket::all();

		return View::make('caskets.index', compact('caskets'));
	}

	/**
	 * Show the form for creating a new casket
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('caskets.create');
	}

	/**
	 * Store a newly created casket in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::file('image_1')){
				$newfile = str_random(124);
				$file = Input::file('image_1'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('image_1')->move($destinationPath, "$newfile.$filename");
			}

			if(Input::file('image_2')){
				$newfile2 = str_random(124);
				$file = Input::file('image_2'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename2 = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('image_2')->move($destinationPath, "$newfile2.$filename2");
			}

			if(Input::file('image_3')){
				$newfile3 = str_random(124);
				$file = Input::file('image_3'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename3 = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('image_3')->move($destinationPath, "$newfile3.$filename3");
			}

			Casket::create(array(
					'name' => Input::get('name'),
					'interior' => Input::get('interior'),
					'material' => Input::get('material'),
					'manufacturer' => Input::get('manufacturer'),
					'group' => Input::get('group'),
					'price' => Input::get('price'),
					'cost' => Input::get('cost'),
					'notes' => Input::get('notes'),
					'panel' => Input::get('panel'),
					'vault_size' => Input::get('vault_size'),
					'image_1' => "$newfile.$filename",
					'image_2' => "$newfile2.$filename2",
					'image_3' => "$newfile3.$filename3",
					));

		return Redirect::route('caskets.index');
	}

	/**
	 * Display the specified casket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$casket = Casket::findOrFail($id);

		return View::make('caskets.show', compact('casket'));
	}

	/**
	 * Show the form for editing the specified casket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$casket = Casket::find($id);

		return View::make('caskets.edit', compact('casket'));
	}

	/**
	 * Update the specified casket in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$casket = Casket::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Casket::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$casket->update($data);

		return Redirect::route('caskets.index');
	}

	/**
	 * Remove the specified casket from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Casket::destroy($id);

		return Redirect::route('caskets.index');
	}

}
