@extends('front.layout.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Housing details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img style="height: 400px" class="img-fluid" src="{{ $housing->images }}" alt="" width="100%" height="200">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $housing->title }}</h2>
                            <p>{{ $housing->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Feautres</h4>
                            <ul class="list cat-list">
                                <li class="d-flex justify-content-between">
                                    <p>Price: </p>
                                    <p>{{ $housing->price }} DH / Mois</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <p>Capacity:</p>
                                    <p>{{ $housing->capacity }}</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <p>Phone:</p>
                                    <p>{{ $housing->phone }}</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <p>Superficie:</p>
                                    <p>{{ $housing->superficie }}</p>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
