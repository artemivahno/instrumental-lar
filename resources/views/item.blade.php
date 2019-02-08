@extends('layouts.app')

@section('content')

    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Item -  {{ $item['name']}}</div>
                </div>
            </div>
        </div>--}}
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('category',$slug)}}">{{$categoryName}}</a></li>
                <li><a href="{{route('items',[$slug, $brandsSlug])}}">{{$brandName}}</a></li>
                <li class="active"><b>{{$item['name']}} </b></li>
            </ul>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <p>{{ $item['name']}}</p>

                </div>
            </div>
        </div>
    </div>
@endsection
