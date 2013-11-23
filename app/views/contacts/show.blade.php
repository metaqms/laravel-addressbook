@extends('layouts.scaffold')

@section('main')

<h1>Show Contact</h1>

<p>{{ link_to_route('contacts.index', 'Return to all contacts') }}</p>

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
	</tbody>
</table>

@stop
