@extends('frontend.layout.welcome')

@section('content')

<section class="banner-wrapper">
    <!-- banner search section start -->
    <div class="banner">
        <div class="container">
            <div class="mb-search trip-search banner-search p-0 my-3 d-lg-none">
                <form action="">
                    <div class="input-group">
                        <div class="input-group-text banner-input-group p-2"><i class="las la-search"></i></div>
                        <input type="search" class="form-control banner-search-control" placeholder="Search here">
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-6">
                    <div class="banner-left">
                        <div class="section-title-two">
                            <h1 class="title">
                                We make your
                                <span>holiday</span>
                                <br>
                                more
                                <span>INCREDIBLE</span>
                            </h1>
                            <p class="d-none d-lg-block">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>
                        <div class="trip-search d-none d-lg-block">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class="visually-hidden" for="">Where To?</label>
                                        <div class="input-group">
                                            <div class="input-group-text banner-input-group"><i
                                                    class="las la-map-marker-alt"></i></div>
                                            <input type="text" class="form-control banner-search-control"
                                                placeholder="Where To?">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 input-section">
                                        <label class="visually-hidden" for="">When ?</label>
                                        <div class="input-group">
                                            <div class="input-group-text banner-input-group"><i
                                                    class="las la-calendar-check"></i></div>
                                            <input type="text" class="form-control banner-search-control"
                                                placeholder="When ?">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btnColor-1 d-block w-100">Find Trip</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner search section end -->

    <!-- why choose us section start -->
    <div class="about pa-t">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-title">
                        <h3 class="title">
                            Why choose us?
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-box-card">
                    <div class="card-one border-card borderbg-3">
                        <div class="card-one-icon">
                            <svg width="55" height="54" viewBox="0 0 55 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M46.4666 40.0667C47.5333 38.2 48.3333 36.0667 48.3333 33.6667C48.3333 27 42.9999 21.6667 36.3333 21.6667C29.6666 21.6667 24.3333 27 24.3333 33.6667C24.3333 40.3333 29.6666 45.6667 36.3333 45.6667C38.7333 45.6667 40.8666 44.8667 42.7333 43.8L51.2666 52.3333L54.9999 48.6L46.4666 40.0667ZM36.3333 40.3333C32.5999 40.3333 29.6666 37.4 29.6666 33.6667C29.6666 29.9333 32.5999 27 36.3333 27C40.0666 27 42.9999 29.9333 42.9999 33.6667C42.9999 37.4 40.0666 40.3333 36.3333 40.3333ZM26.9999 48.3333V53.6667C12.2799 53.6667 0.333252 41.72 0.333252 27C0.333252 12.28 12.2799 0.333328 26.9999 0.333328C39.9066 0.333328 50.6533 9.50666 53.1333 21.6667H47.6133C45.9066 15.1067 41.2133 9.74666 34.9999 7.24V8.33333C34.9999 11.2667 32.5999 13.6667 29.6666 13.6667H24.3333V19C24.3333 20.4667 23.1333 21.6667 21.6666 21.6667H16.3333V27H21.6666V35H18.9999L6.22659 22.2267C5.87992 23.7733 5.66659 25.3467 5.66659 27C5.66659 38.76 15.2399 48.3333 26.9999 48.3333Z"
                                    fill="#C89595" />
                            </svg>
                        </div>
                        <div class="card-one-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut </p>
                        </div>
                        <a href="{{url('about')}}" class="btn btnOutline btnColor-3">Read more</a>
                    </div>
                </div>
                <div class="grid-box-card">
                    <div class="card-one border-card borderbg-4">
                        <div class="card-one-icon">
                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.3333 0.333328H5.66659C2.73325 0.333328 0.333252 2.73333 0.333252 5.66666V32.3333H5.66659V5.66666H32.3333V0.333328ZM42.9999 11H16.3333C13.3999 11 10.9999 13.4 10.9999 16.3333V43H16.3333V16.3333H42.9999V11ZM48.3333 21.6667H26.9999C24.0666 21.6667 21.6666 24.0667 21.6666 27V48.3333C21.6666 51.2667 24.0666 53.6667 26.9999 53.6667H48.3333C51.2666 53.6667 53.6666 51.2667 53.6666 48.3333V27C53.6666 24.0667 51.2666 21.6667 48.3333 21.6667ZM48.3333 48.3333H26.9999V27H48.3333V48.3333Z"
                                    fill="#7882A4" />
                            </svg>
                        </div>
                        <div class="card-one-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut </p>
                        </div>
                        <a href="{{url('about')}}" class="btn btnOutline btnColor-4">Read more</a>
                    </div>
                </div>
                <div class="grid-box-card">
                    <div class="card-one border-card borderbg-5">
                        <div class="card-one-icon">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.9334 26.888L11.1387 30.9173L37.6667 16.4453L21.6667 35.112L44.6001 45.5547C44.9923 45.7264 45.4201 45.8013 45.8473 45.7728C46.2745 45.7443 46.6886 45.6133 47.0545 45.391C47.4205 45.1687 47.7275 44.8615 47.9496 44.4954C48.1717 44.1294 48.3025 43.7152 48.3307 43.288L50.9974 3.288C51.0271 2.82502 50.9358 2.36229 50.7323 1.94534C50.5289 1.52838 50.2204 1.17157 49.8373 0.910024C49.4541 0.648476 49.0094 0.4912 48.547 0.453673C48.0846 0.416145 47.6204 0.49966 47.2001 0.695999L1.86674 22.0293C1.40431 22.2487 1.01463 22.5963 0.74403 23.0308C0.473435 23.4652 0.333317 23.9683 0.340339 24.4801C0.347362 24.9919 0.501229 25.4909 0.783642 25.9177C1.06606 26.3446 1.46513 26.6814 1.9334 26.888ZM16.3334 51.112L29.0694 44.936L16.3334 38.9947V51.112Z"
                                    fill="#886F6F" />
                            </svg>
                        </div>
                        <div class="card-one-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut </p>
                        </div>
                        <a href="{{url('about')}}" class="btn btnOutline btnColor-5">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us section end -->

    <div class="banner-img banner-img-1">
        <img src="{{asset ('images/1.png') }}" alt="" class="rect-img img-1">
    </div>
    <div class="banner-img banner-img-2">
        <img src="{{asset ('images/2.png') }}" alt="" class="rect-img img-2">
    </div>
    <div class="banner-img banner-img-3 d-none d-lg-block">
        <img src="{{asset ('images/3.png') }}" alt="" class="rect-img img-3">
    </div>
    <div class="banner-img banner-img-4 d-none d-lg-block">
        <img src="{{asset ('images/4.png') }}" alt="" class="rect-img img-4">
    </div>
</section>

<!-- popular package start -->
<section class="popular-package pa-t">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="section-title">
                    <h3 class="title">
                        Popular packages
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </div>
        <div class="package-slider owl-carousel owl-theme">
            <div class="item">
                <div class="card-two">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/11.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/13.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/9.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/5.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="view-btn text-center">
            <a href="#" class="btn btnColor-2">View All</a>
        </div>
    </div>
</section>
<!-- popular package ends -->

<!-- guideline section start -->
<section class="guideline pa-t">
    <div class="container">
        <div class="guideline-img">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title">
                        <h3 class="title">
                            Discover our travel <br> guideline
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="#" class="btn btnOutline btnColor-6" tabindex="0">View Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- guideline section ends -->


<!-- gallery section start -->
<section class="gallery-section pa-t">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="section-title">
                    <h3 class="title">
                        Beautiful Nepal
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-slider owl-carousel owl-theme">
        <div class="item">
            <div class="slide-gallery row g-0 g-4">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="slide-gallery-img gallery-item1" data-fancybox="gallery-grid"
                        data-src="{{ asset ('images/1.png') }}">
                        <img src="{{ asset ('images/1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="row g-0 g-4">
                        <div class="col-lg-6 col-6">
                            <div class="slide-gallery-img gallery-item2" data-fancybox="gallery-grid"
                                data-src="{{ asset ('images/2.png') }}">
                                <img src="{{ asset ('images/2.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="slide-gallery-img gallery-item3" data-fancybox="gallery-grid"
                                data-src="{{ asset ('images/3.png') }}">
                                <img src="{{ asset ('images/3.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row g-0 g-4">
                                <div class="col-lg-6 col-6">
                                    <div class="slide-gallery-img gallery-item4" data-fancybox="gallery-grid"
                                        data-src="{{ asset ('images/4.png') }}">
                                        <img src="{{ asset ('images/4.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="slide-gallery-img gallery-item5" data-fancybox="gallery-grid"
                                        data-src="{{ asset ('images/5.png') }}">
                                        <img src="{{ asset ('images/5.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="slide-gallery-img gallery-item6" data-fancybox="gallery-grid"
                                        data-src="{{ asset ('images/6.png') }}">
                                        <img src="{{ asset ('images/6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="slide-gallery-img gallery-item7" data-fancybox="gallery-grid"
                                        data-src="{{ asset ('images/7.png') }}">
                                        <img src="{{ asset ('images/7.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="slide-gallery-img gallery-item8" data-fancybox="gallery-grid"
                                data-src="{{ asset ('images/8.png') }}">
                                <img src="{{ asset ('images/8.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallerysection end -->

<!-- destination package start -->
<section class="popular-package pa-t">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="section-title">
                    <h3 class="title">
                        Explore Destinations
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </div>
        <div class="package-slider owl-carousel owl-theme">
            <div class="item">
                <div class="card-two">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/6.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/7.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/8.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/13.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="view-btn text-center">
            <a href="#" class="btn btnColor-2">View All</a>
        </div>
    </div>
</section>
<!-- destination package ends -->

<!-- about section strat -->
<section class="about-section pa-t">
    <div class="container">
        <div class="row g-0 g-4 align-items-center">
            <div class="col-lg-3">
                <div class="about-img row g-0 g-4">
                    <div class="col-lg-12 col-6">
                        <img src="{{asset ('images/8.png') }}" alt="visit nepal" class="img-fluid mb-2">
                    </div>
                    <div class="col-lg-12 col-6">
                        <img src="{{asset ('images/12.png') }}" alt="visit nepal" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi</p>
                    <div class="view-btn">
                        <a href="#" class="btn btnColor-2 btnColorWhite">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-post">
                    <div class="about-post-video">
                        <img src="{{asset ('images/6.png') }}" alt="" class="img-fluid">
                        <a data-fancybox href="https://youtu.be/q3BLCotd-oU">
                            <div class="play-icon">
                                <svg width="118" height="118" viewBox="0 0 118 118" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M58.9999 9.83325C31.8894 9.83325 9.83325 31.8894 9.83325 58.9999C9.83325 86.1104 31.8894 108.167 58.9999 108.167C86.1104 108.167 108.167 86.1104 108.167 58.9999C108.167 31.8894 86.1104 9.83325 58.9999 9.83325ZM58.9999 98.3333C37.3125 98.3333 19.6666 80.6873 19.6666 58.9999C19.6666 37.3125 37.3125 19.6666 58.9999 19.6666C80.6873 19.6666 98.3333 37.3125 98.3333 58.9999C98.3333 80.6873 80.6873 98.3333 58.9999 98.3333Z"
                                        fill="#FFECB3" />
                                    <path d="M44.25 83.5834L83.5833 59.0001L44.25 34.4167V83.5834Z" fill="#FFECB3" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="about-post-content mt-3">
                        <h3>Travel with us at Nepal</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section ends -->

<!-- special offer start -->
<section class="special-offer pa-tb">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="section-title">
                    <h3 class="title">
                        Special offers
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </div>
        <div class="package-slider owl-carousel owl-theme">
            <div class="item">
                <div class="card-two">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/11.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/10.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/12.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="card-two">
                        <div class="card-img">
                            <img src="{{asset ('images/1.png') }}" alt="visit-nepal" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-content-head">
                                <h5 class="mb-0" title="Annapurna Sanctuary Trek">Annapurna Sanctuary Trek</h5>
                                <span>15 Days</span>
                            </div>
                            <div class="card-content-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut
                                </p>
                            </div>
                            <div class="card-content-footer">
                                <span class="price">$750</span>
                                <a href="#" class="btn btnOutline btnColor-3">View Package</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="view-btn text-center">
            <a href="#" class="btn btnColor-2">View All</a>
        </div>
    </div>
</section>
<!-- special 0ffer ends -->

<!-- customter support -->
<section class="support pa-tb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8">
                <div class="section-title text-start">
                    <h3 class="title">
                        24/7 Customer Support
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea
                    </p>
                    <div class="view-btn mt-4">
                        <a href="#" class="btn btnColor-2">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="support-img">
                    <ul class="clearfix">
                        <li>
                            <img src="{{asset ('images/icon/call.png') }}" alt="" class="support-icon">
                        </li>
                        <li>
                            <img src="{{asset ('images/icon/thumb.png') }}" alt="" class="support-icon">
                        </li>
                        <li>
                            <img src="{{asset ('images/icon/question.png') }}" alt="" class="support-icon">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- customer support ends -->

<!-- blog start -->
<section class="blog-list pa-tb">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="section-title">
                    <h3 class="title">
                        Our latest news
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card-three">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/11.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="btn btnOutline btnColor-6" tabindex="0">Read More</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card-three">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/5.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="btn btnOutline btnColor-6" tabindex="0">Read More</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card-three">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{asset ('images/3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="btn btnOutline btnColor-6" tabindex="0">Read More</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="blog-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="card-three">
                            <a href="#">
                                <div class="card-img">
                                    <img src="{{asset ('images/7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-content">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                    <a href="#" class="btn btnOutline btnColor-6" tabindex="0">Read More</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-three">
                            <a href="#">
                                <div class="card-img">
                                    <img src="{{asset ('images/9.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-content">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                    <a href="#" class="btn btnOutline btnColor-6" tabindex="0">Read More</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog start -->

<!-- subscribe section start -->
@include('frontend.partial.subscribe')
<!-- subscribe section end -->





@endsection