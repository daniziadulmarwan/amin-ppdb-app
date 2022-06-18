<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use App\Models\Person;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersonExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Person::all();
        return Pendaftaran::select(
            'reg_number',
            'jenjang',
            'is_pesantren',
            'tahun_lulus',
            'jenis_pendaftaran',
            'tahun_ppdb',
            'fullname',
            'nisn',
            'nik',
            'gender',
            'born_place',
            'born_date',
            'jumlah_saudara',
            'anak_ke',
            'hobi',
            'cita_cita',
            'wa_number',
            'email',
            'address',
            'kode_pos',
            'no_kk',
            'nik_ayah',
            'nama_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'nik_ibu',
            'nama_ibu',
            'pekerjaan_ibu',
            'asal_sekolah',
            'seri_ijazah'
        )->get();
    }
}
