@extends('template.admin')
@section('judul')
    <title>Data Pengaduan</title>
@endsection
@section('aktif')
    <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="{{ route('pengaduan.index') }}" class="nav-item nav-link active"><i class="fa fa-bullhorn me-2"></i>Pengaduan</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Mahasantri</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-user-friends me-2"></i>Petugas</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-chart-line me-2"></i>Laporan</a>
@endsection
@section('konten')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-sm-6 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h3 class="mb-4">Tabel Pengaduan</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Isi Laporan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->foto }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->tgl_pengaduan }}</td>
                                    <td>{{ $item->isi_laporan }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('pengaduan.show', $item->id_pengaduan) }}"><button type="button" class="btn btn-square btn-outline-primary"><i class="fa fa-eye"></i></button></a>
                                        <a href=""><button type="button" class="btn btn-square btn-outline-success"><i class="fa fa-edit"></i></button></a>
                                        <a href=""><button type="button" class="btn btn-square btn-outline-danger"><i class="fa fa-trash"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection