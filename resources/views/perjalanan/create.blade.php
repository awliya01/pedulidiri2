@extends('template.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <div class="col-lg-4 align-self-center">
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
                    <h1>Tambah Data Perjalanan</h1>
                </div>

                <div class="card-body">
                    <form action="/diri/store" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="date" name="tanggal" id="">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Jam</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="time" name="jam" id="">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Lokasi</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="lokasi" id="">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Suhu Tubuh</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="suhu_tubuh" id="">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="/diri" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
