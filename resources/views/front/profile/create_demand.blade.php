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
                <form action="{{ route('front.demands.store') }}" method="post">
                    @csrf
                    <h3>Add new demand</h3>
                    <hr>
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="fullname" placeholder="Enter your full name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Budget</label>
                        <input type="text" name="budget" placeholder="Budget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" id="comment" placeholder="Comment" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary mb-20px">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
