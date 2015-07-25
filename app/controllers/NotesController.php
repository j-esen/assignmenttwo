<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the notes
		$notes = Notes::all();

		// load the view and pass the notes
		return View::make('notes.index')
			->with('notes', $notes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('notes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'notes'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('notes/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$notes = new Notes;
			$notes->notes       = Input::get('notes');
			$notes->save();

			// redirect
			Session::flash('message', 'Successfully created note!');
			return Redirect::to('notes');
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
		$notes = Notes::find($id);

		// show the view and pass the note to it
		return View::make('notes.show')
			->with('notes', $notes);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$notes = Notes::find($id);

		// show the edit form and pass the image
		return View::make('notes.edit')
			->with('notes', $notes);
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
			'notes'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('notes/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$notes = Notes::find($id);
			$notes->notes      = Input::get('notes');
			$notes->save();

			// redirect
			Session::flash('message', 'Successfully updated notes!');
			return Redirect::to('notes');
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
		// delete
		$notes = Notes::find($id);
		$notes->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the note!');
		return Redirect::to('notes');
	}


}
