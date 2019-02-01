@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Brands in selected Category: !!"-
                        <strong>{{ $categoryName['name']}}-"!!</strong>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="breadcrumbs">
                    {{ Breadcrumbs::render('home', $category_bread) }}
                </div>
            </div>
        </div>--}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($brands as $brand)
                            <li><a class="nav-link" href="{{ url('/category/'.$category.'/brand/'.$brand['id'].'/items') }}">{{ $brand['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
