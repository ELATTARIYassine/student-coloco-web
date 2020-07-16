@extends('front.layout.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>My account</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">My account</h4>
                        <ul class="list cat-list">
                            <li class="d-flex justify-content-between">
                                <p>Name: </p>
                                <p>{{ auth()->user()->name }}</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <p>Email: </p>
                                <p>{{ auth()->user()->email }}</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <a href="{{ route('front.housings.create') }}">Add new offer</a>
                            </li>
                            <li class="d-flex justify-content-between">
                                <a href="{{ route('front.demands.create') }}">Add new demand</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-md-8">
                <form action="{{ route('front.housings.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>Add new offer</h3>
                    <hr>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="Price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Capacity</label>
                                <input type="text" name="capacity" placeholder="Capacity" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Superficie</label>
                                <input type="text" name="superficie" placeholder="Superficie" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rating</label>
                                <input type="text" name="rating" placeholder="Rating" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>latitude</label>
                                <input type="text" name="latitude" placeholder="latitude" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>longitude</label>
                                <input type="text" name="longitude" placeholder="longitude" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="address" placeholder="Address" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="images" class="form-control">
                    </div>
                    <button class="btn btn-primary mb-20px">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
