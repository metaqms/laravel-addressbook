@extends('layouts.scaffold')

@section('main')

<h1>All Contacts</h1>

<p>{{ link_to_route('contacts.create', 'Add new contact') }}</p>

@if ($contacts->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Organisation_id</th>
				<th>Home_address_id</th>
				<th>Work_address_id</th>
				<th>Blog-url</th>
				<th>Twitter</th>
				<th>Facebook</th>
				<th>Work_phone</th>
				<th>Home_phone</th>
				<th>Personal_phone</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($contacts as $contact)
				<tr>
					<td>{{{ $contact->name }}}</td>
					<td>{{{ $contact->email }}}</td>
					<td>{{{ $contact->organisation_id }}}</td>
					<td>{{{ $contact->home_address_id }}}</td>
					<td>{{{ $contact->work_address_id }}}</td>
					<td>{{{ $contact->blog-url }}}</td>
					<td>{{{ $contact->twitter }}}</td>
					<td>{{{ $contact->facebook }}}</td>
					<td>{{{ $contact->work_phone }}}</td>
					<td>{{{ $contact->home_phone }}}</td>
					<td>{{{ $contact->personal_phone }}}</td>
					<td>{{{ $contact->status }}}</td>
                    <td>{{ link_to_route('contacts.edit', 'Edit', array($contact->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('contacts.destroy', $contact->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no contacts
@endif

@stop
