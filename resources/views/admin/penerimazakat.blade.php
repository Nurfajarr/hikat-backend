@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Penerima Zakat</h1>
  <a href="#" class="btn btn-sm btn-warning pull-right" data-toggle="modal" data-target="#modal_form_vertical"><span class="fas fa-plus"></span> Input Penerima Zakat</a>
  <br /><br />
  <!-- modal input penerima zakat -->
  <div id="modal_form_vertical" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Penerima Zakat</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form id="form" action="{{ Route('penerimazakat.store') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group"><label for="nama">Nama</label>
                    <input type="text" placeholder="Masukan Nama" name="nama" class="form-control"></div>
                  <div class="form-group"><label for="pekerjaan">Pekerjaan</label>
                    <input type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" class="form-control"></div>
                  <div class="form-group"><label for="alamat">Alamat</label>
                    <input type="text" placeholder="Masukan Alamat" name="alamat" class="form-control"></div>
                  <div class="form-group"><label for="umur">Umur</label>
                    <input type="text" placeholder="Masukan Umur" name="umur" class="form-control"></div>
                  <div class="form-group"><label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- tutup modal -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Penerima Zakat</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Pekerjaan</th>
              <th>Alamat</th>
              <th>Umur</th>
              <th>Jenis Kelamin</th>
              <th>Edit Data</th>
              <th>Hapus Data</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $penerimazakat as $pz )
            <tr>
              <td>{{ $pz->nama }}</td>
              <td>{{ $pz->pekerjaan }}</td>
              <td>{{ $pz->alamat }}</td>
              <td>{{ $pz->umur }}</td>
              <td>{{ $pz->jenis_kelamin }}</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-primary" href="#" data-toggle="modal" data-target="#id{{ $pz->id }}">Edit Data</a>
                  <!-- modal edit -->
                  <div id="id{{ $pz->id }}" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Penerima Zakat</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <form action="/penerimazakat/{{ $pz->id }}" method="POST">
                          @method('patch')
                          @csrf
                          <div class="modal-body">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group"><label for="nama">Nama</label>
                                    <input type="text" placeholder="Masukan Nama" name="nama" id="nama" value="{{ $pz->nama }}" class="form-control"></div>
                                  <div class="form-group"><label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" id="pekerjaan" value="{{ $pz->pekerjaan }}" class="form-control"></div>
                                  <div class="form-group"><label for="alamat">Alamat</label>
                                    <input type="text" placeholder="Masukan Alamat" name="alamat" id="alamat" value="{{ $pz->alamat }}" class="form-control"></div>
                                  <div class="form-group"><label for="umur">Umur</label>
                                    <input type="text" placeholder="Masukan Umur" name="umur" id="umur" value="{{ $pz->umur }}" class="form-control"></div>
                                  <div class="form-group"><label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="status" value="{{ $pz->status }}">
                                      <option value="laki-laki">Laki-laki</option>
                                      <option value="perempuan">Perempuan</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- tutup modal -->
              </td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-danger" onclick="return confirm('Yakin ingin menghapus data?')" href="{{ route('penerimazakat.destroy', $pz->id) }}">Hapus Data</a>
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