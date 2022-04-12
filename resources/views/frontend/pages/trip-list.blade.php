@extends('frontend.layout.welcome')

@section('content')



<section class="page-head-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-title-two text-center">
                    <p class="">
                        Over 5000 package holidays to Nepal provided by your trusted Trusted Travel Organisers
                        (Worldwide)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="trip-search bg-white">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="visually-hidden" for="">Departure Country</label>
                                <div class="input-group">
                                    <div class="input-group-text banner-input-group">
                                        <i class="las la-plane-departure"></i>
                                    </div>
                                    <input type="text" class="form-control banner-search-control" list="datalistOptions"
                                        id="exampleDataList" placeholder="Departure Country">
                                    <datalist id="datalistOptions">
                                        <option value="San Francisco">
                                        <option value="New York">
                                        <option value="Seattle">
                                        <option value="Los Angeles">
                                        <option value="Chicago">
                                    </datalist>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="trip-search bg-white d-none d-lg-block">
            <div class="form-group select-mnth d-flex clearfix">
                <div class="mnth-label">
                    <p for="">Year :</p>
                </div>
                <div class="year-list">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">2021</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">2022</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="mnth-list">
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="dec" id="decCheck" checked />
                                    <label class="form-check-label" for="decCheck">
                                        December
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="mnth-list">
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="jan" id="janCheck" />
                                    <label class="form-check-label" for="janCheck">
                                        January
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="feb" id="febCheck" />
                                    <label class="form-check-label" for="febCheck">
                                        February
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="march" id="marchCheck" />
                                    <label class="form-check-label" for="marchCheck">
                                        March
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="april" id="aprilCheck" />
                                    <label class="form-check-label" for="aprilCheck">
                                        April
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="may" id="mayCheck" />
                                    <label class="form-check-label" for="mayCheck">
                                        May
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="june" id="juneCheck" />
                                    <label class="form-check-label" for="juneCheck">
                                        June
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="july" id="julyCheck" />
                                    <label class="form-check-label" for="julyCheck">
                                        July
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="aug" id="augCheck" />
                                    <label class="form-check-label" for="augCheck">
                                        August
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="sept" id="septCheck" />
                                    <label class="form-check-label" for="septCheck">
                                        September
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="oct" id="octCheck" />
                                    <label class="form-check-label" for="octCheck">
                                        October
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="nov" id="novCheck" />
                                    <label class="form-check-label" for="novCheck">
                                        November
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="dec" id="decCheck" />
                                    <label class="form-check-label" for="decCheck">
                                        December
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trip-list pa-t">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.partial.listing-sidebar')
            </div>
            <div class="col-lg-9 filter-list">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <div class="packgae-num">
                            <p><span>Result:</span> All 51 Nepal holiday packages</p>
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
                                        <option value="Shortest Duration">Shortest Duration</option>
                                        <option value="Longest Duration">Longest Duration</option>
                                    </select>
                                </div>
                                <div class="col-md-4 d-lg-none">
                                    <button class="btn btnColor-1 w-100" onclick="openFiler()">Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pakage-list">
                    <div class="mb-4">
                        <div class="card-six">
                            <div class="card-content">
                                <div class="card-img" style="background-image: url(../../images/10.png);">
                                    <div>
                                        <span>15 Days</span>
                                        <span>From $895</span>
                                    </div>
                                </div>
                                <div class="card-desc">
                                    <div class="card-title">
                                        <h3>
                                            Annapurna Sanctuary Trek
                                        </h3>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tour Highlights</th>
                                                <td>
                                                    <div>
                                                        <p>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit.
                                                            Blanditiis
                                                            dolor neque deleniti ullam cumque repellat consectetur,
                                                            pariatur
                                                            ad
                                                            earum accusamus veritatis voluptates harum sapiente rem
                                                            voluptate autem
                                                            laudantium corporis eligendi.
                                                        </p>
                                                        <span class="more-content more-highlight">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
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
                                                        <span class="more-content more-destination">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Activities</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Trek</li>
                                                            <li>Lakes</li>
                                                            <li>Hikes</li>
                                                            <li>Safari</li>
                                                            <li>Cities</li>
                                                            <li>Sherpa villages</li>
                                                        </ul>
                                                        <span class="more-content more-activity">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stay / Meals</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Hotels and Tea houses</li>
                                                            <li>Most meals included</li>
                                                        </ul>
                                                        <span class="more-content more-meal">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>International Flight</th>
                                                <td>
                                                    <span class="text-danger">Exclude</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Holiday Protection</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>ABTA</li>
                                                            <li>ATOL</li>
                                                            <li>IATA</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="more-dtl-booking">
                                        <a href="#" target="_blank">
                                            <span>details & booking</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="more-content-dtl more-highlight-content" tabindex="1">
                                            <div class="full-content">
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="card-six">
                            <div class="card-content">
                                <div class="card-img" style="background-image: url(../../images/10.png);">
                                    <div>
                                        <span>15 Days</span>
                                        <span>From $895</span>
                                    </div>
                                </div>
                                <div class="card-desc">
                                    <div class="card-title">
                                        <h3>
                                            Annapurna Sanctuary Trek
                                        </h3>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tour Highlights</th>
                                                <td>
                                                    <div>
                                                        <p>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit.
                                                            Blanditiis
                                                            dolor neque deleniti ullam cumque repellat consectetur,
                                                            pariatur
                                                            ad
                                                            earum accusamus veritatis voluptates harum sapiente rem
                                                            voluptate autem
                                                            laudantium corporis eligendi.
                                                        </p>
                                                        <span class="more-content more-highlight1">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
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
                                                        <span class="more-content more-destination1">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Activities</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Trek</li>
                                                            <li>Lakes</li>
                                                            <li>Hikes</li>
                                                            <li>Safari</li>
                                                            <li>Cities</li>
                                                            <li>Sherpa villages</li>
                                                        </ul>
                                                        <span class="more-content more-activity1">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stay / Meals</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Hotels and Tea houses</li>
                                                            <li>Most meals included</li>
                                                        </ul>
                                                        <span class="more-content more-meal1">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>International Flight</th>
                                                <td>
                                                    <span class="text-success me-3">Include</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Holiday Protection</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>ABTA</li>
                                                            <li>ATOL</li>
                                                            <li>IATA</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="more-dtl-booking">
                                        <a href="#" target="_blank">
                                            <span>details & booking</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="more-content-dtl more-highlight1-content" tabindex="1">
                                            <div class="full-content">
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="card-six">
                            <div class="card-content">
                                <div class="card-img" style="background-image: url(../../images/10.png);">
                                    <div>
                                        <span>15 Days</span>
                                        <span>From $895</span>
                                    </div>
                                </div>
                                <div class="card-desc">
                                    <div class="card-title">
                                        <h3>
                                            Annapurna Sanctuary Trek
                                        </h3>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tour Highlights</th>
                                                <td>
                                                    <div>
                                                        <p>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit.
                                                            Blanditiis
                                                            dolor neque deleniti ullam cumque repellat consectetur,
                                                            pariatur
                                                            ad
                                                            earum accusamus veritatis voluptates harum sapiente rem
                                                            voluptate autem
                                                            laudantium corporis eligendi.
                                                        </p>
                                                        <span class="more-content more-highlight2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
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
                                                        <span class="more-content more-destination2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Activities</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Trek</li>
                                                            <li>Lakes</li>
                                                            <li>Hikes</li>
                                                            <li>Safari</li>
                                                            <li>Cities</li>
                                                            <li>Sherpa villages</li>
                                                        </ul>
                                                        <span class="more-content more-activity2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stay / Meals</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Hotels and Tea houses</li>
                                                            <li>Most meals included</li>
                                                        </ul>
                                                        <span class="more-content more-meal2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>International Flight</th>
                                                <td>
                                                    <span class="text-danger">Exclude</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Holiday Protection</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>ABTA</li>
                                                            <li>ATOL</li>
                                                            <li>IATA</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="more-dtl-booking">
                                        <a href="#" target="_blank">
                                            <span>details & booking</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="more-content-dtl more-highlight2-content" tabindex="1">
                                            <div class="full-content">
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="card-six">
                            <div class="card-content">
                                <div class="card-img" style="background-image: url(../../images/10.png);">
                                    <div>
                                        <span>15 Days</span>
                                        <span>From $895</span>
                                    </div>
                                </div>
                                <div class="card-desc">
                                    <div class="card-title">
                                        <h3>
                                            Annapurna Sanctuary Trek
                                        </h3>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tour Highlights</th>
                                                <td>
                                                    <div>
                                                        <p>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit.
                                                            Blanditiis
                                                            dolor neque deleniti ullam cumque repellat consectetur,
                                                            pariatur
                                                            ad
                                                            earum accusamus veritatis voluptates harum sapiente rem
                                                            voluptate autem
                                                            laudantium corporis eligendi.
                                                        </p>
                                                        <span class="more-content more-highlight2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
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
                                                        <span class="more-content more-destination2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Activities</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Trek</li>
                                                            <li>Lakes</li>
                                                            <li>Hikes</li>
                                                            <li>Safari</li>
                                                            <li>Cities</li>
                                                            <li>Sherpa villages</li>
                                                        </ul>
                                                        <span class="more-content more-activity2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stay / Meals</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Hotels and Tea houses</li>
                                                            <li>Most meals included</li>
                                                        </ul>
                                                        <span class="more-content more-meal2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>International Flight</th>
                                                <td>
                                                    <span class="text-danger">Exclude</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Holiday Protection</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>ABTA</li>
                                                            <li>ATOL</li>
                                                            <li>IATA</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="more-dtl-booking">
                                        <a href="#" target="_blank">
                                            <span>details & booking</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="more-content-dtl more-highlight2-content" tabindex="1">
                                            <div class="full-content">
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="card-six">
                            <div class="card-content">
                                <div class="card-img" style="background-image: url(../../images/10.png);">
                                    <div>
                                        <span>15 Days</span>
                                        <span>From $895</span>
                                    </div>
                                </div>
                                <div class="card-desc">
                                    <div class="card-title">
                                        <h3>
                                            Annapurna Sanctuary Trek
                                        </h3>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tour Highlights</th>
                                                <td>
                                                    <div>
                                                        <p>Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit.
                                                            Blanditiis
                                                            dolor neque deleniti ullam cumque repellat consectetur,
                                                            pariatur
                                                            ad
                                                            earum accusamus veritatis voluptates harum sapiente rem
                                                            voluptate autem
                                                            laudantium corporis eligendi.
                                                        </p>
                                                        <span class="more-content more-highlight2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
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
                                                        <span class="more-content more-destination2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Activities</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Trek</li>
                                                            <li>Lakes</li>
                                                            <li>Hikes</li>
                                                            <li>Safari</li>
                                                            <li>Cities</li>
                                                            <li>Sherpa villages</li>
                                                        </ul>
                                                        <span class="more-content more-activity2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stay / Meals</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>Hotels and Tea houses</li>
                                                            <li>Most meals included</li>
                                                        </ul>
                                                        <span class="more-content more-meal2">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>International Flight</th>
                                                <td>
                                                    <span class="text-danger">Exclude</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Holiday Protection</th>
                                                <td>
                                                    <div>
                                                        <ul class="d-inline">
                                                            <li>ABTA</li>
                                                            <li>ATOL</li>
                                                            <li>IATA</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="more-dtl-booking">
                                        <a href="#" target="_blank">
                                            <span>details & booking</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="more-content-dtl more-highlight2-content" tabindex="1">
                                            <div class="full-content">
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
                                                    earum
                                                    minus ratione doloremque at optio nulla perferendis eligendi!</p>
                                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Delectus ea eius
                                                    asperiores mollitia, minima, omnis nemo fuga esse suscipit facilis
                                                    numquam
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function addDay(element) {
    if (element.checked) {
        document.getElementById(element.value).style.display = "block";
    } else {
        document.getElementById(element.value).style.display = "none";
    }
}
</script>


<!-- <script>
    $(document).ready(function() {
        var $submit = $("#dept-date").hide(),
            $cbs = $('input[name="month"]').click(function() {
                $submit.toggle($cbs.is(":checked"));
            });
        $cb = $('input[name="month[]"]').click(function() {
            $submit.toggle($cb.is(":checked"));
        });

    });
</script> -->

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



@endsection