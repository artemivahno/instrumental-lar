@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Item -  {{ $item['name']}}</div>
                </div>
            </div>
        </div>
        https://ru.stackoverflow.com/questions/758360/css-%D0%B4%D0%BB%D1%8F-%D1%85%D0%BB%D0%B5%D0%B1%D0%BD%D1%8B%D1%85-%D0%BA%D1%80%D0%BE%D1%88%D0%B5%D0%BA-last-childafter
        <ol class="breadcrumb">
            <i class="fa fa-home"></i>
            <li><a href="{{route('index')}}">Home</a></li>
            <i class="fa fa-dashboard"></i>
            <li><a href="{{route('category',$slug)}}">{{$categoryName}}</a></li>
            <li><a href="{{route('items',[$slug, $brandsSlug])}}">{{$brandName}}</a></li>
            <li class="active"><b>{{$item['name']}} </b></li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    {{--<ul>
                        @foreach($items as $item)
                            <li><a class="nav-link" href=
                                "{{ url('/category/'.$categoryId.'/brand/'.$brandsId.'/item/'.$item['id']) }}">
                                    {{ $item['name']}}</a>
                            </li>
                        @endforeach
                    </ul>--}}
                    <p>{{ $item['name']}}</p>


                </div>
            </div>
        </div>
    </div>
@endsection
