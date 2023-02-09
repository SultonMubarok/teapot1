<?php

namespace App\Imports;

use App\Models\Alternatif;
use Maatwebsite\Excel\Concerns\ToModel;

class AlternatifImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alternatif([
            //
            'kode_alternatif' => $row[1],
            'nama_alternatif' => $row[2],
            'w1' => $row[3],
            'w2' => $row[4],
            'w3' => $row[5],
            'w4' => $row[6],
            'rarity' => $row[7],
            'role' => $row[8],
            'weapon' => $row[9],
            'element' => $row[10],
            'detail' => $row[11],
            'image_char' => $row[12],
            'image_char1' => $row[13],
        ]);
    }
}
