@extends('frontend.layout.welcome')

@section('content')

<section class="blog" style="padding-top: 4.375rem;">
    <div class="page-bg">
        <img src="{{asset ('/images/icon/bg.svg') }}" alt="" class="img-fluid">
        <div class="blog-meta-text">
            <span class="blog-date">November 5, 2015</span>
            <h5 class="blog-post">Sanjay Kumar Yadav</h5>
            <h1>Lorem ipsum dolorsitamet, consectetur adipiscing elit, sed doeiusmod</h1>

        </div>
    </div>
    <div class="container">
        <div class="blog-dtl-img">
            <div class="blog-img">
                <img src="{{asset('/images/10.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="blog-detail">
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam eros sit amet est
                            sollicitudin, ut rutrum leo vehicula. Aenean ornare vel leo vel aliquet. Fusce purus nibh,
                            tempus non dictum sed, vehicula id sem. Praesent iaculis, augue non sagittis condimentum,
                            purus
                            nibh efficitur sapien, sed ultricies metus sem non felis. Morbi maximus fermentum suscipit.
                            Maecenas imperdiet pulvinar iaculis. Maecenas dignissim, arcu vitae dapibus vulputate, augue
                            dui
                            iaculis ipsum, eu tempor felis tortor eget libero. Vestibulum luctus leo nunc, sed lacinia
                            ligula faucibus ut.</p>

                        <p> Duis ac dictum neque. Vivamus pellentesque tristique lorem, nec tristique neque gravida
                            finibus.
                            Nunc luctus, lectus ut iaculis vestibulum, erat orci efficitur enim, eget posuere libero
                            orci at
                            tortor. Etiam quis lacus et urna rhoncus condimentum porttitor ut eros. In augue lorem,
                            laoreet
                            ac tellus in, porta congue turpis. Suspendisse et turpis eget mi posuere iaculis. Fusce
                            tortor
                            justo, ultrices condimentum dolor vitae, ornare ultrices mi. Integer in quam dolor.
                            Curabitur
                            tincidunt, velit eu tincidunt suscipit, augue justo commodo augue, vel facilisis erat massa
                            non
                            erat. Cras sit amet justo eget dolor porttitor dapibus sed vel tellus. Suspendisse congue
                            sed
                            tellus eget malesuada. Praesent fringilla purus et urna rutrum consequat. Vestibulum id
                            varius
                            lectus. Nulla ipsum diam, viverra eget consectetur ut, lacinia sit amet elit. Quisque in
                            risus
                            venenatis, facilisis ante ut, gravida neque.</p>

                        <p>Fusce facilisis et nisl sed ullamcorper. Aenean at felis dolor. Fusce a nisi id mi fermentum
                            molestie. Proin nec iaculis lectus, vitae laoreet odio. Etiam porta id nulla in condimentum.
                            Aliquam volutpat erat quis odio gravida elementum. Curabitur in sagittis sapien. Suspendisse
                            consectetur magna quis tempor blandit. Etiam laoreet eget purus et maximus. Fusce bibendum
                            ante
                            in elit rhoncus, in mollis nunc blandit. Proin sed aliquet enim. Vivamus ac justo nec mauris
                            ullamcorper feugiat eget ac nibh. Ut vehicula auctor ullamcorper. Curabitur quis elementum
                            purus, sed aliquam augue. Vivamus in urna ante. Aenean eleifend ex lacus, et vehicula ligula
                            vestibulum at.</p>

                        <p>Morbi mollis nisl at massa porttitor, ac pharetra magna finibus. Nulla sit amet diam vel arcu
                            ornare mollis nec eget orci. Sed pulvinar vehicula massa, vitae pretium tellus finibus in.
                            Nulla
                            mollis finibus quam, eget rhoncus sem suscipit vehicula. Integer laoreet est at mauris
                            finibus,
                            et pretium enim congue. Sed semper sollicitudin bibendum. Nam nisl arcu, ullamcorper sit
                            amet
                            vestibulum id, porta non neque. Duis ut interdum lectus.</p>

                        <p>Sed ac dolor quam. Nunc convallis quam in sodales commodo. Cras vitae rutrum metus. Aliquam
                            ac
                            varius nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse
                            potenti.
                            Nunc semper dolor at molestie eleifend. Sed ut eros venenatis, elementum lorem vitae,
                            aliquet
                            ligula. Nullam augue mauris, varius ut ullamcorper non, dictum a elit. Nam eleifend tellus
                            et
                            felis malesuada eleifend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-bar">
        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u={{URL()->current()}}" class="facebook"><i
                class="lab la-facebook-f"></i></a>
        <a target="_blank"
            href="http://twitter.com/intent/tweet?original_referer={{URL()->current()}}&url={{URL()->current()}}"
            class="twitter"><i class="lab la-twitter"></i></a>
        <a target="_blank"
            href="http://www.linkedin.com/shareArticle?mini=true&url={{URL()->current()}}&source=[SOURCE/DOMAIN]"
            class="linkedin"><i class="lab la-linkedin-in"></i></a>
    </div>
</section>


<!-- subscribe section start -->
@include('frontend.partial.subscribe')
<!-- subscribe section end -->

@endsection