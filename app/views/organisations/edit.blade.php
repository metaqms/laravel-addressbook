@extends('layouts.scaffold')

@section('main')

<h1>Edit Organisation</h1>
{{ Form::model($organisation, array('method' => 'PATCH', 'route' => array('organisations.update', $organisation->id))) }}
	<ul>
        <li>
            {{ Form::label('organisation_name', 'Organisation_name:') }}
            {{ Form::text('organisation_name') }}
        </li>

        <li>
            {{ Form::label('organisation_web', 'Organisation_web:') }}
            {{ Form::text('organisation_web') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('organisations.show', 'Cancel', $organisation->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
