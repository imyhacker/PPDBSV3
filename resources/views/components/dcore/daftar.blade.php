<form action="{{route('kirim_data')}}" method="POST">
        @csrf
<div class="row">
   
<div class="col-md-12">
        <h3>Data Gelombang dan Jurusan</h3>
    </div>
    <div class="col-md-6 mt-3">
        <label>Gelombang</label>
        <input type="text" value="{{$gelombang->gelombang ?? 'Belum Ada Gelombang'}}" name="gelombang" class="form-control" disabled>
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Gelombang</label>
        <input type="text" value="{{$gelombang->status_gelombang ?? 'Belum Di Buka'}}" class="form-control" disabled>
    </div>
    <div class="col-md-12 mt-3">
        <label>Jurusan Yang Di Ambil <sup class="text-danger">*</sup></label>
        <select {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="jurusan" @endif" class="form-control @error('jurusan') is-invalid @enderror">
            <option disabled selected value>Pilih Jurusan</option>
            @foreach($jurusan as $jr)
            <option value="{{$jr->jurusan}}">{{$jr->jurusan}}</option>
            @endforeach
        </select>
        @error('jurusan')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-12 mt-3">
        <h3>Data Pendaftar</h3>
    </div>
    <div class="col-md-12 mt-3">
        <label>Nama Siswa <sup class="text-danger">*</sup></label>
        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" placeholder="Nama Siswa" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="nama_siswa" @endif>
        @error('nama_siswa')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6 mt-3">
        <label>Tempat Lahir <sup class="text-danger">*</sup></label>
        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir Siswa"{{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="tempat_lahir" @endif>
        @error('tempat_lahir')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6 mt-3">
        <label>Tanggal Lahir <sup class="text-danger">*</sup></label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="Tanggal Lahir Siswa" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="tanggal_lahir" @endif>
        @error('tanggal_lahir')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6 mt-3">
        <label>Asal Sekolah <sup class="text-danger">*</sup></label>
        <select class="form-control @error('asal_sekolah') is-invalid @enderror"
                id="select2Multiple" style="width:100%!important;" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="asal_sekolah" @endif>
                <option disabled selected value>Pilih Asal Sekolah</option>
                @foreach($smp as $s)
                <option value="{{$s->smp}}">{{$s->smp}}</option>  
                @endforeach           
              </select>
              @error('asal_sekolah')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6 mt-3">
        <label>Agama <sup class="text-danger">*</sup></label>
        <select class="form-control @error('agama') is-invalid @enderror" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="agama" @endif">
                <option disabled selected value>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Lainnya">Lainnya</option>          
              </select>
              @error('agama')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="col-md-12 mt-3">
        <h3>Data Orang Tua</h3>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nama Ayah</label>
        <input type="text" class="form-control" placeholder="Nama Ayah" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="nama_ayah" @endif>
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ayah</label>
        <select class="form-control" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="status_ayah" @endif>
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nama Ibu</label>
        <input type="text" class="form-control" placeholder="Nama Ibu" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="nama_ibu" @endif>
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ibu</label>
        <select class="form-control" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="status_ibu" @endif>
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>

    <div class="col-md-12 mt-3">
        <h3>Data Kontak</h3>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nomor HP Ayah</label>
        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_ayah" @endif>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nomor HP Ibu</label>
        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_ibu" @endif>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nomor HP Siswa</label>
        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_siswa" @endif>
    </div>
    <div class="col-md-6 mt-3">
    <label>Rekomendasi Masuk</label>
        <input type="text" class="form-control" placeholder="Rekomendasi Masuk Telematika" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="rekomendasi" @endif>
    </div>
    <div class="col-md-12 mt-3">
        <label>Alamat</label>
        <textarea name="" class="form-control" placeholder="Alamat Lengkap Beserta RT & RW" {{$form}} @if($gelombang == null) @elseif($gelombang->status_gelombang == 'Buka') name="alamat" @endif cols="30" rows="10"></textarea>
    </div>
      <div class="col-md-12 mt-3">
        <input {{$form}} @if($gelombang == null) class="btn btn-outline-danger btn-block" value="Belum Di Buka!" @elseif($gelombang->status_gelombang == 'Buka')  class="btn btn-outline-success btn-block" value="Kirim Datamu!" type="submit" @endif 
        >
    </div>
</div>
</form>
