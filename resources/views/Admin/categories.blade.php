@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    {{--<li class="active"><b>{{$categoryName}} </b></li>--}}
                </ul>
            </div>
        </div>

        <a class="btn btn-default" href="{{ route('category_create') }}"> Создать новую категорию</a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
            @if(count($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{@$category->id}}</td>
                        <td><a class="nav-link"
                               href="{{ route('category', $category->slug)}}">{{$category->name}}</a></td>
                        <td>{{@$category->slug}}</td>
                        <td>
                            <a class="btn btn-default" href="{{route('category.edit',['id'=> $category->id])}}">Edit</a>

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
