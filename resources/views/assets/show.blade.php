@php ($page_title = 'Asset Detail (Show)')
@php ($body_class = 'asset-show')

@extends('base')

@section('content')
	<div class="asset-wrapper">
		<ul class="asset-details">
			@foreach($vals as $key=>$val)
				@if($key == 'id')
					@continue
				@endif
				@if(in_array($key, ['purchase_date', 'service_start_date', 'expiration_date']))
					<li><span>{{ ucwords(str_replace('_', ' ', $key)) }}: </span>{{ date_create($val)->format('M j, Y') }}</li>
				@elseif(in_array($key, ['amount']))
					<li><span>{{ ucwords(str_replace('_', ' ', $key)) }}: </span>{{ number_format($val, 2) }}</li>
				@else
					<li><span>{{ ucwords(str_replace('_', ' ', $key)) }}: </span>{{ $val }}</li>
				@endif
			@endforeach
		</ul>
		<div class="btn-wrapper">
			<a href="/assets/{{ $vals->id }}/edit" class="asset-edit-btn">Edit Asset</a>
			<form method="post" action="/assets/{{ $vals->id }}" class="asset-delete-form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{ method_field('DELETE') }}
				<input type="submit" value="Delete Asset" class="asset-delete-btn">
			</form>
		</div>
	</div>
@stop
