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

use App\Models\ElectionPresident;
use App\Models\Voter;


class ElectionPresidentController extends Controller
{
    public function electioncandidateSave(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('Pages.Election.presidentiol');
        }

        if($request->isMethod('post'))
        {

            $electionPresident = new ElectionPresident();

            $electionPresident->name = $request->pec_fullname;
            $electionPresident->district = $request->pec_name;
            $electionPresident->party = $request->pec_party;

            $electionPresident->save();
            return back()->with('success', 'candidate Successfully Added');
        }
    }

    public function charts(Request $request)
    {
        // if($request->isMethod('get'))
        // {
        //     return view('Pages.Election.results');
        // }

        $fullcount = Voter::where('v_dis','Kandy')->count();
        $votedCount = Voter::where('status','Voted')->count();
        $notvotedCount = Voter::where('status','Not Voted')->count();

        $centrelCount = Voter::where(['v_lpro' => 'Centrel', 'status' => 'Voted'])->count();
        $centrelNCount = Voter::where(['v_lpro' => 'Centrel', 'status' => 'Not Voted'])->count();

        $wCount = Voter::where(['v_lpro' => 'Westren', 'status' => 'Voted'])->count();
        $wnCount = Voter::where(['v_lpro' => 'Westren', 'status' => 'Not Voted'])->count();

        $uvCount = Voter::where(['v_lpro' => 'UVA', 'status' => 'Voted'])->count();
        $uvnCount = Voter::where(['v_lpro' => 'UVA', 'status' => 'Not Voted'])->count();

        $soCount = Voter::where(['v_lpro' => 'Southern', 'status' => 'Voted'])->count();
        $sovCount = Voter::where(['v_lpro' => 'Southern', 'status' => 'Not Voted'])->count();

        return view('Pages.Election.results', [
            'mvoters' => $fullcount,
            'fvoters' => $votedCount,
            'nvoters' => $notvotedCount,
            'centrelnvCount' => $centrelNCount,
            'centrelvCount' => $centrelCount,
            'wvote' => $wCount,
            'wnvote' => $wnCount,
            'uvote' => $uvCount,
            'unvote' => $uvnCount,
            'svote' => $soCount,
            'snvote' => $sovCount
        ]);

    }

    //working methods - Today

    public function finalresults(Request $request){

        $fullcount = ElectionPresident::where('name','Mahela Jayawardhana')->value('vote_count');
        $votedCount = ElectionPresident::where('name','Sajith Premadasa')->value('vote_count');
        $rwotedCount = ElectionPresident::where('name','Ranil Wickramasinghe')->value('vote_count');
        $akdvotedCount = ElectionPresident::where('name','Anura Kumara Dissanayake')->value('vote_count');

        return view('Pages.Election.finalresults', [
            'mvoters' => $fullcount,
            'fvoters' => $votedCount,
            'rvoters' => $rwotedCount,
            'avoters' => $akdvotedCount,
        ]);
    }

    // public function electionPresidents()
    // {
    //     $electionPresidents = ElectionPresident::get();
    //     return view('Pages.Election.presidentiol', ['electionPresidents' => $electionPresidents]);
    // }
}
