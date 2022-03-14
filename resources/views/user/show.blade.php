@extends('layouts.app')
{{-- @section('title', 'PEDULI DIRI') --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('perjalanan.profile.main')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nik</label>
                            </div>
                            <div class="col-md-8">
                                <label>: {{ $data->nik }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8">
                                <label>: {{ $data->nama }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8">
                                <label>: {{ $data->email }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Nomor Telpon</label>
                            </div>
                            <div class="col-md-8">
                                <label>: {{ $data->telp }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-8">
                                <label>: {{ $data->alamat }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="/diri" class="btn btn-secondary mr-4" style="width: 100px">Kembali</a>
                                <a href="/user/edit/{{ $data->id }}" class="btn btn-primary"
                                    style="width: 100px">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
