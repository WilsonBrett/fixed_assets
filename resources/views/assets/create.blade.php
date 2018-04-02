@php ($page_title = 'Create Asset')
@php ($body_class = 'asset-create')

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
		<form method="post" action="/assets" class="asset-details">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">Name</label>
				<input name="name" type="text" id="name" placeholder="Enter asset name" class="form-control">
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<select name="category_id" id="category_id" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}" data-useful-life="{{ $category->useful_life }}">{{ $category->category }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="amount">Amount</label>
				<input name="amount" type="text" id="amount" class="form-control" placeholder="Enter Cost in USD">
			</div>
			<div class="form-group">
				<label for="purchase-date">Purchase Date</label>
				<input name="purchase_date" type="text" id="purchase-date" class="form-control hasdatepicker">
			</div>
			<div class="form-group">
				<label for="service-start-date">Service Start Date</label>
				<input name="service_start_date" type="text" id="service-start-date" class="form-control hasdatepicker">
			</div>
			<div class="form-group">
				<label for="expiration-date">Expiration Date</label>
				<input name="expiration_date" type="text" id="expiration-date" class="form-control hasdatepicker">
			</div>
			<div class="btn-wrapper form-group">
				<input name="submit" type="submit" value="Submit" class="form-control btn">
				<a href="/assets" class="form-control btn">Cancel</a>
			</div>
		</form>
	</div>
@stop
