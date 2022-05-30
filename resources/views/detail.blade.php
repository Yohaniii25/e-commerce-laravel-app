@extends('master')
@section("content")
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="" />
        </div>
        <div class="col-sm-6">
            <!-- single product view -->
            <a href="/">Go Back</a><br><br>
            <h2>{{$product['name']}}</h2>
            <p>Price: {{$product['price']}}</p>
            <p>Description: {{$product['description']}}</p>
            <p>Category: {{$product['category']}}</p>
            <br><br>
            <form method="post" action="/add_to_cart">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button> &nbsp;&nbsp;

                <button class="btn btn-success">Buy Now</button>
            </form>
           
            <br><br>
        </div>
    </div>
</div>
@endsection