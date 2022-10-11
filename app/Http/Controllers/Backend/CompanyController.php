<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CompanyController extends Controller
{




    public function CompanyView(){
        $companies = Company::all();


        return view('company.view_company',compact('companies'));
    }



// employee store
public function CompanyStore(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',

    ]);
    Company::insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }







   public function CompanyDelete($id)
   {
       $company_delete = Company::find($id)->delete();
       return redirect()->back();
   }











}
