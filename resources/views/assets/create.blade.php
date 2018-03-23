@extends('base')

<h1>Create Asset</h1>

@section('content')
    <form method="post" action="/assets">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Enter asset name">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
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
            <input name="purchase-date" type="text" id="purchase-date" class="form-control">
        </div>
        <div class="form-group">
            <label for="service-start-date">Service Start Date</label>
            <input name="service-start-date" type="text" id="service-start-date" class="form-control">
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date</label>
            <input name="expiration-date" type="text" id="expiration-date" class="form-control" disabled>
        </div>
        <div>
            <input name="submit" type="submit" value="Update Asset">
            <a href="/assets" class="btn btn-default">Cancel</a>
        </div>
    </form>
@stop
