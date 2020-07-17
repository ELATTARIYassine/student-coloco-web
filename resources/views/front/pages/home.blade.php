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
            <div class="row">
                <col-lg-12>
                    <div class="map-container">
                        <div class="map-frame">
                        <div id="mapid"></div>
                    </div>
                  </div>
                </col-lg-12>
            </div>
        </div>
    </div>
@endsection

@section('script')
 <!-- Make sure you put this AFTER Leaflet's CSS -->

 <script>
     axios.get('/api/show-map')
        .then(function (response) {
            // handle success
            var mymap = L.map('mapid').setView([32.339444, -6.360833], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(mymap);

            response.data.forEach(el => {
                var marker = L.marker([el.latitude, el.longitude]).addTo(mymap);
                marker.bindPopup(`<center>
                              <p>
                                <strong><a href="housings-offers/${el.id}">${el.title}</a></strong>
                              </p>
                            </center>
                            <img style="max-width: -webkit-fill-available;" src="${el.images}"/><br />
                            <p>${el.address}</p>
                              `).openPopup();
            });
            // console.log(response.data[0].latit);
            // var list = JSON.parse(response.data);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });
        
 </script>
@endsection

@section('style')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<style>
    .map-container {
        width: 1090px;
        height: 500px;
        margin: 30px;
        padding-bottom: 10px;
    }

    .map-frame {
    border: 2px solid black;
    height: 100%;
    }

    #mapid {
    height: 100%;
    }
</style>
@endsection