@extends('template.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <div class="container">
        <div class="col-md-12 left-content show-up header-text wow fadeInLeft">
            <div class="card">
                <div class="card-header">
                    <h1> Data User {{ $data->nama }}</h1>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-3">
                            <img src="{{ asset('foto/' . $data->foto) }}" class="img-thumbnail" alt="">
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">NIK </label>
                                </div>
                                <div class="col-md-8">
                                    <label>: {{ $data->foto }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <label>: {{ $data->nama }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <label>: {{ $data->email }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Nomor Telpon</label>
                                </div>
                                <div class="col-md-8">
                                    <label>: {{ $data->telp }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <label>: {{ $data->alamat }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <a href="/user" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
