@extends('template.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <div class="container">
        <div class="col-md-12 left-content show-up header-text wow fadeInLeft">
            <div class="card">
                <div class="card-header">
                    <h1> Data User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/user/generate-pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <th width="5%">No</th>
                                    <th width="15%">NIK</th>
                                    <th width="15%">Nama</th>
                                    <th width="15%">Email</th>
                                    <th width="15%">Telpon</th>
                                    <th width="15%">Username</th>
                                    <th width="10%">Role</th>
                                    <th width="10%"><a href="/user/create">Tambah Data User</a></th>
                                </thead>

                                @foreach ($user as $key => $item)
                                    <tbody>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->telp }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>

                                            {{-- <a href="/user/delete/{{ $item->id }}" class="btn btn-danger">Hapus</a> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="/user/detail/{{ $item->id }}">Detail</a>
                                                    @if ($item->nik != Auth::user()->nik)
                                                        @if ($item->role != 'admin')
                                                            <a class="dropdown-item"
                                                                href="/user/delete/{{ $item->id }}"
                                                                onclick="return confirm('Anda Yakin Ingin Menghapusnya?')">Hapus</a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>

                                        </td>
                                    </tbody>
                                @endforeach
                            </table>
                            Halaman
                            {{ $user->currentPage() }}
                            Dari
                            {{ $user->lastPage() }}

                            {{ $user->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
