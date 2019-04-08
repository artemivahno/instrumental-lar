@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Items in selectec Brand <strong>-{{ $brandName}}-</strong> in Category <strong>-{{ $categoryName}}-</strong> (items.blade // itemController)
                    </div>

                </div>
            </div>
        </div>
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('category.slug',$category->slug )}}">{{$categoryName}}</a></li>
                <li class="active"><b>{{$brandName}} </b></li>
            </ul>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($products as $product)
                            <li><a class="nav-link" href=
                                "{{ url('/product/'. $product->slug) }}">
                                    {{ $product['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
