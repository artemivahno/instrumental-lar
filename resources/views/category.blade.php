@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Brands of select Category</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($brands as $brand)
                            {{--<li><a class="nav-link" href="{{ route('category', $category['cat_id']) }}">{{ $category['name']}}</a></li>--}}
                            <li>                         {{--                                       array brands       --}}
                                <a class="nav-link" href="{{ url('/category/'.$categoryId.'/brand/'.$brand['id'].'/items') }}">{{ $brand['name']}}</a>
                            </li><br />
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
