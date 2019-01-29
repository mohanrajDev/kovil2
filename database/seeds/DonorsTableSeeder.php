<?php

use App\Donor;
use Illuminate\Database\Seeder;

class DonorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            $d1 = new Donor;
            $d->name = 'Raghu';
            $d->address1 = 'hgfhfg';
            $d->address2 = 'jhjkkkjk';
            $d->district = 'hgghghghh';
            $d->state = 'kjkjkk';
            $d->pincode =  123456;
            $d->type = 'yearly';
            $d->others_detail = 'jhjhjjhjj';
            $d->save();
        }
    }
}
