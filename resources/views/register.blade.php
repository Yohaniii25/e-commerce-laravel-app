@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-10">
            <form action="register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="User Name" autocomplete="off" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email address" autocomplete="off" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
                </div>

                <center><button type="submit" class="btn btn-primary">Register</button></center>
            </form>
        </div>
    </div>
</div>

@endsection