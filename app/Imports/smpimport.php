<?php

namespace App\Imports;

use App\Models\Smp;
use Maatwebsite\Excel\Concerns\ToModel;

class smpimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp([
            'smp' => $row[0]
        ]);
    }
}
