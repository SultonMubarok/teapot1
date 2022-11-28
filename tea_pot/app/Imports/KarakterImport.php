<?php

namespace App\Imports;

use App\Models\Karakter;
use Maatwebsite\Excel\Concerns\ToModel;

class KarakterImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Karakter([
            //
            'name' => $row[8],
            'rarity' => $row[9],
            'role' => $row[10],
            'weapon' => $row[11],
            'element' => $row[12],
        ]);
    }
}
