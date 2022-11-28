<?php

namespace App\Exports;

use App\Models\Alternatif;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlternatifExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function model(array $row)
    {
        return new Siswa([
            //
            
            'kode_alternatif' => $row[1],
            'nama_alternatif' => $row[2],
            'rarity' => $row[3],
            'role' => $row[4],
            'weapon' => $row[5],
            'element' => $row[6],
        ]);
    }
}
