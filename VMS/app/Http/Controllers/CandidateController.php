<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

use App\Models\Candidate;

class CandidateController extends Controller
{

    public function candidateSave(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('Pages.Candidate.Register');
        }

        if($request->isMethod('post'))
        {

            $candidate = new Candidate();

            $candidate->c_initials = $request->c_initials;
            $candidate->c_name = $request->c_name;
            $candidate->c_nameforinitials = $request->c_nameforinitials;
            $candidate->c_dob = $request->c_dob;
            $candidate->c_age = $request->c_age;

            $candidate->c_dis = $request->c_dis;
            $candidate->c_pro = $request->c_pro;
            $candidate->c_sex = $request->c_sex;

            $candidate->c_Cstatus = $request->c_Cstatus;
            $candidate->c_nicp = $request->c_nicp;
            $candidate->c_nicpd = $request->c_nicpd;

            $candidate->c_ds = $request->c_ds;

            $candidate->c_poscode = $request->c_poscode;
            $candidate->c_lcity = $request->c_lcity;
            $candidate->c_ldis = $request->c_ldis;
            $candidate->c_lpro = $request->c_lpro;

            $candidate->save();

            return back()->with('success', 'candidate Successfully Added');
        }
    }

    public function candidates()
    {
        $candidates = Candidate::get();
        return view('Pages.Candidate.search', ['candidates' => $candidates]);
    }


    //Deltete voter details
    public function candidateDelete($id)
    {
        //voter is model name
        Candidate::where('id',$id)->delete();
        return back()->with('success', 'Candidate Removed');
    }
}
