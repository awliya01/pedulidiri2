@extends('template.app')

@section('content')
    <div class="col-lg-6">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h1 style="color:white">Tambah Data</h1>
                </div>
                <div class="col-lg-12">
                    <form action="/user/store" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" style="color:white">NIK</label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                    id="nik" placeholder="Enter nik" value="{{ old('nik') }}">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" style="color:white">Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" placeholder="Enter nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" style="color:white">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" style="color:white">Nomor Telpon</label>
                                <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror"
                                    id="telp" placeholder="Enter telp" value="{{ old('telp') }}">
                                @error('telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" style="color:white">Username</label>
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    placeholder="Enter Username" value="{{ old('username') }}">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" style="color:white">Password</label>
                                <input type="password" name="password"
                                    class="form-control  @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" style="color:white">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id=""
                                    placeholder="Confirm Password">
                            </div>

                            <div class="col-md-6">
                                <label for="" style="color:white">Role</label>
                                <select name="role" class="custom-select" id="">
                                    <option disabled selected>Select Role</option>
                                    <option value="admin">admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
            <img src="{{ asset('foto/Mobile login-pana.png') }}" alt="">
        </div>
    </div>
@endsection
