@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Main page All Categories</div>
                </div>
            </div>
        </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($categories as $category)
                            <li><a class="nav-link"
                                  {{-- href="{{ route('category', $category['cat_id']) }}">{{ $category['name']}}</a>--}}
                                   href="{{ route('category', $category->slug)}}">{{ $category['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

