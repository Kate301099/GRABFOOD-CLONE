<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

{{--    bootstrap icon--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

{{--    <title>GRABFOOD</title>--}}


    @yield('head')

</head>
<body>
@include('website.layouts.header')


@if(!request()->routeIs(['user.*','option.*','store.*']))
    @include('website.layouts.slide-bar')
@endif

<section>
    <div class="container">
        <div class="row">

            @yield('content')

        </div>
    </div>
</section>

<!-- footer  -->
@include('website.layouts.footer')

{{--<script src="{{asset('frontend/js/jquery.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/price-range.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/main.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const myCarousel = document.querySelector('#carouselExampleIndicators');
        const carousel = new bootstrap.Carousel(myCarousel, {
            wrap: true
        });
    });
</script>



@yield('script')
</body>
</html>
