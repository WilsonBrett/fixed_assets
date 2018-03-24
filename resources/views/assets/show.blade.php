@php ($page_title = 'Asset Detail (Show)')

@extends('base')

@section('content')
	<ul>
		@foreach($vals as $key=>$val)
			@if($key == 'id')
				@continue
			@endif
			<li><span>{{ $key }}: </span>{{ $val }}</li>
		@endforeach
	</ul>
	<a href="/assets/{{ $vals->id }}/edit">Edit Asset</a>
	<form method="post" action="/assets/{{ $vals->id }}" id="deleteForm">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{{ method_field('DELETE') }}
		<input type="submit" value="Delete Asset" id="deleteBtn">
	</form>
@stop
