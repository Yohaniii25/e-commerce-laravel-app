@extends('master')
@section("content")
<div class="">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>My Orders</h4><br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h5>Name : {{$item->name}}</h5>
                        <p>Delivery Status : {{$item->status}}</p>
                        <p>Address : {{$item->address}}</p>
                        <p>Payment Status : {{$item->payment_status}}</p>
                        <p>Payment Method : {{$item->payment_method}}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection