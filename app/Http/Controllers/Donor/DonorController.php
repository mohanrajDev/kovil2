<?php

namespace App\Http\Controllers\Donor;

use App\Donor;
use App\Donation;
use App\Imports\DonorsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::paginate(10);
        return view('donor.donors', ['donors' => $donors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $donor = new Donor;
       $donor->name = $request->name;
       $donor->type = $request->type;
       $donor->address1 = $request->address1;
       $donor->address2 = $request->address2;
       $donor->district = $request->district;
       $donor->state = $request->state;
       $donor->pincode = $request->pincode;
       $donor->others_detail = $request->others_detail;
       $donor->save();

       return redirect()->route('donors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }

    public function import(Request $request) 
    {
        if ($request->hasFile('donor')) {
            Excel::import(new DonorsImport, $request->donor);
            return back()->with('success', 'All good!');
        }
    }

    /**
     * Display a listing of the donations.
     *
     * @return \Illuminate\Http\Response
     */
    public function donations()
    {
        $donations = Donation::paginate(10);
        return view('donor.donations', ['donations' =>  $donations]);
    }

    /**
     * Show the form for add donation for the specified donor.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function donationForm(Donor $donor)
    {
        //
    }

    /**
     * Add the specified donor's donation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function donate(Request $request, Donor $donor)
    {
        //
    }
}
