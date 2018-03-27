@php ($page_title = 'Assets Index')

@extends('base')

@section('content')
	<table class="index-table">
		<thead>
			<tr>
				<th>#</th>
				<th>Asset Name<a href="/assets?sort=name&order=asc">+</a><a href="/assets?sort=name&order=desc">-</a></th>
				<th>Category<a href="/assets?sort=category&order=asc">+</a><a href="/assets?sort=category&order=desc">-</a></th>
				<th>Amount ($)<a href="/assets?sort=amount&order=asc">+</a><a href="/assets?sort=amount&order=desc">-</a></th>
				<th>Purchase Date<a href="/assets?sort=purchase_date&order=asc">+</a><a href="/assets?sort=purchase_date&order=desc">-</a></th>
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
	{{ $assets->links() }}
@stop