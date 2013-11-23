<?php

class OrganisationsController extends BaseController {

	/**
	 * Organisation Repository
	 *
	 * @var Organisation
	 */
	protected $organisation;

	public function __construct(Organisation $organisation)
	{
		$this->organisation = $organisation;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organisations = $this->organisation->all();

		return View::make('organisations.index', compact('organisations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organisations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Organisation::$rules);

		if ($validation->passes())
		{
			$this->organisation->create($input);

			return Redirect::route('organisations.index');
		}

		return Redirect::route('organisations.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$organisation = $this->organisation->findOrFail($id);

		return View::make('organisations.show', compact('organisation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organisation = $this->organisation->find($id);

		if (is_null($organisation))
		{
			return Redirect::route('organisations.index');
		}

		return View::make('organisations.edit', compact('organisation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Organisation::$rules);

		if ($validation->passes())
		{
			$organisation = $this->organisation->find($id);
			$organisation->update($input);

			return Redirect::route('organisations.show', $id);
		}

		return Redirect::route('organisations.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->organisation->find($id)->delete();

		return Redirect::route('organisations.index');
	}

}
