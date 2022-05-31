@extends('master')
@section("content")
<div class="custom-product">
    <div class="container">
        <div class=".col-6 .col-md-4">
            <h2 class="justify-content-center">Order Now</h2>
            <br />
            <!-- table -->
            <table class="table table-striped ">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>$ {{$total+10}}</td>
                    </tr>
                </tbody>
            </table>
            <!-- table -->

            <!-- form -->
            <div>
                <form action="" method="">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                        <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
            <!-- form -->
        </div>
    </div>
</div>
@endsection