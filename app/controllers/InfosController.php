<?php

class InfosController extends \BaseController {

	/**
	 * Display a listing of infos
	 *
	 * @return Response
	 */
	public function index()
	{
		$infos = Info::all();

		return View::make('infos.index', compact('infos'));
	}

	/**
	 * Show the form for creating a new info
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('infos.create');
	}

	/**
	 * Store a newly created info in storage.
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

			Info::create(array(
					'name' => Input::get('name'),
					'image_1' => "$newfile.$filename",
					));

		return Redirect::route('infos.index');
	}

	/**
	 * Display the specified info.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$info = Info::findOrFail($id);
		$infos = Info::all();

		return View::make('infos.show', compact('info', 'infos'));
	}

	/**
	 * Show the form for editing the specified info.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$info = Info::find($id);

		return View::make('infos.edit', compact('info'));
	}

	/**
	 * Update the specified info in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$info = Info::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Info::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$info->update($data);

		return Redirect::route('infos.index');
	}

	/**
	 * Remove the specified info from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Info::destroy($id);

		return Redirect::route('infos.index');
	}

}
