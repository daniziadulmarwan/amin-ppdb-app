<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $students = Pendaftaran::select('id', 'reg_number', 'fullname', 'nisn', 'jenjang', 'asal_sekolah', 'status')->get();
        return view('admin.student.index', compact('students'));
    }

    public function destroy($id)
    {
        $student = Pendaftaran::find($id);

        if ($student->kk) {
            Storage::delete($student->kk);
        }

        if ($student->akte) {
            Storage::delete($student->kk);
        }

        if ($student->foto) {
            Storage::delete($student->kk);
        }

        Pendaftaran::destroy($id);
        return redirect('/admin/student')->with('success', 'Berhasil hapus data');
    }

    public function show($id)
    {
        $data = Pendaftaran::find($id);
        $desa = Village::find($data->village);
        $pdf = PDF::loadView('admin.student.print', compact('data', 'desa'))->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function status(Request $request)
    {
        $data = Pendaftaran::find($request->id);

        $data->status = $request->status;
        $data->save();
        return redirect('/admin/student')->with('success', 'Status berhasil diperbaharui');
    }

    public function edit($id)
    {
        $data = Pendaftaran::find($id);
        $propinsi = Province::all();
        return view('admin.student.edit', compact('data', 'propinsi'));
    }

    public function update(Request $request, $id)
    {
        $student = Pendaftaran::find($id);

        $rules = [
            'reg_number' => 'required',

            'jenjang' => ['required', 'in:1,2'],
            'is_pesantren' => ['required', 'in:1,2'],
            'tahun_lulus' => ['required'],
            'jenis_pendaftaran' => ['required'],

            'tahun_ppdb' => ['required'],

            'fullname' => ['required'],
            'nisn' => ['required', 'max:12'],
            'nik' => ['required'],
            'gender' => ['required', 'in:1,2'],
            'born_place' => ['required'],
            'born_date' => ['required'],
            'agama' => ['required', 'in:1,2,3,4,5,6'],
            'status_keluarga' => ['required', 'in:1,2,3,4'],
            'jumlah_saudara' => ['required'],
            'anak_ke' => ['required'],
            'hobi' => ['required', 'in:1,2,3,4,5,6'],
            'cita_cita' => ['required', 'in:1,2,3,4,5,6,7,8,9,10'],
            'wa_number' => ['required'],
            'email' => ['required'],

            'address' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
            'kode_pos' => ['required', 'max:5', 'min:5'],
            'province' => ['required'],
            'regency' => ['required'],
            'district' => ['required'],
            'village' => ['required'],

            'no_kk' => ['required'],
            'nik_ayah' => ['required'],
            'nama_ayah' => ['required'],
            'pekerjaan_ayah' => ['required', 'in:1,2,3,4,5,6,7,8,9,10'],
            'penghasilan_ayah' => ['required', 'in:1,2,3,4,5,6,7'],
            'nik_ibu' => ['required'],
            'nama_ibu' => ['required'],
            'pekerjaan_ibu' => ['required', 'in:1,2,3,4,5,6,7,8,9,10'],

            'asal_sekolah' => ['required'],
            'seri_ijazah' => ['nullable'],

            'kk' => ['image', 'file', 'max:1024'],
            'akte' => ['image', 'file', 'max:1024'],
            'foto' => ['nullable', 'image', 'file', 'max:1024'],
            'agree' => ['accepted'],
        ];

        $message = [
            'jenjang.required' => 'Pilih salah satu dari jenjang sekolah',
            'jenjang.in' => 'Pilih salah satu dari jenjang sekolah',
            'is_pesantren.required' => 'Pilih salah satu antara pesantren atau tanpa pesantren',
            'is_pesantren.in' => 'Pilih salah satu antara pesantren atau tanpa pesantren',
            'tahun_lulus.required' => 'Tahun kelulusan harus diisi',
            'fullname.required' => 'Nama lengkap harus diisi',
            'gender.required' => 'Pilih salah satu dari jenis kelamin',
            'gender.in' => 'Pilih salah satu dari jenis kelamin',
            'born_place.required' => 'Tempat lahir harus diisi',
            'born_date.required' => 'Tanggal lahir harus diisi',
            'jumlah_saudara.required' => 'Jumlah saudara harus diisi',
            'anak_ke.required' => 'Anak keberapa harus diisi',
            'hobi.required' => 'Pilih salah satu dari hobi, jika tidak punya maka pilih lainnya',
            'cita_cita.required' => 'Pilih salah satu dari cita-cita, jika tidak punya maka pilih lainnya',
            'wa_number' => 'Nomor whatsapp harus diisi',
            'email.required' => 'Email harus diisi',
            'address.required' => 'Alamat harus diisi',
            'kode_pos.required' => 'Kodepos harus diisi',
            'kode_pos.max' => 'Kodepos tidak valid',
            'province.required' => 'Propinsi harus diisi',
            'regency.required' => 'Kabupaten/kota harus diisi',
            'district.required' => 'Kecamatan harus diisi',
            'village.required' => 'Kelurahan/desa harus diisi',
            'no_kk.required' => 'Nomor KK harus diisi',
            'nik_ayah.required' => 'NIK ayah harus diisi',
            'nama_ayah.required' => 'Nama ayah harus diisi',
            'pekerjaan_ayah.required' => 'Pilih salah satu dari pekerjaan ayah',
            'pekerjaan_ayah.in' => 'Pilih salah satu dari pekerjaan ayah',
            'penghasilan_ayah.in' => 'Pilih salah satu dari penghasilan ayah',
            'penghasilan_ayah.required' => 'Pilih salah satu dari penghasilan ayah',
            'nik_ibu.required' => 'NIK ibu harus diisi',
            'nama_ibu.required' => 'Nama ibu harus diisi',
            'pekerjaan_ibu.required' => 'Pilih salah satu dari pekerjaan ibu',
            'pekerjaan_ibu.in' => 'Pilih salah satu dari pekerjaan ibu',
            'agree.accepted' => 'Harus dicentang',
        ];

        $validated = $request->validate($rules, $message);

        // isian apakah pesantren atau bukan
        if ($request->is_pesantren == 1) {
            $validated['is_pesantren'] = 1;
        } else {
            $validated['is_pesantren'] = 0;
        }

        // cek jika ada gambar atau tidak
        if ($request->hasFile('kk')) {
            if ($student->kk) {
                Storage::delete($student->kk);
            }
            $validated['kk'] = $request->file('kk')->store('kk');
        }

        if ($request->hasFile('akte')) {
            if ($student->akte) {
                Storage::delete($student->akte);
            }
            $validated['akte'] = $request->file('akte')->store('akte');
        }

        if ($request->hasFile('foto')) {
            if ($student->foto) {
                Storage::delete($student->foto);
            }
            $validated['foto'] = $request->file('foto')->store('foto');
        }

        $student->update($validated);
        return redirect('/admin/student')->with('success', 'Berhasil ubah data');
    }
}
