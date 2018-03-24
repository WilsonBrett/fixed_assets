@php ($page_title = 'Assets Index')

@extends('base')

@section('content')
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Asset Name</th>
				<th>Category</th>
				<th>Amount ($)</th>
				<th>Purchase Date</th>
				<th>Details</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($assets as $asset)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td><a href="/assets/{{ $asset->id }}">{{ $asset->name }}</a></td>
					<td>{{ $asset->category }}</td>
					<td>{{ $asset->amount }}</td>
					<td>{{ $asset->purchase_date }}</td>
					<td><a href="/assets/{{ $asset->id }}">Show Details</a></td>
					<td><a href="/assets/{{ $asset->id }}/edit">Edit Asset</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop