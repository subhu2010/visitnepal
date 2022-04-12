@extends('frontend.layout.welcome')

@section('content')

<section class="about-page page-head-title">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-post">
                        <div class="about-post-video">
                            <img src="{{asset ('images/6.png') }}" alt="" class="img-fluid">
                            <a data-fancybox href="https://youtu.be/q3BLCotd-oU">
                                <div class="play-icon">
                                    <svg class="d-block mx-auto" width="118" height="118" viewBox="0 0 118 118"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M58.9999 9.83325C31.8894 9.83325 9.83325 31.8894 9.83325 58.9999C9.83325 86.1104 31.8894 108.167 58.9999 108.167C86.1104 108.167 108.167 86.1104 108.167 58.9999C108.167 31.8894 86.1104 9.83325 58.9999 9.83325ZM58.9999 98.3333C37.3125 98.3333 19.6666 80.6873 19.6666 58.9999C19.6666 37.3125 37.3125 19.6666 58.9999 19.6666C80.6873 19.6666 98.3333 37.3125 98.3333 58.9999C98.3333 80.6873 80.6873 98.3333 58.9999 98.3333Z"
                                            fill="#FFECB3" />
                                        <path d="M44.25 83.5834L83.5833 59.0001L44.25 34.4167V83.5834Z"
                                            fill="#FFECB3" />
                                    </svg>
                                    <h1>The largest community of photo enthusiasts</h1>
                                    <button class="btn btnColor-1 mx-auto mt-5">Watch</button>
                                </div>
                            </a>
                        </div>
                        <h4 class="moto">Snap photos and share like never before</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-dtl ma-tb">
    <div class="container">
        <div class="row g-0 g-5">
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Sed ut perspiciatis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed neque non urna efficitur
                        blandit. In tortor diam, mattis finibus fringilla nec, ornare a purus. Pellentesque ornare,
                        mauris ut pulvinar ullamcorper, nibh elit placerat dolor, facilisis viverra orci nisi eget est.
                        Mauris eleifend vel sem in condimentum. Aliquam eget fringilla sapien, vel dapibus enim. Nullam
                        volutpat, massa pharetra interdum imperdiet, elit lectus aliquam quam, vitae tempor dui nisi et
                        nulla. Suspendisse efficitur nisi vel mi suscipit, feugiat lacinia nulla commodo.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Lorem ipsum dolor</h4>
                    <p>Sed porta semper velit, ac suscipit metus eleifend nec. Mauris tempor ut urna vel consectetur.
                        Phasellus sit amet magna rutrum, ornare lacus vitae, fringilla nibh. Morbi quis sagittis ipsum,
                        a suscipit eros. Nullam vulputate mollis nulla, non eleifend leo pharetra ut. Nam eu leo id
                        velit feugiat lacinia. Praesent placerat nunc est, nec posuere ligula convallis non. Morbi
                        tincidunt sollicitudin sem, at accumsan nisl facilisis ut. Ut sagittis egestas scelerisque.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Nemo enim ipsam</h4>
                    <p>Ut erat ligula, euismod nec dapibus eget, gravida vitae lacus. Aenean tincidunt nibh nec nibh
                        finibus, id vestibulum risus venenatis. Nulla facilisi. In ornare id urna vitae porttitor. Sed
                        rhoncus blandit odio, non eleifend enim tempor nec. Nam tempus metus vitae mauris scelerisque
                        interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Sed sollicitudin sollicitudin fermentum. Suspendisse sit amet dui sed leo luctus porttitor quis
                        in risus. Vivamus vitae tempor dui. Sed non laoreet odio</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Tempor incididunt</h4>
                    <p>Pellentesque eros nibh, volutpat ac ligula id, dictum vulputate nunc. Sed non pretium metus. Sed
                        ultrices sapien sed nisl tempor cursus et a tortor. Integer ut lacus mi. Nulla convallis sodales
                        eros sit amet finibus. Curabitur sollicitudin consequat metus, a interdum ante semper ac. Cras
                        metus diam, elementum ut ullamcorper sed, hendrerit ut odio. Nam a elit non elit luctus
                        fringilla. Suspendisse dignissim, mi non tristique placerat, enim ligula dignissim lorem</p>
                </div>
            </div>
        </div>
        <div class="row g-0 g-5 align-items-center mt-4">
            <div class="col-lg-6">
                <div class="about-content">
                    <img src="{{asset('/images/8.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Sed ut perspiciatis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed neque non urna efficitur
                        blandit. In tortor diam, mattis finibus fringilla nec, ornare a purus. Pellentesque ornare,
                        mauris ut pulvinar ullamcorper, nibh elit placerat dolor, facilisis viverra orci nisi eget est.
                        Mauris eleifend vel sem in condimentum. Aliquam eget fringilla sapien, vel dapibus enim. Nullam
                        volutpat, massa pharetra interdum imperdiet, elit lectus aliquam quam, vitae tempor dui nisi et
                        nulla. Suspendisse efficitur nisi vel mi suscipit, feugiat lacinia nulla commodo.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Nemo enim ipsam</h4>
                    <p>Ut erat ligula, euismod nec dapibus eget, gravida vitae lacus. Aenean tincidunt nibh nec nibh
                        finibus, id vestibulum risus venenatis. Nulla facilisi. In ornare id urna vitae porttitor. Sed
                        rhoncus blandit odio, non eleifend enim tempor nec. Nam tempus metus vitae mauris scelerisque
                        interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Sed sollicitudin sollicitudin fermentum. Suspendisse sit amet dui sed leo luctus porttitor quis
                        in risus. Vivamus vitae tempor dui. Sed non laoreet odio</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <img src="{{asset('/images/12.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- subscribe section start -->
@include('frontend.partial.subscribe')
<!-- subscribe section end -->

@endsection