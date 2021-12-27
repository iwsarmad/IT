<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillOfLanding extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'trip_id', 'shippers', 'order_id', 'BillOfLading', 'bar_id','TotalContainer'
    ];
}
