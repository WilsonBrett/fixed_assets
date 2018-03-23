@extends('base')

<h1>Edit Asset</h1>

@section('content')
    <form method="post" action="/assets/{{ $asset->id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" value="{{ $asset->name}}">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" type="text" id="category" class="form-control" value="{{ $asset->category }}">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" data-useful-life="{{ $category->useful_life }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input name="amount" type="text" id="amount" class="form-control" value="{{ $asset->amount }}">
        </div>
        <div class="form-group">
            <label for="purchase-date">Purchase Date</label>
            <input name="purchase-date" type="text" id="purchase-date" class="form-control" value="{{ $asset->purchase_date }}">
        </div>
        <div class="form-group">
            <label for="service-start-date">Service Start Date</label>
            <input name="service-start-date" type="text" id="service-start-date" class="form-control" value="{{ $asset->service_start_date }}">
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date</label>
            <input name="expiration-date" type="text" id="expiration-date" class="form-control" value="{{ $asset->expiration_date }}" disabled>
        </div>
        <div>
            <input name="submit" type="submit" value="Update Asset">
            <a href="/assets/{{$asset->id}}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@stop
