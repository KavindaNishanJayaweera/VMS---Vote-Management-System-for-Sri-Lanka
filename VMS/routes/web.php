<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionPresidentController;
use App\Http\Controllers\Election2024Controller;


Route::get('/', function () {
    return view('Pages.Login.vclogin');
});

// Route::get('/', function () {
//     return view('Pages.Blank');
// });

// Route::get('/search-voter', function () {
//     return view('Pages.Voter.search');
// });

//Dashoboard
Route::get('/dashboard-voter', function () {
    return view('Pages.Voter.dashboard');
});

//Voter
Route::match(['get', 'post'],'/add-voter', [VoterController::class, 'save']);

Route::match(['get', 'post'],'/login-voter', [VoterController::class, 'login']);

Route::match(['get', 'post'],'/search-voter', [VoterController::class, 'voters']);

Route::match(['get', 'post'],'/edit-voter/{Id}', [VoterController::class, 'voterEdit']);

Route::match(['get', 'post'],'/delete-voter/{Id}', [VoterController::class, 'voterDelete']);

// Route::match(['get', 'post'],'/chart-voter', [VoterController::class, 'loadSexVoter']);

// Route::match(['get', 'post'],'/chart-voter', [VoterController::class, 'loadAddressDisVoter']);

Route::match(['get', 'post'],'/chart-voter', [VoterController::class, 'loadVoterCharts']);

Route::match(['get', 'post'],'/login-asadmin', [VoterController::class, 'loginasadmin']);


Route::match(['get', 'post'],'/download-voter', [VoterController::class, 'export']);

Route::match(['get', 'post'],'/download-malevoter', [VoterController::class, 'exportMale']);

Route::match(['get', 'post'],'/download-femalevoter', [VoterController::class, 'exportFemale']);

Route::match(['get', 'post'],'/download-2000voter', [VoterController::class, 'export2000']);

//Candidate
Route::match(['get', 'post'],'/add-candidate', [CandidateController::class, 'candidateSave']);

Route::match(['get', 'post'],'/login-candidate', [CandidateController::class, 'candidateLogin']);

Route::match(['get', 'post'],'/search-candidate', [CandidateController::class, 'candidates']);

Route::match(['get', 'post'],'/edit-candidate/{Id}', [CandidateController::class, 'candidateEdit']);

Route::match(['get', 'post'],'/delete-candidate/{id}', [CandidateController::class, 'candidateDelete']);

//Election

Route::match(['get', 'post'],'/add-presidentcandidate', [ElectionPresidentController::class, 'electioncandidateSave']);

//Route::match(['get', 'post'],'/add-presidentcandidate', [ElectionPresidentController::class, 'electionPresidents']);

//Start Ekection - Get data for making votes
//Route::match(['get', 'post'],'/search-voter', [VoterController::class, 'voters']);

// Route::get('/Load-voterforEle', function () {
//     return view('Pages.Election2024.voterload');
// });

Route::match(['get', 'post'],'/Load-voterforEle', [Election2024Controller::class, 'loadVoters']);

Route::match(['get', 'post'],'/results-charts', [ElectionPresidentController::class, 'charts']);

Route::match(['get', 'post'],'/finalresults-charts', [ElectionPresidentController::class, 'finalresults']);
