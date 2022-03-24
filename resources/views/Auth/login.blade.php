@extends('template.app')

@section('content')
    <div class="col-lg-6">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h1 style="color:white">LOGIN</h1>  
                </div>
                <div class="col-lg-12">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label for="" style="color:white">Username</label>
                                <input type="text" name="username" class="form-control" id="" placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label for="" style="color:white">Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    {{-- <div class="white-button first-button scroll-to-section">
                <a href="#modal">LOGIN <i class="fab fa-apple"></i></a>
            </div>
            <div class="white-button scroll-to-section">
                <a href="#modal">REGISTER <i class="fab fa-google-play"></i></a>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="{{ asset('foto/sign.png') }}" alt="">
        </div>
    </div>
@endsection
