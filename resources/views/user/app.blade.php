<!DOCTYPE html>
<html>
    <head>
        @include('user/layouts/head')
    </head>
    <body>
        <div class="main-page-wrapper">
            @include('user/layouts/header')

            @section('main-content')

            @show

            @include('user/layouts/subscriber')
            @include('user/layouts/footer')
        </div>
    </body>
</html>