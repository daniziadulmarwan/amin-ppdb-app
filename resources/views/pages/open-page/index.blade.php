<section class="mb-5 mt-4 mt-md-0 pt-sm-5">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 col-md-10">
              <div class="home-wrapper">
                    <div class="mb-5 d-flex flex-column align-items-center">
                        <a href="/" class="d-block auth-logo text-center">
                            <img src="/images/logo.png" alt="wwfr" height="80">
                            <h3 class="text-uppercase mt-2 mb-0 text-white">Form Pendaftaran Peserta Didik Baru</h3>
                            <h4 class="text-uppercase mb-0 text-white">Madrasah Al Amin Puloerang</h4>
                            <h6 class="text-uppercase text-white">Lakbok - Ciamis - Jawa Barat</h6>
                        </a>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                        </div>
                    </div>

                    {{-- TODO::Session Alert --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Selamat</strong> {{ session('success') }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- TODO::Session Alert --}}

                    {{-- TODO:Form --}}
                    <form action="/" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- TODO::First Card --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Registrasi Peserta Didik</h5>
                                        <h6 class="text-primary">Pilih Jenjang Sekolah | <span class="text-danger">Semua harus diisi</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                            <div class="row g-3">
                                                <div class="col">
                                                    <select class="form-select @error('jenjang') is-invalid @enderror" name="jenjang">
                                                        <option value="" selected>Jenjang Sekolah</option>
                                                        <option value="1" @if (old('jenjang') == 1) selected @endif>Madrasah Aliyah (MA)</option>
                                                        <option value="2" @if (old('jenjang') == 2) selected @endif>Madrasah Tsanawiyah (MTs)</option>
                                                    </select>
                                                    @error('jenjang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <select class="form-select @error('is_pesantren') is-invalid @enderror" name="is_pesantren">
                                                        <option value="" selected>Mukim/Asrama</option>
                                                        <option value="1" @if (old('is_pesantren') == 1) selected @endif>Pesantren</option>
                                                        <option value="2" @if (old('is_pesantren') == 2) selected @endif>Tanpa Pesantren</option>
                                                    </select>
                                                    @error('is_pesantren')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-2">
                                                <div class="col">
                                                    <input id="startYear" class="form-control date-picker-year @error('tahun_lulus') is-invalid @enderror" placeholder="Lulusan Tahun" name="tahun_lulus" value="{{ old('tahun_lulus') }}" autocomplete="off">
                                                    @error('tahun_lulus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
        
                                                <div class="col">
                                                    <select class="form-select @error('jenis_pendaftaran') is-invalid @enderror" name="jenis_pendaftaran" id="jenisPendaftaran">
                                                        <option value="" selected>Jenis Pendaftaran</option>
                                                        <option value="1" @if (old('jenis_pendaftaran') == 1) selected @endif>Siswa Baru</option>
                                                        <option value="2" @if (old('jenis_pendaftaran') == 2) selected @endif>Pindahan</option>
                                                    </select>
                                                    @error('jenis_pendaftaran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row g-3 mt-2">
                                                <div class="col">
                                                   
                                                </div>
        
                                                <div class="col d-none" id="pilihanKelas">
                                                    <select class="form-select @error('pilihan_kelas') is-invalid @enderror" name="pilihan_kelas">
                                                        <option value="" selected>Pindah Ke Kelas</option>
                                                        <option value="8" @if (old('pilihan_kelas') == 8) selected @endif>8</option>
                                                        <option value="9" @if (old('pilihan_kelas') == 9) selected @endif>9</option>
                                                        <option value="11" @if (old('pilihan_kelas') == 11) selected @endif>11</option>
                                                        <option value="12" @if (old('pilihan_kelas') == 12) selected @endif>12</option>
                                                    </select>
                                                    @error('pilihan_kelas')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::First Card --}}

                        {{-- TODO::Second Card --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Profil dan Biodata</h5>

                                        <h6 class="text-primary mt-4">Biodata | <span class="text-danger">Semua harus diisi</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="Nama Lengkap" name="fullname" value="{{ old('fullname') }}" autocomplete="off">
                                            @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                            <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="Nomer Induk Siswa Nasional / NISN" name="nisn" value="{{ old('nisn') }}">
                                            @error('nisn')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomer Induk Kewarganegaraan / NIK" name="nik" value="{{ old('nik') }}">
                                            @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                                                    <option selected>Jenis Kelamin</option>
                                                    <option value="1" @if (old('gender') == 1) selected @endif>Laki-laki</option>
                                                    <option value="2" @if (old('gender') == 2) selected @endif>Perempuan</option>
                                                </select>
                                                @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control @error('born_place') is-invalid @enderror" placeholder="Tempat Lahir" name="born_place" value="{{ old('born_place') }}">
                                                @error('born_place')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" id="datepicker" class="form-control @error('born_date') is-invalid @enderror" placeholder="Tanggal Lahir" autocomplete="off" name="born_date" value="{{ old('born_date') }}">
                                                @error('born_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('status_keluarga') is-invalid @enderror" name="agama">
                                                    <option selected>Agama</option>
                                                    <option value="1" @if (old('agama') == 1) selected @endif>Islam</option>
                                                    <option value="2" @if (old('agama') == 2) selected @endif>Kristen</option>
                                                    <option value="3" @if (old('agama') == 3) selected @endif>Katolik</option>
                                                    <option value="4" @if (old('agama') == 3) selected @endif>Hindu</option>
                                                    <option value="5" @if (old('agama') == 3) selected @endif>Budha</option>
                                                    <option value="6" @if (old('agama') == 3) selected @endif>Kong Hu Chu</option>
                                                    <option value="7" @if (old('agama') == 6) selected @endif>Lainnya</option>
                                                </select>
                                                @error('agama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('status_keluarga') is-invalid @enderror" name="status_keluarga">
                                                    <option selected>Status Dalam Keluarga</option>
                                                    <option value="1" @if (old('status_keluarga') == 1) selected @endif>Anak Kandung</option>
                                                    <option value="2" @if (old('status_keluarga') == 2) selected @endif>Anak Tiri</option>
                                                    <option value="3" @if (old('status_keluarga') == 3) selected @endif>Kerabat</option>
                                                    <option value="4" @if (old('status_keluarga') == 3) selected @endif>Anak Angkat</option>
                                                    <option value="5" @if (old('status_keluarga') == 6) selected @endif>Lainnya</option>
                                                </select>
                                                @error('status_keluarga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Jumlah Saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara') }}">
                                                @error('jumlah_saudara')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                            <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" placeholder="Anak Ke-" name="anak_ke" value="{{ old('anak_ke') }}">
                                                @error('anak_ke')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('hobi') is-invalid @enderror" name="hobi">
                                                    <option selected>Hobi</option>
                                                    <option value="1" @if (old('hobi') == 1) selected @endif>Olahraga</option>
                                                    <option value="2" @if (old('hobi') == 2) selected @endif>Kesenian</option>
                                                    <option value="3" @if (old('hobi') == 3) selected @endif>Membaca</option>
                                                    <option value="4" @if (old('hobi') == 4) selected @endif>Menulis</option>
                                                    <option value="5" @if (old('hobi') == 5) selected @endif>Jalan-jalan</option>
                                                    <option value="6" @if (old('hobi') == 6) selected @endif>Lainnya</option>
                                                </select>
                                                @error('hobi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('cita_cita') is-invalid @enderror" name="cita_cita">
                                                    <option selected>Cita-cita</option>
                                                    <option value="1" @if (old('cita_cita') == 1) selected @endif>PNS</option>
                                                    <option value="2" @if (old('cita_cita') == 2) selected @endif>TNI/Polri</option>
                                                    <option value="3" @if (old('cita_cita') == 3) selected @endif>Guru/Dosen</option>
                                                    <option value="4" @if (old('cita_cita') == 4) selected @endif>Dokter</option>
                                                    <option value="5" @if (old('cita_cita') == 5) selected @endif>Politikus</option>
                                                    <option value="6" @if (old('cita_cita') == 6) selected @endif>Wiraswasta</option>
                                                    <option value="7" @if (old('cita_cita') == 7) selected @endif>Seniman/Artis</option>
                                                    <option value="8" @if (old('cita_cita') == 8) selected @endif>Ilmuwan</option>
                                                    <option value="9" @if (old('cita_cita') == 9) selected @endif>Agamawan</option>
                                                    <option value="10" @if (old('cita_cita') == 10) selected @endif>Lainnya</option>
                                                </select>
                                                @error('cita_cita')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                            <input type="number" class="form-control @error('wa_number') is-invalid @enderror" placeholder="Nomor Whatsapp | contoh: 085352594403" autocomplete="off" value="{{ old('wa_number') }}" name="wa_number">
                                            @error('wa_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Pribadi" autocomplete="off" value="{{ old('email') }}" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Second Card --}}

                        {{-- TODO::Address Card --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5>Alamat Lengkap</h5>

                                        <h6 class="text-primary mt-4">Alamat | <span class="text-danger">Semua harus diisi</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="mb-3">
                                            <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Alamat Sesuai KK | contoh: Dsn. Sukamukti / Jl. Pahlawan Gg V" name="address" rows="4">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('rt') is-invalid @enderror" placeholder="RT" name="rt" value="{{ old('rt') }}" autocomplete="off">
                                                @error('rt')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control @error('rw') is-invalid @enderror" placeholder="RW" name="rw" value="{{ old('rw') }}" autocomplete="off">
                                                @error('rw')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" placeholder="Kode Pos" value="{{ old('kode_pos') }}" name="kode_pos">
                                                @error('kode_pos')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror 
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('province') is-invalid @enderror" id="propinsi" name="province">
                                                    <option value="" selected>Propinsi</option>
                                                    @foreach ($propinsi as $item)
                                                        @if (old('province') == $item->id)
                                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('province')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('regency') is-invalid @enderror" id="kabupaten" name="regency">
                                                    <option value="{{ old('regency') }}" selected>Kabupaten/Kota</option>
                                                </select>
                                                @error('regency')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('district') is-invalid @enderror" id="kecamatan" name="district">
                                                    <option value="{{ old('district') }}" selected>Kecamatan</option>
                                                </select>
                                                @error('district')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('village') is-invalid @enderror" id="kelurahan" name="village">
                                                    <option value="{{ old('village') }}" selected>Desa/Kelurahan</option>
                                                </select>
                                                @error('village')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Address Card --}}

                        {{-- TODO::Third Card --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Profil Orang Tua</h5>

                                        <h6 class="text-primary mt-4">Biodata | <span class="text-danger">Semua harus diisi</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('no_kk') is-invalid @enderror" placeholder="Nomor KK" name="no_kk" autocomplete="off" value="{{ old('no_kk') }}">
                                                @error('no_kk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('nik_ayah') is-invalid @enderror" placeholder="NIK Ayah" name="nik_ayah" autocomplete="off" value="{{ old('nik_ayah') }}">
                                                @error('nik_ayah')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" name="nama_ayah" autocomplete="off" value="{{ old('nama_ayah') }}">
                                                @error('nama_ayah')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah">
                                                    <option value="" selected>Pekerjaan Ayah</option>
                                                    <option value="1" @if (old('pekerjaan_ayah') == 1) selected @endif>Tidak Bekerja</option>
                                                    <option value="2" @if (old('pekerjaan_ayah') == 2) selected @endif>Buruh(Tani,Pabrik,Bangunan)</option>
                                                    <option value="3" @if (old('pekerjaan_ayah') == 3) selected @endif>Dokter/Bidan/Perawat</option>
                                                    <option value="4" @if (old('pekerjaan_ayah') == 4) selected @endif>Guru/Dosen</option>
                                                    <option value="5" @if (old('pekerjaan_ayah') == 5) selected @endif>Nelayan</option>
                                                    <option value="6" @if (old('pekerjaan_ayah') == 6) selected @endif>Pedagang</option>
                                                    <option value="7" @if (old('pekerjaan_ayah') == 7) selected @endif>Pegawai Swasta</option>
                                                    <option value="8" @if (old('pekerjaan_ayah') == 8) selected @endif>Pengacara/Hakim/Jaksa/Notaris</option>
                                                    <option value="9" @if (old('pekerjaan_ayah') == 9) selected @endif>Petani/Peternak</option>
                                                    <option value="10" @if (old('pekerjaan_ayah') == 10) selected @endif>PNS</option>
                                                </select>
                                                @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('penghasilan_ayah') is-invalid @enderror" name="penghasilan_ayah">
                                                    <option value="" selected>Penghasilan Ayah</option>
                                                    <option value="1" @if (old('penghasilan_ayah') == 1) selected @endif><= Rp. 500.000</option>
                                                    <option value="2" @if (old('penghasilan_ayah') == 2) selected @endif>Rp. 500.000 - Rp. 1.000.000</option>
                                                    <option value="3" @if (old('penghasilan_ayah') == 3) selected @endif>Rp. 1.000.001 - Rp. 2.000.000</option>
                                                    <option value="4" @if (old('penghasilan_ayah') == 4) selected @endif>Rp. 2.000.001 - Rp. 3.000.000</option>
                                                    <option value="5" @if (old('penghasilan_ayah') == 5) selected @endif>Rp. 3.000.001 - Rp. 4.000.000</option>
                                                    <option value="6" @if (old('penghasilan_ayah') == 6) selected @endif>Rp. 4.000.001 - Rp. 5.000.000</option>
                                                    <option value="7" @if (old('penghasilan_ayah') == 7) selected @endif>>= Rp. 5.000.001</option>
                                                </select>
                                                @error('penghasilan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="number" class="form-control @error('nik_ibu') is-invalid @enderror" placeholder="NIK Ibu" name="nik_ibu" autocomplete="off" value="{{ old('nik_ibu') }}">
                                                @error('nik_ibu')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" name="nama_ibu" autocomplete="off" value="{{ old('nama_ibu') }}">
                                                @error('nama_ibu')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <select class="form-select @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu">
                                                    <option value="" selected>Pekerjaan Ibu</option>
                                                    <option value="1" @if (old('pekerjaan_ibu') == 1) selected @endif>Tidak Bekerja</option>
                                                    <option value="2" @if (old('pekerjaan_ibu') == 2) selected @endif>Buruh(Tani,Pabrik,Bangunan)</option>
                                                    <option value="3" @if (old('pekerjaan_ibu') == 3) selected @endif>Dokter/Bidan/Perawat</option>
                                                    <option value="4" @if (old('pekerjaan_ibu') == 4) selected @endif>Guru/Dosen</option>
                                                    <option value="5" @if (old('pekerjaan_ibu') == 5) selected @endif>Nelayan</option>
                                                    <option value="6" @if (old('pekerjaan_ibu') == 6) selected @endif>Pedagang</option>
                                                    <option value="7" @if (old('pekerjaan_ibu') == 7) selected @endif>Pegawai Swasta</option>
                                                    <option value="8" @if (old('pekerjaan_ibu') == 8) selected @endif>Pengacara/Hakim/Jaksa/Notaris</option>
                                                    <option value="9" @if (old('pekerjaan_ibu') == 9) selected @endif>Petani/Peternak</option>
                                                    <option value="10" @if (old('pekerjaan_ibu') == 10) selected @endif>PNS</option>
                                                </select>
                                                @error('pekerjaan_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Third Card --}}

                        {{-- TODO::Fourth Card --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Informasi Sekolah</h5>

                                        <h6 class="text-primary mt-4">Sekolah sebelumnya | <span class="text-danger">Asal sekolah harus diisi</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Asal Sekolah | contoh: SDN Ketawanggede IV" name="asal_sekolah" value="{{ old('asal_sekolah') }}">
                                                @error('asal_sekolah')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control @error('seri_ijazah') is-invalid @enderror" placeholder="Nomor Seri Ijazah (Opsional)" name="seri_ijazah" value="{{ old('seri_ijazah') }}">
                                                @error('seri_ijazah')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Fourth Card --}}

                        {{-- TODO::Fifth Card --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Upload Berkas</h5>

                                        <h6 class="text-primary mt-4">Format berupa jpg, jpeg, png | <span class="text-danger">Ukuran file maksimal 2MB | </span><span class="text-success">File adalah hasil scan</h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <label for="formFileSm" class="form-label">Kartu Keluarga <span class="text-danger">*</span></label>
                                                    <input class="form-control @error('kk') is-invalid @enderror" id="formFileSm" type="file" name="kk">
                                                    @error('kk')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col mt-3">
                                                <div>
                                                    <label for="formFileSm" class="form-label">Akte <span class="text-danger">*</span></label>
                                                    <input class="form-control  @error('akte') is-invalid @enderror" id="formFileSm" type="file" name="akte">
                                                    @error('akte')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col mt-3">
                                                <div>
                                                    <label for="formFileSm" class="form-label">Pas Foto 3x4 (Jika Ada)</label>
                                                    <input class="form-control" id="formFileSm" type="file" name="foto">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Fifth Card --}}

                        {{-- TODO::Button --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Persetujuan</h5>

                                        <h6 class="text-primary mt-4">Ketentuan Pendaftaran | <span class="text-danger">Harus dicentang</span></h6>

                                        <hr style="border: 1px dashed rgb(157, 238, 218);">

                                        <div class="form-check form-check-success mb-3">
                                            <input class="form-check-input @error('agree') is-invalid @enderror" type="checkbox" id="formCheckcolor2" name="agree" @if (old('agree'))
                                                checked @endif>
                                            <p>Saya menyatakan bahwa isian data didalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar/palsu, maka saya bersedia menerima sanksi berupa <i>pembatalan</i> sebagai <i>calon siswa Al Amin Puloerang</i></p>
                                            @error('agree')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <input type="hidden" id="tahun" class="tahun" name="tahun_ppdb" value="{{ date('Y') }}">

                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary py-2">Kirim Pendaftaran</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO::Button --}}

                    </form>
                    {{-- TODO:Form --}}
              </div>
          </div>
      </div>
  </div>
</section>

@push('scriptPages')
    <script>
        $(document).ready(function() {
            let value = $('#jenisPendaftaran').val();
            if(value == 2) {
                $('#pilihanKelas').removeClass('d-none');
            }
        });

        $('#jenisPendaftaran').on('change', function() {
            let value = $('#jenisPendaftaran').val()
            if(value == 2) {
                $('#pilihanKelas').removeClass('d-none');
            } else if(value == 1) {
                $('#pilihanKelas').addClass('d-none');
            }
        });
    </script>
@endpush