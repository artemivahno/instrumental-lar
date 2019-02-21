@extends('layouts.app')

@section('content')
    <div class="container">
       {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Brands in selected Category: !!"-
                        <strong>{{ $categoryName}}-"!!</strong>
                    </div>
                </div>
            </div>
        </div>--}}
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                {{--<li class="active"><b>{{$categoryName}} </b></li>--}}
            </ul>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($categories as $category)
                            <li><a class="nav-link"
                                                           href="{{ route('category', $category->slug)}}">{{ $category['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
