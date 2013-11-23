@extends('layouts.scaffold')

@section('main')

<h1>Edit Contact</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('contacts.update', $contact->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('organisation_id', 'Organisation_id:') }}
            {{ Form::input('number', 'organisation_id') }}
        </li>

        <li>
            {{ Form::label('home_address_id', 'Home_address_id:') }}
            {{ Form::input('number', 'home_address_id') }}
        </li>

        <li>
            {{ Form::label('work_address_id', 'Work_address_id:') }}
            {{ Form::input('number', 'work_address_id') }}
        </li>

        <li>
            {{ Form::label('blog-url', 'Blog-url:') }}
            {{ Form::text('blog-url') }}
        </li>

        <li>
            {{ Form::label('twitter', 'Twitter:') }}
            {{ Form::text('twitter') }}
        </li>

        <li>
            {{ Form::label('facebook', 'Facebook:') }}
            {{ Form::text('facebook') }}
        </li>

        <li>
            {{ Form::label('work_phone', 'Work_phone:') }}
            {{ Form::text('work_phone') }}
        </li>

        <li>
            {{ Form::label('home_phone', 'Home_phone:') }}
            {{ Form::text('home_phone') }}
        </li>

        <li>
            {{ Form::label('personal_phone', 'Personal_phone:') }}
            {{ Form::text('personal_phone') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::checkbox('status') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('contacts.show', 'Cancel', $contact->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
