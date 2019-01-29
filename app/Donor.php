<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    public function getAddressAttribute()
    {
        $address1 = ($this->address1 != '') ? $this->address1 : '';
        $address2 = ($this->address2 != '') ? $this->address2 : '';
        $district = ($this->district != '') ? $this->district : '';
        $state = ($this->state != '') ? $this->state : '';
        $pincode = ($this->pincode != '') ? $this->pincode : '';
        return  $address1 . ', ' . $address2 . ', ' . $district . ', ' . $state . ' - ' . $pincode . '.';
    }
}
