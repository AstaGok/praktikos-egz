@extends('layout')
   
@section('content')
<div class="mx-auto" style="width: 300px; padding-top: 2em; padding-bottom: 2em;">
 <h4>KNYGOS</h4> 
</div>
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>ISBN: </strong>{{ $product->ISBN }}</p>
                    <p><strong>Puslapių kiekis: </strong> {{ $product->price }}</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Rezervuoti</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection