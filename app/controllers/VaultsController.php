<?php

class VaultsController extends \BaseController {

	/**
	 * Display a listing of vaults
	 *
	 * @return Response
	 */
	public function index()
	{
		$vaults = Vault::all();

		return View::make('vaults.index', compact('vaults'));
	}

	/**
	 * Show the form for creating a new vault
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vaults.create');
	}

	/**
	 * Store a newly created vault in storage.
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

			Vault::create(array(
					'name' => Input::get('name'),
					'liner' => Input::get('liner'),
					'description' => Input::get('description'),
					'price' => Input::get('price'),
					'image_1' => "$newfile.$filename",
					'image_2' => "$newfile2.$filename2",
					'image_3' => "$newfile3.$filename3",
					));


		return Redirect::route('vaults.index');
	}

	/**
	 * Display the specified vault.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vault = Vault::findOrFail($id);

		return View::make('vaults.show', compact('vault'));
	}

	/**
	 * Show the form for editing the specified vault.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vault = Vault::find($id);

		return View::make('vaults.edit', compact('vault'));
	}

	/**
	 * Update the specified vault in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vault = Vault::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Vault::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$vault->update($data);

		return Redirect::route('vaults.index');
	}

	/**
	 * Remove the specified vault from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vault::destroy($id);

		return Redirect::route('vaults.index');
	}

}
