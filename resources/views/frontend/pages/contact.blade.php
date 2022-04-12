@extends('frontend.layout.welcome')

@section('content')

<section class="blog" style="padding-top: 4.375rem;">
    <div class="page-bg">
        <img src="{{asset ('/images/icon/bg.svg') }}" alt="" class="img-fluid">
    </div>
</section>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="">
                    <div class="form-header ">
                        <h1 class=" mb-0">Let’s Talk</h1>
                        <span class="text-end"><i class="lar la-envelope"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control contact-control" id="floatingInput"
                                    placeholder="Sanjay">
                                <label for="floatingInput">Frist Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control contact-control" id="floatingInput"
                                    placeholder="Shah">
                                <label for="floatingInput">Last Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="form-floating">
                                <input type="number" class="form-control contact-control" id="floatingInput"
                                    placeholder="9841054381">
                                <label for="floatingInput">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="form-floating">
                                <input type="email" class="form-control contact-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <div class="form-floating">
                                <textarea class="form-control contact-control text-control" rows="4" cols="50"
                                    placeholder="Tell us something about your project" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Tell us something about your project</label>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mx-auto">
                            <button class="btn btnColor-1">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="faq ma-tb">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion custom-accordion">
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How long does it
                        take to build a website?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Our standard websites take approximately 9-120 days to create. Our E-commerce (online store)
                        websites take approximately 160 days to create. This time will vary from project to project.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Who will I work with during the project?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                        suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What platform do you build your websites on?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                        suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">What's with the name The Root Level?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                        suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">What can you help me with?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                        suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">How do I create a product with your company?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                        suspendisse potenti.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- subscribe section start -->
@include('frontend.partial.subscribe')
<!-- subscribe section end -->

@endsection