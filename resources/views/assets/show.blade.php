@extends('base')

<h1>Asset Detail (Show)</h1>

@section('content')
	<ul>
		@foreach($vals as $key=>$val)
			@if($key == 'id')
				@continue
			@endif
			<li><span>{{ $key }}: </span>{{ $val }}</li>
		@endforeach
	</ul>

	<a href="/assets/{{ $vals->id }}/edit">Edit</a>
@stop
