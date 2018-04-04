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
				<label for="name">Name: <span>*</span></label>
				<input name="name" type="text" placeholder="Enter asset name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="category">Category: <span>*</span></label>
				<select name="category" class="form-control" required>
					@foreach($categories as $category)
						<option value="{{ $category->id }}" data-useful-life="{{ $category->useful_life }}">{{ $category->category }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="amount">Amount: <span>*</span></label>
				<input name="amount" type="text" class="form-control" placeholder="Enter Cost in USD" required>
			</div>
			<div class="date-wrap form-group">
				<div class="form-group">
					<label for="purchase-date">Purchase Date:</label>
					<input name="purchase_date" type="text" class="form-control hasdatepicker">
				</div>
				<div class="form-group">
					<label for="service-start-date">Service Start Date: <span>*</span></label>
					<input name="service_start_date" type="text" class="form-control hasdatepicker" required>
				</div>
				<div class="form-group">
					<label for="expiration-date">Expiration Date: </label>
					<input name="expiration_date" type="text" class="form-control" readonly>
				</div>
			</div>
			<div class="btn-wrapper form-group">
				<input name="submit" type="submit" value="Submit" class="form-control asset-submit-btn">
				<a href="/assets" class="form-control asset-cancel-btn">Cancel</a>
			</div>
		</form>
	</div>
@stop
