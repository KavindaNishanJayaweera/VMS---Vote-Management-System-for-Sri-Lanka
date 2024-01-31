<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

use App\Models\Voter;
use League\Csv\Writer;

class VoterController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Pages.Voter.login');
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'v_nicp'   => 'required',
                'v_name'  => 'required'
            ]);

            $voterNIC = $request->get('v_nicp');
            $voterName = $request->get('v_name');

            // Perform a database query to check if the voter exists
            $voter = DB::table('Voter_Master')
                ->where('v_nicp', $voterNIC)
                ->where('v_name', $voterName)
                ->first();

            if ($voter) {
                // Voter exists, redirect to the add-voter page
                return redirect('/add-voter');
            } else {
                // Voter doesn't exist, show an error message and return to the login page
                return back()->with('fail', 'Wrong Login Details');
            }
        }
    }

    // public function login(Request $request)
    // {
    //     if($request->isMethod('get'))
    //     {
    //         return view('Pages.Voter.login');
    //     }

    //     if($request->isMethod('post'))
    //     {
    //         $this->validate($request, [
    //             'v_nicp'   => 'required',
    //             'v_name'  => 'required'
    //            ]);

    //            $voter = array(
    //             'v_nicp'  => $request->get('v_nicp'),
    //             'v_name' => $request->get('v_name')
    //            );

    //            if($voter)
    //            {
    //             return redirect('/add-voter')->with('fail', 'Wrong Login Details');
    //            }
    //            else
    //            {
    //             return back()->with('fail', 'Wrong Login Details');
    //            }
    //     }
    // }

    public function save(Request $request)
    {
        if($request->isMethod('get'))
        {
            ///return view('company::add_admin');
            return view('Pages.Voter.Register');
        }

        if($request->isMethod('post'))
        {
            $this->validate($request, [
             'v_name'   => 'required',
             'v_dob'   => 'required',
              //'v_age'   => 'required | email | unique:users',
             "v_age" => "required",
             "v_nicp" => "required",
             "v_nicpd" => "required",
             "v_ds" => "required",
             "v_poscode" => "required",
             "v_no" => "required",
             "v_lane" => "required",
             "v_lcity" => "required",
            ]);

            $voter = new Voter();
            //$voter->UserId =$user->id;

            //Methan null yanna passe handle karanna okk
            $voter->v_initials = $request->v_initials;
            $voter->v_name = $request->v_name;
            $voter->v_nameforinitials = $request->v_nameforinitials;
            $voter->v_dob = $request->v_dob;
            $voter->v_age = $request->v_age;

            $voter->v_dis = $request->v_dis;
            $voter->v_pro = $request->v_pro;
            $voter->v_sex = $request->v_sex;

            $voter->v_Cstatus = $request->v_Cstatus;
            $voter->v_nicp = $request->v_nicp;
            $voter->v_nicpd = $request->v_nicpd;

            $voter->v_ds = $request->v_ds;

            $voter->v_poscode = $request->v_poscode;
            $voter->v_lcity = $request->v_lcity;
            $voter->v_ldis = $request->v_ldis;
            $voter->v_lpro = $request->v_lpro;

            //$voter->password = $request->v_pw;

            $voter->password = password_hash($request->v_pw, PASSWORD_DEFAULT);


            $voter->status = "Not Voted";

            $voter->save();
            // $voter->save();
            //DB::commit();
            return back()->with('success', 'Voter Successfully Added');
        }
    }

    public function voters()
    {
        $voters = Voter::get();
        return view('Pages.Voter.search', ['voters' => $voters]);
    }

    //Edit Voters
    public function voterEdit($Id,Request $request)
    {
        if($request->isMethod('get'))
        {
            $voters = Voter::where('Id',$Id)->first();
            return view('Pages.Voter.edit', ['voters' => $voters]);
        }

        if($request->isMethod('post'))
        {

            $this->validate($request, [
                'v_name'   => 'required',
                'v_dob'   => 'required',
                //'v_age'   => 'required | email | unique:users',
                "v_age" => "required",
                "v_nicp" => "required",
                "v_nicpd" => "required",
                "v_ds" => "required",
                "v_poscode" => "required",
                "v_no" => "required",
                "v_lane" => "required",
                "v_lcity" => "required",
               ]);

            $voter =  Voter::where('Id', $Id)->first();;
            //echo $voter;

            $voter->v_initials = $request->v_initials;
            $voter->v_name = $request->v_name;
            $voter->v_nameforinitials = $request->v_nameforinitials;
            $voter->v_dob = $request->v_dob;
            $voter->v_age = $request->v_age;

            $voter->v_dis = $request->v_dis;
            $voter->v_pro = $request->v_pro;
            $voter->v_sex = $request->v_sex;

            $voter->v_Cstatus = $request->v_Cstatus;
            $voter->v_nicp = $request->v_nicp;
            $voter->v_nicpd = $request->v_nicpd;

            $voter->v_ds = $request->v_ds;

            $voter->v_poscode = $request->v_poscode;
            $voter->v_lcity = $request->v_lcity;
            $voter->v_ldis = $request->v_ldis;
            $voter->v_lpro = $request->v_lpro;

            $voter->update();
            return back()->with('success', 'Voter Details Successfully  Updated');
        }
    }

    //Deltete voter details
    public function voterDelete($id)
    {
        //voter is model name
        Voter::where('id',$id)->delete();
        return back()->with('success', 'Train Stop Removed');
    }

    //Charts

    // public function loadSexVoter(){
    //     $maleCount = Voter::where('v_sex','Male')->count();
    //     $femaleCount = Voter::where('v_sex','Female')->count();

    //     return view('Pages.Voter.charts', ['mvoters' =>  $maleCount,'fvoters' => $femaleCount]);
    // }


    // public function loadAddressDisVoter(){
    //     $centrelCount = Voter::where('v_lpro','Centrel')->count();
    //     $westrenlCount = Voter::where('v_lpro','Westren')->count();

    //     return view('Pages.Voter.charts', ['centrel' =>  $centrelCount,'westren' => $westrenlCount]);
    // }

    public function loadVoterCharts(){
        $maleCount = Voter::where('v_sex','Male')->count();
        $femaleCount = Voter::where('v_sex','Female')->count();

        $centrelCount = Voter::where('v_lpro','Centrel')->count();
        $westrenlCount = Voter::where('v_lpro','Westren')->count();
        $eastrenCount = Voter::where('v_lpro','Eastern')->count();
        $southernCount = Voter::where('v_lpro','Southern')->count();
        $ncentrelCount = Voter::where('v_lpro','North-Central')->count();
        $nwestrenCount = Voter::where('v_lpro','North-Westren')->count();

        $uvaCount = Voter::where('v_lpro','Uva')->count();
        $sabaragmuwaCount = Voter::where('v_lpro','Sabaragamuwa')->count();
        $northernCount = Voter::where('v_lpro','Northern')->count();

        $marriedcount = Voter::where('v_Cstatus','Married')->count();
        $unmarriedcount = Voter::where('v_Cstatus','Unmarried')->count();

        return view('Pages.Voter.charts', [
            'mvoters' => $maleCount,
            'fvoters' => $femaleCount,

            'centrel' => $centrelCount,
            'westren' => $westrenlCount,
            'eastren' => $eastrenCount,
            'southern' => $southernCount,
            'nwestren' => $ncentrelCount,
            'ncentrel' => $nwestrenCount,
            'uva' => $uvaCount,
            'sabaragmuwa' => $sabaragmuwaCount,
            'northern' => $northernCount,
            'married' => $marriedcount,
            'unmarried' => $unmarriedcount
        ]);
    }

    public function loginasadmin(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('Pages.Login.vclogin');
        }

        if($request->isMethod('post'))
        {
            $this->validate($request, [
                'v_nicp'   => 'required',
                'v_name'  => 'required'
               ]);

               $voter = array(
                'v_nicp'  => $request->get('v_nicp'),
                'v_name' => $request->get('v_name')
               );

               if($voter)
               {
                return redirect('/dashboard-voter')->with('fail', 'Wrong Login Details');
               }
               else
               {
                return back()->with('fail', 'Wrong Login Details');
               }
        }
    }

    public function export()
    {
        $data = DB::table('Voter_Master')->get();
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array_keys((array) $data[0]));

        foreach ($data as $row) {
            $csv->insertOne((array) $row);
        }

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="AllVotersData.csv"',
        ];

        return response()->stream(
            function () use ($csv) {
                $csv->output();
            },
            200,
            $headers
        );
    }

    public function exportMale()
    {
        $data = DB::table('Voter_Master')->where('v_sex', 'Male')->get();
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array_keys((array) $data[0]));

        foreach ($data as $row) {
            $csv->insertOne((array) $row);
        }

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="male_export.csv"',
        ];

        return response()->stream(
            function () use ($csv) {
                $csv->output();
            },
            200,
            $headers
        );
    }

    public function exportFemale()
    {
        $data = DB::table('Voter_Master')->where('v_sex', 'Female')->get();
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array_keys((array) $data[0]));

        foreach ($data as $row) {
            $csv->insertOne((array) $row);
        }

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="female_export.csv"',
        ];

        return response()->stream(
            function () use ($csv) {
                $csv->output();
            },
            200,
            $headers
        );
    }

    public function export2000()
    {
        $data = DB::table('Voter_Master')->where('v_dob', '>', '2000-01-01')->get();
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array_keys((array) $data[0]));

        foreach ($data as $row) {
            $csv->insertOne((array) $row);
        }

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="voters_born_after_2000_export.csv"',
        ];

        return response()->stream(
            function () use ($csv) {
                $csv->output();
            },
            200,
            $headers
        );
    }
}
