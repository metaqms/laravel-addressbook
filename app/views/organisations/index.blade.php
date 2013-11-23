@extends('layouts.scaffold')

@section('main')

<h1>All Organisations</h1>

<p>{{ link_to_route('organisations.create', 'Add new organisation') }}</p>

@if ($organisations->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Organisation_name</th>
				<th>Organisation_web</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($organisations as $organisation)
				<tr>
					<td>{{{ $organisation->organisation_name }}}</td>
					<td>{{{ $organisation->organisation_web }}}</td>
                    <td>{{ link_to_route('organisations.edit', 'Edit', array($organisation->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('organisations.destroy', $organisation->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no organisations
@endif

@stop
