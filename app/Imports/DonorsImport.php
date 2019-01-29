<?php

namespace App\Imports;

use App\Donor;
use Maatwebsite\Excel\Concerns\ToModel;

class DonorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (count($row) > 2 && $row[1] != 'Name') {
           $donor = new Donor;
           $donor->name = $row[1];
           $donor->address1 = $row[2];
           $donor->address2 = $row[3];
           $donor->district = $row[5];
           $donor->state = $row[6];
           $donor->pincode = intval($row[7]);
           $donor->type = $row[8];
           $donor->save();

           return $donor;
        }
    }
}
