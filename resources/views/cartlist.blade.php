@extends('master')
@section("content")
<div class="">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result for Products</h4><br>
            <a class="btn btn-success" href="ordernow">Order Now</a><br>
            @foreach($products as $item)
             <div class=" row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-3"> 
                    <div class="">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                </div> 
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection