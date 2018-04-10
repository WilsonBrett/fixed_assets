@php ($page_title = 'Edit Asset')
@php ($body_class = 'asset-edit')

@extends('base')

@section('content')
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="asset-wrapper">
		<form method="post" action="/assets/{{ $asset->id }}" class="asset-details">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			{{ method_field('PUT') }}
			<div class="form-group">
				<label for="name">Name: <span>*</span></label>
				<input name="name" type="text" value="{{ $asset->name}}" class="form-control">
			</div>
			<div class="form-group">
				<label for="category">Category: <span>*</span></label>
				<select name="category" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}" data-useful-life="{{ $category->useful_life }}" {{ $asset->category == $category->category ? 'selected' : null }}>{{ $category->category }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="amount">Amount: <span>*</span></label>
				<input name="amount" type="text" value="{{ number_format($asset->amount, 2) }}" class="form-control">
			</div>
			<div class="date-wrap form-group">
				<div class="form-group">
					<label for="purchase-date">Purchase Date:</label>
					<input name="purchase_date" type="text" class="form-control hasdatepicker" value="{{ date_create($asset->purchase_date)->format('m/d/Y') }}">
				</div>
				<div class="form-group">
					<label for="service-start-date">Service Start Date: <span>*</span></label>
					<input name="service_start_date" type="text" class="form-control hasdatepicker" value="{{ date_create($asset->service_start_date)->format('m/d/Y') }}">
				</div>
				<div class="form-group">
					<label for="expiration-date">Expiration Date:</label>
					<input name="expiration_date" type="text" class="form-control" value="{{ date_create($asset->expiration_date)->format('m/d/Y') }}" readonly>
				</div>
			</div>
			<div class="btn-wrapper form-group">
				<input name="submit" type="submit" value="Submit" class="form-control asset-submit-btn">
				@if($origin == 'asset_show')
					<a href="/assets/{{$asset->id}}" class="form-control asset-cancel-btn">Cancel</a>
				@else
					<a href="/assets" class="form-control asset-cancel-btn">Cancel</a>
				@endif
			</div>
		</form>
		<form method="post" action="/assets/{{ $asset->id }}" class="form-group asset-delete-form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			{{ method_field('DELETE') }}
			<input type="submit" value="Delete Asset" class="form-control asset-delete-btn">
		</form>
	</div>

@stop
