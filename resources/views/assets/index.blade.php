@extends('base')

<h1>Assets Index</h1>

@section('content')
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th>Category</th>
				<th>Purchase Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($assets as $asset)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td><a href="/fixedassets/assets/{{ $asset->id }}">{{ $asset->Name }}</a></td>
					<td>{{ $asset->Category }}</td>
					<td>{{ $asset->PurchaseDate }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop