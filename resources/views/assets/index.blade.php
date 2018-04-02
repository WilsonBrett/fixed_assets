@php ($page_title = 'Assets Index')
@php ($body_class = 'asset-index')

@extends('base')

@section('content')
	<table class="index-table">
		<thead>
			<tr>
				<th>#</th>
				<th class="sortable">
					<span>Asset Name</span>
					<div class="sort-wrapper">
						<a href="/assets?sort=name&order=asc"><i class="fas fa-caret-up"></i></a>
						<a href="/assets?sort=name&order=desc"><i class="fas fa-caret-down"></i></a>
					</div>
				</th>
				<th class="sortable">
					<span>Category</span>
					<div class="sort-wrapper">
						<a href="/assets?sort=category&order=asc"><i class="fas fa-caret-up"></i></a>
						<a href="/assets?sort=category&order=desc"><i class="fas fa-caret-down"></i></a>
					</div>
				</th>
				<th class="sortable">
					<span>Amount ($)</span>
					<div class="sort-wrapper">
						<a href="/assets?sort=amount&order=asc"><i class="fas fa-caret-up"></i></a>
						<a href="/assets?sort=amount&order=desc"><i class="fas fa-caret-down"></i></a>
					</div>
				</th>
				<th class="sortable">
					<span>Purchase Date</span>
					<div class="sort-wrapper">
						<a href="/assets?sort=purchase_date&order=asc"><i class="fas fa-caret-up"></i></a>
						<a href="/assets?sort=purchase_date&order=desc"><i class="fas fa-caret-down"></i></a>
					</div>
				</th>
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
					<td>{{ date_create($asset->purchase_date)->format('M j, Y') }}</td>
					<td class="asset-details-btn"><a href="/assets/{{ $asset->id }}">View</a></td>
					<td class="edit-asset-btn"><a href="/assets/{{ $asset->id }}/edit">Edit</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $assets->links() }}
@stop