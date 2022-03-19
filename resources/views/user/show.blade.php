@extends('template.app')
{{-- @section('title', 'PEDULI DIRI') --}}
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <div class="col-lg-4">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
                <div class="col-lg-12">
                    @include('perjalanan.profile.main')
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Profile</h3>
                </div>
                <div class="card-body text-left">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Nik</label>
                        </div>
                        <div class="col-md-8">
                            <label>: {{ $data->nik }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Nama</label>
                        </div>
                        <div class="col-md-8">
                            <label>: {{ $data->nama }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8">
                            <label>: {{ $data->email }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Nomor Telpon</label>
                        </div>
                        <div class="col-md-8">
                            <label>: {{ $data->telp }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-8">
                            <label>: {{ $data->alamat }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="/diri" class="btn btn-secondary mr-4" style="width: 100px">Kembali</a>
                            <a href="/user/edit/{{ $data->id }}" class="btn btn-primary" style="width: 100px">Edit</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
