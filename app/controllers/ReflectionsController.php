<?php

class ReflectionsController extends \BaseController {

	/**
	 * Display a listing of reflections
	 *
	 * @return Response
	 */
	public function index()
	{
		$reflections = Reflections::all();

		return View::make('reflections.index', compact('reflections'));
	}

	/**
	 * Show the form for creating a new reflection
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('reflections.create');
	}

	/**
	 * Store a newly created reflection in storage.
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

			Reflections::create(array(
					'name' => Input::get('name'),
					'image_1' => "$newfile.$filename",
					));

		return Redirect::route('reflections.index');
	}

	/**
	 * Display the specified reflection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$reflection = Reflections::findOrFail($id);
		$reflections = Reflections::all();

		return View::make('reflections.show', compact('reflection', 'reflections'));
	}

	/**
	 * Show the form for editing the specified reflection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reflection = Reflections::find($id);

		return View::make('reflections.edit', compact('reflection'));
	}

	/**
	 * Update the specified reflection in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$reflection = Reflections::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Reflections::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$reflection->update($data);

		return Redirect::route('reflections.index');
	}

	/**
	 * Remove the specified reflection from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Reflections::destroy($id);

		return Redirect::route('reflections.index');
	}

}
