@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card_product">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif

        @foreach($products as $product)
            <div class="img_product">
                <img src="{{ $product['imageLink'] }}" alt="Product Image">
            </div>
            <div class="name_product">
                <h2>{{ $product['name'] }}</h2>
            </div>
        @endforeach
        </div>

    </div>
@endsection
