<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>


    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <style>
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }

        img.slider-img {
            height: 400px !important;
            /* width:400px !important; */
        }

        .custom-product {
            height: 600px;
        }

        .slider-text {
            color: #3f2e42;
        }

        .trending-img {
            height: 100px;
        }

        .trending-itm {
            float: left;
            width: 20%;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-img {
            height: 400px;
        }
    </style>
</body>

</html>