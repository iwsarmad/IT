<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_info extends Model
{
    use HasFactory;
    protected $fillable=[
        'DESCRIZIONE','VALORE'
    ];
}
