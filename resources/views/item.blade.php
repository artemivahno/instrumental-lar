@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Item</div>

                   {{-- {{ $item['name']}}--}}

                </div>
            </div>
        </div>
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
