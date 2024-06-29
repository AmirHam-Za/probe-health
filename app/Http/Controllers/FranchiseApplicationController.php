<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Session;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use App\Models\AdmissionPayment;
use Yajra\DataTables\DataTables;
use App\Models\FranchiseApplication;

class FranchiseApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franchises = FranchiseApplication::paginate(20);
        return view('backend.franchise_data',compact('franchises'));

    }

    // Example of controller method to fetch data for DataTables
public function getFranchisesData(Request $request)
{
    $franchises = FranchiseApplication::select('*');

    return DataTables::of($franchises)
        ->addColumn('DT_RowIndex', function ($franchise) {
            return $franchise->id; // Adjust this based on your actual primary key
        })
        ->addColumn('action', function ($franchise) {
            // Add your action buttons here
            // Example:
            // return '<a href="'.route('franchise_application.show', $franchise->id).'" class="btn btn-success btn-xs">View</a>';
            // return '<a href="'.route('franchise_application.edit', $franchise->id).'" class="btn btn-primary btn-xs">Edit</a>';
            return ''; // Placeholder, modify as needed
        })
        ->rawColumns(['action']) // Ensure HTML is not escaped in 'action' column
        ->toJson();
}



    public function show($id)
    {
        $franchise = FranchiseApplication::find($id);

        return view('franchise_application.franchise_application_view',compact('franchise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //    $franchise = FranchiseApplication::find($id);
    //     return view('franchise_application.franchise_application_edit',compact('franchise'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function franchiseFormPost(Request $request){

        $franchise = new FranchiseApplication();
        $franchise->recommended_by = $request->recommended_by;
        $franchise->recommended_contact_info = $request->recommended_contact_info;
        $franchise->date_of_application = $request->date_of_application;
        $franchise->full_name = $request->full_name;
        $franchise->home_address = $request->home_address;
        $franchise->mobile_no = $request->mobile_no;
        $franchise->home_tel_no = $request->home_tel_no;
        $franchise->dob = $request->dob;
        $franchise->email = $request->email;
        $franchise->nationality = $request->nationality;
        $franchise->sex = $request->sex;
        $franchise->marital_status = $request->marital_status;
        $franchise->education_level = $request->education_level;
        $franchise->university = $request->university;
        $franchise->qualification = $request->qualification;
        $franchise->name_of_company = $request->name_of_company;
        $franchise->business_address = $request->business_address;
        $franchise->position = $request->position;
        $franchise->monthly_income = $request->monthly_income;
        $franchise->date_joined = $request->date_joined;
        $franchise->date_left = $request->date_left;
        $franchise->describe_duties = $request->describe_duties;
        $franchise->prev_name_of_company = $request->prev_name_of_company;
        $franchise->prev_business_address = $request->prev_business_address;
        $franchise->prev_position = $request->prev_position;
        $franchise->prev_monthly_income = $request->prev_monthly_income;
        $franchise->prev_date_joined = $request->prev_date_joined;
        $franchise->prev_date_left = $request->prev_date_left;
        $franchise->prev_reason_for_leaving = $request->prev_reason_for_leaving;
        $franchise->prev_describe_duties = $request->prev_describe_duties;
        $franchise->prev_prev_name_of_company = $request->prev_prev_name_of_company;
        $franchise->prev_prev_business_address = $request->prev_prev_business_address;
        $franchise->prev_prev_position = $request->prev_prev_position;
        $franchise->prev_prev_monthly_income = $request->prev_prev_monthly_income;
        $franchise->prev_prev_date_joined = $request->prev_prev_date_joined;
        $franchise->prev_prev_date_left = $request->prev_prev_date_left;
        $franchise->prev_prev_reason_for_leaving = $request->prev_prev_reason_for_leaving;
        $franchise->prev_prev_describe_duties = $request->prev_prev_describe_duties;
        $franchise->prev_prev_describe_duties = $request->prev_prev_describe_duties;
        $franchise->details_and_year = $request->details_and_year;
        $franchise->why_applying_franchise = $request->why_applying_franchise;
        $franchise->why_do_you_think_make_deal_probe = $request->why_do_you_think_make_deal_probe;
        $franchise->nominee_full_name = $request->nominee_full_name;
        $franchise->nominee_mobile_no = $request->nominee_mobile_no;
        $franchise->nominee_nid_no = $request->nominee_nid_no;
        $franchise->nominee_dob = $request->nominee_dob;
        $franchise->nominee_relation_with_franchise = $request->nominee_relation_with_franchise;
        $franchise->family_member_count = $request->family_member_count;
        $franchise->name_1 = $request->name_1;
        $franchise->current_job_1 = $request->current_job_1;
        $franchise->name_2 = $request->name_2;
        $franchise->current_job_2 = $request->current_job_2;
        $franchise->name_3 = $request->name_3;
        $franchise->current_job_3 = $request->current_job_3;
        $franchise->name_4 = $request->name_4;
        $franchise->current_job_4 = $request->current_job_4;
        $franchise->save();

        $user= new User;
        $user->name = $franchise->full_name;
        $user->email = $franchise->email;
        $user->phone_number = $franchise->mobile_no;
        $user->user_type = 23;
        $user->present_address = $franchise->home_address;
        $user->password = Hash::make(12345);
        $user->save();

         $franchise->user_id = $user->id;
         $franchise->save();
        return redirect()->back()->with('success','Franchise Application is Submited Successlly');
    }

}
