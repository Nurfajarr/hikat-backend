@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Donatur Zakat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jdonatur }} Orang</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-friends  fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Penerima Zakat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $jpenerima }} Orang</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Donatur Zakat</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Username</th>
              <th>Alamat</th>
              <th>Umur</th>
              <th>Pekerjaan</th>
              <th>Jenis Kelamin</th>
              <th>Hapus Data</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $donaturzakat as $dz )
            <tr>
              <td>{{ $dz->nama }}</td>
              <td>{{ $dz->username }}</td>
              <td>{{ $dz->alamat }}</td>
              <td>{{ $dz->umur }}</td>
              <td>{{ $dz->pekerjaan }}</td>
              <td>{{ $dz->jenis_kelamin }}</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-danger" onclick="return confirm('Yakin ingin menghapus data?')" href="{{ route('index.destroy', $dz->id) }}">Hapus Data</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection