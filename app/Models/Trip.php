<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;


    protected $fillable=[
        'shipName'
        , 'TripNumber'
        , 'port_in'
        , 'port_out'
        , 'ArriveDate'
        , 'EraseDate'
        ,'bar_id'
        //, 'created_at'
    ];
}
