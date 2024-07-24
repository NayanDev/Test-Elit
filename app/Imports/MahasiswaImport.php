<?php

namespace App\Imports;

use App\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Mahasiswa([
            'namaMahasiswa' => $row['nama'],
            'nimMahasiswa' => $row['nim'],
            'angkatanMahasiswa' => $row['angkatan'],
            'judulskripsiMahasiswa' => $row['judulskripsi'],
            'pembimbing1' => $row['pembimbing1'],
            'pembimbing2' => $row['pembimbing2'],
        ]);
    }
}
