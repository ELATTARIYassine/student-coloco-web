@extends('front.layout.master')

@section('content')

    @include('front.layout.shared.slider')

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Housing offers</h3>
                        <p>Suffered alteration in some form, by injected humour or good day.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($housings as $housing)
                    <div class="col-lg-4 col-md-6">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">More Places</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
