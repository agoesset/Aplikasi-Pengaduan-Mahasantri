@extends('template.admin')

@section('judul')
<title>Dashboard</title>
@endsection
@section('aktif')
    <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="{{ route('pengaduan.index') }}" class="nav-item nav-link"><i class="fa fa-bullhorn me-2"></i>Pengaduan</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Mahasantri</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-user-friends me-2"></i>Petugas</a>
    <a href="" class="nav-item nav-link"><i class="fa fa-chart-line me-2"></i>Laporan</a>
@endsection
@section('konten')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-bullhorn fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pengaduan</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-exclamation-triangle fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Belum Diproses</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-exchange-alt fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Sedang Diproses</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-check-circle fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Selesai</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Jumlah User</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user-friends fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Jumlah Petugas</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Jumlah Admin</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-comment-dots fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Jumlah Tanggapan</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
@endsection