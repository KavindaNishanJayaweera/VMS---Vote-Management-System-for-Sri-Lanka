<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Voter extends Model
{
    use HasFactory;

    protected $table = 'Voter_Master';
    // //protected $primaryKey = 'id';

    // protected $fillable=[
    //     'v_name',
    //     'v_dob',
    //     'v_age',
    //     'v_nicp',
    //     'v_nicpd',
    //     'v_ds',
    //     'v_poscode',
    //     'v_no',
    //     'v_lane',
    //     'v_lcity'
    // ];
}
