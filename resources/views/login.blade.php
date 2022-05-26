@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-10">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Email address" autocomplete="off" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" autocomplete="off" required>
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </div>
    </div>
</div>

@endsection