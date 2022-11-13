
@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $contacts->name }}</h5>
                <p class="card-text">Address : {{ $contacts->address }}</p>
                <p class="card-text">Phone : {{ $contacts->mobile }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/storage/{{ $contacts->image }}" width="500px">
                </div>
            </div>
            </hr>

        </div>
    </div>
