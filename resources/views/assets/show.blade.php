@extends('base')

<h1>Asset Detail (Show)</h1>

@section('content')
	<ul>
		@foreach($asset->getAttributes() as $key=>$attr)
			@if($key=='id')
				@continue
			@endif
			<li>{{ $key }}: {{ $attr }}</li>
		@endforeach
	</ul>

	<a href="/fixedassets/assets/{{ $asset->id }}/edit">Edit</a>
@stop
