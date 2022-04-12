<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Page Title -->
    <title>@yield("page_title")</title>

    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- line awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('owl/owl.theme.default.min.css') }}">

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!-- select2  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/choices.min.css') }}">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pricerange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

</head>

<body>

    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')

</body>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- owl carousel -->
<script src="{{ asset('owl/jquery.min.js') }}"></script>
<script src="{{ asset('owl/owl.carousel.min.js') }}"></script>

<!--  load JS for Select2  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <!-- fancybox  -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
Fancybox.bind('[data-fancybox="gallery"]', {
    infinite: false
});
</script>

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


<script type="text/javascript" src="{{ asset('js/choices.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/form-element-select.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Global JS -->
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rangeslider.js') }}"></script>


</body>



</html>