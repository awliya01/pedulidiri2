@extends('template.app')

@section('content')
    @if (session('access-not-found'))
        {{-- <div class="col-lg-12 align-self-center show-up">
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('access-not-found') }}</strong>
                <button type="button" class="close" data-dismiss="alert">x</button>
            </div>
        </div> --}}
        <script>
            alert("Anda Tidak Memiliki Akses");
        </script>
    @endif
    <div class="col-lg-6 align-self-center">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SELAMAT DATANG {{ Auth::user()->nama }} DI PEDULI DIRI</h2>
                    <p>Anda Dapat Menyimpan Data Perjalanan Anda </p>
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
            <img src="{{ asset('foto/jalan.png') }}" alt="">
        </div>
    </div>
@endsection
