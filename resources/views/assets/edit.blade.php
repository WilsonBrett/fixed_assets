@extends('base')

@section('content')
    <form method="post" action="/fixedassets/assets/{{ $asset->id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" value="{{ $asset->Name}}">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input name="category" type="text" id="category" class="form-control" value="{{ $asset->Category }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input name="amount" type="text" id="amount" class="form-control" value="{{ $asset->Amount }}">
        </div>
        <div class="form-group">
            <label for="purchase-date">Amount</label>
            <input name="purchase-date" type="text" id="purchase-date" class="form-control" value="{{ $asset->PurchaseDate }}">
        </div>
        <div class="form-group">
            <label for="service-start-date">Service Start Date</label>
            <input name="service-start-date" type="text" id="service-start-date" class="form-control" value="{{ $asset->ServiceStartDate }}">
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date</label>
            <input name="expiration-date" type="text" id="expiration-date" class="form-control" value="{{ $asset->ExpirationDate }}">
        </div>
        <div>
            <input name="submit" type="submit" value="Update Asset">
            <a href="/fixedassets/assets/{{$asset->id}}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@stop
