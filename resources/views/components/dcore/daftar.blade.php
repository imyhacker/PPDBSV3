<div class="row">
    <div class="col-md-6 mt-3">
        <label>Gelombang</label>
        <input type="text" value="{{$gelombang->gelombang}}" class="form-control">
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Gelombang</label>
        <input type="text" value="{{$gelombang->status_gelombang}}" class="form-control">
    </div>
    <div class="col-md-12 mt-3">
        <h3>Data Pendaftar</h3>
    </div>
    <div class="col-md-12 mt-3">
        <label>Nama Siswa</label>
        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa">
    </div>
    <div class="col-md-6 mt-3">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir Siswa" name="tempat_lahir">
    </div>
    <div class="col-md-6 mt-3">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" placeholder="Tanggal Lahir Siswa" name="tanggal_lahir">
    </div>
    <div class="col-md-6 mt-3">
        <label>Asal Sekolah</label>
        <select class="form-control" name="nama_sekolah" 
                id="select2Multiple" style="width:100%!important;">
                <option disabled selected value>Pilih Asal Sekolah</option>
                @foreach($smp as $s)
                <option value="{{$s->smp}}">{{$s->smp}}</option>  
                @endforeach           
              </select>
    </div>
    <div class="col-md-6 mt-3">
        <label>Agama</label>
        <select class="form-control" name="nama_sekolah">
                <option disabled selected value>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Lainnya">Lainnya</option>          
              </select>
    </div>

    <div class="col-md-12 mt-3">
        <h3>Data Orang Tua</h3>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nama Ayah</label>
        <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ayah</label>
        <select class="form-control" name="status_ayah">
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nama Ibu</label>
        <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu">
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ibu</label>
        <select class="form-control" name="status_ibu">
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>

    <div class="col-md-12 mt-3">
        <h3>Data Kontak</h3>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nomor Ayah</label>
        <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ayah</label>
        <select class="form-control" name="status_ayah">
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>
    <div class="col-md-6 mt-3">
        <label>Nama Ibu</label>
        <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu">
    </div>
    <div class="col-md-6 mt-3">
        <label>Status Ibu</label>
        <select class="form-control" name="status_ibu">
                <option disabled selected value>Pilih Status</option>
                <option value="Masih Ada">Masih Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
                       
              </select>
    </div>
</div>