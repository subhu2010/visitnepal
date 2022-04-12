<div id="mb-view">
    <div class="mb-content">
        <div class="mb-header ">
            <h5>Refine match search</h5>
            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
        </div>
        <div class="trip-sidebar">
            <div class="sidebar-card">
                <h6>Departure Country</h6>
                <div class="form-group">
                    <input type="text" class="form-control filter-control" list="datalistOptions" id="exampleDataList"
                        placeholder="Country">
                    <span><i class="las la-globe-europe"></i></span>
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
            </div>
            <div class="sidebar-card">
                <h6>Departure Month</h6>
                <div class="side-dept-mnth">
                    <ul>
                        <li class="select-mnth mt-4">
                            <div class="form-check custom-check mb-0">
                                <input type="checkbox" value="jan" id="JanCheck"/>
                                <label class="form-check-label" for="JanCheck">
                                    January
                                </label>
                            </div>
                            <div class="form-check custom-check mb-0">
                                <input type="checkbox" value="feb" id="FebCheck"/>
                                <label class="form-check-label" for="FebCheck">
                                    February
                                </label>
                            </div>
                            <div class="form-check custom-check mb-0">
                                <input type="checkbox" value="march" id="MarchCheck"/>
                                <label class="form-check-label" for="MarchCheck">
                                    March
                                </label>
                            </div>
                            <div class="form-check custom-check mb-0">
                                <input type="checkbox" value="april" id="AaprilCheck"/>
                                <label class="form-check-label" for="AaprilCheck">
                                    April
                                </label>
                            </div>
                            <div class="form-check custom-check mb-0">
                                <input type="checkbox" value="may" id="MayCheck"/>
                                <label class="form-check-label" for="MayCheck">
                                    May
                                </label>
                            </div>
                            <div class="filter-wrapper">
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="june" id="JuneCheck"/>
                                    <label class="form-check-label" for="JuneCheck">
                                        June
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="july" id="JulyCheck"/>
                                    <label class="form-check-label" for="JulyCheck">
                                        July
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="aug" id="AugCheck"/>
                                    <label class="form-check-label" for="AugCheck">
                                        August
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="sept" id="SeptCheck"/>
                                    <label class="form-check-label" for="SeptCheck">
                                        September
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="oct" id="OctCheck"/>
                                    <label class="form-check-label" for="OctCheck">
                                        October
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="nov" id="NovCheck"/>
                                    <label class="form-check-label" for="NovCheck">
                                        November
                                    </label>
                                </div>
                                <div class="form-check custom-check mb-0">
                                    <input type="checkbox" value="dec" id="DecCheck"/>
                                    <label class="form-check-label" for="DecCheck">
                                        December
                                    </label>
                                </div>
                            </div>
                            <div class="more">
                                <small class="filter-active">View More</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-card" >
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
            <div class="sidebar-card">
                <h6>Duration</h6>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div id="duration-slider" class="my-3"> </div>
                        <div class="d-flex justify-content-between duration-range">
                            <div>
                                <span id="duration-slider-value1"></span>
                                <small>Days</small>
                            </div>
                            <div>
                                <span id="duration-slider-value2"></span>
                                <small>Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-card" >
                <h6>Holiday style</h6>
                <ul>
                    <li class="select-mnth">
                        <div class="form-check custom-check mb-0" >
                            <input type="checkbox" value="jan" id="holiday1"/>
                            <label class="form-check-label" for="holiday1">
                                Hiking & Trekking
                            </label>
                        </div>
                        <div class="form-check custom-check mb-0">
                            <input type="checkbox" value="feb" id="holiday2"/>
                            <label class="form-check-label" for="holiday2">
                                Wildlife & Nature
                            </label>
                        </div>
                        <div class="form-check custom-check mb-0">
                            <input type="checkbox" value="march" id="holiday3"/>
                            <label class="form-check-label" for="holiday3">
                                Culture & History
                            </label>
                        </div>
                        <div class="form-check custom-check mb-0">
                            <input type="checkbox" value="april" id="holiday4"/>
                            <label class="form-check-label" for="holiday4">
                                Culture & History
                            </label>
                        </div>
                        <div class="form-check custom-check mb-0">
                            <input type="checkbox" value="may" id="holiday5"/>
                            <label class="form-check-label" for="holiday5">
                                Rafting & Camping
                            </label>
                        </div>
                        <div class="form-check custom-check mb-0">
                            <input type="checkbox" value="june" id="holiday6"/>
                            <label class="form-check-label" for="holiday6">
                                Wellness
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-card">
                <h6>Price</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between">
                            <strong>Min</strong>
                            <strong>Max</strong>
                        </div>
                        <div id="slider-range" class="my-3"> </div>
                        <div class="d-flex justify-content-between price-range">
                            <span id="slider-range-value1"></span>
                            <span id="slider-range-value2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-card">
                <button class="btn btnColor-1 d-block mx-auto">Apply Filter</button>
            </div>
        </div>
    </div>
</div>