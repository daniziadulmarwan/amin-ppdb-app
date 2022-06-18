<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data->fullname }}</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <style>
      body {
        font-family: 'Times New Roman', Times, serif;
      }
      .box-lg {
        border: 1px solid #000;
        height: 20px;
        width: 100%;
        flex: 1;
      }
      .box-lg p {
        font-size: 12px;
      }
    </style>
  </head>
  <body onload="window.print()">
    <div class="container-fluid">

      <div class="d-flex justify-content-between">
        <div>
          <img src="/images/kemenag.png" alt="logo-kemenag" width="70">
        </div>
        <div class="text-uppercase text-center fw-semibold float-start">
          <p class="mb-0">Bukti Registrasi Online Peserta Didik Baru</p>
          <p class="mb-0" style="margin-top: -5px;">{{ $data->jenjang == 1 ? 'MA' : 'MTs'}} Al-Amin Puloerang</p>
          <p class="mb-0" style="margin-top: -5px;">Tahun Pelajaran 2022/2023</p>
        </div>
        <div>
          <img src="/images/logo.png" alt="logo-alamin" width="70">
        </div>
      </div>

      <div>
        <div style="border-top: 1px solid #757575; margin-top: 7px;">
        <div style="border-top: 5px solid #000; margin-top: 2px;"></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-12">
          <h6 class="text-center my-3 text-uppercase fw-semibold">Identitas Peserta Didik</h6>
        </div>

        <div class="col-md-12">
          <table>
            <tbody>
              <tr>
                <td class="pe-3">1.</th>
                <td>Nama Lengkap Peserta Didik</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  <strong>{{ $data->fullname }}</strong>
                </td>
              </tr>
              <tr>
                <td>2.</th>
                <td>NISN</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->nisn }}</td>
              </tr>
              <tr>
                <td>3.</th>
                <td>Tempat Tanggal Lahir</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->born_place }}, {{ \Carbon\Carbon::parse($data->born_date)->locale('id')->isoFormat('DD MMMM YYYY') }}</td>
              </tr>
              <tr>
                <td>4.</th>
                <td>Jenis Kelamin</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
              </tr>
              <tr>
                <td>5.</th>
                <td>Agama</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  @if ($data->agama == 1)
                      Islam
                  @elseif($data->agama == 2)
                    Kristen
                  @elseif($data->agama == 3)
                    Katolik
                  @elseif($data->agama == 4)
                    Hindu
                  @elseif($data->agama == 5)
                    Budha
                  @else
                    Kong Hu Chu
                  @endif
                </td>
              </tr>
              <tr>
                <td>6.</th>
                <td>Status Dalam Keluarga</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  @if ($data->status_keluarga == 1)
                    Anak Kandung
                  @elseif($data->status_keluarga == 2)
                    Anak Tiri
                  @elseif($data->status_keluarga == 3)
                    Kerabat
                  @elseif($data->status_keluarga == 4)
                    Anak Angkat
                  @else
                    Lainnya
                  @endif
                </td>
              </tr>
              <tr>
                <td>7.</th>
                <td>Anak Ke-</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->anak_ke }}</td>
              </tr>
              <tr>
                <td>8.</th>
                <td>Alamat Peserta Didik</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ Str::upper($data->address) }} RT {{ $data->rt }} RW {{ $data->rw }}, {{ $desa->name }}</td>
              </tr>
              <tr>
                <td>9.</th>
                <td>Sekolah Asal</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->asal_sekolah }}</td>
              </tr>
              <tr>
                <td>10.</th>
                <td>Nama Orang Tua</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  <tr>
                    <td></td>
                    <td>a. Ayah</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>{{ $data->nama_ayah }}</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>b. Ibu</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>{{ $data->nama_ibu }}</td>
                  </tr>
                </td>
              </tr>
              <tr>
                <td>11.</th>
                <td>Alamat Orang Tua</td>
                <td class="ps-3 pe-2">:</td>
                <td>-</td>
              </tr>
              <tr>
                <td>12.</th>
                <td>Nomor Telepon</td>
                <td class="ps-3 pe-2">:</td>
                <td>{{ $data->wa_number }}</td>
              </tr>
              <tr>
                <td>13.</th>
                <td>Pekerjaan Orang Tua</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  <tr>
                    <td></td>
                    <td>a. Ayah</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>
                      @if ($data->pekerjaan_ayah == 1)
                        Tidak Bekerja
                      @elseif($data->pekerjaan_ayah == 2)
                        Buruh(Tani,Pabrik,Bangunan)
                      @elseif($data->pekerjaan_ayah == 3)
                        Dokter/Bidan/Perawat
                      @elseif($data->pekerjaan_ayah == 4)
                        Guru/Dosen
                      @elseif($data->pekerjaan_ayah == 5)
                        Nelayan
                      @elseif($data->pekerjaan_ayah == 6)
                        Pedagang
                      @elseif($data->pekerjaan_ayah == 7)
                        Pegawai Swasta
                      @elseif($data->pekerjaan_ayah == 8)
                        Pengacara/Hakim/Jaksa/Notaris
                      @elseif($data->pekerjaan_ayah == 9)
                        Petani/Peternak
                      @elseif($data->pekerjaan_ayah == 10)
                        PSN
                      @else
                        Nothing
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>b. Ibu</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>
                      @if ($data->pekerjaan_ibu == 1)
                        Tidak Bekerja
                      @elseif($data->pekerjaan_ibu == 2)
                        Buruh(Tani,Pabrik,Bangunan)
                      @elseif($data->pekerjaan_ibu == 3)
                        Dokter/Bidan/Perawat
                      @elseif($data->pekerjaan_ibu == 4)
                        Guru/Dosen
                      @elseif($data->pekerjaan_ibu == 5)
                        Nelayan
                      @elseif($data->pekerjaan_ibu == 6)
                        Pedagang
                      @elseif($data->pekerjaan_ibu == 7)
                        Pegawai Swasta
                      @elseif($data->pekerjaan_ibu == 8)
                        Pengacara/Hakim/Jaksa/Notaris
                      @elseif($data->pekerjaan_ibu == 9)
                        Petani/Peternak
                      @elseif($data->pekerjaan_ibu == 10)
                        PSN
                      @else
                        Nothing
                      @endif
                    </td>
                  </tr>
                </td>
              </tr>
              <tr>
                <td>14.</th>
                <td>Wali Peserta Didik</td>
                <td class="ps-3 pe-2">:</td>
                <td>
                  <tr>
                    <td></td>
                    <td>a. Nama Wali</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>b. Nomor Telepon</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>c. Alamat</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>d. Pekerjaan</td>
                    <td class="ps-3 pe-2">:</td>
                    <td>-</td>
                  </tr>
                </td>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>

      <section class="row mt-5 mb-5">
        <div class="col-12">
          <div class="d-flex justify-content-around">
            <div>
                @if ($data->foto)
                    <img src="/storage/{{ $data->foto }}" class="mt-2" width="100">
                @else
                    <img class="mt-2" src="/images/frame.png" alt="student-pp" width="100">
                @endif
              {{-- <img src="/images/frame.png" alt="" width="100"> --}}
            </div>
            <div class="text-center">
              <p class="mb-0">Ciamis, <script>document.write(new Date().getDate())</script> Juni 2022</p>
              <p class="mb-0" style="margin-top: -5px;">Tanda Tangan</p>
              <p class="mb-0" style="margin-top: -5px;">Orang Tua/Wali Murid</p>
              <div style="padding-top: 75px;">......................................</div>
            </div>
          </div>
        </div>
      </section>

      <footer style="margin-top: -5px;">
        <div class="box-lg text-center">
          <p class="text-uppercase fw-semibold">PPDB MA Al Amin Puloerang 2022/2023</p>
        </div>
        <p style="font-size: 9px;text-transform: uppercase;">Registration Number : {{ $data->reg_number }}</p>
      </footer>

    </div>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>