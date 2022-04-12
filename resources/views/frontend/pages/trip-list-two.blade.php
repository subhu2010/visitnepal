@extends('frontend.layout.welcome')

@section('content')



<section class="page-head-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-title-two text-center">
                    <h1 class="title">
                        <span>Visit</span>best location here
                    </h1>
                    <p class="d-none d-lg-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    </p>
                </div>
            </div>
        </div>
        <div class="trip-search bg-white">
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
    </div>
</section>

<section class="trip-list pa-t">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h5>Refine match search</h5>
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
                        <div class="departure-date-list">
                            <div class="dept-date" style="display:none;" id="jan">
                                <h6>January</h6>
                                <ul>
                                    <li>
                                        <h6>January <span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6>January <span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6>January <span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="feb">
                                <h6>February</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="march">
                                <h6>March</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="april">
                                <h6>April</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="may">
                                <h6>May</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="june">
                                <h6>June</h6>
                                <ul>
                                    <li>
                                        <h6>June <span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6>June <span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6>June <span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="july">
                                <h6>July</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="aug">
                                <h6>August</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="sept">
                                <h6>September</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="oct">
                                <h6>October</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="display:none;" id="nov">
                                <h6>November</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="dept-date" style="" id="dec">
                                <h6>December</h6>
                                <ul>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                    <li>
                                        <h6><span>(From $895)</span></h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                        <div class="row slider-labels">
                            <div class="col-xs-6 caption">
                            </div>
                            <div class="col-xs-6 text-right caption">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form>
                                    <input type="hidden" name="min-value" value="">
                                    <input type="hidden" name="max-value" value="">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 filter-list">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="packgae-num">
                            <p>All 51 Nepal holiday packages</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="">
                            <div class="form-group row d-flex align-items-center">
                                <div class="col-lg-6 col-md-6 text-end">
                                    <label for="" class="">Sort By:</label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select name="" id="" class="form-select">
                                        <option value="Low Price">Low Price</option>
                                        <option value="High Price">High Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pakage-list">
                    <div>
                        <div class="card-four">
                            <div class="card-img">
                            </div>
                            <div class="card-content">
                                <div class="card-content-head">
                                    <h3>Annapurna Sanctuary Trek</h3>
                                </div>
                                <div class="card-content-desc">
                                    <div class="row g-0 g-2">
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-highlight">
                                                <h5>Tour Highlights</h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna
                                                    <span class="more-content" data-bs-toggle="modal"
                                                        data-bs-target="#highlightModal">More <i
                                                            class="las la-angle-right"></i></span>
                                                </p>
                                                <div class="modal fade" id="highlightModal" tabindex="-1"
                                                    aria-labelledby="highlightModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Harum, dicta itaque nesciunt iure sunt nihil
                                                                    accusamus maiores, pariatur commodi officiis debitis
                                                                    ex praesentium libero! Sapiente cumque eius
                                                                    repudiandae accusamus facere exercitationem maxime,
                                                                    officiis, vitae voluptatum tenetur adipisci tempore
                                                                    ipsum repellat tempora animi optio? Pariatur
                                                                    voluptas ipsa architecto, enim ipsum, ratione
                                                                    voluptates deleniti error iure expedita suscipit
                                                                    soluta. Alias nisi dolores sit expedita optio
                                                                    pariatur quasi corporis ut adipisci praesentium?
                                                                    Cupiditate modi, sequi iste dolores exercitationem
                                                                    ad minima incidunt ullam. Maxime, ex quae!
                                                                    Recusandae ducimus quos deleniti officia neque sint
                                                                    quo molestias voluptatibus impedit nihil! Laborum
                                                                    quos error culpa repudiandae unde?
                                                                </p>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Voluptatibus laborum rerum dolorum minima
                                                                    illum tempora ducimus commodi omnis sunt. Impedit
                                                                    sit ab perferendis nam libero modi accusamus
                                                                    incidunt, magni consequuntur eveniet. Quibusdam
                                                                    eveniet vitae cumque illum consequuntur sint
                                                                    incidunt? Quod neque id libero sunt facilis totam.
                                                                    Ullam reprehenderit ad quas corporis perspiciatis.
                                                                    Iure necessitatibus ea odio pariatur ducimus
                                                                    deserunt eveniet, similique quasi quas atque harum
                                                                    alias nobis quia inventore voluptatum, esse saepe
                                                                    doloremque voluptates est voluptatem dolorum
                                                                    delectus! Laudantium debitis vitae corporis?
                                                                    Adipisci corrupti cumque illo eveniet ab harum
                                                                    deleniti soluta minus pariatur. Possimus nisi beatae
                                                                    alias. Reiciendis debitis eaque deserunt nisi omnis
                                                                    quo. A pariatur vero sit. Ipsam delectus
                                                                    consequuntur ab dolore excepturi possimus nobis illo
                                                                    mollitia dicta hic quod qui, praesentium quae
                                                                    architecto, culpa non deserunt rem vero perspiciatis
                                                                    natus animi? Quas sunt corporis deserunt earum
                                                                    nesciunt sit iure blanditiis accusamus eveniet
                                                                    minus. Amet, quam. Dolores dicta nemo accusantium
                                                                    quasi iure sint, ab possimus sed! Quidem dolore
                                                                    saepe blanditiis. Aperiam quia illum, alias numquam
                                                                    totam adipisci, voluptatum a culpa provident
                                                                    voluptatem, ipsa amet suscipit libero voluptates
                                                                    delectus explicabo! Corporis ut accusamus commodi a
                                                                    quaerat expedita, sapiente, aliquid necessitatibus
                                                                    totam, minima inventore molestias quis. Maiores a
                                                                    hic fugit error!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-destination">
                                                <h5>Destinations</h5>
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
                                                    <li>
                                                        <span class="more-content" data-bs-toggle="modal"
                                                            data-bs-target="#destinationModal">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="modal fade" id="destinationModal" tabindex="-1"
                                                    aria-labelledby="destinationModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-activity">
                                                <h5>Activities</h5>
                                                <ul>
                                                    <li>Trek</li>
                                                    <li>Lakes</li>
                                                    <li>Hikes</li>
                                                    <li>Safari</li>
                                                    <li>Cities</li>
                                                    <li>Sherpa villages</li>
                                                    <li>
                                                        <span class="more-content" data-bs-toggle="modal"
                                                            data-bs-target="#activityModal">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="modal fade" id="activityModal" tabindex="-1"
                                                    aria-labelledby="activityModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-meal">
                                                <h5>Stay Meal</h5>
                                                <ul>
                                                    <li>Hotels and Tea houses</li>
                                                    <li>Most meals included</li>
                                                    <li>
                                                        <span class="more-content" data-bs-toggle="modal"
                                                            data-bs-target="#mealModal">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="modal fade" id="mealModal" tabindex="-1"
                                                    aria-labelledby="mealModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <ul>
                                                                    <li>Hotels and Tea houses</li>
                                                                    <li>Most meals included</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-flight">
                                                <h5>International Flight</h5>
                                                <span>Include</span>
                                                <span>Exnclude</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon-text icon-protection">
                                                <h5>Holiday Protection</h5>
                                                <ul>
                                                    <li>ABTA</li>
                                                    <li>ATOL</li>
                                                    <li>IATA</li>
                                                    <li>
                                                        <span class="more-content" data-bs-toggle="modal"
                                                            data-bs-target="#protectionModal">More <i
                                                                class="las la-angle-right"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="modal fade" id="protectionModal" tabindex="-1"
                                                    aria-labelledby="protectionModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
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
                            <div class="booking-content px-2">
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



<style>

</style>

<script>
const targetDiv = document.getElementById("third");
const btn = document.getElementById("toggle");
btn.onclick = function() {
    if (targetDiv.style.display !== "none") {
        targetDiv.style.display = "none";
    } else {
        targetDiv.style.display = "block";
    }
};
</script>


<script>



</script>



@endsection