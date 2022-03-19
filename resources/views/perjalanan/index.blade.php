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
                    <h1>Data Perjalanan</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal Perjalanan</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                    <th>
                                        {{-- <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#add">
                                            Tambah
                                        </button> --}}
                                        <a href="/diri/create">Tambah Data</a>
                                        {{-- @include('perjalanan.modal.create') --}}
                                    </th>
                                </thead>

                                @foreach ($table as $no => $data)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->jam }}</td>
                                        <td>{{ $data->lokasi }}</td>
                                        <td>{{ $data->suhu_tubuh }}</td>
                                        <td>
                                            {{-- <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete">
                                                Hapus
                                            </button> --}}
                                            <a href="/diri/destroy/{{ $data->id_perjalanan }}" class="btn btn-danger"
                                                onclick="return confirm('Anda Yakin Ingin Menghapusnya?')">Hapus</a>
                                            {{-- @include('perjalanan.modal.delete') --}}
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
