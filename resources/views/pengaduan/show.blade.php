@extends('template.admin')
@section('judul')
    <title>Data Pengaduan</title>
@endsection
@section('aktif')
    <a href="" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
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
                        <h3 class="mb-4">Detail Pengaduan</h3>                 
                        <div class="card mb-3" >
                            <div class="row g-0">
                              <div class="card-header">
                                <table class="table">
                                  <tbody>
                                    @foreach ($show as $item)
                                    <tr>
                                      <th>Nama</th>
                                      <td>: </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">NIM</th>
                                      <td>: {{ $item->nim }}</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Nomor WhatsApp</th>
                                      <td>: 085804686544</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Tanggal</th>
                                      <td>: 12 Januari 2003</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Status</th>
                                      <td>: Selesai</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>   
                              <div class="col-md-4">
                                <img src="{{ asset('dashmin') }}/img/12.png" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection