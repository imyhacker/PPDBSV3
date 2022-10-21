<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">
                Formulir Pendaftaran Online SMK Telematika Indramayu
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            <form action="{{route('yes_daftar')}}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <h3>Data Gelombang dan Jurusan</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Gelombang<sup class="text-danger">*</sup></label>
                        <input type="text" value="{{$gelombang->gelombang ?? 'Belum Ada Gelombang'}}" name="gelombang"
                            class="form-control disabl" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Status Gelombang</label>
                        <input type="text" value="{{$gelombang->status_gelombang ?? 'Belum Di Buka'}}"
                            class="form-control" disabled>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Jurusan Yang Di Ambil <sup class="text-danger">*</sup></label>
                        <select {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka')
                            name="jurusan" @endif" class="form-control @error('jurusan') is-invalid @enderror">
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
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror"
                            placeholder="Nama Siswa" {{$form}} @if($gelombang==null)
                            @elseif($gelombang->status_gelombang == 'Buka') name="nama_siswa" @endif
                        value="{{old('nama_siswa')}}">
                        @error('nama_siswa')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Nomor Induk Kependudukan (NIK) Milik Siswa (Ada Di KK) <sup
                                class="text-danger">*</sup></label>
                        <input type="number" maxlength="16"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            class="form-control @error('nik') is-invalid @enderror" placeholder="NIK Ada Di KK"
                            {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="nik"
                        @endif value="{{old('nik')}}">
                        @error('nik')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="jenis_kelamin"
                            @endif>
                            <option disabled selected value>Pilih Jenis Kelamin</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>

                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Tempat Lahir <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            placeholder="Tempat Lahir Siswa" {{$form}} @if($gelombang==null)
                            @elseif($gelombang->status_gelombang == 'Buka') name="tempat_lahir" @endif
                        value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Tanggal Lahir <sup class="text-danger">*</sup></label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            placeholder="Tanggal Lahir Siswa" {{$form}} @if($gelombang==null)
                            @elseif($gelombang->status_gelombang == 'Buka') name="tanggal_lahir" @endif>
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Asal Sekolah <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror"
                            placeholder="Asal Sekolah SMP" {{$form}} @if($gelombang==null)
                            @elseif($gelombang->status_gelombang == 'Buka') name="asal_sekolah" @endif
                        value="{{old('asal_sekolah')}}">

                        @error('asal_sekolah')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Agama <sup class="text-danger">*</sup></label>
                        <select class="form-control @error('agama') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="agama" @endif">
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
                        <label>Hobi <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('hobi') is-invalid @enderror" placeholder="Hobi"
                            {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="hobi"
                        @endif value="{{old('hobi')}}">
                        @error('hobi')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Cita Cita <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('cita') is-invalid @enderror"
                            placeholder="Cita Cita" {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang
                        == 'Buka') name="cita" @endif value="{{old('cita')}}">
                        @error('cita')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mt-3">
                        <h3>Data Orang Tua</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Nama Ayah<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror"
                            placeholder="Nama Ayah" {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang
                        == 'Buka') name="nama_ayah" @endif value="{{old('nama_ayah')}}">
                        @error('nama_ayah')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Status Ayah<sup class="text-danger">*</sup></label>
                        <select class="form-control @error('status_ayah') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="status_ayah"
                            @endif>
                            <option disabled selected value>Pilih Status</option>
                            <option value="Masih Ada">Masih Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>

                        </select>
                        @error('status_ayah')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Pekerjaan Ayah<sup class="text-danger">*</sup></label>
                        <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="pekerjaan_ayah"
                            @endif>
                            <option disabled selected value>Pilih Pekerjaan</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="Guru">Guru</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        @error('pekerjaan_ayah')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Nama Ibu<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror"
                            placeholder="Nama Ibu" {{$form}} @if($gelombang==null) @elseif($gelombang->status_gelombang
                        == 'Buka') name="nama_ibu" @endif value="{{old('nama_ibu')}}">
                        @error('nama_ibu')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Status Ibu<sup class="text-danger">*</sup></label>
                        <select class="form-control @error('status_ibu') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="status_ibu"
                            @endif>
                            <option disabled selected value>Pilih Status</option>
                            <option value="Masih Ada">Masih Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>

                        </select>
                        @error('status_ibu')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Pekerjaan Ibu<sup class="text-danger">*</sup></label>
                        <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="pekerjaan_ibu"
                            @endif>
                            <option disabled selected value>Pilih Pekerjaan</option>
                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="Guru">Guru</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        @error('pekerjaan_ibu')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <h3>Data Kontak</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Nomor HP Ayah</label>
                        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_ayah" @endif
                        value="{{old('hp_ayah')}}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Nomor HP Ibu</label>
                        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_ibu" @endif
                        value="{{old('hp_ibu')}}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Nomor HP Siswa</label>
                        <input type="text" class="form-control" placeholder="Ex: 08xxxxxxxx" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="hp_siswa" @endif
                        value="{{old('hp_siswa')}}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Rekomendasi Masuk</label>
                        <input type="text" class="form-control" placeholder="Rekomendasi Masuk Telematika" {{$form}}
                            @if($gelombang==null) @elseif($gelombang->status_gelombang == 'Buka') name="rekomendasi"
                        @endif value="{{old('rekomendasi')}}">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Alamat<sup class="text-danger">*</sup></label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            placeholder="Alamat Lengkap Beserta RT & RW" {{$form}} @if($gelombang==null)
                            @elseif($gelombang->status_gelombang == 'Buka') name="alamat" @endif cols="30" rows="10" value="{{old('alamat')}}"></textarea>
                        @error('alamat')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <input {{$form}} @if($gelombang==null) class="btn btn-outline-danger btn-block"
                            value="Belum Di Buka!" @elseif($gelombang->status_gelombang == 'Buka') class="btn
                        btn-outline-success btn-block" value="Kirim Datamu!" type="submit" @endif
                        >
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hi Guys</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Selamat Datang Di Web PPDB SMK Telematika Indramayu 2023 / 2024, ada beberapa aturan sebelum mengisi
                    form pengisian di bawah ini, seperti
                </p>
                <ul>
                    <li>Isikan data dengan benar sesuai yang ada pada Kartu Keluarga</li>
                    <li>Perhatikan Status Gelombang Apakah Buka Atau Tutup</li>
                    <li>Perhatikan Tanda ( <span class="badge bg-danger">*</span> ), Jika ada tanda tersebut wajib
                        diisi, jika tidak diisi maka pendaftaran anda gagal</li>
                    <li>Sebelum mendaftar cek terlebih dahulu apakah data anda sudah ada atau belum pada link <a
                            href="{{url('/cek')}}"> <span class="badge bg-success">Disini</span></a></li>
                    <li>Jika sudah mengisi silahkan cek data anda di link <a href="{{url('/cek')}}"> <span
                                class="badge bg-success">Disini</span></a></li>
                    <li>Usahakan data rekomendasi terisi, agar kami lebih mudah ketika mengecek data anda</li>

                </ul>
                <p>
                    Terima kasih telah mendaftar di sekolah kami SMK Telematika Indramayu, jadi bagian telematika adalah
                    suatu langkah awal yang baik, Terima kasih.
                </p>
                <p>
                    Jangan lupa cek ya datamu !
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
