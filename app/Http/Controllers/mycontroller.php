<?php

namespace App\Http\Controllers;

use App\Models\adopt;
use App\Models\donate;
use App\Models\conatct;
use App\Models\contact;
use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function insertdonate(Request $req){
    $mydonate = new donate();
    $mydonate->Donor_Name = $req->dname;
    $mydonate->Donor_amount = $req->damount;
    $mydonate->Phone_Number = $req->number;
    $mydonate->Select_Purpose =$req->donationpurpose;
    $mydonate->Save();
    return redirect()->back();
    } 

    public function donation(){
        $donation = donate::all();
        return view('Admin.donation', compact('donation'));
    }


    public function insertcontact(Request $req){
        $mycontact = new contact();
        $mycontact->FisrtName = $req->fname;
        $mycontact->Email = $req->email;
        $mycontact->Number = $req->phone;
        $mycontact->Message = $req->message;
        $mycontact->save();
        return redirect()->back();
    }

    public function fetchcontact(){
        $fetchcontact = contact::all();
        return view('Admin.fetchcontact', compact('fetchcontact'));
    }

    public function adoptpet(Request $req){
        
        $adoptpet = new adopt();
        $adoptpet->Pet_Type = $req->pettype;
        $adoptpet->FirstName = $req->Fname;
        $adoptpet->email = $req->email;
        $adoptpet->number = $req->number;
        $adoptpet->address = $req->address;
        $adoptpet->reasonfor_adoption = $req->reason;
        $adoptpet->previous_experience = $req->experience;
        $adoptpet->payment_method = $req->payment;
        $adoptpet->save();
        return redirect()->route('adoptform')->with('success', 'Pet Adoption Request Sent');

    }
    public function adoptpetdata(){
        $adoptpetdata = adopt::all();
        return view('Admin.adoptpetdata', compact('adoptpetdata'));
    }

}
