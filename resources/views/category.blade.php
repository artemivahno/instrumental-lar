@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a class="nav-link" href="{{ route('items') }}"> Brand</a></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($brands as $brand)
                            {{ $brand }}<br/>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
