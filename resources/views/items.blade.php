@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Items in selectec Brand in Category (items.blade // itemController)</div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-xs-6">
                    <ul>
                        @foreach($items as $item)
                            <li>   <a class="nav-link" href="{{--{{ url('/category/'.$categoryId.'/brand/'.$brand['id'].'/items'.$item['id']) }}--}}">
                                {{ $item['name']}}</a>
                            </li><br />
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
@endsection
