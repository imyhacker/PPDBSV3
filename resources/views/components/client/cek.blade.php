<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
          Cek Pendaftar SMK Telematika Indramayu
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-12 table-responsive">
            <table class="table" id="data_pendaftar">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Asal Sekolah</th>
                        <th>Gelombang</th>
                        <th>Status</th>
                        <th>Daftar Ulang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($data as $p)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$p->nama_siswa}}</td>
                            <td>{{$p->asal_sekolah}}</td>
                            <td>{{$p->gelombang}}</td>
                            <td>@if($p->acc == '1') <p class="text-success">Di Terima</p> @else <p class="text-warning">Menunggu</p> @endif</td>
                            <td>@if($p->daful == '1') <p class="text-success">OK</p> @else <p class="text-danger">NOT OK</p>@endif</td>
                            <td>
                                @if($p->acc == '0' || $p->daful == '0')
                                Belum Di Terima, Belum Daftar Ulang
                                @elseif($p->acc == '1' || $p->daful == '0')
                                Sudah Di Terima, Belum Daftar Ulang
                                @elseif($p->acc = '1' || $p->daful == '1')
                                <a href="" class="btn btn-primary btn-block"><i class="fas fa-download"></i> Download Data Disini</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>