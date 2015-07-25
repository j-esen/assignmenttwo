<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Images::all();

		// load the view and pass the image
		return View::make('images.index')
			->with('images', $images);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('images.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$file = array('image' => Input::file('image'));
		// setting up rules
		$rules = array('image' => 'required|mimes:jpeg,gif',);
		// doing the validation, passing post data, rules and the messages
		$validator = Validator::make($file, $rules);


		// process the login
		if ($validator->fails()) {
			return Redirect::to('images/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
//			$userId = Auth::user()->id;
//			$file = Input::file('image');
//			$data = Img::make($file)->encode('data-url');
//
//			$this->image->user_id = $userId;
//			$this->image->img_name = $data->encoded;
//			$this->image->save();





			$file = Input::file('image');
			$picture = $file->getClientOriginalName();
			$generatepic = rand(32321323,8687868678).$picture;
			$fullpath = $file->move('../public/img',$generatepic);

			$images = new Images;
			$images->image = $fullpath;
//			$images->image       = Input::file('image')->getClientOriginalName();
			$images->save();

			// redirect
			Session::flash('message', 'Successfully uploaded!');
			return Redirect::to('images');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$images = Images::find($id);

		// show the view and pass the image to it
		return View::make('images.show')
			->with('images', $images);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$images = Images::find($id);

		// show the edit form and pass the image
		return View::make('images.edit')
			->with('images', $images);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'image'       => 'required',

		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('images/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$images = Images::find($id);
			$images->image       = Input::get('image')->getClientOriginalName();

			$images->save();

			// redirect
			Session::flash('message', 'Successfully updated Image!');
			return Redirect::to('images');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$images = Images::find($id);
		$images->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Image!');
		return Redirect::to('images');
	}


}
