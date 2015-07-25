<?php

class TbdsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tbds = Tbds::all();

		// load the view and pass the TBD
		return View::make('tbds.index')
			->with('tbds', $tbds);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tbds.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'tbds'       => 'required',

		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('tbds/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$tbds = new Tbds;
			$tbds->tbds       = Input::get('tbds');
			$tbds->save();

			// redirect
			Session::flash('message', 'Successfully created TBD!');
			return Redirect::to('tbds');
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
		$tbds = Tbds::find($id);

		// show the view and pass the tbd to it
		return View::make('tbds.show')
			->with('tbds', $tbds);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tbds = Tbds::find($id);

		// show the edit form and pass the TBD
		return View::make('tbds.edit')
			->with('tbds', $tbds);
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
			'tbds'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('tbds/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$tbds = Tbds::find($id);
			$tbds->tbds       = Input::get('tbds');
			$tbds->save();

			// redirect
			Session::flash('message', 'Successfully updated TBD!');
			return Redirect::to('tbds');
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
		$tbds = Tbds::find($id);
		$tbds->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the TBD!');
		return Redirect::to('tbds');
	}


}
