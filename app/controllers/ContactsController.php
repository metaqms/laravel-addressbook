<?php

class ContactsController extends BaseController {

	/**
	 * Contact Repository
	 *
	 * @var Contact
	 */
	protected $contact;

	public function __construct(Contact $contact)
	{
		$this->contact = $contact;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contacts = $this->contact->all();

		return View::make('contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Contact::$rules);

		if ($validation->passes())
		{
			$this->contact->create($input);

			return Redirect::route('contacts.index');
		}

		return Redirect::route('contacts.create')
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
		$contact = $this->contact->findOrFail($id);

		return View::make('contacts.show', compact('contact'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contact = $this->contact->find($id);

		if (is_null($contact))
		{
			return Redirect::route('contacts.index');
		}

		return View::make('contacts.edit', compact('contact'));
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
		$validation = Validator::make($input, Contact::$rules);

		if ($validation->passes())
		{
			$contact = $this->contact->find($id);
			$contact->update($input);

			return Redirect::route('contacts.show', $id);
		}

		return Redirect::route('contacts.edit', $id)
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
		$this->contact->find($id)->delete();

		return Redirect::route('contacts.index');
	}

}
