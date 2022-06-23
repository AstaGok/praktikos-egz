
@extends('layout')
   
@section('content')
<div class="mx-auto" style="width: 300px; padding-top: 2em; padding-bottom: 2em;">
 <h4>KNYGŲ KATEGORIJOS</h4> 
</div>
<div class="row">
    
    @foreach($shops as $shop)
        <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="thumbnail">
                <img src="{{ $shop->img }}" alt="">
                <div class="caption">
                    <a href="{{ url('products', [$shop->ID]) }}"><p class="text-secondary">{{ $shop->name }}</p></a>
            </div>
           </div>
        </div>
    @endforeach
</div>
    
@endsection