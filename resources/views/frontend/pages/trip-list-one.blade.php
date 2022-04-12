@extends('frontend.layout.welcome')

@section('content')



<section class="page-head-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-title-two text-center">
                    <h1 class="title">
                        <span>Visit</span> best location here
                    </h1>
                    <p class="d-none d-lg-block">
                        Over 5000 package holidays to Nepal provided by your trusted Trusted Travel Organisers
                        (Worldwide)
                    </p>
                </div>
            </div>
        </div>
        <div class="trip-search bg-white d-none d-lg-block">
            <form action="">
                <div class="form-flex">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-text banner-input-group"><i class="las la-map-marker-alt"></i></div>
                            <input type="text" class="form-control banner-search-control" placeholder="Where To?">
                        </div>
                    </div>
                    <div class="form-group input-section">
                        <div class="input-group">
                            <div class="input-group-text banner-input-group"><i class="las la-plane-departure"></i>
                            </div>
                            <input type="text" class="form-control banner-search-control" placeholder="Departure date">
                        </div>
                    </div>
                    <div class="form-group input-section">
                        <div class="input-group">
                            <div class="input-group-text banner-input-group"><i class="las la-plane-arrival"></i></div>
                            <input type="text" class="form-control banner-search-control" placeholder="Return date">
                        </div>
                    </div>
                    <div class="form-group input-section">
                        <div class="input-group">
                            <div class="input-group-text banner-input-group"><i class="las la-street-view"></i></div>
                            <input type="text" class="form-control banner-search-control" placeholder="Departure from?">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btnColor-1 d-block w-100">Find Trip</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="mb-search trip-search banner-search p-0 my-3 d-lg-none">
            <form action="">
                <div class="input-group">
                    <div class="input-group-text banner-input-group p-2"><i class="las la-search"></i></div>
                    <input type="search" class="form-control banner-search-control" placeholder="Search here">
                </div>
            </form>
        </div>
    </div>
</section>

<section class="trip-list pa-t">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div id="mb-view">
                    <div class="mb-content">
                        <div class="mb-header ">
                            <h5>Refine match search</h5>
                            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
                        </div>
                        <div class="trip-sidebar">
                            <div class="sidebar-card">
                                <h6>Departure from</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control filter-control" placeholder="Country">
                                    <span><i class="las la-globe-europe"></i></span>
                                </div>
                                <p>or join in from <span>Kathmandu</span></p>
                            </div>
                            <div class="sidebar-card" id="date-radio">
                                <h6>Departure Date</h6>
                                <div class="radio">
                                    <input type="radio" id="radio-1" name="example" checked />
                                    <label for="radio-1">
                                        <span>January</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="radio-2" name="example" />
                                    <label for="radio-2">
                                        <span>Febraury</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="radio-3" name="example" />
                                    <label for="radio-3">
                                        <span>March</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="radio-4" name="example" />
                                    <label for="radio-4">
                                        <span>April</span>
                                    </label>
                                </div>
                                <div class="filter-wrapper">
                                    <div class="radio">
                                        <input type="radio" id="radio-5" name="example" />
                                        <label for="radio-5">
                                            <span>May</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="more text-center">
                                    <small class="filter-active">View More</small>
                                </div>
                            </div>
                            <div class="sidebar-card" id="flight-radio">
                                <h6>International flights</h6>
                                <div class="radio">
                                    <input type="radio" id="radio-6" name="example" checked />
                                    <label for="radio-6">
                                        <span>Include</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="radio-7" name="example" />
                                    <label for="radio-7">
                                        <span>Exclude</span>
                                    </label>
                                </div>
                            </div>
                            <div class="sidebar-card" id="flight-radio">
                                <h6>Holiday style</h6>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove form-control filter-control"
                                        multiple="multiple">
                                        <option value="Nature and adventure">Nature and adventure</option>
                                        <option value="City sightseeing">City sightseeing</option>
                                        <option value="Sightseeing">Sightseeing</option>
                                        <option value="Adventure">Adventure</option>
                                    </select>
                                    <span><i class="las la-luggage-cart"></i></span>
                                </div>
                            </div>
                            <div class="sidebar-card" id="flight-radio">
                                <h6>Region specific</h6>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove form-control filter-control"
                                        multiple="multiple">
                                        <option value="Annapurna Circuit">Annapurna Circuit</option>
                                        <option value="Chitwan National Park">Chitwan National Park</option>
                                    </select>
                                    <span><i class="las la-search-location"></i></span>
                                </div>
                            </div>
                            <div class="sidebar-card" id="flight-radio">
                                <h6>Price</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <strong>Min</strong>
                                            <strong>Max</strong>
                                        </div>
                                        <div id="slider-range" class="my-3"> </div>
                                        <div class="d-flex justify-content-between">
                                            <span id="slider-range-value1"></span>
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-card">
                                <button class="btn btnColor-1 d-block mx-auto">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 filter-list">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <div class="packgae-num">
                            <p>All 51 Nepal holiday packages</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="">
                            <div class="form-group row d-flex align-items-center">
                                <div class="col-lg-6 col-md-4 col-4">
                                    <label for="" class="">Sort By:</label>
                                </div>
                                <div class="col-lg-6 col-md-4 col-8">
                                    <select name="" id="" class="form-select">
                                        <option value="Low Price">Low Price</option>
                                        <option value="High Price">High Price</option>
                                    </select>
                                </div>
                                <div class="col-md-4 d-lg-none">
                                    <button class="btn btnColor-1 w-100" onclick="openFiler()">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pakage-list">
                    <div>
                        <div class="card-four">
                            <div class="card-img" style="background-image: url(../../images/10.png);">
                            </div>
                            <div class="card-content">
                                <div class="card-content-head">
                                    <h3>Annapurna Sanctuary Trek</h3>
                                </div>
                                <div class="card-content-desc">
                                    <div class="row g-0 g-2">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-highlight">
                                                <h5>Tour Highlights</h5>
                                                <div class="half-content">
                                                    <p>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Blanditiis
                                                        dolor neque deleniti ullam cumque repellat consectetur, pariatur
                                                        ad
                                                        earum accusamus veritatis voluptates harum sapiente rem
                                                        voluptate
                                                        autem laudantium corporis eligendi.
                                                    </p>
                                                </div>
                                                <span class="more-content more-highlight">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-destination">
                                                <h5>Destinations</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>kathmandu</li>
                                                        <li>Bhaktapur</li>
                                                        <li>Pokhara</li>
                                                        <li>Myagdi</li>
                                                        <li>Kanchanpur</li>
                                                        <li>Solukhumbu</li>
                                                        <li>Jhapa</li>
                                                        <li>Illam</li>
                                                        <li>Birgunj</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-destination">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-activity">
                                                <h5>Activities</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Trek</li>
                                                        <li>Lakes</li>
                                                        <li>Hikes</li>
                                                        <li>Safari</li>
                                                        <li>Cities</li>
                                                        <li>Sherpa villages</li>

                                                    </ul>
                                                </div>
                                                <span class="more-content more-activity">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-meal">
                                                <h5>Stay Meal</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Hotels and Tea houses</li>
                                                        <li>Most meals included</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-meal">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-flight">
                                                <h5>International Flight</h5>
                                                <span>Include</span>
                                                <span>Exnclude</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="icon-text icon-protection">
                                                <h5>Holiday Protection</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>ABTA</li>
                                                        <li>ATOL</li>
                                                        <li>IATA</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-protection">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-highlight-content" tabindex="1">
                                    <div class="full-content">
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-destination-content" tabindex="1">
                                    <div class="icon-text icon-destination card-content-desc">
                                        <div class="full-content">
                                            <ul>
                                                <li>kathmandu</li>
                                                <li>Bhaktapur</li>
                                                <li>Pokhara</li>
                                                <li>Myagdi</li>
                                                <li>Kanchanpur</li>
                                                <li>Solukhumbu</li>
                                                <li>Jhapa</li>
                                                <li>Illam</li>
                                                <li>Birgunj</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-activity-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Trek</li>
                                            <li>Lakes</li>
                                            <li>Hikes</li>
                                            <li>Safari</li>
                                            <li>Cities</li>
                                            <li>Sherpa villages</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-meal-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Hotels and Tea houses</li>
                                            <li>Most meals included</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-protection-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>ABTA</li>
                                            <li>ATOL</li>
                                            <li>IATA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-content">
                                <div>
                                    <h4>15 Days</h4>
                                    <span>from</span>
                                    <h3>US $750</h3>
                                </div>
                                <a href="#" class="btn btnColor-2">Bookings</a>
                            </div>
                        </div>
                        <div class="card-four">
                            <div class="card-img" style="background-image: url(../../images/2.png);">
                            </div>
                            <div class="card-content">
                                <div class="card-content-head">
                                    <h3>Annapurna Sanctuary Trek</h3>
                                </div>
                                <div class="card-content-desc">
                                    <div class="row g-0 g-2">
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-highlight">
                                                <h5>Tour Highlights</h5>
                                                <div class="half-content">
                                                    <p>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Blanditiis
                                                        dolor neque deleniti ullam cumque repellat consectetur, pariatur
                                                        ad
                                                        earum accusamus veritatis voluptates harum sapiente rem
                                                        voluptate
                                                        autem laudantium corporis eligendi.
                                                    </p>
                                                </div>
                                                <span class="more-content more-highlight1">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-destination">
                                                <h5>Destinations</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>kathmandu</li>
                                                        <li>Bhaktapur</li>
                                                        <li>Pokhara</li>
                                                        <li>Myagdi</li>
                                                        <li>Kanchanpur</li>
                                                        <li>Solukhumbu</li>
                                                        <li>Jhapa</li>
                                                        <li>Illam</li>
                                                        <li>Birgunj</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-destination1">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-activity">
                                                <h5>Activities</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Trek</li>
                                                        <li>Lakes</li>
                                                        <li>Hikes</li>
                                                        <li>Safari</li>
                                                        <li>Cities</li>
                                                        <li>Sherpa villages</li>

                                                    </ul>
                                                </div>
                                                <span class="more-content more-activity1">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-meal">
                                                <h5>Stay Meal</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Hotels and Tea houses</li>
                                                        <li>Most meals included</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-meal1">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-flight">
                                                <h5>International Flight</h5>
                                                <span>Include</span>
                                                <span>Exnclude</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-protection">
                                                <h5>Holiday Protection</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>ABTA</li>
                                                        <li>ATOL</li>
                                                        <li>IATA</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-protection1">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-highlight1-content" tabindex="1">
                                    <div class="full-content">
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-destination1-content" tabindex="1">
                                    <div class="icon-text icon-destination card-content-desc">
                                        <div class="full-content">
                                            <ul>
                                                <li>kathmandu</li>
                                                <li>Bhaktapur</li>
                                                <li>Pokhara</li>
                                                <li>Myagdi</li>
                                                <li>Kanchanpur</li>
                                                <li>Solukhumbu</li>
                                                <li>Jhapa</li>
                                                <li>Illam</li>
                                                <li>Birgunj</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-activity1-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Trek</li>
                                            <li>Lakes</li>
                                            <li>Hikes</li>
                                            <li>Safari</li>
                                            <li>Cities</li>
                                            <li>Sherpa villages</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-meal1-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Hotels and Tea houses</li>
                                            <li>Most meals included</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-protection1-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>ABTA</li>
                                            <li>ATOL</li>
                                            <li>IATA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-content">
                                <h4>15 Days</h4>
                                <span>from</span>
                                <h3>US $750</h3>
                                <a href="#" class="btn btnColor-2">Bookings</a>
                            </div>
                        </div>
                        <div class="card-four">
                            <div class="card-img" style="background-image: url(../../images/8.png);">
                            </div>
                            <div class="card-content">
                                <div class="card-content-head">
                                    <h3>Annapurna Sanctuary Trek</h3>
                                </div>
                                <div class="card-content-desc">
                                    <div class="row g-0 g-2">
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-highlight">
                                                <h5>Tour Highlights</h5>
                                                <div class="half-content">
                                                    <p>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Blanditiis
                                                        dolor neque deleniti ullam cumque repellat consectetur, pariatur
                                                        ad
                                                        earum accusamus veritatis voluptates harum sapiente rem
                                                        voluptate
                                                        autem laudantium corporis eligendi.
                                                    </p>
                                                </div>
                                                <span class="more-content more-highlight2">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-destination">
                                                <h5>Destinations</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>kathmandu</li>
                                                        <li>Bhaktapur</li>
                                                        <li>Pokhara</li>
                                                        <li>Myagdi</li>
                                                        <li>Kanchanpur</li>
                                                        <li>Solukhumbu</li>
                                                        <li>Jhapa</li>
                                                        <li>Illam</li>
                                                        <li>Birgunj</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-destination2">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-activity">
                                                <h5>Activities</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Trek</li>
                                                        <li>Lakes</li>
                                                        <li>Hikes</li>
                                                        <li>Safari</li>
                                                        <li>Cities</li>
                                                        <li>Sherpa villages</li>

                                                    </ul>
                                                </div>
                                                <span class="more-content more-activity2">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-meal">
                                                <h5>Stay Meal</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>Hotels and Tea houses</li>
                                                        <li>Most meals included</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-meal2">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-flight">
                                                <h5>International Flight</h5>
                                                <span>Include</span>
                                                <span>Exnclude</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 col-6">
                                            <div class=" icon-text icon-protection">
                                                <h5>Holiday Protection</h5>
                                                <div class="half-content">
                                                    <ul>
                                                        <li>ABTA</li>
                                                        <li>ATOL</li>
                                                        <li>IATA</li>
                                                    </ul>
                                                </div>
                                                <span class="more-content more-protection2">More <i
                                                        class="las la-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-highlight2-content" tabindex="1">
                                    <div class="full-content">
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Delectus ea eius
                                            asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis numquam
                                            earum
                                            minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-destination2-content" tabindex="1">
                                    <div class="icon-text icon-destination card-content-desc">
                                        <div class="full-content">
                                            <ul>
                                                <li>kathmandu</li>
                                                <li>Bhaktapur</li>
                                                <li>Pokhara</li>
                                                <li>Myagdi</li>
                                                <li>Kanchanpur</li>
                                                <li>Solukhumbu</li>
                                                <li>Jhapa</li>
                                                <li>Illam</li>
                                                <li>Birgunj</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-activity2-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Trek</li>
                                            <li>Lakes</li>
                                            <li>Hikes</li>
                                            <li>Safari</li>
                                            <li>Cities</li>
                                            <li>Sherpa villages</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-meal2-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>Hotels and Tea houses</li>
                                            <li>Most meals included</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-content-dtl more-protection2-content" tabindex="1">
                                    <div class="full-content">
                                        <ul>
                                            <li>ABTA</li>
                                            <li>ATOL</li>
                                            <li>IATA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-content">
                                <h4>15 Days</h4>
                                <span>from</span>
                                <h3>US $750</h3>
                                <a href="#" class="btn btnColor-2">Bookings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
function openFiler() {
    document.getElementById("mb-view").style.width = "100%";
}

function closeFiler() {
    document.getElementById("mb-view").style.width = "0";
}

$(window).resize(function() {
    if ($(window).width() > 1024) {
        document.getElementById("mb-view").style.width = "100%";
    }
});
$(window).resize(function() {
    if ($(window).width() < 1023) {
        document.getElementById("mb-view").style.width = "0";
    }
});
</script>


<script>
$('.more-highlight').click(function() {
    $('.more-highlight-content').show().focus();
});
$('.more-highlight-content').blur(function() {
    $(this).hide();
});
$('.more-destination').click(function() {
    $('.more-destination-content').show().focus();
});
$('.more-destination-content').blur(function() {
    $(this).hide();
});
$('.more-activity').click(function() {
    $('.more-activity-content').show().focus();
});
$('.more-activity-content').blur(function() {
    $(this).hide();
});
$('.more-meal').click(function() {
    $('.more-meal-content').show().focus();
});
$('.more-meal-content').blur(function() {
    $(this).hide();
});
$('.more-protection').click(function() {
    $('.more-protection-content').show().focus();
});
$('.more-protection-content').blur(function() {
    $(this).hide();
});


$('.more-highlight1').click(function() {
    $('.more-highlight1-content').show().focus();
});
$('.more-highlight1-content').blur(function() {
    $(this).hide();
});
$('.more-destination1').click(function() {
    $('.more-destination1-content').show().focus();
});
$('.more-destination1-content').blur(function() {
    $(this).hide();
});
$('.more-activity1').click(function() {
    $('.more-activity1-content').show().focus();
});
$('.more-activity1-content').blur(function() {
    $(this).hide();
});
$('.more-meal1').click(function() {
    $('.more-meal1-content').show().focus();
});
$('.more-meal1-content').blur(function() {
    $(this).hide();
});
$('.more-protection1').click(function() {
    $('.more-protection1-content').show().focus();
});
$('.more-protection1-content').blur(function() {
    $(this).hide();
});


$('.more-highlight2').click(function() {
    $('.more-highlight2-content').show().focus();
});
$('.more-highlight2-content').blur(function() {
    $(this).hide();
});
$('.more-destination2').click(function() {
    $('.more-destination2-content').show().focus();
});
$('.more-destination2-content').blur(function() {
    $(this).hide();
});
$('.more-activity2').click(function() {
    $('.more-activity2-content').show().focus();
});
$('.more-activity2-content').blur(function() {
    $(this).hide();
});
$('.more-meal2').click(function() {
    $('.more-meal2-content').show().focus();
});
$('.more-meal2-content').blur(function() {
    $(this).hide();
});
$('.more-protection2').click(function() {
    $('.more-protection2-content').show().focus();
});
$('.more-protection2-content').blur(function() {
    $(this).hide();
});
</script>



<!-- <script>
function myFunction() {

var x = document.getElementById("myDIV");
if (x.style.display === "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}

function myFunction2() {
console.log("Hello world")
var y = document.getElementById("myDIV");

}
</script> -->

<script>

</script>


@endsection