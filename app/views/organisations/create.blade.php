@extends('layouts.scaffold')

@section('main')

<h1>Create Organisation</h1>

{{ Form::open(array('route' => 'organisations.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


