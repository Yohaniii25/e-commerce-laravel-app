<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Flower-Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <!-- counting the items added to the cart -->
                    <a class="nav-link" href="/cartlist">cart({{$total}})</a>
                </li>
                @if(Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Session::get('user')['name']}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
                @else
                <a class="nav-link" href="/login">Login</a>
                @endif
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control rounded" style=" margin-top:2px; margin-left: 436px;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" style="margin-left:10px;" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>