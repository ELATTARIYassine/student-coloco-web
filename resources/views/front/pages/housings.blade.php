@extends('front.layout.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Housings</h3>
                        <p>Available housings ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select>
                                                <option data-display="Country">Country</option>
                                                <option value="1">Africa</option>
                                                <option value="2">canada</option>
                                                <option value="4">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select>
                                                <option data-display="Travel type">Travel type</option>
                                                <option value="1">advance</option>
                                                <option value="2">advance</option>
                                                <option value="4">premium</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="range_slider_wrap">
                                            <span class="range">Prise range</span>
                                            <div id="slider-range"></div>
                                            <p>
                                                <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-weight:400;">
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($housings as $housing)
                        {{-- <img src="{{ asset(substr($housing->images, 0, -5)) }}" alt=""> --}}
                            <div class="col-md-6">
                                <div class="single_place">
                                    <div class="thumb">
                                        <img src="{{ $housing->images }}" alt="">
                                        <a href="#" class="prise">{{ $housing->price }} DH / Mois</a>
                                    </div>
                                    <div class="place_info">
                                        <a href="{{ route('front.housings.show', ['id' => $housing->id]) }}"><h3>{{ $housing->title }}</h3></a>
                                        <p>{{ substr($housing->address, 0, 40) }} ...</p>
                                        <div class="rating_days d-flex justify-content-between">
                                    <span class="d-flex justify-content-center align-items-center">
                                        @for($i = 0; $i < $housing->rating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </span>
                                            <div class="days">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#">{{ $housing->capacity }} Person(s)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
