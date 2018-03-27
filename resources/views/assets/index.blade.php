@php ($page_title = 'Assets Index')

@extends('base')

@section('content')
	<table class="index-table">
		<thead>
			<tr>
				<th>#</th>
				<th>Asset Name</th>
				<th>Category</th>
				<th>Amount ($)</th>
				<th>Purchase Date</th>
				<th>View Asset</th>
				<th>Edit Asset</th>
			</tr>
		</thead>
		<tbody>
			@foreach($assets as $asset)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td><a href="/assets/{{ $asset->id }}">{{ $asset->name }}</a></td>
					<td>{{ $asset->category }}</td>
					<td class="asset-amount">{{ number_format($asset->amount, 2) }}</td>
					<td>{{ $asset->purchase_date->format('M j, Y') }}</td>
					<td class="asset-details-btn"><a href="/assets/{{ $asset->id }}">View</a></td>
					<td class="edit-asset-btn"><a href="/assets/{{ $asset->id }}/edit">Edit</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop