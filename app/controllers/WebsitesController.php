<?php

class WebsitesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the urls
		$websites = Websites::all();

		// load the view and pass the urls
		return View::make('websites.index')
			->with('websites', $websites);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('websites.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'websites'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('websites/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$websites = new Websites;
			$websites->websites       = Input::get('websites');
			$websites->save();

			// redirect
			Session::flash('message', 'Successfully created website!');
			return Redirect::to('websites');
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
		$websites = Websites::find($id);

		// show the view and pass the url to it
		return View::make('websites.show')
			->with('websites', $websites);

//		return Redirect::away($websites);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$websites = Websites::find($id);

		// show the edit form and pass the url
		return View::make('websites.edit')
			->with('websites', $websites);
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
			'websites'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('websites/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$websites = Websites::find($id);
			$websites->websites       = Input::get('websites');
			$websites->save();

			// redirect
			Session::flash('message', 'Successfully updated URL!');
			return Redirect::to('websites');
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
		$websites = Websites::find($id);
		$websites->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the URL!');
		return Redirect::to('websites');
	}


}
