@php ($page_title = 'Create Asset')

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
    <form method="post" action="/assets">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Enter asset name">
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
            <input name="purchase_date" type="text" id="purchase-date" class="form-control">
        </div>
        <div class="form-group">
            <label for="service-start-date">Service Start Date</label>
            <input name="service_start_date" type="text" id="service-start-date" class="form-control">
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date</label>
            <input name="expiration_date" type="text" id="expiration-date" class="form-control">
        </div>
        <div>
            <input name="submit" type="submit" value="Create Asset">
            <a href="/assets" class="btn btn-default">Cancel</a>
        </div>
    </form>
@stop
