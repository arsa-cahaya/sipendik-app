@extends('layouts.main')
@section('title', 'Laporan')

@section('content')
    <section class="section custom-section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Laporan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Laporan</th>
                                            <th>Nama Siswa</th>
                                            <th>Nilai Sikap</th>
                                            <th>Nilai Keterampilan</th>
                                            <th>Keterangan</th>    
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporan as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->judul }}</td>
                                                <td>{{ $data->siswa->nama }}</td>
                                                <td>{{ $data->nilai_sikap }}</td>
                                                <td>{{ $data->nilai_keterampilan }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('ortu.laporan.download', $data->id) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-download"></i> &nbsp; Download</a>
                                                    </div>
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
        </div>
  </section>
@endsection
